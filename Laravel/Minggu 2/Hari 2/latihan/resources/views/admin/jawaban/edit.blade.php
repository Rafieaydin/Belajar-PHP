@extends('layout.main')

@section('title')
    <h1>DATA TABLE PERjawabAN</h1>
@endsection
@section('content')
    <div class="card">
                <div class="card-header">
                    <button class="btn  btn-primary"  data-toggle="modal" data-target="#exampleModal">Tambah data [+]</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/jawaban/{{$jawab->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama profile</label>
                        <input type="text" class="form-control  @error('profile') is-invalid @enderror" name="profile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama profile" disabled value="{{$jawab->profile->nama_lengkap}}">
                        @error('profile')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group @error('Pertanyaan') is-invalid @enderror">
                            <label for="inputGroupSelect01">Pertanyaan</label>
                            <select name="Pertanyaan" id="inputGroupSelect01" class="form-control" disabled>
                                <option  value="{{$jawab->pertanyaan->isi}}">{{$jawab->pertanyaan->isi}}</option>
                            </select>
                            @error('Pertanyaan')
                            <div class="invalid-feedback mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">jawaban</label>
                        <input type="text" class="form-control  @error('jawaban') is-invalid @enderror" name="jawaban" id="exampleInputPassword1" placeholder="masukan judul" value="{{$jawab->isi}}">
                        @error('jawaban')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/jawaban" type="button" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
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

        </div>
    </div>
    </div>
@endsection
