@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{route('admin.invest')}}" method="get" style="margin-top: 2rem; padding-left: 1rem">
                @csrf
                <button type="submit" class="btn btn-primary" style="background-color: blue">Back</button>
            </form>
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px;display: flex ">
                <form action="{{route('admin.invest.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul style="padding-top: 20px ">
                        <div style="display: flex; align-items: center;">
                            <li style="font-size: 14.5px;">
                                <label for="cars">Choose User Id:</label>
                                <select name="user_id" id="cars" style="border-radius: 2rem">
                                    <option value="volvo">User name</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem; padding-bottom: 1rem" >
                                    <label for="deposit">Deposit</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="deposit" name="deposit">
                                </div>
                            </li>
                        </div>
                        <div style="display: flex; align-items: center; padding-top: 1rem">
                            <li>
                                <div class="" style="width: 300px;" >
                                    <label for="deposit_date">Deposit date</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="deposit_date" name="deposit_date">
                                </div>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem" >
                                    <label for="investment">Investment </label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investment" name="investment">
                                </div>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem" >
                                    <label for="investment_date">Investment date</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investment_date" name="investment_date">
                                </div>
                            </li>
                        </div>
                        <div style="display: flex;">
                            <div class="" style="width: 300px; padding-top: 2rem" >
                                <label for="percentage">Percentage</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="percentage" name="percentage">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="earnings">Earnings</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings" name="earnings">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="earnings_date">Earnings date</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings_date" name="earnings_date">
                            </div>
                        </div>
                        <div style="display: flex">
                            <div class="" style="width: 300px; padding-top: 2rem;" >
                                <label for="earnings_percentage	">Earnings percentage</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings_percentage	" name="earnings_percentage">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="current_earning">Current earning</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="current_earning" name="current_earning">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="revaluation_date">Revaluation date</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="revaluation_date" name="revaluation_date">
                            </div>
                        </div>
                        <div style="display: flex">
                            <div class="" style="width: 300px; padding-top: 2rem;" >
                                <label for="end_date	">End date</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="end_date	" name="end_date">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="use_funds">Use funds</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="use_funds" name="use_funds">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="progress_report">Progress report</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="progress_report" name="progress_report">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px; background-color: blue">Сохранить</button>
                        </div>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection