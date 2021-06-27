<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        //validate request
        
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:details',
            'password'=>'required|min:5|max:12'
        ]);
        
        //insert data into database

        $detail = new Detail;
        $detail-> name = $request->name;
        $detail-> email = $request->email;
        $detail-> password =Hash::make($request->password);
        $save = $detail->save();
        
        if($save){
            return back()->with('success','New user has been added successfully');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    function check(Request $request){
    //validate request

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Detail::where('email','=', $request->email)->first();
           
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
     //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect Password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

     //teachers details part

    function dashboard(){
        return view('admin.dashboard');
    }

    function AddNew(){
        return view('admin.AddNew');
    }


    function storeTeacher (Request $request){
        

        $name= $request->name;
        $address=$request->address;
        $birthday=$request->birthday;
        $gender=$request->gender;
        $ethnic=$request->ethnic;
        $religion=$request->religion;
        
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('profileimages'),$imageName); 



        $teacher = new Teacher();
        $teacher->name = $name;
        $teacher->address = $address;
        $teacher->birthday = $birthday;
        $teacher->gender = $gender;
        $teacher->ethnic = $ethnic;
        $teacher->religion = $religion;
        $teacher->profileimage = $imageName ;

        $teacher->save();
        return back()->with('record_added','Teacher record has been inserted');

    }

    function ViewList(){

        $teachers = Teacher::all();
        return view('admin.ViewList',compact('teachers'));
    }

    function editTeacher($id){
        $teacher = Teacher::find($id);
        return view('admin.editTeacher',compact('teacher'));
    }
   
    function updateTeacher(Request $request){
        $name= $request->name;
        $address=$request->address;
        $birthday=$request->birthday;
        $gender=$request->gender;
        $ethnic=$request->ethnic;
        $religion=$request->religion;
        
        $image=$request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('profileimages'),$imageName); 

        $teacher = Teacher::find($request->id);
        $teacher->name = $name;
        $teacher->address = $address;
        $teacher->birthday = $birthday;
        $teacher->gender = $gender;
        $teacher->ethnic = $ethnic;
        $teacher->religion = $religion;
        $teacher->profileimage = $imageName ;
        $teacher->save();
        return back()->with('Record_updated','Teacher record updated successfully');

        
    }

    function deleteTeacher($id){

        $teacher = Teacher::find($id);
        unlink(public_path('profileimages').'/'.$teacher->profileimage);
        $teacher->delete();
        return back()->with('record_deleted','Record deleted successfully');
    }
}
