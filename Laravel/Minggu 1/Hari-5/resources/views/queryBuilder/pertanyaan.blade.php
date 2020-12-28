@extends('partial.main')
{{-- menghubungkan dari yield ke template lain --}}
@section('title')
    <h1>Query builder</h1>
@endsection
@section('content')
<div class="mb-3">
    <a href="{{'/pertanyaan/create'}}" class="btn btn-primary">Tambah Data [ + ]</a>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">judul</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($pertanyaan as $tanya)
        <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$tanya->judul}}</td>
        <td>
            <a href="/pertanyaan/{{$tanya->id}}" class="badge badge-info">detail</a>
            <a href="/pertanyaan/{{$tanya->id}}/edit" class="badge badge-success">update</a>
        <form action="/pertanyaan/{{$tanya->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="badge badge-danger">hapus</button>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
