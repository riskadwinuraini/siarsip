<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeFile;
use App\Models\User;
use App\Service\UserFileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilingController extends Controller
{
    public function index() {
        return view('admin.filing.index');
    }

    public function create() {
        
        $typefile = TypeFile::all();
        $user = User::select('id', 'nip')->get();
        
        return view('admin.filing.create', [
            'typefile' => $typefile,
            'users' => $user
        ]);
    }
    public function proccessCreateDocument(Request $request) {
        
        $nip = $request->nip;
        $typefile = TypeFile::all();

        foreach ($typefile as $fileType) {
            $file = $request->file($fileType->id);
 
            if ($file) {
                if ($file->isValid()) {
                    $fileName = $file->getClientOriginalName();
                    $path = '/file-upload';

                    $storagePath = $file->storeAs($path, $fileName );

                    $typefile = DB::table('user_file')
                                    ->insert([
                                        'user_id' => $request->nip,
                                        'type_file_id' => $fileType->id,
                                        'file' => $storagePath
                                    ]);

                    if ($typefile) {
                        return back()->with('success', 'File berhasil diunggah');
                    } else {
                        return back()->with('error', 'Gagal mengunggah file');
                    }

                } else {
                    echo "File tidak valid. <br>";
                }
            } else {
                echo "File tidak diunggah. <br>";
            }
        }


    }

}
