<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function getRoles()
    {
        return view('admin.role');
    }
    public function submitForm(Request $request)
    {
        $product = new Role();
        $product->name = $request->name;
        $product->slug = $request->name;
        $product->save();
        return redirect()->route('role.table')->with('message', 'Data Successfully Added');
            $validator = Validator::make($request->all(),
                [
                 'title' => 'required|min:4|max:25',
                 'description' => 'required|min:4|max:25',
                ],[
                'title.required' => ' The title field is required.',
                 'title.min' => ' The title must be at least 4 characters.',
               'title.max' => ' The title may not be greater than 25 characters.',
                'description.required' => ' The description field is required.',
                 'description.min' => ' The description must be at least 4 characters.',
                'description.max' => ' The description may not be greater than 25 characters.',
                 ]);
             $validator->validate();
    }
    
    public function getTable(Request $request)
        {
            // if ($request->search) {
            //     $data = Role::where('id', $request->search)
            //         ->paginate(5);
                    
            //     $search = $request->search;
    
            //     return view('category.table', compact('data', 'search'));
            // }
        
            $data = Role::paginate(5);
            // dd($data);
            return view('admin.rolelist',compact('data'));
        } 

    public function editform($id)
    {
        $data = Role::find($id);
         
        return view('admin.roleedit', compact('data'));
    }
    public function updateForm(Request $request,$id)
    {
        $product = Role::find($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->update();
        return redirect()->route('role.form')->with('message', 'Data Successfully Added');
    }
    public function deleteForm(Request $request,$id)
    {
        $product = Role::find($id);
        $product->name = $request->namee;
        $product->slug = $request->slug;
        
        $product->delete();
        return redirect()->route('')->with('message', 'Data Successfully Added');
    }
    public function search(Request $request)
    {
        $store = $request->input('name');
        $data = Role::query()
        ->where('name','LIKE',"%($store)%")
        ->get();
        return view('category.serach',compact('data'));
    }
    public function deleteall(Request $request,$id)
        {
            $id = $request->id;
            
            {
                Role::where('id', $id)->delete();
            }
            return redirect()->route('');
        }
        public function destroy(Request $request)
        {
            if ($request->ids) 
            {
                foreach ($request->ids as $id) 
            {
                Role::destroy($id);
            }

            }

            return response()->json('Success');
        }
}
