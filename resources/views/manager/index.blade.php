@extends('layout.main')

@section('title','Manager')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-3"><i class="fas fa-user-tie mr-3"></i>Data manager</h1><hr class="bg-dark">
            <a href="{{ url('/manager/create')}}" class="btn btn-primary my-3"><i class="fas fa-plus-square mr-3"></i>Tambah data</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            @endif
                <div class="container">
                    <div class="col-12">
                        <ul class="list-group table-striped">
                        @foreach ( $manager as $row)
                            <li class="list-group-item ">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-sm-5">
                                        <div class=" border-right" >
                                            <div class="description-block">
                                                <h3 class="font-italic text-capitalize">{{ $row->nama_manager}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class=" border-right">
                                            <div class="description-block">
                                                <h5><img width="120px" src="{{$row->foto_manager}}" class="rounded"></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="description-block">
                                            <a href="{{ url('/manager/show').'/'.$row->id_manager }}" class="btn btn-info"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                        </div>
                                    </div>
                                </div>    
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div><br>    
            </div>
        </div>
    </div>  
       
   
@endsection