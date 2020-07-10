@extends('layouts.app')

@section('content')

<div class="container">
<h3>Daftar Category</h3>

<table>
	<tr>
		<td>Nama</td>
		<td>Text</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->category_name }}</td>
		<td>{{ $row->category_text }}</td>
	</tr>
@endforeach
</table>
<div><a href="{{ url('category/create') }}">Tambah Data</a></div>
</div>
@endsection 