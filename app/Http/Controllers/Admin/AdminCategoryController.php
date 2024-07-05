<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class AdminCategoryController extends Controller
{
    // Category View
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.category', compact('categories'));  
    }

    // Create Category
    public function create()
    {
        return view('admin.createcategory');
    }

    // Store Category
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categorie::create($validated);

        return redirect()->route('admin.category')->with('success', 'Catégorie créée avec succès.');
    }

    // Edit Category
    public function edit(Categorie $categorie)
    {
        return view('admin.editcategory', compact('categorie'));
    }

    // Update Category
    public function update(Request $request, Categorie $categorie)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categorie->update($validated);

        return redirect()->route('admin.category')->with('success', 'Catégorie mise à jour avec succès.');
    }

    // Delete Category
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('admin.category')->with('success', 'Catégorie supprimée avec succès.');
    }
}
