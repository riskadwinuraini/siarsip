@extends('guest.app')

@section('content')
<div class=" container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel w-100  documentation">
        <div class="content-wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 pt-5 text-center">
                <h3 class="text-uppercase">Daftar tata naskah kepegawaian pppk badan kepegawaian dan pengembangan sumber daya manusia</h3>
              </div>
            </div>
            <div class="row pt-5 justify-content-center mt-5">
              <div class="col-6 pt-5 ">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                          <x-form label="Upload CPPK" name="CPPPK"/>
                          <x-form label="Pas Foto (4x6)" name="passPhoto" short="Foto wajib berwarna, warna dasar biru, sebanyak 3 lembar"/>
                          <x-form label="Daftar riwayat Hidup" name="history"/>
                          <x-form label="Formulir FIP 01" name="form_fip_1"/>
                          <x-form label="Formulir FIP 02" name="form_fip_2"/>
                          <x-form label="Model Data Keluarga" name="model_dk" short="(Data Keluarga Lengkap walaupun tidak termasuk tunjangan gaji)" />
                          <x-form label="Surat Perintah Melaksanakan Tugas" name="spmt"/>
                          <x-form label="Foto Ijazah" name="form_fip_2" shor="Foto ijazah s.d terakhir"/>
                          <x-form label="Fotokopi Sertifikat pendidikan pelatihan" name="sertivicate"/>
                          <x-form label="Akta nikah" name="spmt"/>
                          <x-form label="Akta kelahiran anak" name="spmt"/>
                          <x-form label="Fotokopi KTP" name="spmt"/>
                          <x-form label="Fotokopi surat kematian istr/suami/anak" name="spmt"/>
                          <x-form label="Fotokopi akta perceraian" name="spmt"/>
                          <x-form label="Fotokopi akta BPJS" name="spmt"/>
                          <x-form label="Fotokopi NPWP" name="spmt"/>
                          <x-form label="Fotokopi SK tanda kehormatan/jasa/penghargaan" name="spmt"/>
                          <x-form label="Sertifikasi/kompetisi" name="spmt"/>

                          <button type="submit" class="btn btn-primary mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
        <!-- partial -->
      </div>
    </div>
  </div>    
@endsection