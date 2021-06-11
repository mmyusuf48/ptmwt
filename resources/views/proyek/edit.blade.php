@extends('layout.main')

@section('title','proyek')

@section('container')

<div class="container">
    <div class="row">
        <div class="col ">
            <h1 class="mt-3"><i class="fas fa-tasks mr-3"></i>Data Proyek</h1>
            <hr class="bg-dark mb-5">
            <form method="post" action="{{ url(url('/proyek').'/'.$deskripsi->id_deskripsi)}}" enctype="multipart/form-data" >
                {{-- @method ('patch') --}}
                {{ csrf_field() }}
                @foreach ($proyek as $row)   
                <div class="form-group">
                    <label for="nama_proyek">Nama Proyek</label>
                    <input type="text" class="form-control @error ('nama_proyek') is-invalid @enderror" 
                    id="nama_proyek"  name="nama_proyek" value="{{ $row->nama_proyek}}">
                @error('nama_proyek')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control @error ('tanggal_mulai') is-invalid @enderror" 
                    id="tanggal_mulai"  name="tanggal_mulai" value="{{ $row->tanggal_mulai}}">
                @error('tanggal_mulai')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input type="date" class="form-control @error ('tanggal_berakhir') is-invalid @enderror" 
                    id="tanggal_berakhir"  name="tanggal_berakhir" value="{{ $row->tanggal_berakhir}}">
                @error('tanggal_berakhir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                @endforeach
                <div class="form-group">
                    <label>Manager</label>
                    <select class="form-control" id="id_manager" name="id_manager" >
                        @foreach ( $manager as $row)    
                        <option value="{{ $row -> id_manager}}">{{ $row -> nama_manager }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Vendor</label>
                    <select class="form-control" id="id_vendor" name="id_vendor" >
                        @foreach ( $vendor as $row)    
                        <option value="{{ $row -> id_vendor}}">{{ $row -> nama_vendor }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label> 
                    <input type="text" class="form-control @error ('deskripsi') is-invalid @enderror" 
                    id="deskripsi"  name="deskripsi" value="{{ $deskripsi->deskripsi}}">
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-success my-3 " data-toggle="modal" data-target="#modal-sm"><i class="fas fa-save mr-2"></i>Save</button>
                    <div class="modal fade" id="modal-sm">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Save ?</h4>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{url('/proyek')}}" class="card-link btn btn-info ml-3"><i class="far fa-arrow-alt-circle-left mr-2"></i>back</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection