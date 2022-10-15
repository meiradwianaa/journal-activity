@extends('layouts.main')

@section('container')
    @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get("success")}}
                </div>
            @endif
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="d-flex mt-5">
                <div class="p-2"><h1 class="mt-4 d-inline">Manajemen Journal</h4></div>
                <div class="ml-auto p-2"><a class="btn btn-primary d-inline-end" href="/article/create" role="button">Tambah Journal&emsp;+</a></div>
            </div>
            
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Cerita</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <body>
                    @foreach($articles as $index=>$article)
                    <tr>
                        <td scope="row">{{$index+1}}</td>
                        <td scope="row"><img src="{{asset('img/'.$article->image)}}" alt="" style="height: 180px;"></td>
                        <td scope="row">{{$article->title}}</td>
                        <td scope="row">{{$article->category->name}}</td>
                        <td scope="row">{{ Str::limit($article->content,115)}}</td>
                        <td scope="row"><a href="{{route('article.detail',$article->id)}}" class="btn btn-primary btn-sm">Detail</a></td>
                        <td scope="row"><a href="{{route('article.edit',$article->id)}}" class="btn btn-secondary btn-sm">Edit</a></td>
                        <td scope="row"><a href="{{route('article.delete',$article->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    @endforeach
                </body>
            </table>
            {{$articles->render()}}
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection