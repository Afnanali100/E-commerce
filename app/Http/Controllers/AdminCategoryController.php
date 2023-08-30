<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show', ['category' => $category]);
    }

    public function destroy($id)
    {
        Category::where('category_id', $id)->delete();
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',

        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->input('category_name');


        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
           
        ]);

        Category::create($validatedData);
        return redirect()->route('categories.index');
    }
}
