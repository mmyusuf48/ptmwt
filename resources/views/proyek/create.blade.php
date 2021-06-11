@extends('layout.main')

@section('title','proyek')

@section('container')


<div class="container">
    <div class="row">
        <div class="col ">
    <h1 class="mt-3"><i class="fas fa-tasks mr-3"></i>Data Proyek</h1>
    <hr class="bg-dark mb-5">
    <form method="post" action="{{ url('proyek/add')}}"  enctype="multipart/form-data">
         @csrf
                    <div class="form-group">
                        <label for="nama_proyek">nama proyek</label>
                        <input type="text" class="form-control @error ('nama_proyek') is-invalid @enderror" 
                        id="nama_proyek" placeholder="Masukan nama " name="nama_proyek" value="{{old('nama_proyek')}}">
                    @error('nama_proyek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                <div class="container">
                    <div class="col-md-8"> 
                    <div class="form-group col-md-6">
                        <label for="tanggal_mulai">tanggal mulai</label>
                        <input type="date" class="form-control @error ('tanggal_mulai') is-invalid @enderror" 
                        id="tanggal_mulai" placeholder="tanggal mulai " name="tanggal_mulai"
                        value="{{old('tanggal_mulai')}}">
                    @error('tanggal_mulai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_berakhir">tanggal berakhir</label>
                        <input type="date" class="form-control @error ('tanggal_berakhir') is-invalid @enderror" 
                        id="tanggal_berakhir" placeholder="tanggal berakhir " name="tanggal_berakhir"
                        value="{{old('tanggal_berakhir')}}">
                    @error('tanggal_berakhir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                </div>
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