<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\StudentAddress;
use App\Model\StudentRelative;
use App\Model\StudentPhone;
use App\Traits\UploadTrait;
class StudentController extends Controller
{
    use UploadTrait;
    public function index(){
        return view('administrator.student.create');
    }
    public function store(Request $request){
        
        $student = new Student();
        $student->title = $request->input('title');
        $student->firstname = $request->input('firstname');
        $student->middlename = $request->input('middlename');
        $student->lastname = $request->input('lastname');
        $student->dob = $request->input('dob');
        $student->gender = $request->input('gender');
        $student->school_id = $request->input('school_id');
        $student->registration_date = $request->input('registration_date');
        $student->registration_status = $request->input('registration_status');
        $student->religion = $request->input('religion');
        $student->comments = $request->input('comments');
        $student->username = $request->input('username');
        $student->password = $request->input('password');
        $student->passport = $this->file_upload('passport','storage/student/passport/');
        $student->save();
        // address
        $student_address = new StudentAddress(); 
        $student_address->student_id = $student->id;
        $student_address->address = $request->input('address');
        $student_address->city = $request->input('city');
        $student_address->post_code = $request->input('post_code');
        $student_address->state = $request->input('state');
        $student_address->email = $request->input('email');
        $student_address->save();
        // phone
        $student_phone = new StudentPhone();
        $student_phone->student_id = $student->id;
        $student_phone->phone_type = $request->input('phone_type');
        $student_phone->phone= $request->input('phone');
        $student_phone->save();
        return redirect()->route('student.edit', $student->id);
        // on submission, route go to student edit page
    }
    public function show($id){
        $student = Student::find($id);
        $student_address = StudentAddress::find($id);
        $student_phone = StudentPhone::find($id);
        $student_relative= StudentRelative::find($id);
        return view('administrator.student.create')
        ->with('student',$student)
        ->with('student_address',$student_address)
        ->with('student_phone',$student_phone);
    }
    public function edit($id){
        $student = Student::find($id);
        $student_address = StudentAddress::find($id);
        $student_phone = StudentPhone::find($id);
        return view('administrator.student.create')
        ->with('student',$student)
        ->with('student_address',$student_address)
        ->with('student_phone',$student_phone);
    }
    public function update(Request $request, $id){
        
        $student =  Student::find($id);
        $student->title = $request->input('title');
        $student->firstname = $request->input('firstname');
        $student->middlename = $request->input('middlename');
        $student->lastname = $request->input('lastname');
        $student->dob = $request->input('dob');
        $student->gender = $request->input('gender');
        $student->school_id = $request->input('school_id');
        $student->registration_date = $request->input('registration_date');
        $student->registration_status = $request->input('registration_status');
        $student->religion = $request->input('religion');
        $student->comments = $request->input('comments');
        $student->username = $request->input('username');
        $student->password = $request->input('password');
        $student->passport = $this->file_upload('passport','storage/student/passport/');
        $student->save();
        
        return redirect()->route('student.edit', $id);
        // on submission, route go to student edit page
    }
    public function update_student_address(Request $request, $id){
    $student_address = StudentAddress::find($id); 
    // $student_address->student_id = $student->id;
    $student_address->address = $request->input('address');
    $student_address->city = $request->input('city');
    $student_address->post_code = $request->input('post_code');
    $student_address->state = $request->input('state');
    $student_address->email = $request->input('email');
    $student_address->save();
    }
    public function update_student_phone(Request $request, $id){
        $student_phone =   StudentPhone::find($id);
        // $student_phone->student_id = $student->id;
        $student_phone->phone_type = $request->input('phone_type');
        $student_phone->phone= $request->input('phone');
        $student_phone->save();
    }
     
    public function delete($id){
        $student = Student::find($id);
        $student->delete();
    }   
// deletes
}
