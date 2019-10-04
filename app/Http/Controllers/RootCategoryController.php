<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RootCategory;

class RootCategoryController extends Controller
{
    public function index(){
        $cat = RootCategory::all();
        return view('category.RootCategory.index', compact('cat'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_category' => 'required|max:50',
        ]);
        $rootCategory = new RootCategory([
            'nama_category' => $request['nama_category'],
            'description' => $request['description'],
        ]);
        $rootCategory->save();
        return redirect()->route('root-category.index');
    }

    public function view(Request $request){
        return view('category.RootCategory.show');
    }

    public function edit(Request $request, $id){
        $cat = RootCategory::findOrFail($id);
        return view('category.RootCategory.edit', compact('cat'));
    }

    public function update(Request $request, $id){
        $cat = RootCategory::findOrFail($id);
        $cat->update([
            'nama_category' => $request['nama_category'],
            'description' => $request['description']
        ]);
        return redirect()->route('root-category.index');
    }
    public function delete($id){
        $cat = RootCategory::findOrFail($id);
        $cat->delete();
        return redirect()->route('root-category.index');
    }
}
