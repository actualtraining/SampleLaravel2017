@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Tampil</li>
@endsection

@section('content')
<div class="col-md-12">
   <form method="POST" action="{{ route('tampil') }}">
        {{ csrf_field() }}
        <label for="alas">Alas :</label><br>
        <input type="number" name="alas" /><br><br>
        <label for="tinggi">Tinggi :</label><br>
        <input type="number" name="tinggi" /><br><br>
        <input type="submit" value="Hitung" class="btn btn-info" />
   </form>
   <br>
   {{ isset($hasil)?"Hasilnya adalah :".$hasil:"" }}
</div>

@endsection