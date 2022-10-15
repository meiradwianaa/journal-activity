@extends('layouts.main')

@section('container')
<div class="landing">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-5  rounded shadow contents card mt-5 mb-5">
                    <h1 class="mt-5 ml-2">{{$articles->title}}</h1>
                    <p class="text-muted ml-2">{{$articles->category->name}}</p>
                    <p class="ml-2">{{date('d M Y',strtotime($articles->created_at))}}</p>
                    <img class="ml-2" src="{{asset('img/'.$articles->image)}}" width="200px">
                    <p class="mt-4 mb-5 ml-2">{{$articles->content}}</p>
                    <a href="/" class="btn btn-secondary active mb-5" role="button" aria-pressed="true">Kembali</a>
                </div>
                <div class="col-md-1"></div>
            </div>
</div>
@endsection