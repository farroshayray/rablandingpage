<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product\Specification;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    public function index()
    {
        $specifications = Specification::paginate(5);
        return view('pages.admin.specifications.index', compact('specifications'));
    }

    public function create()
    {
        return view('pages.admin.specifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Specification::create($request->only('name'));

        return redirect()->route('admin.specifications.index')->with('success', 'Specification created successfully.');
    }

    public function edit(Specification $specification)
    {
        return view('pages.admin.specifications.edit', compact('specification'));
    }

    public function update(Request $request, Specification $specification)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $specification->update($request->only('name'));

        return redirect()->route('admin.specifications.index')->with('success', 'Specification updated successfully.');
    }

    public function destroy(Specification $specification)
    {
        $specification->delete();

        return redirect()->route('admin.specifications.index')->with('success', 'Specification deleted successfully.');
    }
}

