<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  
   public function AllCat()
   {
        return view('admin.category.index');
   }

    public function AddCat(Request $request)
   {
        $validatedData = $request->validate([
            'category_name' =>'required|unique|categories|max:255'
        ],

        [
           'category_name.required' => 'Please Input Category Name',
           'category_name.max' => 'Category Less Than 200 chars',
        ]);

        Category::insert([

            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        $data = 
        return Redirect()->back()->with('success',Category Inserted Successfully');
      
   }
}
