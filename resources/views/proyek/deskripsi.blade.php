@extends('layout.main')

@section('title','proyek')

@section('container')

<div class="container">
    <div class="row">
        <div class="col ">
            <h1><i class="fas fa-tasks mr-3 mt-5"></i>Data Proyek</h1>
            <hr class="bg-dark">
            <h4><b>nama proyek</b></h4>
            {{-- <a class="card-title float-none w-100">{{ $proyek -> nama_proyek }}</a>s --}}
            <p class="card-title float-none w-100">
                <i class="fas fa-caret-right "><b class="ml-3">{{ $proyek -> nama_proyek }}</b></i>
            </p>
            <br/>
            <h4><b>tanggal mulai</b></h4>
            <p class="card-title float-none w-100">
                <i class="fas fa-caret-right "><b class="ml-3">{{ $proyek -> tanggal_mulai }}</b></i>
            </p>
            <br/>
            <h4><b>tanggal berakhir</b></h4>
            <p class="card-title float-none w-100">
                <i class="fas fa-caret-right "><b class="ml-3">{{ $proyek -> tanggal_berakhir }}</b></i>
            </p>
            <hr />
            <form method="post" action="{{ url('proyek/store')}}"  enctype="multipart/form-data">
            @csrf
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
                <input type="hidden" value="{{$proyek -> id_proyek}}" name="id_proyek">
                <div class="form-outline mb-4">
                <label class="form-label" for="dataproyek">Deskripsi Proyek</label>
                    <div id="handleAddForm" class="w-100">
                        <input type="text" id="dataproyek" data-index="1" class="form-control mb-3" 
                        placeholder="deskripsi proyek" name="dataproyek[]">
                    </div>
                    <button type="button" class="btn btn-danger mt-1" onClick="removeForm()">
                        <i class="fas fa-minus-square"></i></button>
                    <button type="button" class="btn btn-primary mt-1" onClick="addForm()">
                        <i class="fas fa-plus-square"></i></button>
                </div>
                <div class="text-right">
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
                </div>
            </form>
        </div>
    </div>
</div>    

@endsection

@section('js')
    <script>
        var formAdd = 1;

        function addForm(){
            formAdd = formAdd+1;
            $("#handleAddForm").append('<input type="text" id="dataproyek" data-index="'+formAdd+'" class="form-control mb-3" placeholder="deskripsi proyek" name="dataproyek[]">')
        }

        function removeForm(){
            if(formAdd > 1){
                $("input[data-index='"+formAdd+"']").remove();
                formAdd = formAdd-1;
            }
        }
    </script>
@endsection