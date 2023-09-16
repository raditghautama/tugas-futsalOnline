<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Field::with('category')->get();

        return view('pages.admin.field.index', [
            'title' => 'Manajemen lapangan',
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Field::all();
        $categories = Category::all();

        return view('pages.admin.field.create', [
            'title' => 'Manajemen lapangan',
            'categories' => $categories,
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_lapangan);
        $data['cover'] = $request->file('cover')->store('field', 'public');

        Field::create($data);
        return redirect()->route('lapangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $item = Field::findOrFail($id);

        return view('pages.admin.field.show', [
            'item' => $item,
            'title' => 'Detail Lapangan'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $items = Field::findOrFail($id);

        return view('pages.admin.field.edit', [
            'title' => 'Edit Data Lapangan',
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_lapangan);
        if(!empty($data['cover'])) {
            $data['cover'] = $request->file('cover')->store('field', 'public');
        }else{
            unset($data['cover']);
        }

        Field::findOrFail($id)->update($data);

        return redirect()->route('lapangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Field::findOrFail($id)->delete();
        return redirect()->route('lapangan.index');
    }
}
