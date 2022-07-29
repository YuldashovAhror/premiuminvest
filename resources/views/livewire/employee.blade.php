<div>
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
            <input wire:model="a" type="text" value="{{$a}}">
            {{$a}}
            <a wire:click="add()" href="{{ Route('admin.employee.edit', $employee->id) }}" class="btn btn-primary" style="background-color: blue">Edit</a>
            <a wire:click="deleteModal({{$employee->id}})" class="btn btn__delete btn-danger waves-effect waves-light">{{$employee->id}} Delete</a>
          </td>
        </tr>
      @endforeach
    @endif


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
          <button class="btn btn-danger" style="color: #fff">{{$employeeId}} Delete</button>
        </form>
      </div>

    </div>
  </div>
  {{-- Delete Confirm Modal End --}}
@endif
</div>
