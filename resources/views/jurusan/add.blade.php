@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-judul">Tambah Data Jurusan</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/jurusan') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Nama Jurusan" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input type="number" name="kapasitas" class="form-control" placeholder="Kapasitas Kelas">
                            </div>
                            <div class="form-group">
                                <label for="">Terisi</label>
                                <input type="number" name="terisi" class="form-control" placeholder="Isi Kelas">
                            </div>
                            <div class="form-group">
                                <input type="reset">
                                <button class="btn btn-primary btn-md">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection