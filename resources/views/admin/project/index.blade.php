@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <a href="{{Route('admin.project.create')}}" class="btn btn-success" style="margin-right: 0px; margin-bottom: 20px;">Добавить Project</a>
            <div class="row">
                <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Фото</th>
                                <th>Меньше_описания UZ</th>
                                <th>Меньше_описания RU</th>
                                <th>Меньше_описания EN</th>
                                <th>Описания UZ</th>
                                <th>Описания RU</th>
                                <th>Описания EN</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num=1; ?>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$num++}}</td>
                                    <td>{{$project->name}}</td>
                                    <td><img src="{{$project->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                                    <td>{{$project->less_description_uz}}</td>
                                    <td>{{$project->less_description_ru}}</td>
                                    <td>{{$project->less_description_en}}</td>
                                    <td>{{$project->description_uz}}</td>
                                    <td>{{$project->description_ru}}</td>
                                    <td>{{$project->description_en}}</td>
                                    <td>
                                        
                                            <form action="{{route('admin.project.edit', $project->id )}}" method="get" style="margin-bottom: 5px;">
                                                @csrf
                                                <button type="submit" class="btn btn-primary" style="background-color: blue">Изменить</button>
                                            </form>
                                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $project->id }}">Удалить</a>
                                    </td>
                                    <div id="myModal{{ $project->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Вы уверены, что хотите удалить?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.project.destroy', $project->id)}}" method="POST">
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
