@extends('layouts.admin')

@section('content')
    <div class="modal fade bs-example-modal-center" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Добавить</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('admin.project-property.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <label for="" class="form-label">Выберите project_property_id</label>
                            <select name="project_id" id="" class="form-control">
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="form-label">Название RU</label>
                            <input type="text" class="form-control" name="name_ru">
                        </div>
                        <div class="row mt-2">
                            <label for="" class="form-label">Название UZ</label>
                            <input type="text" class="form-control" name="name_uz">
                        </div>
                        <div class="row mt-2">
                            <label for="" class="form-label">Название EN</label>
                            <input type="text" class="form-control" name="name_en">
                        </div>
                        <div class="row mt-2">
                            <button class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <div class="offset-3 col-md-6">
                                <div class="row">
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Добавить</button>
                                </div>
                            </div>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap mt-2" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Project</th>
                                <th>Name RU</th>
                                <th>Name UZ</th>
                                <th>Name EN</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $k=1 ?>
                            @foreach($projects_property as $project_property)
                                <tr>
                                    <th scope="row">{{ $k }}</th>
                                    <td>@if(isset($project_property->project->name)){{ $project_property->project->name }}@endif</td>
                                    <td>{{ $project_property->name_ru }}</td>
                                    <td>{{ $project_property->name_uz }}</td>
                                    <td>{{ $project_property->name_en }}</td>
                                    <td>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $project_property->id }}Edit"><i class="bx bx-pencil"></i></button>
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $project_property->id }}Delete"><i class="bx bx-trash"></i></button>

                                        <div class="modal fade bs-example-modal-center{{ $project_property->id }}Edit" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Добавить</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ Route('admin.project-property.update', $project_property->id) }}" method="post">
                                                            @csrf
                                                            {{ method_field('put') }}
                                                            <div class="row">
                                                                <label for="" class="form-label">Выберите project</label>
                                                                <select name="project_id" id="" class="form-control">
                                                                    @foreach($projects as $project)
                                                                        <option value="{{ $project->id }}" @if($project->id == $project_property->id) selected @endif>{{ $project->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <label for="" class="form-label">Название RU</label>
                                                                <input type="text" class="form-control" name="name_ru" value="{{ $project_property->name_ru }}">
                                                            </div>
                                                            <div class="row mt-2">
                                                                <label for="" class="form-label">Название UZ</label>
                                                                <input type="text" class="form-control" name="name_uz" value="{{ $project_property->name_uz }}">
                                                            </div>
                                                            <div class="row mt-2">
                                                                <label for="" class="form-label">Название EN</label>
                                                                <input type="text" class="form-control" name="name_en" value="{{ $project_property->name_en }}">
                                                            </div>
                                                            <div class="row mt-2">
                                                                <button class="btn btn-success">Сохранить</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                        <div class="modal fade bs-example-modal-center{{ $project_property->id }}Delete" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Удалить</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ Route('admin.project-property.destroy', $project_property->id) }}" method="post">
                                                            @csrf
                                                            {{ method_field('delete') }}
                                                            <div class="row">
                                                                <div class="col-md-6 text-center">
                                                                    <button class="btn btn-primary">Да</button>
                                                                </div>
                                                                <div class="col-md-6 text-center">
                                                                    <button class="btn btn-outline-primary text-center" data-bs-dismiss="modal" aria-label="Close">Нет</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                    </td>
                                </tr>
                                <?php $k++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
