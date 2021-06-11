@extends('layout.main')

@section('title','proyek')

@section('container')

<div class="container">
    <div class="row">
        <div class="col ">
            <h1><i class="fas fa-tasks mr-3 mt-5"></i>Data Proyek</h1>
            <hr class="bg-dark">
            <a href="{{ url('/proyek/create')}}" class="btn btn-primary my-3"><i class="fas fa-plus-square mr-3"></i>Tambah Data </a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
            <table class="table table-striped table-bordered text-center mt-2">
                <thead>
                    <tr>
                        <th scope="col">Nama Proyek</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $proyek as $row)
                    <tr>
                        <td>{{ $row -> nama_proyek }}</td>
                        <td>{{ $row -> tanggal_mulai }}</td>
                        <td>{{ $row -> tanggal_berakhir }}</td>
                        <td>
                            <a href="{{ url('/proyek/show'.'/'.$row->id_proyek)}}" class="btn btn-info center"><i class="fas fa-info-circle mr-2"></i>detail</a>
                            <a href="{{ url('/proyek/laporan'.'/'.$row->id_proyek)}}" class="btn btn-info center ml-3">Isi Laporan</a>
                            <a href="{{ url('/proyek/deskripsi'.'/'.$row->id_proyek)}}" class="btn btn-info center ml-3">Tambah Deskripsi</a>
                            <a href="{{ url('/proyek/edit'.'/'.$row->id_deskripsi)}}" class="btn btn-info">Edit Proyek</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col text-right">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
    <B4-modal-default></B4-modal-default>
</div>
@endsection

{{-- @section('modal')
    <script>
        $(function() {
            var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
            });

        $('.swalDefaultSuccess').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
        });
    });
    </script>
@endsection --}}