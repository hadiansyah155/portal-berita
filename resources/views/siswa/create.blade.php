@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ini halaman daftar siswa --}}
                    <form action=" {{ route('siswa.store') }} " method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="">Masukkan Nama Siswa</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="">Masukkan Kelas</label>
                                <input type="text" class="form-control" name="kelas" required>
                            </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
