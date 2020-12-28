@extends('partial.main')
{{-- menghubungkan dari yield ke template lain --}}
@section('title')
    <h1>Query builder</h1>
@endsection
@section('content')
<div class="mb-3">
    <a href="{{'/pertanyaan/create'}}" class="btn btn-primary">Tambah Data [ + ]</a>
</div>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">judul</th>
        <th scope="col">isi</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
    @foreach ( $detail as $data)
        <th>{{$loop->iteration}}</th>
        <td>{{$data->judul}}</td>
        <td>{{$data->isi}}</td>
        <td>
            <a href="/pertanyaan" class="badge badge-info">kembali</a>
            <a href="" class="badge badge-success">update</a>
        <form action="/pertanyaan/{{$data->id}}" method="POST" class="d-inline">
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
