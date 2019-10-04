<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RootCategory;
use App\subcategory;


class SubCategoryController extends Controller
{
    public function index(){
        $sc = subcategory::all();
        return view('category.SubCategory.index',compact('sc'));
    }

    public function form(){
        $rc = RootCategory::all();
        return view('category.SubCategory.form', compact('rc'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_subcategory' => 'required|max:255',
            'root_category_id' => 'required|integer',
        ]);

        $sc = new subcategory([
            'nama_subcategory' => $request['nama_subcategory'],
            'root_category_id' => $request['root_category_id'],
            'description' => $request['description'],
        ]);
        $sc->save();
        return redirect()->route('sub-category.index');
    }

    public function edit($id){
        $sc = subcategory::findOrFail($id);
        $rc = RootCategory::all();
        return view('category.SubCategory.edit', compact('rc','sc'));
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'nama_subcategory' => 'required|max:255',
            'root_category_id' => 'required|integer',
        ]);
        $sc = subcategory::findOrFail($id);
        $sc->update([
            'nama_subcategory' => $request['nama_subcategory'],
            'root_category_id' => $request['root_category_id'],
            'description' => $request['description'],
        ]);
        return redirect()->route('sub-category.index');

    }

    public function delete($id){
        $sc = SubCategory::findOrFail($id);
        $sc->delete();
        return redirect()->route('sub-category.index');
    }
}
