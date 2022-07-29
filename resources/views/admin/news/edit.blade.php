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
                                    <div class="" style="width: 28rem;" >
                                        <label for="name_uz">Имя UZ</label>
                                        <input type="text" style="border-radius: 1rem" class="form-control" id="name_uz" name="name_uz" value="{{$news->name_uz}}">
                                    </div>
                                </li>
                                <li>
                                    <div class="" style="width: 28rem; padding-left: 3%" >
                                        <label for="name_ru">Имя RU</label>
                                        <input type="text" style="border-radius: 1rem" class="form-control" id="name_ru" name="name_ru" value="{{$news->name_ru}}">
                                    </div>
                                </li>
                                <li>
                                    <div class="" style="width: 28rem; padding-left: 3%" >
                                        <label for="name_en">Имя EN</label>
                                        <input type="text" style="border-radius: 1rem" class="form-control" id="name_en" name="name_en" value="{{$news->name_en}}">
                                    </div>
                                </li>
                            </div>
                            <li>
                                <div class="" style="width: 91% ";>
                                    <label for="photo">Фото</label>
                                    <input type="file" class="form-control" id="photo" name="photo" style="background-color: rgb(188, 222, 250);">
                                </div>
                            </li>
                            <label for="description_uz" style="margin-top: 2rem; ">Описание Uz</label>
                            <div style="display: flex; margin-left: -1rem; margin-top: -2rem">
                                <div class="container" style="padding-left: 0; ">
                                    <div class="row">
                                        <div class="mt-4 col-md-7 offset-3" style="margin-left: 0;">
                                            <div class="card-body" style="width: 30rem;">
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="description_uz">{{$news->description_uz}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="padding-left: 0;  margin-top: -2rem ">
                                    <label for="description_uz" style="padding-top: 2.3rem; padding-left: 1rem;">Описание Ru</label>
                                    <div class="row">
                                        <div class="mt-4 col-md-7 offset-3" style="margin-left: 0;">
                                            <div class="card-body" style="width: 30rem; margin-top: -2.3rem;">                                        
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="description_ru">{{$news->description_ru}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="padding-left: 0;  margin-top: -2rem ">
                                    <label for="description_uz" style="padding-top: 2.3rem; padding-left: 1rem;">Описание En</label>
                                    <div class="row">
                                        <div class="mt-4 col-md-7 offset-3" style="margin-left: 0;">
                                            <div class="card-body" style="width: 30rem; margin-top: -2.3rem;">                                        
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="description_en">{{$news->description_en}}</textarea>
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