<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categorie::orderBy('name', 'asc')->get();
    
        $categoriesWithPath = $categories->map(function ($category) {
            return [
                'category_id' => $category->category_id,
                'name' => $this->getCategoryPath($category), 
                'status' => $category->status,
                'parent_id' => $category->parent_id,
                'created_at' => $category->created_at,
                'updated_at' => $category->updated_at,
            ];
        });
    
        return view('categories.index', compact('categoriesWithPath'));
    }
    
    private function getCategoryPath($category, $path = '')
    {
        if ($category->parent) {
            $path = $this->getCategoryPath($category->parent, $path); 
        }
        return $path ? $path . ' > ' . $category->name : $category->name;
    }
    
    public function create()
    {
        $categories = Categorie::all()->map(function ($category) {
            return [
                'id' => $category->category_id,
                'path' => $this->getCategoryPath($category),
            ];
        });
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'status' => 'required', 'parent_id' => 'nullable|exists:categories,category_id']);
        Categorie::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit($category_id)
    {
        $category = Categorie::with('parent')->where('category_id', $category_id)->first();
        $categories = Categorie::all();
        
        return view('categories.edit', compact('category', 'categories'));
    }
    
    
    public function update(Request $request, $category_id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'parent_id' => 'nullable|exists:categories,category_id',
        ]);
    
        $category = Categorie::find($category_id);
        $category->update($request->all());
    
        return redirect()->route('categories.index');
    }
    

    public function destroy(Categorie $category)
    {
        
        if ($category->children()->exists()) {
            $newParentId = $category->parent_id;
            $category->children()->update(['parent_id' => $newParentId]);
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
    
}


