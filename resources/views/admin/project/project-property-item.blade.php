@extends('layouts.admin')

@section('content')
    {{-- @dd($project_properties[0]) --}}

        <div class="modal fade bs-example-modal-center" tabindex="-1" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Добавить</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ Route('admin.project-property-item.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <label for="" class="form-label">Выберите project_property_id</label>
                                <select name="project_property_id" id="" class="form-control">
                                    @foreach($project_properties as $project_property)
                                        <option value="{{ $project_property->id }}">{{ $project_property->name_uz }}</option>
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
                                        <th>Project Property Item</th>
                                        <th>Name RU</th>
                                        <th>Name UZ</th>
                                        <th>Name EN</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $k=1 ?>
                                @foreach($projects_property_items as $project_property_item)
                                    <tr>
                                        <th scope="row">{{ $k }}</th>
                                        <td>{{ $project_property_item->project_property->name_uz }}</td>
                                        <td>{{ $project_property_item->name_ru }}</td>
                                        <td>{{ $project_property_item->name_uz }}</td>
                                        <td>{{ $project_property_item->name_en }}</td>
                                        <td>
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $project_property_item->id }}Edit">Edit</button>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center{{ $project_property_item->id }}Delete">Delete</button>

                                            <div class="modal fade bs-example-modal-center{{ $project_property_item->id }}Edit" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ Route('admin.project-property-item.update', $project_property_item->id) }}" method="post">
                                                                @csrf
                                                                {{ method_field('put') }}
                                                                <div class="row">
                                                                    <label for="" class="form-label">Выберите project</label>
                                                                    <select name="project_property_id" id="" class="form-control">
                                                                        @foreach($project_properties as $project_property)
                                                                            <option @if($project_property->id == $project_property_item->project_property->id) selected @endif value="{{ $project_property->id }}">{{ $project_property->name_uz }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <label for="" class="form-label">Название RU</label>
                                                                    <input type="text" class="form-control" name="name_ru" value="{{ $project_property_item->name_ru }}">
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <label for="" class="form-label">Название UZ</label>
                                                                    <input type="text" class="form-control" name="name_uz" value="{{ $project_property_item->name_uz }}">
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <label for="" class="form-label">Название EN</label>
                                                                    <input type="text" class="form-control" name="name_en" value="{{ $project_property_item->name_en }}">
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <button type="submit" class="btn btn-success">Сохранить</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade bs-example-modal-center{{ $project_property_item->id }}Delete" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Удалить</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ Route('admin.project-property-item.destroy', $project_property_item->id) }}" method="post">
                                                                @csrf
                                                                {{ method_field('delete') }}
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <button class="btn btn-primary">Да</button>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button class="btn btn-outline-primary" data-bs-dismiss="modal" aria-label="Close">Нет</button>
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
