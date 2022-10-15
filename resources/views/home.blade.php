@extends('layouts.main')

@section('container')
<div class="landing">
    <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-5 mt-5">
        @foreach($articles as $article)
            <div class="card mb-2 rounded shadow contents card" style="max-width: 540px;">
                <div class="row">
                    <div class="col-md-5 mt-1 mb-1 ml-1">
                        <img src="{{asset('img/'.$article->image)}}" class="card-img" style="height:150px"alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text"><small class="text-muted">{{date('d M Y',strtotime($article->created_at))}}</small></p>
                            <a href="{{route('article.detail',$article->id)}}" class="btn btn-secondary" >Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            {{$articles->render()}}
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection