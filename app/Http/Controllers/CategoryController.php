<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Contracts\Support\Renderable;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



class CategoryController extends Controller
{

    public function index(): Renderable
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }


    public function create()
    {
        $categories = new Category;
        $title = __('Nueva Categoria');
        $action = route('category.store');
        $buttonText = __('Nueva Categoria');
        return view('category.create', compact('categories', 'title', 'action', 'buttonText'));
    }

    /*
    public function store(Request $request):  RedirectResponse
    {

        // Validar la solicitud
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        try {
            $categories = new Category;

            $categories->category_name = $request->input('category_name');
            $categories->save();


            return redirect()->route('category.index');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Hubo un problema al guardar los datos.');
        }
    }*/

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


    /*
    public function edit(Category $category): Renderable
    {
        $title = __('Editar categoria');
        $action = route('category.update', $category);
        $buttonText = __('Actualizar categoria');
        $method = 'PUT';
        return view('category.form', compact('category', 'title', 'action', 'buttonText', 'method'));
    }*/

    public function edit(Category $category): Renderable
    {
        return view('category.edit', compact('category'));
    }

    /*
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);
        $project->update([
            'id_category' => $request->id('id_category'),
            'category_name' => $request->string('category_name'),
        ]);
        return redirect()->route('category.index');
    }*/

    public function update(CategoryRequest $request, Category $category)
    {
        // $request->validate([
        //     'category_name' => 'required|string|max:255'
        // ]);

        // $category->fill($request->post())->save();

        $category->fill($request->validated())->save();

        return redirect()->route('category.index')->with('success', 'La categoria fue editada correctamente');
    }

    public function destroy($id_category)
    {
        try {
            $categories = Category::findOrFail($id_category);
            $categories->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No se pudo eliminar el proveedor.');
        }
    }
}
