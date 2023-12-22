<?php

namespace App\Http\Controllers;

use App\Models\TypeFile;
use Illuminate\Http\Request;

class ArchivePNSController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeFiles = TypeFile::where('status','pns')->get();
        return view('admin.archive-pns.index', compact('typeFiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.archive-pns.create');
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
        $request->merge(["status"=>"pns"]);

        $attr = $request->all();
        TypeFile::create($attr);

        return to_route('admin.jenis-pns.index');
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
        return view('admin.archive-pns.edit', [
            'archiveId' => TypeFile::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->merge(["status"=>"pns"]);
        $typeFile = TypeFile::find($id);
        $typeFile->update($request->all());

        return to_route('admin.jenis-pns.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $archive = TypeFile::findOrFail($id);
            $archive->delete();

            return redirect()->route('admin.jenis-pns.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.jenis-pns.index')->with('error', 'Gagal menghapus data: ' . $e->getMessage());
        }
    }
}
