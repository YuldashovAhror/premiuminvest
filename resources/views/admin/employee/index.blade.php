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
                @if (count($employees) > 0)
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
                        <td style="">
                          <a href="{{ Route('admin.employee.edit', $employee->id) }}" class="btn btn-primary"
                            style="background-color: blue; margin-right: 10px;">Edit</a>
                          <form action="{{ Route('admin.employee.delete', $employee->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="color: #fff">Delete</button>
                          </form>
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

@endsection
