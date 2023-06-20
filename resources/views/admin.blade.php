@extends('dashboard')
@section('dashboard')
    <div class="container p-5">
        <div class="card shadow mb-5 mt-5">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold">Data Admin</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered mt-3">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($admin as $key => $item)
                            <tr class="text-center">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->password }}</td>
                                <td><a href="admin/delete/{{ $item->id }}" class="btn btn-success btn-sm">Hapus</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection