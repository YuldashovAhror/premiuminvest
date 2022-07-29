@extends('layouts.admin')

@section('content')
  <div class="row">

    {{-- Flash Message for Adding Product Beginning --}}
    <div style="margin-bottom: 1rem;">
      @if (session()->has('employee'))
        <div
          style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
          class="alert alert-success">
          {{ session('employee') }}
        </div>
      @elseif (session()->has('employee-store'))
        <div
          style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
          class="alert alert-success">
          {{ session('employee-store') }}
        </div>
      @elseif(session()->has('employee-delete'))
        <div
          style="padding: .75rem; background: #e69a9a; color: #672727; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);"
          class="alert alert-danger">
          {{ session('employee-delete') }}
        </div>
      @endif
    </div>
    {{-- Flash Message for Adding Product End --}}

    <div class="col-lg-12">
      <div class="card">
        <a href="{{ Route('admin.employee.create') }}" class="btn btn-success"
          style="margin-right: 0px; margin-bottom: 20px;">Добавить Invests</a>
        <div class="row">
          <div class="card-body">
            <table id="datatable" class="table table-bordered dt-responsive nowrap"
              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                </tr>
                <tr>
                  <th>#</th>
                  <th>Name Uz</th>
                  <th>Name Ru</th>
                  <th>Name En</th>
                  <th>Type</th>
                  <th>Companies</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $num = 1; ?>
                @if(count($employees)>0)
                  @foreach ($employees as $employee)
                    <tr>
                      <td>{{ $num++ }}</td>
                      <td>{{ $employee->name_uz }}</td>
                      <td>{{ $employee->name_ru }}</td>
                      <td>{{ $employee->name_en }}</td>
                      <td>{{ $employee->type }}</td>
                      <td style="display: flex;">
                        @foreach ($employee->employeeCompany as $company)
                          <img src="/{{ $company->photo }}" alt=""
                            style="width: 50px; height: 50px; margin-right: 5px;">
                        @endforeach
                      </td>
                      <td>
                        <a href="{{ Route('admin.employee.edit', $employee->id) }}" class="btn btn-primary"
                          style="background-color: blue">Edit</a>
                        <a class="btn btn__delete btn-danger waves-effect waves-light">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


@if(count($employees)>0)
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
        <form action="{{Route('admin.employee.delete', $employee->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" style="color: #fff">Delete</button>
        </form>
      </div>

    </div>
  </div>
  {{-- Delete Confirm Modal End --}}
@endif
@endsection
