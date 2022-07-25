@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{route('admin.project')}}" method="get" style="margin-top: 2rem; padding-left: 1rem">
                @csrf
                <button type="submit" class="btn btn-primary" style="background-color: blue">Back</button>
            </form>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px;display: flex ">
                    <form action="{{route('admin.project.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <ul style="padding-top: 20px ">
                            <div style="display: flex; align-items: center; padding-top: 1rem">
                                <li>
                                    <div class="" style="width: 300px;" >
                                        <label for="name">Name</label>
                                        <input type="text" style="border-radius: 1rem" class="form-control" id="name" name="name">
                                    </div>
                                </li>
                                <li>
                                    <div class="" style="width: 100%; padding-left: 5rem;" >
                                        <label style="" for="photo">Photo</label>
                                        <input type="file" class="form-control" id="photo" name="photo" style="background-color: rgb(188, 222, 250);">
                                    </div>
                                </li>
                                <li>
                                    <div class="" style="width: 400px; padding-left: 5rem" >
                                        <label for="less_description">Less Description</label>
                                        <input type="text" style="border-radius: 1rem" class="form-control" id="less_description" name="less_description">
                                    </div>
                                </li>
                            </div>
                            <div style="display: flex;">
                                <div class="" style="width: 300px; padding-top: 2rem" >
                                    <label for="investing_uz">Investing Uz</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investing_uz" name="investing_uz">
                                </div>
                                <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                    <label for="investing_ru">Investing En</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investing_ru" name="investing_ru">
                                </div>
                                <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                    <label for="investing_en">Investing Ru</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investing_en" name="investing_en">
                                </div>
                            </div>
                            <div style="display: flex">
                                <div class="" style="width: 300px; padding-top: 2rem;" >
                                    <label for="description	">Description</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="description	" name="description">
                                </div>
                                <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                    <label for="roi">ROI</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="roi" name="roi">
                                </div>
                                <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                    <label for="profit">Profit</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="profit" name="profit">
                                </div>
                            </div>
                            <div style="display: flex; margin-left: -1rem;">
                                <div class="container" style="padding-left: 0; ">
                                    <div class="row">
                                        <div class="col-md-7 offset-3 mt-4" style="margin-left: 0;">
                                            <div class="card-body" style="width: 30.5rem;">
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="area"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container" style="margin-left: 7.5rem;">
                                    <div class="row">
                                        <div class="col-md-7 offset-3 mt-4" style="margin-left: 0;">
                                            <div class="card-body" style="width: 30.5rem;">
                                                <div class="form-group">
                                                    <textarea class="ckeditor form-control" name="realizable_area"></textarea>
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