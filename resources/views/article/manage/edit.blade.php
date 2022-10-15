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
                                <h1 class=""><b>Edit Cerita</b></h1>
                            </div>
                            <form method="POST" action="{{route('article.update',$articles->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Masukkan Foto</label>
                                    <img  class="mb-1" src="{{asset('img/'.$articles->image)}}" alt="" style="width: 300px;">
                                    <input class="form-control" type="file" id="formFile" name="image" >

                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="category">
                                        <option selected>Pilih Kategory</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if(old('category',$articles->category_id)==$category->id) selected="selected" @endif>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelectGrid">Kategory</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="title" value="{{old('title',$articles->title)}}">
                                    <label for="floatingInput">Judul</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 100px" name="content">{{old('content',$articles->content)}}</textarea>
                                    <label for="floatingTextarea2">Cerita</label>
                                </div>
                                <input type="submit" value="Edit Cerita" class="btn btn-primary mb-5" href="/manage/article" >
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
</div>
@endsection