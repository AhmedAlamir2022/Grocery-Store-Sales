<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Brand;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class BrandController extends Controller
{
    
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brands.brands',compact('brands'));
    }

    
    public function store(Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/brands/'.$name_gen);
            $save_url = 'upload/brands/'.$name_gen;

            Brand::insert([
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Brand Is Addeed Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $brands = Brand::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'Brand Is Deleted Successfully ', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
