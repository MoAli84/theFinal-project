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

class DoctorController extends Controller
{


    public function doctorhome()
    {
        return view('Doctor.doctor_home');
    }

    public function login()
    {
        return view('Doctor.login');
    }
    public function dologin(Request $request)
    {
        $data=$request->validate([
            'username'=>'required|email',
            'password'=>'required'
        ]);
        
       if(auth()->guard('doctors')->attempt($data)) {
       return redirect(url('/doctorHome'));
       }else{
        return redirect(url('doctor/login'));

       }
    }
    public function logout()
    {
      auth()->guard('doctors')-> logout();
      return redirect(url('doctor/login'));
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->orderby('id','asc')
        ->get();

        // dd($data);
        return view('Doctor.doctor_index',['data'=>$data]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


          return view('Doctor.doctor_show',['data'=>$data ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data        = Affairs::find($id);
        $data        =StdHealth::find($id);
// dd($data->StudentSsn);
        $ssn = $data->StudentSsn;
// dd($ssn);
        $disease     = StdHealth::where('StudentSsn','=',$ssn)->get();
        $edudata     = EduData1::where('StudentSsn','=',$ssn)->get();
// dd($edudata);

        // $level       = EduLevel::get();
        // $sub         = Sublevel::join('educational_level','educational_level.id','=','sublevel.levelId')
        //                      ->select('sublevel.SubLevelName','educational_level.EduLevelName')->get();

        return view('Doctor.doctor_edit',[
          'edudata'     =>$edudata,
          'data'        =>$data,
          'disease'     =>$disease,
        //   'level'       =>$level,
        //   'sub'         =>$sub,
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

            'chronic'    =>'required',
            'disease_name'=>'required',
            'disease_degree'=>'required|numeric',
            'height'      =>'required|numeric',
            'weight'      =>'required|numeric',
            'extra_data' =>'required',

          ]);
          //  dd($info);

         $data = $request->except([
         '_token','chronic','disease_name','disease_degree', 'height','weight','extra_data'
         ,'AcdYearId','LevelId','TermId']);
           // dd($data);
         $ob =Affairs::where('StudentSsn',$request->StudentSsn)->update($data);

           $disease=StdHealth::where('id','=',$request->id)->update([
            'chronic'       =>$request->chronic ,
            'disease_name'  =>$request->disease_name,
            'disease_degree'=>$request->disease_degree,
            'height'        =>$request->height,
            'weight'        =>$request->weight,
            'extra_data'    =>$request->extra_data
           ]);


           return redirect(url('doctor/index'))->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = StdHealth::where('id', $id)->delete();
        return redirect(url('doctor/index'))->with('success','student deleted successfully');
    }

    public function count1(){
        $data = StdHealth::join('students','students.StudentSsn','=','student_disease.StudentSsn')
        ->join('gender','gender.id','students.GenderId')
        ->select('student_disease.id');
        // ->where('gender.Sex','male');
        // $data = StdHealth::select(count([]));
        return view('Doctor.doctor_home',['date'=>$data]);
        dd($data);
    }

    // ------------------------------------------------------------------------------------------------

    public function d1(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','one')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_home', ['data'=>$data]);
    }

    public function d2(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','two')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();


        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d3(){

        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','three')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d4(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','four')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d5(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','five')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d6(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','sex')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d7(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','seven')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d8(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','eight')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d9(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','nine')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d10(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','ten')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d11(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','eleven')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }

    public function d12(){
        $data = StdHealth::join('students','student_disease.StudentSsn','=','students.StudentSsn')
        ->join('education_data','education_data.StudentSsn','=','student_disease.StudentSsn')
        ->join('sublevel','education_data.LevelId','=','sublevel.id')
        ->join('educational_level','sublevel.LevelId','=','educational_level.id')
        ->join('gender','gender.id','students.GenderId')
        ->where('student_disease.chronic','Yes')
        ->where('sublevel.SubLevelName','twelve')
        ->select('student_disease.*','gender.Sex','students.Name','students.FatherName','students.Surname','students.StudentSsn','educational_level.EduLevelName','sublevel.SubLevelName')
        ->get();

        return view('Doctor.doctor_index', ['data'=>$data]);
    }
}
