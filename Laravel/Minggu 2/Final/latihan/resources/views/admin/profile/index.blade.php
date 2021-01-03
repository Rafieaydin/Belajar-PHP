@extends('layout.main')

@section('title')
    <h1>DATA TABLE PROFILE USER</h1>
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
                        <th>username</th>
                        <th>nama profile</th>
                        <th>email</th>
                        <th>Role</th>
                        <th style="width: 280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $pro)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->profile->nama_lengkap}}</td>
                        <td>{{$pro->email}}</td>
                        <td>{{$pro->role}}</td>
                        <td>
                            <a href="profile/{{$pro->id}}" class="btn  btn-success">SHOW</a>
                            <a href="profile/{{$pro->id}}/edit" class="btn  btn-primary">UPDATE</a>
                            <form action="profile/{{$pro->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                            <button  class="submit btn badge-danger">hapus </button>
                            </form>
                        </td>
                    @endforeach

                        </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right text-secondary">
                    {{$user->links()}}
                    </ul>
                </div>
                </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah user</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="profile" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama profile">
            @error('username')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">nama profile</label>
            <input type="text" class="form-control  @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama profile">
            @error('nama_lengkap')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telephone number</label>
            <input type="number" class="form-control  @error('phone') is-invalid @enderror" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama profile">
            @error('phone')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="exampleInputPassword1" placeholder="Masukan pertanyaan">
            @error('email')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">password</label>
            <input type="text" class="form-control  @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="masukan judul">
            @error('password')
            <div class="invalid-feedback mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto" id="exampleInputPassword1" placeholder="masukan judul">
            @error('foto')
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
    @include('sweetalert::alert')
@endsection
