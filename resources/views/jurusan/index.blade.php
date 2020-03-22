@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Data Jurusan</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/jurusan/create') }}" class="btn btn-primary btn-sm float-right"> Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr bgcolor="#ccc">
                                    <th>No</th>
                                    <th>Jurusan</th>
                                    <th>Kapasitas</th>
                                    <th>Terisi</th>
                                    <th width="188px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($jurusan as $no => $r)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $r->jurusan }}</td>
                                    <td>{{ $r->kapasitas }} Peserta</td>
                                    <td>{{ $r->terisi }} Peserta</td>
                                    <td>
                                        <form action="{{ url('/jurusan/' . $r->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="{{ url('/jurusan/' . $r->id . '/show') }}" class="btn btn-success btn-sm ">Tampil</a>
                                            <a href="{{ url('/jurusan/' . $r->id) }}" class="btn btn-warning btn-sm ">Edit</a>
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin dihapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="5">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection