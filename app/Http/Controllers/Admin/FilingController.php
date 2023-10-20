<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeFile;
use App\Models\User;
use App\Models\UserFile;
use App\Service\UserFileService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilingController extends Controller
{
    public function index(Request $request) {
        $user = User::select('id', 'nip')->where('nip','!=',null)->get();
        $data_user = null;
        $data_upload = null;
        if ($request->has('nip')) {
            $data_user = User::where('id',$request->get('nip'))->first();
            $data_upload = UserFile::where('user_id',$request->get('nip'))->pluck('type_file_id')->toArray();
        }
        $typefile = TypeFile::all();


        return view('admin.filing.index',
        [
            'typefile' => $typefile,
            'users' => $user,
            'data_user' => $data_user,
            'data_upload' => $data_upload
        ]);
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
        foreach ($request->all() as $key => $value) {
            if (is_int($key) && $request->hasFile($key)) {
                $cek = UserFile::where('user_id',$_POST['id'])->where('type_file_id',$key);
                if ($cek->first() != null) {
                    return redirect()->route('admin.filing.index')->withError('Mohon maaf data sudah diinputkan.');

                }
                $file = $request->file($key) ;
                $date = Carbon::now()->format('ymdhis');
                $fileName = $key.$date.'.'.$file->extension();
                $path = '/public/file-upload';

                $storagePath = $file->storeAs($path, $fileName );

                $typefile =  new UserFile;
                $typefile->user_id = $_POST['id'];
                $typefile->type_file_id = $key;
                $typefile->file = $fileName;
                $typefile->save();
            }
        }
        return redirect()->route('admin.filing.index')->withStatus('Berhasil menambahkan file.');

    }

    function uploadFile($id, $id_file) {
        $data_user = User::where('id',$id)->first();

        return view('admin.filing.upload-file',[
            'data_user' => $data_user,
            'id_file' => $id_file
        ]);
    }

    public function proccessEditDocument(Request $request) {
        foreach ($request->all() as $key => $value) {
            if (is_int($key) && $request->hasFile($key)) {
                $file = $request->file($key) ;
                $date = Carbon::now()->format('ymdhis');
                $fileName = $key.$date.'.'.$file->extension();

                $path = '/public/file-upload';

                $file->storeAs($path, $fileName);

                $typefile = UserFile::where('user_id',$_POST['id'])->where('type_file_id',$key)->first();
                Storage::delete('public/file-upload/'.$typefile->file);
                $typefile->user_id = $_POST['id'];
                $typefile->type_file_id = $key;
                $typefile->file = $fileName;
                $typefile->update();
            }
        }
        return redirect()->route('admin.filing.index')->withStatus('Berhasil mengganti file.');

    }

    function uploadFileEdit($id, $id_file) {
        $data_user = User::where('id',$id)->first();

        return view('admin.filing.upload-file-edit',[
            'data_user' => $data_user,
            'id_file' => $id_file
        ]);
    }

    function uploadFileShow($id, $id_file) {
        $data_user = User::where('id',$id)->first();
        $typefile = UserFile::where('user_id',$id)->where('type_file_id',$id_file)->first();
        return view('admin.filing.show-data',[
            'data_user' => $data_user,
            'typefile' => $typefile
        ]);
    }



}
