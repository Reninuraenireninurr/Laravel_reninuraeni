@extends('admin.main')
@section('title','Kategori')
@section('content')
<h1>Kategori</h1>
<hr>
<<<<<<< HEAD
<div class="row">
	<div class="col-md-6 mb-3">
<<<<<<< HEAD
		<a href="{{route('admin.kategori.add')}}" class="btn btn-primary">[+] Tambah</a>
=======
		<a href="#" class="btn btn-primary">[+] Tambah</a>
>>>>>>> 08d9f2ca7d1c796d392511d063bbb1f9bfd8fdac
	</div>

	<div class="col-md-6 mb-3">
		<form method="GET" action="{{route('admin.kategori')}}">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control"
				value="{{request('keyword')}}">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
						Cari!
					</button>
				</div>
			</div><!-- End Input Group -->
		</form>
	</div>
</div><!-- End Row -->

<table class="table table-striped mb-3">
	<tr>
		<th>Kategori</th><th>&nbsp;</th>
	</tr>
	@foreach($data as $dt)
	<tr>
		<td>{{ $dt->nama_kategori }}</td>
		<td>
			<a href="#" class="btn btn-success btn-sm">
				<i class="fa fa-w fa-edit"></i>
			</a>
			<button type="button" class="btn btn-danger btn-sm">
				<i class="fa fa-w fa-trash"></i>
			</button>
		</td>
	</tr>
	@endforeach
</table>

{{
	$data->appends( request()->only('keyword') )
	->links('vendor.pagination.bootstrap-4')
}}

=======
>>>>>>> 548bd0b1cd8c255c9947a32b0adb113a82e19bd0
@endsection