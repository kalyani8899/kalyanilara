<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Product;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
  
class ProductController extends Controller
{
    public function getForm()
    {
        return view('form');
    }
    public function submitForm(Request $request)
    {
        $store = new Product();
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
        $validator = Validator::make($request->all(),
        [
            'title' => 'required|min:4|max:25',
            'details' => 'required|min:4|max:25',
        ],
        [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 4 characters.',
            'title.max' => 'The title may not be greater than 25 characters.',
            'details.required' => 'The details field is required.',
            'details.min' => 'The  details must be at least 4 characters.',
            'details.max' => 'The details may not be greater than 25 characters.',
        ])->validate();
        dd('form submitted sucessfully');

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
        return view('edit',compact('data'));
    }
    public function updateForm(Request $request,$id)
    {
        $store = Product::find($id);
        $store->title = $request->title;
        $store->details = $request->details;
        $store->update();
        return redirect()->route('store.form');
    }
    public function deleteForm(Request $request,$id)
    {
        $store = Product::find($id);
        $store->title = $request->title;
        $store->details = $request->details;
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
