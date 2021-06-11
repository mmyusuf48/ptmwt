@extends('layout.main')

@section('title','proyek')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-sm-12 ">
            <h1><i class="fas fa-tasks mr-3 mt-5"></i>Data Proyek</h1>
            <hr class="bg-dark">
            <div class="row">
                <div class="col-sm-6">
                    <p class="card-title float-none w-100 mt-5"><strong> Proyek : </strong>{{ $proyek -> nama_proyek }}</p>
                    <p class="card-title float-none w-100"><strong> Tanggal Mulai : </strong>{{ $proyek -> tanggal_mulai }}</p>
                    <p class="card-title float-none w-100"><strong> Tanggal Berakhir : </strong>{{ $proyek -> tanggal_berakhir }}</p>
                </div>
                <div class="col-sm-6 mt-5">
                @foreach ( $manager as $row)
                    <p value="{{ $row -> id_manager}}"><strong> Penanggung jawab : </strong>  {{ $row -> nama_manager }} </p>
                @endforeach
                @foreach ( $vendor as $row)
                    <p value="{{ $row -> id_vendor}}"><strong> Vendor : </strong>  {{ $row -> nama_vendor }} </p>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group mt-5">
                            <li class="list-group-item ">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-sm-3 border-right">
                                        <div class="description-block">
                                            <h3 class="font-italic text-capitalize">Job Desk</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 border-right">
                                        <div class="description-block">
                                            <h3 class="font-italic text-capitalize">Status</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 border-right">
                                        <div class="description-block">
                                            <h3 class="font-italic text-capitalize">Image</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 ">
                                        <div class="description-block">
                                            <h3 class="font-italic text-capitalize">Keterangan</h3>
                                        </div>
                                    </div>
                                </div>    
                            </li>
            </ul>
        </div>
    </div>
         <form method="POST" action="{{ url('/proyek/update')}}" enctype="multipart/form-data">
            @csrf
            <ul class="list-group ">
                @foreach ( $deskripsi as $index => $row)
                <input type="hidden" name="id_deskripsi[]" value="{{$row->id_deskripsi}}">
                <li class="list-group-item ">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-sm-3 border-right">
                                <div class="description-block">
                                    <p>{{ $row->deskripsi}}</p>
                                </div>
                        </div>
                        <div class="col-sm-3 border-right">
                            <div class="description-block text-left ml-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" {{ ($row->status == 1 ? 'checked' : "") }} name="status[{{ $index }}]" id="status" value="1" >
                                    <label class="form-check-label" for="status">done</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" {{ ($row->status == 2 ? 'checked' : "") }} name="status[{{ $index }}]" id="status" value="2">
                                    <label class="form-check-label" for="status">on progres</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" {{ ($row->status == 3 ? 'checked' : "") }} name="status[{{ $index }}]" id="status" value="3">
                                    <label class="form-check-label" for="status">not done</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 border-right">
                            <img src="{{ asset('assets/proyek/'.$row->image) }}" class="w-100" />
                            <div class="description-block">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error ('image') is-invalid @enderror" id="image" 
                                        name="image[]" value="{{old('image')}}">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                <input type="hidden" name="old_image[]" class="form-control" value="{{ $row -> image }}" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="description-block">
                                <textarea class="form-control" id="keterangan" name="keterangan[]" rows="3" 
                                placeholder="masukan keterangan" >{{ $row -> keterangan}}</textarea>
                            </div>
                        </div>
                    </div>    
                </li>
                @endforeach
            </ul>
            <div class="text-right mt-5">
                {{-- <button type="sumbit" class="btn btn-success my-3">Save</button> --}}
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
                <a href="{{url('/proyek')}}" class="card-link btn btn-info ml-3"><i class="far fa-arrow-alt-circle-left mr-2"></i>back</a>
                {{-- <a href="{{ url('/proyek/delete/'.$proyek->id_proyek)}}" class="btn btn-danger btnTable ml-3" onClick="myFunctionD()"><i class="fas fa-trash mr-2"></i>Delete</a> --}}
                <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-trash mr-2"></i>Delete</button>
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete ?</h4>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="{{ url('/proyek/delete/'.$proyek->id_proyek)}}" class="btn btn-danger btnTable ml-3" >Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>    
@endsection
            