@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <form action="{{ route('admin.employee.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <a href="{{ route('admin.invest') }}" class="btn btn-primary"
              style="background-color: blue; margin-bottom: 10px;">Назад</a>
            <div style="display: flex;">
              <div style="width: 50%;">
                <div style="width: 100%;" class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="type" class="form-label">Тип</label>
                      <select name="type" id="type" class="form-control select2">
                        <option value="{{ null }}">Select</option>
                        <option value="1">Тип 1</option>
                        <option value="2">Тип 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="name_uz" class="form-label" for="formrow-email-input">Имя Uz</label>
                      <input name="name_uz" type="text" id="name_uz" class="form-control" id="formrow-email-input">
                    </div>
                  </div>
                </div>
                <div style="width: 100%;" class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="name_ru" class="form-label" for="formrow-password-input">Имя Ru</label>
                      <input name="name_ru" id="name_ru" type="text" class="form-control" id="formrow-password-input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="name_en" class="form-label" for="formrow-password-input">Имя En</label>
                      <input name="name_en" id="name_en" type="text" class="form-control" id="formrow-password-input">
                    </div>
                  </div>
                </div>
              </div>
              <div style="width: 50%;">
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-label">Компания</label>
                    <div style="display: flex;">
                      <div class="mr-3 col-9">
                        <label class="visually-hidden" for="specificSizeInputName">Имя</label>
                        <input name="companies[]" multiple type="file" class="form-control" id="specificSizeInputName"
                          placeholder="Enter Name">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary"
              style="margin: 10px 10px 0 20px; background-color: blue">Сохранить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
