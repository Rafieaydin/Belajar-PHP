@extends('layout.main')

@section('title')
    <h1>DATA pertanyaan {{$user->profile->nama_lengkap}}</h1>
@endsection
@section('content')
    <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">no</th>
                        <th>nama lengkap</th>
                        <th>judul</th>
                        <th>isi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $tanya)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tanya->user->profile->nama_lengkap}}</td>
                            <td>{{$tanya->judul}}</td>
                            <td>{{$tanya->isi}}</td>
                        </tr>

                    @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <a href="/profile" class="float-right btn btn-default">
                        kembali
                    </a>
                </div>
                </div>
@endsection
