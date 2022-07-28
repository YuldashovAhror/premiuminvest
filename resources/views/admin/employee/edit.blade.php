@extends('layouts.admin')

@section('content')
  <div class="row">
    {{-- Flash Message for Adding Product Beginning --}}
    <div style="margin-bottom: 1rem;">
      @if (session()->has('delete-img'))
        <div
          style="padding: .75rem; background: #e69a9a; color: #672727; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
          class="alert alert-danger">
          {{ session('delete-img') }}
        </div>
      @endif
    </div>
    {{-- Flash Message for Adding Product End --}}

    <div class="col-lg-12">
      <div class="card">
        <form action="{{ route('admin.employee.update', $employee->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <a href="{{ route('admin.invest') }}" class="btn btn-primary"
              style="background-color: blue; margin-bottom: 10px;">Back</a>
            <div style="display: flex;">
              <div style="width: 50%;">
                <div style="width: 100%;" class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <select name="type" id="type" class="form-control select2">
                        <option value="{{ null }}">Select</option>
                        <option @if ($employee->type == 1) selected @endif value="1">Type 1</option>
                        <option @if ($employee->type == 2) selected @endif value="2">Type 2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="name_uz" class="form-label" for="formrow-email-input">Name Uz</label>
                      <input value="{{ $employee->name_uz }}" name="name_uz" type="text" id="name_uz"
                        class="form-control" id="formrow-email-input">
                    </div>
                  </div>
                </div>
                <div style="width: 100%;" class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="name_ru" class="form-label" for="formrow-password-input">Name Ru</label>
                      <input value="{{ $employee->name_ru }}" name="name_ru" id="name_ru" type="text"
                        class="form-control" id="formrow-password-input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="name_en" class="form-label" for="formrow-password-input">Name En</label>
                      <input value="{{ $employee->name_en }}" name="name_en" id="name_en" type="text"
                        class="form-control" id="formrow-password-input">
                    </div>
                  </div>
                </div>
              </div>
              <div style="width: 50%;">
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-label">Company</label>
                    <div style="display: flex;">
                      <div class="col-9 mr-3">
                        <label class="visually-hidden" for="specificSizeInputName">Name</label>

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

        <div class="card-body">
          <div style="margin-bottom: 10px; display: flex;">
            @foreach ($employee->employeeCompany as $company)
              <div>
                {{-- <a class="uil-trash" style="cursor: pointer;"></a> --}}

                <a class="uil-trash btn__delete" style="cursor: pointer;"></a>

                <img src="/{{ $company->photo }}" alt="img" style="width: 50px; height: 50px; margin-right: 5px;">
              </div>

              {{-- Delete Confirm Modal Beginning --}}
              <div class="popup__confirm"
                style="
                  display:none; position: fixed; 
                  top: 50%; left: 50%; transform: translate(-50%, -50%); 
                  background-color:#ffffff; width: 500px; height: auto; 
                  z-index:999; 
                  border-radius: 10px;
                  box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.5);
                  ">
                <div class="card-body">
                  <div style="margin: 1rem 0">
                    Do you really want to delete this?
                  </div>
                  <div style="display: flex; justify-content: space-between;">
                    <button class="btn btn-primary btn__close" style="color: #fff">Close</button>
                    <form action="{{ Route('admin.delete.company_img', $company->id) }}" method="POST"
                      style="margin: 0;">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger" style="color: #fff">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
              {{-- Delete Confirm Modal End --}}
            @endforeach
          </div>
        </div>


      </div>
    </div>
  </div>
@endsection


<script>
  $('.btn__delete').click(function(event) {
    console.log('asdasdasdasd');
    event.preventDefault();
    $('.popup__confirm').fadeIn();
  })
  $('.btn__close').click(function(event) {
    event.preventDefault();
    $('.popup__confirm').fadeOut();
  })
</script>
