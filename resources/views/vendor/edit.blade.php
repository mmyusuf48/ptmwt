@extends('layout.main')

@section('title','vendor')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-3"><i class="fas fa-users mr-3"></i>Edit data vendor</h1><hr class="bg-dark">
                 <form method="post" action="{{url('/vendor-proyek').'/'.$vendor->id_vendor}}" enctype="multipart/form-data">
                 @method ('patch')
                 @csrf
                    <div class="form-group">
                        <label for="nama_vendor"><b>Nama</b></label>
                        <input type="text" class="form-control @error ('nama_vendor') is-invalid @enderror" 
                        id="nama_vendor" placeholder="Masukan nama " name="nama_vendor" value="{{ $vendor->nama_vendor}}">
                    @error('nama_vendor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"><b>E-mail</b></label>
                        <input type="text" class="form-control @error ('email') is-invalid @enderror" 
                        id="email" placeholder="Masukan E-mail " name="email"
                        value="{{ $vendor->email}}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_vendor"><b>Alamat</b></label>
                        <input type="text" class="form-control @error ('alamat_vendor') is-invalid @enderror" 
                        id="alamat_vendor" placeholder="Masukan alamat " name="alamat_vendor"
                        value="{{ $vendor -> alamat_vendor}}">
                    @error('alamat_vendor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_tlp_vendor"><b>No Telpon</b></label>
                        <input type="text" class="form-control @error ('no_tlp_vendor') is-invalid @enderror" 
                        id="no_tlp_vendor" placeholder="Masukan nomer telpon " name="no_tlp_vendor"
                        value="{{ $vendor -> no_tlp_vendor}}">
                    @error('no_tlp_vendor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_vendor">Foto</label>
                        <div>
                            <input type="hidden" value="{{ $vendor->foto_vendor}}" name="old_img">
                            <img src="{{ url('').'/'.$vendor->foto_vendor }}" alt="" width="25%" class="img-thumbnail">
                        </div><br>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error ('foto_vendor') is-invalid @enderror" 
                                id="foto_vendor" placeholder="Masukan foto " name="foto_vendor" value="{{ $vendor -> foto_vendor}}">
                                @error('foto_vendor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        {{-- <button type="sumbit" class="btn btn-primary my-3">Save data</button> --}}
                        <button type="button" class="btn btn-success my-3" data-toggle="modal" data-target="#modal-sm"><i class="fas fa-save mr-2"></i>Save</button>
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
                    </div>
                </form>
            </div>
        </div>
    </div>     
   
@endsection