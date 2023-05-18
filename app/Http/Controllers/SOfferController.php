<?php

namespace App\Http\Controllers;
use App\Models\SOffer;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class SOfferController extends Controller
{
    public function AllSOffers ()
    {
        $soffers = SOffer::latest()->get();
        return view('admin.offers.special',compact('soffers'));
    }

    public function EAllSOffers ()
    {
        $soffers = SOffer::latest()->get();
        return view('employee.offers.special',compact('soffers'));
    }

    public function AddSOffer ()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.offers.add_special',compact('categories','users'));
    }

    public function EAddSOffer ()
    {
        $categories = Category::all();
        $users = User::all();
        return view('employee.offers.add_special',compact('categories','users'));
    }

    public function StoreSOffer (Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            SOffer::insert([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'user_id' => $request->user_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'end_date' => $request->end_date,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Offer Addeed Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('all.soffers')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function EStoreSOffer (Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            SOffer::insert([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'user_id' => $request->user_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'end_date' => $request->end_date,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Offer Addeed Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('eall.soffers')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function EditSOffer   ($id){
        $categories = Category::all();
        $users = User::all();
        $soffers  = SOffer::findOrFail($id);
        return view('admin.offers.edit_soffer',compact('categories','soffers','users'));
    } // End Method

    public function EEditSOffer   ($id){
        $categories = Category::all();
        $users = User::all();
        $soffers  = SOffer::findOrFail($id);
        return view('employee.offers.edit_soffer',compact('categories','soffers','users'));
    } // End Method

    public function UpdateSOffer(Request $request)
    {
        $soffer_id = $request->id;
        if ($request->file('image')  ) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            SOffer::findOrFail($soffer_id)->update([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'user_id' => $request->user_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'end_date' => $request->end_date,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
        ]);

       $notification = array(
        'message' => 'Offer Updated Successfully With Image ', 
        'alert-type' => 'info'
        );
        return redirect()->route('all.soffers')->with($notification);
    } else{

        SOffer::findOrFail($soffer_id)->update([
            'name' => $request->name,
                'cat_id' => $request->cat_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            'updated_at' => Carbon::now(),
    ]);

   $notification = array(
    'message' => 'Offer Updated Successfully Without Images ', 
    'alert-type' => 'info'
    );
    return redirect()->route('all.soffers')->with($notification);
   } // end Else
    }

    public function EUpdateSOffer(Request $request)
    {
        $soffer_id = $request->id;
        if ($request->file('image')  ) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            SOffer::findOrFail($soffer_id)->update([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'user_id' => $request->user_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'end_date' => $request->end_date,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
        ]);

       $notification = array(
        'message' => 'Offer Updated Successfully With Image ', 
        'alert-type' => 'info'
        );
        return redirect()->route('eall.soffers')->with($notification);
    } else{

        SOffer::findOrFail($soffer_id)->update([
            'name' => $request->name,
                'cat_id' => $request->cat_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            'updated_at' => Carbon::now(),
    ]);

   $notification = array(
    'message' => 'Offer Updated Successfully Without Images ', 
    'alert-type' => 'info'
    );
    return redirect()->route('eall.soffers')->with($notification);
   } // end Else
    }

    public function DeleteSOffer ($id){
        try{
            SOffer::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Offer Deleted Successfully', 
                'alert-type' => 'error'
            );
            return redirect()->route('all.soffers')->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 
    public function EDeleteSOffer ($id){
        try{
            SOffer::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Offer Deleted Successfully', 
                'alert-type' => 'error'
            );
            return redirect()->route('eall.soffers')->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 
}
