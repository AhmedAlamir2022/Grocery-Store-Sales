<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Admin;
use App\Models\User;
use App\Models\Employee;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.login');
    }// End Method 

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'Welcome Again Super Admin', 
                'alert-type' => 'success'
            );
            return redirect()->route('admin.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'Invalid Email Or Password', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method 

    public function Dashboard(){
        return view('admin.dashboard');
    }// End Method 

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        $notification = array(
            'message' => 'You Logout Successfully', 
            'alert-type' => 'error'
        );
        return redirect()->route('login_form')->with($notification);
    }// End Method 

    public function ChangePassword (){
        return view('admin.change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        try{
            $validateData = $request->validate([
                'oldpassword' => 'required',
                'newpassword' => 'required',
                'confirm_password' => 'required|same:newpassword',
            ]);

            $hashedPassword = Auth::guard('admin')->user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $users = Admin::find(Auth::guard('admin')->user()->id);
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
        $id = Auth::guard('admin')->user()->id;
        $userData = Admin::find($id);
        return view('admin.profile',compact('userData'));
    }// End Method

    public function StoreProfile(Request $request){
        try{
            $id = Auth::guard('admin')->user()->id;
            $data = Admin::find($id);
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

    public function AllUsers (){
        $users = User::latest()->get();
        return view('admin.users.all_Users',compact('users'));
    }// End Method

    public function DeleteUser($id){
        try{
            User::findOrFail($id)->delete();
            $notification = array(
                'message' => 'User Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 

    public function AllAdmins  (){
        $admins = Admin::latest()->get();
        return view('admin.users.all_admins',compact('admins'));
    }// End Method

    public function DeleteAdmin($id){
        try{
            Admin::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Admin Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 

    public function AddAdmin(Request $request){
        try{
            $validateData = $request->validate([
                'confirm_password' => 'required|same:password',
            ]);
            Admin::insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Admin Added Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method 

    public function AllEmployees  (){
        $employees = Employee::latest()->get();
        return view('admin.users.all_employees',compact('employees'));
    }// End Method

    public function DeleteEmployee($id){
        try{
            Employee::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Employee Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 

    public function AddEmployee(Request $request){
        try{
            $validateData = $request->validate([
                'confirm_password' => 'required|same:password',
            ]);
            Employee::insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Employee Added Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }// End Method 

    public function EditEmployee (Request $request){
        $employee_id = $request->id;
        Employee::findOrFail($employee_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
           ]); 

           $notification = array(
           'message' => 'Employee Updated without Image Successfully', 
           'alert-type' => 'info'
        );
        return back()->with($notification);
   } // End Method
}
