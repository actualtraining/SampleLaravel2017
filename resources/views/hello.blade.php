@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Hello</li>
@endsection

@section('content')
<div class="col-md-12">
    <h2>Sample Page</h2>
    <p>Hello {{ $nama }} dan alamat anda {{ isset($alamat)?$alamat:'belum diisi' }}</p>
</div>

@endsection