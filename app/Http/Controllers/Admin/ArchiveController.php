<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeFile;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeFiles = TypeFile::all(); 
        return view('admin.archive.index', compact('typeFiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.archive.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'code_file' => 'required|string|max:255',
            // Sesuaikan dengan field dan aturan validasi yang sesuai
        ]);
        
        $attr = $request->all();

        TypeFile::create($attr);
        
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.archive.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $archive = TypeFile::findOrFail($id);
            $archive->delete();

            return redirect()->route('admin.archive.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.archive.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
