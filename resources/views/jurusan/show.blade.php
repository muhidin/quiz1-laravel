@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-judul">Tampilkan Data Jurusan</h3>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="#" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="{{ $jurusan->jurusan }}" autofocus readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input type="number" name="kapasitas" class="form-control" value="{{ $jurusan->kapasitas }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Terisi</label>
                                <input type="number" name="terisi" class="form-control" value="{{ $jurusan->terisi }}" readonly>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/jurusan') }}" class="btn btn-primary btn-md ">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection