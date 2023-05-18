<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function AllCategory   (){
        $categories = Category::latest()->get();
        return view('admin.categories.all_categories',compact('categories'));
    }// End Method

    public function EAllCategory   (){
        $categories = Category::latest()->get();
        return view('employee.categories.all_categories',compact('categories'));
    }// End Method

    public function AddCategory (Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::insert([
                'title' => $request->title,
                'details' => $request->details,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Category Is Addeed Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function EAddCategory (Request $request)
    {
        try {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::insert([
                'title' => $request->title,
                'details' => $request->details,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Category Is Addeed Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function DeleteCategory ($id){
        try{
            Category::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Category Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 
    public function EDeleteCategory ($id){
        try{
            Category::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Category Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 

    public function EditCategory (Request $request){
        $category_id = $request->id;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/categories/'.$name_gen);
            $save_url = 'upload/categories/'.$name_gen;

            Category::findOrFail($category_id)->update([
                'title' => $request->title,
                'details' => $request->details,
                'image' => $save_url,
            ]); 
           
            $notification = array(
                'message' => 'Category Updated with Image Successfully', 
                'alert-type' => 'info'
        );
        return back()->with($notification);
        } else{

        Category::findOrFail($category_id)->update([
            'title' => $request->title,
                'details' => $request->details,
           ]); 

           $notification = array(
           'message' => 'Category Updated without Image Successfully', 
           'alert-type' => 'info'
       );
        return back()->with($notification);
        } // end Else
   } // End Method

   public function EEditCategory (Request $request){
    $category_id = $request->id;
    if ($request->file('image')) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        Image::make($image)->resize(430,327)->save('upload/categories/'.$name_gen);
        $save_url = 'upload/categories/'.$name_gen;

        Category::findOrFail($category_id)->update([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $save_url,
        ]); 
       
        $notification = array(
            'message' => 'Category Updated with Image Successfully', 
            'alert-type' => 'info'
    );
    return back()->with($notification);
    } else{

    Category::findOrFail($category_id)->update([
        'title' => $request->title,
            'details' => $request->details,
       ]); 

       $notification = array(
       'message' => 'Category Updated without Image Successfully', 
       'alert-type' => 'info'
   );
    return back()->with($notification);
    } // end Else
} // End Method
}
