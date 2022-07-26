@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <a href="{{Route('admin.news.create')}}" class="btn btn-success" style="margin-right: 0px; margin-bottom: 20px;">Добавить News</a>
            <div class="row">
                <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Description Uz</th>
                                <th>Description Ru</th>
                                <th>Description En</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num=1; ?>
                            @foreach($news as $item)
                                <tr>
                                    <td>{{$num++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td><img src="{{$item->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                                    <td>{{$item->description_uz}}</td>
                                    <td>{{$item->description_ru}}</td>
                                    <td>{{$item->description_en}}</td>
                                    <td>
                                        <form action="{{route('admin.news.edit', $item->id )}}" method="get" style="margin-bottom: 5px;">
                                            @csrf
                                            <button type="submit" class="btn btn-primary" style="background-color: blue">Изменить</button>
                                        </form>
                                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}">Удалить</a>
                                    </td>
                                    <div id="myModal{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.news.destroy', $item->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" style="background-color: blue">Удалить</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
