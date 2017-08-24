@extends('layouts.main')
@section('content')
<div class="col-md-12">
    <h2>Sample Page</h2>
    <p>Hello {{ $nama }} dan alamat anda {{ isset($alamat)?$alamat:'belum diisi' }}</p>
</div>
    
@endsection