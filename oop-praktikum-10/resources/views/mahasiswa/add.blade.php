@extends('layouts.app')

 @section('content')

 <div class="container">

 <h3>Tambah Data Mahasiswa</h3>
 <form action="{{ url('/mahasiswa') }}" method="POST">
 @csrf
 <table class="table-bordered" width="100%">
 <tr>
 <td>NIM</td>
 <td><input type="text" name="mhsw_nim"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="mhsw_nama"></td>
 </tr>
 <tr>
 <td>JURUSAN</td>
 <td><select name="mhsw_jurusan" id="mhsw_jurusan">
        <option value="">-- Pilih --</option>
        <option value="Sistem Komputer">Sistem Komputer</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Komputer">Teknik Komputer</option>
      </select></td>
 </tr>
 <tr>
 <td>JENIS KELAMIN</td>
 <td><input name="gender" type="radio" value="Laki-Laki" <? if($jekel=='Laki-Laki'){echo 'checked';}?>
        Laki-Laki  <input type="radio" name="gender" value="Perempuan" <? if($jekel=='Perempuan'){echo 'checked';}?>
        Perempuan</td>
 </tr>
 <tr>
 	<td>LULUSAN</td>
 	<td>
 		<div class="form-check">
 		<input class="form-check-input" type="checkbox" value="SD" id="defaultCheck1" name="lulusan[]">
  		<label class="form-check-label" for="defaultCheck1">
    	SD
  		</label>
  		</div>
  		 		<div class="form-check">
 		<input class="form-check-input" type="checkbox" value="SMP" id="defaultCheck1" name="lulusan[]">
  		<label class="form-check-label" for="defaultCheck1">
    	SMP
  		</label>
  		</div>
  		 		<div class="form-check">
 		<input class="form-check-input" type="checkbox" value="SMA/SMK" id="defaultCheck1" name="lulusan[]">
  		<label class="form-check-label" for="defaultCheck1">
    	SMA / SMK
  		</label>
  		</div>
  	</td>
 </tr>
 <tr>
 <td>ALAMAT</td>
 <td><input type="text" name="mhsw_alamat"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr>
 </table>
 </form>
 </div>
@endsection