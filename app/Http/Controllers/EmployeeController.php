<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function Index(){
        return view('employee.login');
    }// End Method 

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('employee')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'Welcome Employee ,You Login Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('employee.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'Invalid Email Or Password', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method 

    public function Dashboard(){
        return view('employee.dashboard');
    }// End Method 

    public function EmployeeLogout(){
        Auth::guard('employee')->logout();
        $notification = array(
            'message' => 'You Logout Successfully', 
            'alert-type' => 'error'
        );
        return redirect()->route('employee_login')->with($notification);
    }// End Method  

    public function ChangePassword (){
        return view('employee.change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        try{
            $validateData = $request->validate([
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirm_password' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::guard('employee')->user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $users = Employee::find(Auth::guard('employee')->user()->id);
                $users->password = bcrypt($request->newpassword);
                $users->save();

                $notification = array(
                    'message' => 'Password Updated Successfully', 
                    'alert-type' => 'info'
                );
                return back()->with($notification);
            } else{

                $notification = array(
                    'message' => 'Old password is not match', 
                    'alert-type' => 'error'
                );
                return back()->with($notification);
            }
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method

    public function Profile(){
        $id = Auth::guard('employee')->user()->id;
        $userData = Employee::find($id);
        return view('employee.profile',compact('userData'));
    }// End Method

    public function StoreProfile(Request $request){
        try{
            $id = Auth::guard('employee')->user()->id;
            $data = Employee::find($id);
            $data->name = $request->name;
            $data->username = $request->username;
            $data->contact = $request->contact;
            $data->gender = $request->gender;
            $data->dob = $request->dob;
            $data->address = $request->address;
            $data->country = $request->country;
            $data->city	 = $request->city	;
            $data->save();
            $notification = array(
                'message' => 'Your Profile Updated Successfully', 
                'alert-type' => 'info'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method
}
