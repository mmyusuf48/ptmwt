@extends('layout.main')

@section('title','Manager')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-3"><i class="fas fa-user-tie mr-3"></i>Detail Manager</h1><hr class="bg-dark">
               <section class="content ">
                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-5">
                                <div class="col-12">
                                    <img width="160px" src="{{ url('').'/'.$manager->foto_manager }}" class="product-image rounded" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-12 col-sm-7">
                            {{-- <strong><h1 class="card-title">{{ $manager -> id_manager}}</h1></strong><br> --}}
                            <h4><b><i class="fas fa-user-tie mr-2"></i>Name</b></h4>
                            <p class="card-title float-none w-100">{{ $manager -> nama_manager }}</p>
                            <hr />
                            <h4><b><i class="fas fa-home mr-2"></i>Adress</b></h4>
                            <p class="card-title float-none w-100">{{ $manager -> alamat_manager }}</p>
                            <hr />
                            <h4><i class="fas fa-phone-alt mr-2"></i><b> telpon</b></h4>
                            <p class="card-title float-none w-100">{{ $manager -> no_tlp_manager }}</p>
                            <hr />
                            <h4><b><i class="fas fa-envelope mr-2"></i>E-mail</b></h4>
                            <p class="card-title float-none w-100">{{ $manager -> email_manager }}</p>
                            <hr/>
                            <div class=" text-right mt-4">
                                <a href="{{ url('/manager/edit').'/'.$manager->id_manager}}" class=" btn btn-success mr-3">
                                <i class="fas fa-user-edit "></i>Edit</a>

                                {{-- <form action="{{ $manager -> id_manager}}" method="post" class="d-inline mr-3">
                                    @method ('delete')
                                    @csrf
                                    <a href="{{ url('/manager/delete/'.$manager->id_manager)}}" class="btn btn-danger btnTable" 
                                    onClick="alertDelete()"><i class="fas fa-trash mr-2"></i>Delete</a>
                                </form> --}}
                                <button type="button" class="btn btn-danger ml-2" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-trash mr-2"></i>Delete</button>
                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete ?</h4>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <a href="{{ url('/manager/delete/'.$manager->id_manager)}}" class="btn btn-danger btnTable ml-3" >Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/manager')}}" class="card-link btn btn-info ml-3"><i class="far fa-arrow-alt-circle-left mr-2">
                                </i>back</a>
                            </div>

                            </div>
                        </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                </section>  
            </div>
        </div>
    </div> 
    
    <!-- Main content -->
    
    <!-- /.content -->
   
   
@endsection