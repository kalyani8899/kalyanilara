<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Input;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
  
class ProductController extends Controller
{
    public function getForm()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.blog',compact('categories'));
        // return view('admin.blog');
    }
    public function submitForm(Request $request)
    {
        $store = new Product();
        $arrayTostring =implode(',', $request->category_id);
        $store->category_id=$arrayTostring;
        $store->title = $request->title;
        $store->slug = $request->title;
        $store->details = $request->details;
        if ($files=$request->file('image'))
        {
            $name=$files->getClientOriginalName();
            $files->move('images',$name);
            $store->image=$name;
        }
    
        $store->save();
        return redirect()->route('store.table');
     
    }
    public function getTable(Request $request)
    {
        if ($request->search) {
            $data = Product::where('id', $request->search)
                ->paginate(5);
                
            $search = $request->search;

            return view('table', compact('data', 'search'));
        }
    
        $data = Product::paginate(5);
        // dd($data);
        return view('table',compact('data'));
    }
    public function editForm($id)
    {
        $data = Product::find($id);
        return view('admin.edit',compact('data'));
    }
    public function updateForm(Request $request,$id)
    {
        $store = Product::find($id);
        $store->title = $request->title;
        $store->details = $request->details;
        $store->category_id = $request->category_id;
        $store->update();
        return redirect()->route('store.form');
    }
    public function deleteForm(Request $request,$id)
    {
        $store = Product::find($id);
        $store->title = $request->title;
        $store->details = $request->details;
        $store->category_id = $request->category_id;
        $store->delete();
        return redirect()->route('store.form');
    }
    public function search(Request $request)
    {
        $store = $request->input('store');
        $data = Product::query()
        ->where('id', 'LIKE', "%{$store}%")
        ->get();
	    return view('search', compact('data'));
    }
    public function deleteall(Request $request,$id)
	{
		$id = $request->id;
		
		{
			Product::where('id', $id)->delete();
		}
		return redirect()->route('store.form');
	}
    public function destroy(Request $request)
    {
        
       if ($request->ids) 
            {
                foreach ($request->ids as $id)
                 {
                    Product::destroy($id);
                 
             }
         }
     
     return response()->json('Success');
     }
     public function export()
     {
         return Excel::download(new UsersExport, 'user.csv');
     }
}
