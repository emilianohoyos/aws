@extends('layout.app')
    @section('title')
        Gestor de archivos
    @endsection
        @section('container')
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                            <li class="breadcrumb-item"><a href="#">Apps</a></li>
                            <li class="breadcrumb-item active">Gestor Archivos S3</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Gestor Archivos S3</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <button type="button" class="btn btn-custom btn-rounded w-md waves-effect waves-light pull-right"><i class="mdi mdi-upload"></i> Upload Files</button>
                    <h4 class="header-title m-b-30">My Files</h4>

                    <div class="row">
                        @foreach ($contents as $content)

                            <div class="col-lg-3 col-xl-2">

                                <div class="file-man-box">
                                    <a href="#" onclick="eliminarDoc('{{ $content }}')" class="file-close task-delete"><i class="mdi mdi-close-circle"></i></a>
                                    <div class="file-img-box">
                                        <img src="highadmin/assets/images/file_icons/pdf.svg" alt="icon">
                                    </div>
                                     <form action="{{ route('gestor.download',['name'=>$content] )}}" method="POST">
                                       @csrf
                                        <button  class="file-download" type="submit">
                                            <i class="mdi mdi-download"></i>
                                        </button>
                                    </form>
                                    <div class="file-man-title">
                                        <h5 class="mb-0 text-overflow">{{ $content }}</h5>
                                        <p class="mb-0"><small>568.8 kb</small></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>

                    </div>

                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                    </div>

                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
        <script>
            function eliminarDoc(name){
                if (confirm("desea eliminar el registro?")) {
                $.ajax({
                    url:"{{ route('gestor.delete') }}",
                    data:{name,
                            _token:"{{ csrf_token() }}"},
                    type:'POST',
                    success:function(result){
                        console.log(result)
                        location.reload();
                    }
                })}
            }
        </script>
    @endsection
