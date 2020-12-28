@extends('layout.main')

@section('title')
    <h1>DATA TABLE PERTANYAAN</h1>
@endsection
@section('content')
    <div class="card">
                <div class="card-header">
                    <button class="btn  btn-primary"  data-toggle="modal" data-target="#exampleModal">Tambah data [+]</button>
                    <div class="float-right">
                    @if (session('sukses'))
                    <div class="alert alert-success" style="margin-top: -8%">
                    {{ session('sukses') }}
                    </div>
                    @endif
                    @if (session('eror'))
                    <div class="alert alert-danger" style="margin-top: -8%">
                    {{ session('eror') }}
                    </div>
                    @endif
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 10px">no</th>
                        <th>Nama User</th>
                        <th>judul</th>
                        <th style="width: 280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($pertanyaan as $per)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                    @foreach ($profile as $pro)
                        <td>{{$pro->nama_lengkap}}</td>
                        <td>
                            {{$per->judul}}
                        </td>
                        <td>
                            <a href="Pertanyaan/{{$per->id}}" class="btn  btn-success">SHOW</a>
                            <a href="Pertanyaan/{{$per->id}}/edit" class="btn  btn-primary">UPDATE</a>
                            <form action="Pertanyaan/{{$per->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                            <button  class="submit btn badge-danger">hapus </button>
                            </form>
                        </td>
                    @endforeach
                    @endforeach
                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
                </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="Pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">nama profile</label>
            <input type="text" class="form-control  @error('profile') is-invalid @enderror" name="profile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama profile">
            @error('profile')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Pertanyaan</label>
            <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul" id="exampleInputPassword1" placeholder="Masukan pertanyaan">
            @error('judul')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">isi</label>
            <input type="text" class="form-control  @error('isi') is-invalid @enderror" name="isi" id="exampleInputPassword1" placeholder="masukan judul">
            @error('isi')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">back</button>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
        </form>
        </div>
    </div>
    </div>
@endsection
