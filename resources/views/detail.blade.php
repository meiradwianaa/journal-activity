@extends('layouts.main')

@section('container')
<div class="landing">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-5  rounded shadow contents card mt-5 mb-5">
                    <h1>Judul</h1>
                    <div class="row">
                        <div class="col-sm-9">
                            <a href="/" class="btn btn-secondary" >Kembali</a>
                        </div>
                        <div class="col-sm-1">
                            <a href="#" class="btn btn-primary" ><img class="logo-button" src={{ asset("./img/pen.png") }}></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-danger" ><img class="logo-button" src={{ asset("./img/trash.png") }}></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-1"></div>
            </div>
</div>
@endsection