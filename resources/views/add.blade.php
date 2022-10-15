@extends('layouts.main')

@section('container')
<div class="landing">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-5  rounded shadow contents card mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8 ">
                            <div class="mb-4 mt-5 pt-2 text-center-sm">
                                <h1 class=""><b>Tambah Cerita</b></h1>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Masukkan Foto</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Judul</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Cerita</label>
                            </div>
                            <input type="submit" value="Tambah Cerita" class="btn btn-primary mb-5" >
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
</div>
@endsection