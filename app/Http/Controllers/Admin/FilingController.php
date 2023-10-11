<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeFile;
use App\Service\UserFileService;
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
    public function proccessCreateDocument(Request $request) {
        
        $nip = $request->nip;
        $typefile = TypeFile::all();

        
        foreach ($typefile as $fileType) {
            $file = $request->file($fileType->id);
 
            // Cek apakah file ada dan valid
            if ($file) {
                if ($file->isValid()) {
                    $fileName = $file->getClientOriginalName();
                    // Di sini Anda bisa melakukan apa pun yang diperlukan dengan $fileName
                    echo "Nama File Asli: $fileName <br>";
                } else {
                    echo "File tidak valid. <br>";
                }
            } else {
                echo "File tidak diunggah. <br>";
            }
        }


    }

}
