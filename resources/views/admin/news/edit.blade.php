@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{route('admin.news')}}" method="get" style="margin-top: 2rem; padding-left: 1rem">
                @csrf
                <button type="submit" class="btn btn-primary" style="background-color: blue">Back</button>
            </form>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px;display: flex ">
                    <form action="{{route('admin.news.update', $news->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <ul style="padding-top: 20px ">
                            <div style="display: flex; align-items: center; padding-top: 1rem">
                                <li>
                                    <div class="" style="width: 300px;" >
                                        <label for="name">Name</label>
                                        <input type="text" style="border-radius: 1rem" class="form-control" id="name" name="name" value="{{$news->name}}">
                                    </div>
                                </li>
                                <li>
                                    <div class="" style="width: 100%; padding-left: 5rem;" >
                                        <label style="" for="photo">Photo</label>
                                        <input type="file" class="form-control" id="photo" name="photo" style="background-color: rgb(188, 222, 250);" >
                                    </div>
                                </li>
                            </div>
                            <div style="display: flex; margin-left: -1rem;">
                                <div class="container" style="padding-left: 0; ">
                                    <div class="row">
                                        <div class="col-md-7 offset-3 mt-4" style="margin-left: 0;">
                                            <div class="card-body" style="width: 46rem;">
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="description">{{$news->description}}"</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Сохранить</button>
                            </div>
                        </ul>
                    </form>
                </div>
        </div>
    </div>
</div>

@endsection