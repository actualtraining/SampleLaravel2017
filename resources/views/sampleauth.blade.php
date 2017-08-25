@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Hello</li>
@endsection

@section('content')
<div class="col-md-12">
    <form>
        @if($status==true)
            <button type="button" value="Tambah" class="btn btn-warning">Tambah</button>
        @else
            <button type="button" value="Hapus" class="btn btn-danger" />Delete</button>
        @endif
    </form>
</div>

@endsection