<div>
  <div class="row">

    <div class="col-lg-6">
      <label class="form-label">Create Company</label>
      <div style="display: flex;">
        <div class="col-9 mr-3">
          <label class="visually-hidden" for="specificSizeInputName">Name</label>
          <input wire:model="photo" type="file" class="form-control" id="specificSizeInputName" placeholder="Enter Name">
        </div>
        <div class="col-3">
          <div wire:click="addCompany" class="btn btn-primary">Submit</div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="mb-0">
        <label class="form-label">Select Companies</label>
        <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
            @foreach($companoise as $company)
              <option value="{{$company->id}}">1</option>
            @endforeach
          {{-- <option value="AK">Alaska</option> --}}
            {{-- <option value="HI">Hawaii</option> --}}
        </select>
      </div>
    </div>
  </div>
</div>
