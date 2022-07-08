<?php

namespace App\Http\Controllers;
use App\Models\Year;
use App\Models\EduLevel;
use App\Models\Sublevel;
use App\Models\Nationality;
use App\Models\Course;
use App\Models\District;
use App\Models\Gov;
use App\Models\Town;
use App\Models\Admin;
use App\Models\Affairs;
use App\Models\Doctor;
use App\Models\EntryOfficer;
use App\Models\Manager;
use App\Models\Role;
use App\Models\Specialist;
use App\Models\StdAffair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Scalar\MagicConst\Dir;

use function PHPSTORM_META\type;

class adminController extends Controller
{

    public function Adminhome()
    {
        return view('Admin.home');
    }

    public function login()
    {
        return view('Admin.login');
    }
    public function dologin(Request $request)
    {
        $data=$request->validate([
            'username'=>'required|email',
            'password'=>'required'
        ]);
        
       if(auth()->guard('admins')->attempt($data)) {
       return redirect(url('/adminHome'));
       }else{
        return redirect(url('/admin/login'));

       }
    }
    public function logout()
    {
      auth()->guard('admins')-> logout();
      return redirect(url('/admin/login'));
    }

    //=================================================Accounts===============================================
   //=========================================================================================================
    public function register()
    {
        $type= Role::get();
        return view('Admin.register' ,['type'=>$type]);
    }
    public function adminindexAccou()
    {
        //$data =Admin::get();
          // dd($data);
         $data =Admin:: join('roles','roles.id','=','admin.roleId')
                   ->select('admin.*','roles.name')
                   -> get();
    

        return view('Admin.Accounts.admin.index',['data'=>$data]);
    }
    public function showadminAccou($id)
    {
        $admin=Admin::join('roles','roles.id','=','admin.roleId')->select('admin.*','roles.name')->get()->where('id','=',$id);
     //   dd($admin);
        return view('Admin.accounts.admin.show',['admin'=>$admin]);

    }
    public function destroy_admin($id)
    {
        $op = Admin::where('id', $id)->delete();
        return redirect(url('admin/index/staff'))->with('success','Admin Account is deleted successfully');
    }
//************************************************************************* */

    public function affairindexAccou()
    {

         $data =StdAffair:: join('roles','roles.id','=','affair.roleId')
                   ->select('affair.*','roles.name')
                   -> get();
      // dd($data);

        return view('Admin.Accounts.affair.index',['data'=>$data]);
    }
    public function showaffairAccou($id)
    {
        $affair=StdAffair::join('roles','roles.id','=','affair.roleId')->select('affair.*','roles.name')->get()->where('id','=',$id);
     //   dd($admin);
        return view('Admin.accounts.affair.show',['affair'=>$affair]);

    }
    public function destroy_affair($id)
    {
        $op = StdAffair::where('id', $id)->delete();
        return redirect(url('affair/index/staff'))->with('success','Student Affair Account is deleted successfully');
    }
//*************************************************************************** */
    public function entryindexAccou()
    {

         $data =EntryOfficer:: join('roles','roles.id','=','entry_officer.roleId')
                   ->select('entry_officer.*','roles.name')
                   -> get();
      // dd($data); 

        return view('Admin.Accounts.entryofficer.index',['data'=>$data]);
    }
    public function showentryAccou($id)
    {
        $entry=EntryOfficer::join('roles','roles.id','=','entry_officer.roleId')->select('entry_officer.*','roles.name')->get()->where('id','=',$id);
     //   dd($admin);
        return view('Admin.accounts.entryofficer.show',['entry'=>$entry]);

    }
    public function destroy_entry($id)
    {
        $op = EntryOfficer::where('id', $id)->delete();
        return redirect(url('entry/officer/index/staff'))->with('success','EntryOfficer Account is deleted successfully');
    }

    //********************************************************************* */

    public function doctorindexAccou()
    {

         $data =Doctor::join('roles','roles.id','=','doctor.roleId')
                   ->select('doctor.*','roles.name')
                   -> get();
       //dd($data);

        return view('Admin.Accounts.doctor.index',['data'=>$data]);
    }
    public function showdoctorAccou($id)
    {
        $doctor=Doctor::join('roles','roles.id','=','doctor.roleId')->select('doctor.*','roles.name')->get()->where('id','=',$id);
     //   dd($admin);
        return view('Admin.accounts.doctor.show',['doctor'=>$doctor]);

    }
    public function destroy_doctor($id)
    {
        $op = Doctor::where('id', $id)->delete();
        return redirect(url('doctor/index/staff'))->with('success','Doctor Account is deleted successfully');
    }
    //********************************************************************* */
    public function managerindexAccou()
    {

         $data =Manager::join('roles','roles.id','=','manager.roleId')
                   ->select('manager.*','roles.name')
                   -> get();
       //dd($data);

        return view('Admin.Accounts.manager.index',['data'=>$data]);
    }
    public function showamanagerAccou($id)
    {
        $manager=Manager::join('roles','roles.id','=','manager.roleId')->select('manager.*','roles.name')->get()->where('id','=',$id);
     //   dd($admin);
        return view('Admin.accounts.manager.show',['manager'=>$manager]);

    }
    public function destroy_manager($id)
    {
        $op = Manager::where('id', $id)->delete();
        return redirect(url('manager/index/staff'))->with('success','Manager Account is deleted successfully');
    }
    //********************************************************************** */
    public function specialistindexAccou()
    {

         $data =Specialist:: join('roles','roles.id','=','specialist.roleId')
                   ->select('specialist.*','roles.name')
                   -> get();
      // dd($data);

        return view('Admin.Accounts.specialist.index',['data'=>$data]);
    }
    public function showspecialistAccou($id)
    {
        $specialist=Specialist::join('roles','roles.id','=','specialist.roleId')->select('specialist.*','roles.name')->get()->where('id','=',$id);
     //   dd($admin);
        return view('Admin.accounts.specialist.show',['specialist'=>$specialist]);

    }
    public function destroy_specialist($id)
    {
        $op = Specialist::where('id', $id)->delete();
        return redirect(url('specialist/index/staff'))->with('success','Specialist Account is deleted successfully');
    }

    //********************************************************************* */
    public function storeAccounts(Request $request)
    {
        $request->validate([
            'fullName' => 'required|min:10',
            'username' => 'required|email',
            'password' => 'required',
            'phone'   => 'required|numeric',
            'roleId'  => 'required|numeric'

        ]);
        $request['password'] = bcrypt($request['password']);
        //dd($data);



        if ($request->roleId == 1) {
            $dd = Admin::create([
                'fullName' => $request->fullName, 'username' => $request->username,
                'password' => $request->password, 'phone' => $request->phone,  'roleId' => $request->roleId
            ]);
            return redirect(url('admin/index/staff'))->with('success', 'Account created successfully');
        } elseif ($request->roleId == 2) {
            $dd = StdAffair::create([
                'fullName' => $request->fullName, 'username' => $request->username,
                'password' => $request->password, 'phone' => $request->phone,  'roleId' => $request->roleId
            ]);
            return redirect(url('affair/index/staff'))->with('success', 'Account created successfully');
        } elseif ($request->roleId == 3) {
            $dd = EntryOfficer::create([
                'fullName' => $request->fullName, 'username' => $request->username,
                'password' => $request->password, 'phone' => $request->phone,  'roleId' => $request->roleId
            ]);
            return redirect(url('entry/officer/index/staff'))->with('success', 'Account created successfully');
        } elseif ($request->roleId == 4) {
            $dd = Manager::create([
                'fullName' => $request->fullName, 'username' => $request->username,
                'password' => $request->password, 'phone' => $request->phone,  'roleId' => $request->roleId
            ]);
            return redirect(url('manager/index/staff'))->with('success', 'Account created successfully');
        } elseif ($request->roleId == 5) {
            $dd = Specialist::create([
                'fullName' => $request->fullName, 'username' => $request->username,
                'password' => $request->password, 'phone' => $request->phone,  'roleId' => $request->roleId
            ]);
            return redirect(url('specialist/index/staff'))->with('success', 'Account created successfully');
        } elseif ($request->roleId == 6) {
            $dd = Doctor::create([
                'fullName' => $request->fullName, 'username' => $request->username,
                'password' => $request->password, 'phone' => $request->phone,  'roleId' => $request->roleId
            ]);
            return redirect(url('doctor/index/staff'))->with('success', 'Account created successfully');
        }


    }
    //77777777787878787777777777777777777777778888888888888888888888777777777777777777

    //----------------------------------------START Year -----------------------

    public function index_year()
    {
        $data=Year::get();
        return view('Admin.year.admin_indexYear',['data'=>$data]);
    }

    /**

     * @return \Illuminate\Http\Response
     */
    public function create_year()
    {
        return view('Admin.year.admin_addYear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_year(Request $request)
    {
        $request->validate([
            'year'=>'required|numeric'
        ]);

        $y=Year::create(['year'=>$request->year]);

        return redirect(url('admin/index/year'))->with('success','Year created successfully');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_year($id)
    {
        $data = Year::find($id);
        return view('Admin.year.admin_editYear',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_year(Request $request)
    {
       $data= $request->validate(['year'=> 'required|numeric' ]);

        $ya=Year::where('id',$request->id)->update($data);
        return redirect(url('admin/index/year'))->with('success','Year updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_year($id)
    {
        $op = Year::where('id', $id)->delete();
        return redirect(url('admin/index/year'))->with('success','Year deleted successfully');
    }

    //--------------------------------------End Year-------------------------------------




//====================================Level========================================
 /**

     * @return \Illuminate\Http\Response
     */
    public function index_level()
    {
        $data=EduLevel::get();

        return view('Admin.level.admin_indexlevel',['data'=>$data]);
    }

    /**

     * @return \Illuminate\Http\Response
     */
    public function create_level()
    {
        return view('Admin.level.admin_addlevel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_level(Request $request)
    {
        $request->validate([
            'EduLevelName'=>'required|min:3'
        ]);

        $lev=EduLevel::create(['EduLevelName'=>$request->EduLevelName]);

        return redirect(url('admin/index/level'))->with('success','Academic Stage  created successfully');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_level($id)
    {
        $data = EduLevel::find($id);
        return view('Admin.level.admin_editLevel',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_level(Request $request)
    {
       $data= $request->validate(['EduLevelName'=> 'required|min:3' ]);

        $lev=EduLevel::where('id',$request->id)->update($data);
        return redirect(url('admin/index/level'))->with('success','Academic Stage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_level($id)
    {
        $op = EduLevel::where('id', $id)->delete();
        return redirect(url('admin/index/level'))->with('success','Academic Stage deleted successfully');
    }
//------------------------------end level----------------------------------------------------




//--------------------------------Start Sublevel---------------------------------------------

public function index_sublevel()
{
    $data=Sublevel::join('educational_level','sublevel.LevelId','=','educational_level.id')
    ->select('sublevel.*','educational_level.EduLevelName')-> get();
    //dd($data);
    return view('Admin.sublevel.admin_indexSublevel',['data'=>$data]);
}

public function create_sublevel()
{
    $lev =EduLevel::get();
    return view('Admin.sublevel.admin_addSublevel',['lev'=>$lev]);
}


public function store_sublevel(Request $request)
{
  $data=  $request->validate([
        'SubLevelName'=>'required|min:3',
        'LevelId'=>'required|numeric'
    ]);

    $sublev=Sublevel::create(['SubLevelName'=>$request->SubLevelName ,  'LevelId'=>$request->LevelId ]);
    return redirect(url('admin/index/sublevel'))->with('success','Sublevel created successfully');

}


public function edit_sublevel($id)
{
    $data = Sublevel::find($id);
    $le =EduLevel::get();
    return view('Admin.sublevel.admin_editSublevel',['data'=>$data , 'le'=>$le]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update_sublevel(Request $request)
{
   $data= $request->validate([
      'SubLevelName'=>'required|min:3',
       'LevelId'=>'required|numeric' ]);

    $sublev=Sublevel::where('id',$request->id)->update($data);
    return redirect(url('admin/index/sublevel'))->with('success','Academic Stage updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy_sublevel($id)
{
    $op = SubLevel::where('id', $id)->delete();
    return redirect(url('admin/index/sublevel'))->with('success','Sublevel deleted successfully');
}

//--------------------------------- End subLEVEL---------------------------------



//----------------------------------Start Nationality------------------------
 /**

     * @return \Illuminate\Http\Response
     */
    public function index_nationality()
    {
        $data=Nationality::get();
        return view('Admin.nationality.admin_indexNationality',['data'=>$data]);
    }

    /**

     * @return \Illuminate\Http\Response
     */
    public function create_nationality()
    {
        return view('Admin.nationality.admin_addNationality');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_nationality(Request $request)
    {
        $request->validate([
            'Nation'=>'required|min:3'
        ]);

        $nat=Nationality::create(['Nation'=>$request->Nation]);

        return redirect(url('admin/index/nationality'))->with('success','nationality created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_nationality($id)
    {
        $data = Nationality::find($id);
        return view('Admin.nationality.admin_editNationality',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_nationality(Request $request)
    {
       $data= $request->validate(['Nation'=> 'required|min:3' ]);

        $nati=Nationality::where('id',$request->id)->update($data);
        return redirect(url('admin/index/nationality'))->with('success','nationality updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_nationality($id)
    {
        $op = Nationality::where('id', $id)->delete();
        return redirect(url('admin/index/nationality'))->with('success','nationality deleted successfully');
    }
//----------------------------------End Nationality---------------------


//---------------------------------Start Course-----------------------


    /**

     * @return \Illuminate\Http\Response
     */
    public function index_course()
    {

         $data=Course::get();

        return view('Admin.course.admin_indexCourse',['data'=>$data]);
    }

    public function create_course()
    {
         return view('Admin.course.admin_addCourse');
    }


    public function store_course(Request $request)
    {
        $m=$request->validate([
            'MaterialName'  =>'required|min:3',
            'code'  =>'required |min:5',
        ]);
        $ob = Course::create(['MaterialName'=>$request->MaterialName , 'code'=>$request->code]);

        return redirect(url('admin/index/course'))->with('success','Course  Added successfully');

    }


    public function edit_course($id)
    {
        $data = Course::find($id);


        return view('Admin.course.admin_editCourse', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_course(Request $request)
    {
       $data= $request->validate([
        'MaterialName'  =>'required|min:3',
        'code'  =>'required',

     ]);

        $cour=Course::where('id',$request->id)->update($data);
        return redirect(url('admin/index/course'))->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_course($id)
    {
        $op = Course::where('id', $id)->delete();
        return redirect(url('admin/index/course'))->with('success','Course deleted successfully');
    }
//--------------------------------End Course--------------------------


//================================Start Governorate================================

public function index_governorate()
{
    $data= Gov::get();
    return view('Admin.places.gov.admin_indexGov',['data'=>$data]);
}

/**

 * @return \Illuminate\Http\Response
 */
public function create_governorate()
{
    return view('Admin.places.gov.admin_addGov');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store_governorate(Request $request)
{
    $request->validate([
        'GovName'=>'required|min:5'
    ]);

    $y=Gov::create(['GovName'=>$request->GovName]);

    return redirect(url('admin/index/governorate'))->with('success','Governorate created successfully');

}



/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit_governorate($id)
{
    $data = Gov::find($id);
    return view('Admin.places.gov.admin_editGov',['data'=>$data]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update_governorate(Request $request)
{
   $data= $request->validate(['GovName'=> 'required|min:5' ]);

    $ya=Gov::where('Id',$request->id)->update($data);
    return redirect(url('admin/index/governorate'))->with('success','Governorate updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy_governorate($id)
{
    $op = Gov::where('id', $id)->delete();
    return redirect(url('admin/index/governorate'))->with('success','Governorate deleted successfully');
}

//----------------------------------end Govenorate---------------------------------------





//===================================Start Town==========================================


public function index_town()
{
    $data=Town::join('governorate','town.GovernorateId','=','governorate.Id')
    ->select('town.*','governorate.GovName')-> get();
   // dd($data);
    return view('Admin.places.town.admin_indexTown',['data'=>$data]);
}

public function create_town()
{
    $gov =Gov::get();
    return view('Admin.places.town.admin_addTown',['gov'=>$gov]);
}

// Id TownName GovernorateId

public function store_town(Request $request)
{
    $request->validate([
        'gov'=>'required|numeric',
        'TownName'=>'required'
    ]);

    $stor =Town::create(['GovernorateId'=>$request->gov,
                         'TownName'=>$request->TownName]);

    return redirect(url('admin/index/town'))->with('success','Town Added successfullly');
}


public function edit_town($id)
{
    $data = Town::find($id);
    $go =Gov::get();
    return view('Admin.places.town.admin_editTown',['data'=>$data , 'go'=>$go]);
}


public function update_town(Request $request)
{
   $data= $request->validate([
    'TownName'=>'required|min:3',
    'GovernorateId'=>'required|numeric']);
    // $t=Town::where('Id',$request->Id)->update(['GovernorateId'=>$request->GovernorateId,
    // 'TownName'=>$request->TownName]);

   // dd($request->Id);
    $t=Town::where('Id',$request->Id)->update($data);

    return redirect(url('admin/index/town'))->with('Town','Town updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy_town($id)
{
    $op = Town::where('Id', $id)->delete();
    return redirect(url('admin/index/town'))->with('success','Town deleted successfully');
}

//----------------------------------End Town--------------------------------------------



//===================================Start District==========================================


public function index_district()
{
    $data = District::join('town','district.TownId','=','town.Id')->select('district.*', 'town.TownName')->get();
   // dd($data);
    return view('Admin.places.distric.admin_indexdistrict',['data'=>$data]);
}

public function create_district()
{
    $town =Town::get();
    return view('Admin.places.distric.admin_addDistrict',['town'=>$town]);
}

// Id TownName GovernorateId

public function store_district(Request $request)
{
  $d=  $request->validate([
        'DistrictName'=>'required',
        'TownId'=>'required|numeric'
    ]);

    $stor =District::create($d);

    return redirect(url('admin/index/district'))->with('success','District Added successfullly');
}


public function edit_district($id)
{
    $data =District ::find($id);
    $go =Town::get();
    return view('Admin.places.distric.admin_editDistrict',['data'=>$data , 'go'=>$go]);
}


public function update_district(Request $request)
{
   $data= $request->validate([
    'DistrictName'=>'required|min:3',
    'TownId'=>'required|numeric']);
    // $t=Town::where('Id',$request->Id)->update(['GovernorateId'=>$request->GovernorateId,
    // 'TownName'=>$request->TownName]);

  // dd($request->Id);
    $t=District::where('Id',$request->Id)->update($data);

    return redirect(url('admin/index/district'))->with('success','District updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy_district($id)
{
    $op = District::where('Id', $id)->delete();
    return redirect(url('admin/index/district'))->with('success','District deleted successfully');
}

//----------------------------------End District--------------------------------------------
}
