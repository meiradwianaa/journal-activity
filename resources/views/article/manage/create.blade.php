@extends('layouts.main')

@section('container')
<div class="landing">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get("success")}}
            </div>
        @endif
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-5  rounded shadow contents card mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="mb-4 mt-5 pt-2 text-center-sm">
                                <h1 class=""><b>Tambah Cerita</b></h1>
                            </div>
                            <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Masukkan Foto</label>
                                    <img class="img-preview img-fluid mb-1 col-sm-8" src="" alt="">
                                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="category">
                                        <option selected>Pilih Kategory</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelectGrid">Kategory</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="title">
                                    <label for="floatingInput">Judul</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" name="content"></textarea>
                                    <label for="floatingTextarea2">Cerita</label>
                                </div>
                                <input type="submit" value="Tambah Cerita" class="btn btn-primary mb-5" >
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
</div>
<script>
    function previewImage(){
        const image=document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
    
</script>
@endsection