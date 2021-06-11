@extends('layout.main')

@section('title','Manager')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-3"><i class="fas fa-user-tie mr-3"></i>Tambah data manager</h1><hr class="bg-dark">
                 <form method="post" action="{{ url('/manager/add')}}"  enctype="multipart/form-data">
                 @csrf
                    <div class="form-group">
                        <label for="nama_manager">nama</label>
                        <input type="text" class="form-control @error ('nama_manager') is-invalid @enderror" 
                        id="nama_manager" placeholder="Masukan nama " name="nama_manager" value="{{old('nama_manager')}}">
                    @error('nama_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">user name</label>
                        <input type="text" class="form-control @error ('username') is-invalid @enderror" 
                        id="username" placeholder="Masukan tempat/tanggal lahir " name="username"
                        value="{{old('username')}}">
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" class="form-control @error ('password') is-invalid @enderror" 
                        id="password" placeholder="Masukan password " name="password"
                        value="{{old('password')}}">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_manager">alamat</label>
                        <input type="text" class="form-control @error ('alamat_manager') is-invalid @enderror" 
                        id="alamat_manager" placeholder="Masukan alamat " name="alamat_manager"
                        value="{{old('alamat_manager')}}">
                    @error('alamat_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_tlp_manager">nomer telpon</label>
                        <input type="text" class="form-control @error ('no_tlp_manager') is-invalid @enderror" 
                        id="no_tlp_manager" placeholder="Masukan nomer telpon " name="no_tlp_manager"
                        value="{{old('no_tlp_manager')}}">
                    @error('no_tlp_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_manager">email</label>
                        <input type="text" class="form-control @error ('email_manager') is-invalid @enderror" 
                        id="email_manager" placeholder="Masukan email " name="email_manager"
                        value="{{old('email_manager')}}">
                    @error('email_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_manager">foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error ('foto_manager') is-invalid @enderror" 
                                id="foto_manager" placeholder="Masukan foto " name="foto_manager" value="{{old('foto_manager')}}">
                                @error('foto_manager')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                    {{-- <button type="sumbit" class="btn btn-primary my-3">Tambah data</button> --}}
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