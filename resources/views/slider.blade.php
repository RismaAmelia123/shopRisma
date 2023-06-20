@extends('dashboard')
@section('dashboard')
    <div class="container p-5">
        <div class="card shadow mb-5 mt-5">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold">Slider</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <a href="{{ url('slider/add') }}" class="btn text-white" style="background-color:#47597E">Tambah Data Slider</a>
                    <table class="table table-hover table-striped table-bordered mt-3">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($slider as $key => $item)
                            <tr class="text-center">
                                <td>{{ $key+1 }}</td>
                                <td><img src="/storage/{{ $item->foto }}" width="150"></td>
                                <td>
                                    <a href="slider/delete/{{ $item->id_slider }}" class="btn btn-danger btn-sm">Hapus</a>
                                    <a href="slider/edit/{{ $item->id_slider }}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection