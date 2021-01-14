<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Employee;
use App\Model\EmployeeAddress;
use App\Model\EmployeePhone;
use App\Model\EmployeeOtherData;
class EmployeeController extends Controller
{
    use UploadTrait;
    public function index(){
        return view('administrator.employee.create');
    }
    public function store(Request $request){ 
        $employee = new Employee();
        $employee->title = $request->input('title');
        $employee->firstname = $request->input('firstname');
        $employee->middlename = $request->input('middlename');
        $employee->lastname = $request->input('lastname');
        $employee->gender = $request->input('gender'); 
        $employee->status = $request->input('status');
        $employee->dob = $request->input('dob');
        $employee->education_level = $request->input('education_level');
        $employee->religion = $request->input('religion');
        $employee->employee_type = $request->input('employee_type');
        $employee->deactivation_date = $request->input('deactivation_date');
        $employee->isActive = $request->input('isActive');
        $employee->username = $request->input('username');
        $employee->password = $request->input('password');
        $employee->next_of_kin_name = $request->input('next_of_kin_name');
        $employee->next_of_kin_phone = $request->input('next_of_kin_phone');
        $employee->next_of_kin_address = $request->input('next_of_kin_address'); 
        $employee->medical = $request->input('medical');
        $employee->comments = $request->input('comments'); 
        $employee->passport = $this->file_upload('passport','storage/employee/passport/');
        $employee->save();
        // address 
        $employee_address = new EmployeeAddress(); 
        $employee_address->employee_id = $employee->id;
        $employee_address->address = $request->input('address');
        $employee_address->city = $request->input('city');
        $employee_address->post_code = $request->input('post_code');
        $employee_address->state = $request->input('state');
        $employee_address->email = $request->input('email');
        $employee_address->save();
        // phone
        $employee_phone = new StudentPhone();
        $employee_phone->employee_id = $employee->id;
        $employee_phone->phone_type = $request->input('phone_type');
        $employee_phone->phone= $request->input('phone');
        $employee_phone->save();
        
        $employee_other_data = EmployeeOtherData();
        $employee_id= $request->input('employee_id');
        $employee_other_data->tax_id = $request->input('tax_id');
        $employee_other_data->tax_office= $request->input('tax_office');
        $employee_other_data->identity_number= $request->input('identity_number');
        $employee_other_data->issue_date= $request->input('issue_date');
        $employee_other_data->expiration_date= $request->input('expiration_date');
        $employee_other_data->issuing_authority= $request->input('issuing_authority');
        $employee_other_data->birth_city= $request->input('birth_city');
        $employee_other_data->local_government= $request->input('local_government');
        $employee_other_data->state= $request->input('state');
        $employee_other_data->nationality= $request->input('nationality');
        $employee_other_data->save();
        return redirect()->route('employee.edit', $employee->id);
        // on submission, route go to student edit page
    }
    public function show($id){
        $employee = Employee::find($id);
        $employee_address = EmployeeAddress::find($id);
        $employee_phone = EmployeePhone::find($id);
        return view('administrator.employee.create')
        ->with('employee',$employee)
        ->with('employee_address',$employee_address)
        ->with('employee_phone',$employee_phone);
    }
    public function edit($id){
        $employee = Employee::find($id);
        $employee_address = EmployeeAddress::find($id);
        $employee_phone = EmployeePhone::find($id);
        return view('administrator.employee.create')
        ->with('employee',$employee)
        ->with('employee_address',$employee_address)
        ->with('employee_phone',$employee_phone);
    }
    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->title = $request->input('title');
        $employee->firstname = $request->input('firstname');
        $employee->middlename = $request->input('middlename');
        $employee->lastname = $request->input('lastname');
        $employee->gender = $request->input('gender'); 
        $employee->status = $request->input('status');
        $employee->dob = $request->input('dob');
        $employee->education_level = $request->input('education_level');
        $employee->religion = $request->input('religion');
        $employee->employee_type = $request->input('employee_type');
        $employee->deactivation_date = $request->input('deactivation_date');
        $employee->isActive = $request->input('isActive');
        $employee->username = $request->input('username');
        $employee->password = $request->input('password');
        $employee->next_of_kin_name = $request->input('next_of_kin_name');
        $employee->next_of_kin_phone = $request->input('next_of_kin_phone');
        $employee->next_of_kin_address = $request->input('next_of_kin_address'); 
        $employee->medical = $request->input('medical');
        $employee->comments = $request->input('comments'); 
        $employee->passport = $this->file_upload('passport','storage/employee/passport/');
        $employee->save(); 
        return redirect()->route('employee.edit', $id);
        // on submission, route go to student edit page
    }
    public function update_student_address(Request $request, $id){
    $employee_address = EmployeeAddress::find($id); 
    $employee_address->address = $request->input('address');
    $employee_address->city = $request->input('city');
    $employee_address->post_code = $request->input('post_code');
    $employee_address->state = $request->input('state');
    $employee_address->email = $request->input('email');
    $employee_address->save();
    }
    public function update_student_phone(Request $request, $id){
        $employee_phone =   EmployeePhone::find($id);
        $employee_phone->phone_type = $request->input('phone_type');
        $employee_phone->phone= $request->input('phone');
        $employee_phone->save();
    }
     
    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();
    }   
}
