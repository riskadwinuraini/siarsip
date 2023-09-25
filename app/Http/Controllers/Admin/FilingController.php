<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeFile;
use Illuminate\Http\Request;

class FilingController extends Controller
{
    public function index() {
        return view('admin.filing.index');
    }

    public function create() {
        $typefile = TypeFile::all();
        return view('admin.filing.create', compact('typefile'));
    }
}
