
<div class="form-group">
    <label>Pilih Pegawai</label>
    <select class="js-example-basic-single w-100">
      <option value="AL">Alabama</option>
      <option value="WY">Wyoming</option>
      <option value="AM">America</option>
      <option value="CA">Canada</option>
      <option value="RU">Russia</option>
    </select>
  </div>

  <div class="form-group">
    <input type="text" value="" class="form-control" placeholder="NIP">
  </div>

<hr>
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
    <a href="/dashboard" class="btn btn-light">Cancel</a>