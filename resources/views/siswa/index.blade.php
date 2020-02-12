@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Siswa
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary" style="float:right">
                        Tambah Siswa
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td> {{ $item->nama }} </td>
                                <td> {{ $item->kelas }} </td>
                                <td>
                                    <form action="{{route('siswa.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-info" href=" {{ route('siswa.show', $item->id) }} ">Show</a>
                                        <a class="btn btn-warning" href=" {{ route('siswa.edit', $item->id) }} ">Edit</a>
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
