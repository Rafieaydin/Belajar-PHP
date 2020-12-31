@extends('layout.main')

@section('title')
    <h1>DATA TABLE PERTANYAAN</h1>
@endsection
@section('header')
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="card">
                <div class="card-header">
                    <button class="btn  btn-primary"  data-toggle="modal" data-target="#exampleModal">Tambah data [+]</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="/Pertanyaan/{{$tanya->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">nama profile</label>
                        <input type="text" class="form-control  @error('profile') is-invalid @enderror" name="profile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama profile" disabled value="{{$tanya->user->profile->nama_lengkap}}">
                        @error('profile')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Pertanyaan</label>
                        <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul" id="exampleInputPassword1" placeholder="Masukan pertanyaan" value="{{$tanya->judul}}">
                        @error('judul')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">isi</label>
                        <input type="text" class="form-control  @error('isi') is-invalid @enderror" name="isi" id="exampleInputPassword1" placeholder="masukan judul" id="isi" value="{{$tanya->isi}}">
                        @error('isi')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/Pertanyaan" type="button" class="btn btn-secondary">Kembali</a>
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
@section('footer')
    <script>
        CKEDITOR.replace( 'isi' );
    </script>
@endsection