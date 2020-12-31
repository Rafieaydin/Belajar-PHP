@extends('layout.main')

@section('title')
    <h1>DATA TABLE PERTANYAAN</h1>
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
                        <th>jumlah pertanyaan</th>
                        <th>jumlah jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>{{$user->profile->nama_lengkap}}</td>
                        <td>
                            <a href="/pertanyaan/{{$user->id}}">{{$user->pertanyaan->count()}}</a>
                        </td>
                        <td>
                            <a href="/jawaban/{{$user->id}}">{{$user->jawaban->count()}}</a>
                        </td>
                        </tr>
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
