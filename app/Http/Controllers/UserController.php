<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'You Logout Successfully', 
            'alert-type' => 'error'
        );
        return redirect('/')->with($notification);
    } // End Method 

    public function ChangePassword(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('user.change_password',compact('userData'));
    }// End Method

    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
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

    }// End Method

    public function Profile(){ 
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('user.profile',compact('userData'));

    }// End Method 

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->dob = $request->dob;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->city = $request->city;
        $data->save();
        $notification = array(
            'message' => 'Your Profile Updated Successfully', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }// End Method

    public function HomeAbout(){
        return view('frontend.about');
     }// End Method

     public function ReportUser(){
        $users = User::latest()->get();
        return view('admin.reports.users',compact('users'));
    }// End Method

    public function SearchUserReport(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $users = User::whereBetween('created_at',[$start_at,$end_at])->get();
        return view('admin.reports.users')->withDetails($users); 
    }//end method

    public function EReportUser(){
        $users = User::latest()->get();
        return view('employee.reports.users',compact('users'));
    }// End Method

    public function ESearchUserReport(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $users = User::whereBetween('created_at',[$start_at,$end_at])->get();
        return view('employee.reports.users')->withDetails($users); 
    }//end method
}
