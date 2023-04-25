<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UsersController extends Controller
{
    public function index (){
        Student::get();
        $data = Student::get();
        $data = Student::paginate(10);
        
        // return $data;
        return view('student-list',compact('data'));
    }
    public function addStudent(){
        return view('add-student');
    }
    public function saveStudent(Request $request){
       $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'address'=>'required',

       ]);
        $name=$request-> name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;
        
        $stu =new Student();
        $stu->name =$name;
        $stu->email =$email;
        $stu->phone =$phone;
        $stu->address=$address;
        $stu->save();


        return redirect()->route('Student.index')->with('success', 'Student Added Successfully');


    }
    public function editStudent($id){
        $data = Student::where('id','=',$id)->first();    
        return view('edit-student', compact('data')); 

    }
    public function updateStudent(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
    
           ]);

           $id=$request->id;
            $name=$request-> name;
            $email=$request->email;
            $phone=$request->phone;
            $address=$request->address;
            
            Student::where('id','=',$id)->update([
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
                'address'=>$address

            ]);
            return redirect()->route('Student.index')->with('success', 'Student Updated Successfully');
 

    }
    public function deleteStudent($id){

        Student::where('id','=',$id)->delete(); 
        return redirect()->route('Student.index')->with('success', 'Student Deleted Successfully');


    }
    public function search(Request $request)
{
    $query = $request->input('query');
    $data = Student::where('name', 'LIKE', "%$query%")->orWhere('email', 'LIKE', "%$query%")->paginate(10);
    return view('student-list', compact('data'));
}
public function filter(Request $request)
{
    $query = Student::query();

    // filter by name
    if ($request->has('name') && $request->filled('name')) {
        $query->where('name', 'like', '%' . $request->input('name') . '%');
    }

    // filter by address
    if ($request->has('address') && $request->filled('address')) {
        $query->where('address', 'like', '%' . $request->input('address') . '%');
    }

    // get paginated data
    $data = $query->paginate(10);

    // return view with data
    return view('student-list', compact('data'));
}

    
}


