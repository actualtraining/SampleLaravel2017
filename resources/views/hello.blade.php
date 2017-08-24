@extends('layouts.main')
@section('main')
    <h2>Sample Page</h2>
    <p>Hello {{ $nama }} dan alamat anda {{ isset($alamat)?$alamat:'belum diisi' }}</p>
@endsection