@extends('layouts.app')

 @section('content')
<!DOCTYPE html>
 <html>
 	<head>
 		<title></title>
 		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 	</head>
 	<body>
 		<div class="container">
 			<div class="row">
 				<h3>Daftar Mahasiswa	<br> <a href="{{ url('mahasiswa/create') }}">Tambah Data</a></h3></br>
 			<table class="table">
 			<tr>
 			<td>NIM</td>
 			<td>NAMA</td>
			 <td>JURUSAN</td>
			 <td>ALAMAT</td>
			 <td>JENIS KELAMIN</td>
			 <td>LULUSAN</td>
			 <td colspan="2" class="text-center">OPSI</td>
 			</tr>

 		@foreach($rows as $row)
 			<tr>
 			<td>{{ $row->mhsw_nim }}</td>
 			<td>{{ $row->mhsw_nama }}</td>
 			<td>{{ $row->mhsw_jurusan }}</td>
			<td>{{ $row->mhsw_alamat }}</td>
			<td>{{ $row->mhsw_jenkel }}</td>
			<td>
				@php $lulusanData = json_decode($row->mhsw_lulusan, true) @endphp
				@foreach($lulusanData as $lulusan)
					{{ $lulusan }}
				@endforeach
			</td>
 			<td><a href="{{ url('mahasiswa/' . $row->mhsw_id. '/edit') }}">Edit</a></td>
 			<td><a href="{{ url('mahasiswa/' . $row->mhsw_id. '/delete') }}">Delete</a></td>
			 
 			</tr>
 			@endforeach
 			</table>
			 </div>
 			@endsection
 
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>