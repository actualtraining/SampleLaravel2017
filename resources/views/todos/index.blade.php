@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Todo Lists</li>
@endsection

@section('content')
<div class="col-md-12">
    <h2>Daftar Todo</h2>
    <br/>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach($todo_lists as $list)
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->name }}</td>
            </tr>
        @endforeach
    </table>
</div>

@endsection