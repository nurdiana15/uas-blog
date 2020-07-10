@extends('layouts.app')

@section('content')

<div class="container">
<h3>Daftar Photo</h3>

<table>
	<tr>
		<td>Date</td>
		<td>Title</td>
		<td>Text</td>
		<td>Upload</td>
		<td>ID post</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->photo_date }}</td>
		<td>{{ $row->photo_title }}</td>
		<td>{{ $row->photo_text }}</td>
		<td>{{ $row->photo_upload }}</td>
		<td>{{ $row->post_id }}</td>
	</tr>
@endforeach
</table>
<div><a href="{{ url('photo/create') }}">Tambah Data</a></div>
</div>
@endsection 