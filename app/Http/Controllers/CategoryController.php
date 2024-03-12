<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

/*
    public function create()
    {
        $categories = new Category;
        $title = __('Nueva Categoria');
        $action = route('category.store');
        $buttonText = __('Nueva Categoria');
        return view('category.create', compact('categories', 'title', 'action', 'buttonText'));
    }

  

    public function store(Request $request)
    {
        $request->validate([

            'category_name' => 'required|string|max:255'
        ]);
        Category::create([
            'category_name' => $request->string('category_name')
        ]);

        // Category::created($request->validated());
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        //
    }

*/
    //Metodo para crear:

    public function create()
    {
        return view('category.create');
    }


public function store(CategoryRequest $request)
{
    try {
    Category::create($request->validated());

    return redirect('/categorias')->with('success', 'Categoria creada correctamente.');
} catch (\Exception $e) {
    return redirect('/categorias')->with('error', 'Hubo un problema al guardar los datos.');
}

}
public function show(Category $category)
{
    //
}

public function edit(string $id)
{
    $category = Category::find($id);
    return view('category.edit', compact('category'));
}

public function update(CategoryRequest $request, $id_category)
{


    try {

        $category = Category::find($id_category);
        $category->update($request->validated());
     

        return redirect('/categorias')->with('success', 'Categoria actualizada correctamente.');
    } catch (\Exception $e) {
        return redirect('/categorias')->with('error', 'Hubo un problema al actualizar los datos.');
    }
}
    

 
    /*
      public function edit(Category $category): Renderable
    {
        return view('category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        // $request->validate([
        //     'category_name' => 'required|string|max:255'
        // ]);

        // $category->fill($request->post())->save();

        $category->fill($request->validated())->save();

        return redirect()->route('category.index')->with('success', 'La categoria fue editada correctamente');
    }

}*/

    
public function destroy($id_category)
{
    try {
        $categories = Category::findOrFail($id_category);
        $categories->delete();
        return redirect('/categorias')->with('deleted', 'Se eliminó correctamente.');
    } catch (\Exception $e) {
        return redirect('/categorias')->with('deleted', 'Hubo un problema al eliminar los datos.');
    }
}
}
