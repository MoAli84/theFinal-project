<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affairs;
use App\Models\Gender;
use App\Models\Nationality;
use App\Models\Religion;
use App\Models\Governorate;
use App\Models\Town;
use App\Models\District;
use App\Models\StdHealth;
use App\Models\Year;
use App\Models\EduLevel;
use App\Models\Sublevel;
use App\Models\Term;
use App\Models\EduData1;
use Illuminate\Support\Facades\Auth;

class StudentAffairController extends Controller
{
  

    public function login()
    {
        return view('StudentAffairs.login');
    }
    public function dologin(Request $request)
    {
        $data=$request->validate([
            'username'=>'required|email',
            'password'=>'required'
        ]);
        
       if(auth('affairs')->attempt($data)) {
       return redirect(url('affair/index'));
       }else{
        return redirect(url('affair/login'));

       }
    }
    public function logout()
    {
      auth()->guard('affairs')-> logout();
      return redirect(url('affair/login'));
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Affairs::join('gender','students.GenderId','=','gender.id')
        ->join('nationality','students.NationalityId','=','nationality.id')
        ->join('religion','students.ReligionId','=','religion.id')
        ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
        ->join('town', 'students.TownId','=','town.id')
        ->join('district', 'students.DistrictId','=','district.id')
        ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
        ->orderby('id', 'asc')->get();
    //    dd($data);

        return view('StudentAffairs.affair_index',['data' =>$data]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sex        = Gender::get();
        $nation     = Nationality::get();
        $relig      = Religion::get();
        $govern     = Governorate::get();
        $town       = Town::get();
        $dist       = District::get();
        $year       = Year::get();
        $level      = EduLevel::get();
        $sub        = Sublevel::join('educational_level','educational_level.id','=','sublevel.levelId')
        ->select('sublevel.*','educational_level.EduLevelName')->get();
        $term       = Term::where('id',1)->get();

        return view('StudentAffairs.affair_create', [

            'sex'       => $sex ,
            'nation'    => $nation ,
            'relig'     => $relig ,
            'govern'    => $govern ,
            'town'      => $town ,
            'dist'      => $dist,
            'year'      => $year,
            'level'     => $level,
            'sub'       => $sub,
            'term'      =>$term
            // 'disease'   =>$disease,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate ([
            'Surname'       =>'required',
            'Name'          =>'required',
            'StudentSsn'    =>'required|numeric',
            'Birthdate'     =>'required',
            'GenderId'      =>'required|numeric',
            'NationalityId' =>'required|numeric',
            'ReligionId'    =>'required|numeric',
            'GovernorateId' =>'required|numeric',
            'TownId'        =>'required|numeric',
            'DistrictId'    =>'required|numeric',
            'FatherName'    =>'required',
            'FatherSsn'     =>'required|numeric',
            'FatherJob'     =>'required',
            'FatherPhone'   =>'required|numeric',
            'MotherName'    =>'required',
            'MotherSsn'     =>'required|numeric',
            'MotherJob'     =>'required',
            'MotherPhone'   =>'required|numeric',


            'chronic'       =>'required',
            'disease_name'  =>'required',
            'disease_degree'=>'required',
            'height'        =>'required',
            'weight'        =>'required',
            'extra_data'    =>'required',

            'AcdYearId'     =>'required|numeric',
            'LevelId'       =>'required|numeric',
            'TermId'        =>'required|numeric'

        ]);
        $except = $request->except(['chronic','disease_name','disease_degree', 'height','weight','extra_data',
        'AcdYearId','LevelId','TermId',
        '_token' ]);
// dd($data);
        $ob = Affairs::create($except);

        $disease = StdHealth::create([
            'StudentSsn'     =>$ob->StudentSsn,
            'chronic'        =>$request->chronic,
            'disease_name'   =>$request->disease_name,
            'disease_degree' =>$request->disease_degree,
            'height'         =>$request->height,
            'weight'         =>$request->weight,
            'extra_data'     =>$request->extra_data
        ]) ;
        $edudata = EduData1::create([
            'StudentSsn'     =>$ob->StudentSsn,
            'AcdYearId'      =>$request->AcdYearId,
            'LevelId'        =>$request->LevelId,
            'TermId'         =>$request->TermId
        ]);
        // dd($edudata);

        return redirect(url('affair/index'))->with('success','Student is created successfull...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($StudentSsn)
    {
        $data = Affairs::join('gender','students.GenderId','=','gender.id')
        ->join('nationality','students.NationalityId','=','nationality.id')
        ->join('religion','students.ReligionId','=','religion.id')
        ->join('governorate', 'students.GovernorateId','=','governorate.id')
        ->join('town', 'students.TownId','=','town.id')
        ->join('district', 'students.DistrictId','=','district.id')
        ->leftjoin('education_data', 'education_data.StudentSsn','=','students.StudentSsn')
        ->leftjoin('academicyear','academicyear.id','=','education_data.AcdYearId')
        ->leftjoin('sublevel','sublevel.id','=','education_data.LevelId')
        ->leftjoin('educational_level','educational_level.id','=','sublevel.LevelId')
        ->leftjoin('student_disease','students.StudentSsn','=','student_disease.StudentSsn')
        ->select('students.*',
                  'gender.Sex',
                  'nationality.Nation',
                  'religion.ReligName',
                  'academicyear.year',
                  'educational_level.EduLevelName',
                  'sublevel.SubLevelName',
                  'governorate.GovName','town.TownName','district.DistrictName',
                  'student_disease.chronic','student_disease.disease_name','student_disease.disease_degree','student_disease.height','student_disease.weight','student_disease.extra_data')
                  ->get()->where('StudentSsn','=',$StudentSsn);
            // dd($data);


          return view('StudentAffairs.affair_show',['data'=>$data ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  public function h($StudentSsn){
    //      $d = Affairs::find($StudentSsn);
    //      dd($d);
    //     //  return $d;

    //  }
    public function edit($id)
    {
        $nation      = Nationality::get();
        $sex         = Gender::get();
        $religion    = Religion::get();
        $govern      = Governorate::get();
        $town        = Town::get();
        $dist        = District::get();
        $data        = Affairs::find($id);
        // dd($data->StudentSsn);
        $ssn = $data->StudentSsn;
        // dd($ssn);
        $disease     = StdHealth::where('StudentSsn','=',$ssn)->get();
        $edudata     = EduData1::where('StudentSsn','=',$ssn)->get();
        // dd($edudata);
        $year        = Year::get();
        $level       = EduLevel::get();
        $sub         = Sublevel::join('educational_level','educational_level.id','=','sublevel.levelId')
                             ->select('sublevel.SubLevelName','educational_level.EduLevelName')->get();
        // $term        = Term::get();


        return view('StudentAffairs.affair_edit',[
          'edudata'     =>$edudata,
          'data'        =>$data,
          'sex'         =>$sex ,
          'religion'    =>$religion ,
          'nation'      =>$nation,
          'disease'     =>$disease,
          'govern'      =>$govern,
          'town'        =>$town,
          'dist'        =>$dist,
          'year'        =>$year,
          'level'       =>$level,
          'sub'         =>$sub,
        //   'term'        =>$term,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $info= $request->validate([
            'Name'          =>'required|min:3',
            'Surname'       =>'required|min:2',
            'Birthdate'     =>'required',
            'StudentSsn'    =>'required|min:14|max:14',
            'GenderId'      =>'required|numeric',
            'NationalityId' =>'required|numeric',
            'ReligionId'    =>'required|numeric',

            'GovernorateId' =>'required|numeric',
            'TownId'        =>'required|numeric',
            'DistrictId'    =>'required|numeric',

            'FatherName'    =>'required',
            'FatherSsn'     =>'required|min:14|max:14',
            'FatherJob'     =>'required|min:4',
            'FatherPhone'   =>'required|numeric',
            'MotherName'    =>'required',
            'MotherSsn'     =>'required|min:14|max:14',
            'MotherJob'     =>'required|min:4',
            'MotherPhone'   =>'required|numeric',

            'chronic'    =>'required',
            'disease_name'=>'required',
            'disease_degree'=>'required|numeric',
            'height'      =>'required|numeric',
            'weight'      =>'required|numeric',
            'extra_data' =>'required',


            'AcdYearId'    ,// =>'required|numeric',
            'LevelId'      ,//=>'required',
            'TermId'       ,// =>'required'

          ]);
          //  dd($info);

         $data = $request->except([
         '_token','chronic','disease_name','disease_degree', 'height','weight','extra_data'
         ,'AcdYearId','LevelId','TermId',]);
           // dd($data);
         $ob =Affairs::where('StudentSsn',$request->StudentSsn)->update($data);

           $disease=StdHealth::where('StudentSsn','=',$request->StudentSsn)->update([
            'chronic'       =>$request->chronic ,
            'disease_name'  =>$request->disease_name,
            'disease_degree'=>$request->disease_degree,
            'height'        =>$request->height,
            'weight'        =>$request->weight,
            'extra_data'    =>$request->extra_data
           ]);

        //    $edudata = EduData1::where('StudentSsn','=',$request->StudentSsn)->update([
        //     'AcdYearId'      =>$request->AcdYearId,
        //     'LevelId'        =>$request->LevelId,
        //     'TermId'         =>$request->TermId
        // ]);


           return redirect(url('affair/index'))->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($StudentSsn)
    {
        $data = Affairs::where('StudentSsn', $StudentSsn)->delete();
        return redirect(url('affair/index'))->with('success','student deleted successfully');
    }

    // ---------------------------------------------------------------------------------------------------------------------------

    public function one(){
        $data = EduData1::join('students','education_data.StudentSsn','=','students.StudentSsn')
        ->join('student_disease','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('gender','students.GenderId','=','gender.id')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->where('sublevel.SubLevelName','one')
        ->select('student_disease.*','education_data.*','students.*','sublevel.*','educational_level.*','gender.Sex')
        ->get();

        return view('StudentAffairs.1.affair_index_one', ['data'=>$data]);
    }

// ----------------------------------------------
// ----------------------------------------------
// ----------------------------------------------

public function f1(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','one')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    // $data = EduData1::join('students','education_data.StudentSsn','=','students.StudentSsn')
    // ->join('student_disease','education_data.StudentSsn','=','student_disease.StudentSsn')
    // ->join('gender','students.GenderId','=','gender.id')
    // ->join('sublevel','education_data.LevelId','=','sublevel.id')
    // ->join('educational_level','sublevel.LevelId','=','educational_level.id')
    // ->where('sublevel.SubLevelName','one')
    // ->select('student_disease.*','education_data.*','students.*','sublevel.*','educational_level.*','gender.Sex')
    // ->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f2(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','two')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f3(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','three')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f4(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','four')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f5(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','five')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f6(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','sex')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f7(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','seven')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f8(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','eight')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f9(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','nine')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f10(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','ten')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f11(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','eleven')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

public function f12(){
    $data = Affairs::join('gender','students.GenderId','=','gender.id')
    ->join('nationality','students.NationalityId','=','nationality.id')
    ->join('religion','students.ReligionId','=','religion.id')
    ->join('governorate', 'students.GovernorateId','=', 'governorate.id')
    ->join('town', 'students.TownId','=','town.id')
    ->join('district', 'students.DistrictId','=','district.id')
    ->join('education_data','education_data.StudentSsn','=','students.StudentSsn')
    ->join('sublevel','education_data.LevelId','=','sublevel.id')
    ->where('sublevel.SubLevelName','twelve')
    ->select('students.*','gender.Sex','nationality.Nation','religion.ReligName','governorate.GovName','town.TownName','district.DistrictName')
    ->orderby('id', 'asc')->get();

    return view('StudentAffairs.affair_index', ['data'=>$data]);
}

}
