<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class OfferController extends Controller
{
    public function AllOffers ()
    {
        $offers = Offer::latest()->get();
        return view('admin.offers.general',compact('offers'));
    }

    public function EAllOffers ()
    {
        $offers = Offer::latest()->get();
        return view('employee.offers.general',compact('offers'));
    }

    public function AddOffer ()
    {
        $categories = Category::all();
        return view('admin.offers.add_general',compact('categories'));
    }

    public function EAddOffer ()
    {
        $categories = Category::all();
        return view('employee.offers.add_general',compact('categories'));
    }

    public function StoreOffer (Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            Offer::insert([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
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
            return redirect()->route('all.offers')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function EStoreOffer (Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            Offer::insert([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
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
            return redirect()->route('eall.offers')->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function EditOffer   ($id){
        $categories = Category::all();
        $offers  = Offer::findOrFail($id);
        return view('admin.offers.edit_offer',compact('categories','offers'));
    } // End Method

    public function EEditOffer   ($id){
        $categories = Category::all();
        $offers  = Offer::findOrFail($id);
        return view('employee.offers.edit_offer',compact('categories','offers'));
    } // End Method

    public function UpdateOffer(Request $request)
    {
        $offer_id = $request->id;
        if ($request->file('image')  ) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            Offer::findOrFail($offer_id)->update([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
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
        return redirect()->route('all.offers')->with($notification);
    } else{

        Offer::findOrFail($offer_id)->update([
            'name' => $request->name,
                'cat_id' => $request->cat_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'end_date' => $request->end_date,
            'updated_at' => Carbon::now(),
    ]);

   $notification = array(
    'message' => 'Offer Updated Successfully Without Images ', 
    'alert-type' => 'info'
    );
    return redirect()->route('all.offers')->with($notification);
   } // end Else
    }
    public function EUpdateOffer(Request $request)
    {
        $offer_id = $request->id;
        if ($request->file('image')  ) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/offers/'.$name_gen);
            $save_url = 'upload/offers/'.$name_gen;

            Offer::findOrFail($offer_id)->update([
                'name' => $request->name,
                'cat_id' => $request->cat_id,
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
        return redirect()->route('eall.offers')->with($notification);
    } else{

        Offer::findOrFail($offer_id)->update([
            'name' => $request->name,
                'cat_id' => $request->cat_id,
                'sale' => $request->sale,
                'old_price' => $request->old_price,
                'new_price' => $request->new_price,
                'short_desc' => $request->short_desc,
                'end_date' => $request->end_date,
            'updated_at' => Carbon::now(),
    ]);

   $notification = array(
    'message' => 'Offer Updated Successfully Without Images ', 
    'alert-type' => 'info'
    );
    return redirect()->route('eall.offers')->with($notification);
   } // end Else
    }

    public function DeleteOffer ($id){
        try{
            Offer::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Offer Deleted Successfully', 
                'alert-type' => 'error'
            );
            return redirect()->route('all.offers')->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 
    public function EDeleteOffer ($id){
        try{
            Offer::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Offer Deleted Successfully', 
                'alert-type' => 'error'
            );
            return redirect()->route('eall.offers')->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 
}
