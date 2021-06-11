@extends('layout.main')

@section('title','edit data Manager')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-5"><i class="fas fa-user-tie mr-3"></i>edit data manager</h1><hr class="bg-dark">
                 <form method="post" action="{{ url('/manager').'/'.$manager->id_manager}}" enctype="multipart/form-data">
                 @method ('patch')
                 @csrf
                    <div class="form-group">
                        <label for="nama_manager">nama</label>
                        <input type="text" class="form-control @error ('nama_manager') is-invalid @enderror" 
                        id="nama_manager" placeholder="Masukan nama " name="nama_manager" value="{{ $manager->nama_manager}}">
                    @error('nama_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input type="text" class="form-control @error ('username') is-invalid @enderror" 
                        id="username" placeholder="Masukan UserName " name="username"
                        value="{{ $manager->username}}">
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text" class="form-control @error ('password') is-invalid @enderror" 
                        id="password" placeholder="Masukan password " name="password"
                        value="{{ $manager->password}}">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_manager">alamat</label>
                        <input type="text" class="form-control @error ('alamat_manager') is-invalid @enderror" 
                        id="alamat_manager" placeholder="Masukan alamat " name="alamat_manager"
                        value="{{ $manager->alamat_manager}}">
                    @error('alamat_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_tlp_manager">nomer telpon</label>
                        <input type="text" class="form-control @error ('no_tlp_manager') is-invalid @enderror" 
                        id="no_tlp_manager" placeholder="Masukan nomer telpon " name="no_tlp_manager"
                        value="{{ $manager->no_tlp_manager}}">
                    @error('no_tlp_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_manager">email</label>
                        <input type="text" class="form-control @error ('email_manager') is-invalid @enderror" 
                        id="email_manager" placeholder="Masukan email " name="email_manager"
                        value="{{ $manager->email_manager}}">
                    @error('email_manager')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_manager">Foto</label>
                        <div>
                            <input type="hidden" value="{{ $manager->foto_manager}}" name="old_img">
                            <img src="{{ url('').'/'.$manager->foto_manager }}" alt="" width="25%" class="img-thumbnail">
                        </div><br>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error ('foto_manager') is-invalid @enderror" 
                                id="foto_manager" placeholder="Masukan foto " name="foto_manager" value="{{ $manager -> foto_manager}}">
                                @error('foto_manager')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
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