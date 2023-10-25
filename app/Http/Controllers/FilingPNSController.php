<?php

namespace App\Http\Controllers;

use App\Models\TypeFile;
use App\Models\User;
use App\Models\UserFile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FilingPNSController extends Controller
{
    public function index(Request $request) {
        $user = User::select('id', 'nip')->where('nip','!=',null)->where('type_pppk','pns')->get();
        $data_user = null;
        $data_upload = null;
        if ($request->has('nip') || Session::has('nip')) {
            Session::put('nip',$request->get('nip'));
            $data_user = User::where('id',$request->get('nip'))->first();
            $data_upload = UserFile::where('user_id',$request->get('nip'))->pluck('type_file_id')->toArray();
        }
        $typefile = TypeFile::where('status','pns')->get();


        return view('admin.filing-pns.index',
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

        return view('admin.filing-pns.create', [
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
                if($file->extension() !== 'pdf') {
                    return redirect()->route('admin.filing.index')->withError('Format Harus PDF.');
                }
                $date = Carbon::now()->format('ymdhis');
                $fileName = $key.$date.'.'.$file->extension();

                $type_file = TypeFile::where('id',$key)->first()->name;
                $user = User::where('id',$_POST['id'])->first()->name;
                $nama_file = Str::slug($type_file);
                $user_name = Str::slug($user);
                $path = '/public/'.$user_name.'/'.$nama_file.'/';

                $storagePath = $file->storeAs($path, $fileName );

                $typefile =  new UserFile;
                $typefile->user_id = $_POST['id'];
                $typefile->type_file_id = $key;
                $typefile->file = $fileName;
                $typefile->save();
            }
        }
        return redirect()->route('admin.filing-pns.index',['nip'=>$_POST['id']])->withStatus('Berhasil menambahkan file.');

    }

    function uploadFile($id, $id_file) {
        $data_user = User::where('id',$id)->first();

        return view('admin.filing-pns.upload-file',[
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
                if($file->extension() !== 'pdf') {
                    return redirect()->route('admin.filing-pns.index')->withError('Format Harus PDF.');
                }

                $type_file = TypeFile::where('id',$key)->first()->name;
                $user = User::where('id',$_POST['id'])->first()->name;
                $nama_file = Str::slug($type_file);
                $user_name = Str::slug($user);
                $path = '/public/'.$user_name.'/'.$nama_file.'/';

                $typefile = UserFile::where('user_id',$_POST['id'])->where('type_file_id',$key)->first();
                Storage::delete($path.$typefile->file);

                $file->storeAs($path, $fileName);

                $typefile->user_id = $_POST['id'];
                $typefile->type_file_id = $key;
                $typefile->file = $fileName;
                $typefile->update();
            }
        }
        return redirect()->route('admin.filing-pns.index',['nip'=>$_POST['id']])->withStatus('Berhasil mengganti file.');

    }

    function uploadFileEdit($id, $id_file) {
        $data_user = User::where('id',$id)->first();

        return view('admin.filing-pns.upload-file-edit',[
            'data_user' => $data_user,
            'id_file' => $id_file
        ]);
    }

    function uploadFileShow($id, $id_file) {
        $data_user = User::where('id',$id)->first();

        $typefile = UserFile::where('user_id',$id)->where('type_file_id',$id_file)->first();

        return view('admin.filing-pns.show-data',[
            'data_user' => $data_user,
            'typefile' => $typefile
        ]);
    }
}
