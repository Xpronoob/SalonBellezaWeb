<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;

        $categories = Category::where('name', 'LIKE', '%' . $busqueda . '%')
            ->paginate(5);

        return view('category.index', compact('categories', 'busqueda'));
    }


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
