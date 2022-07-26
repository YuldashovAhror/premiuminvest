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
                <form action="{{route('admin.invest.update',$invests->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul style="padding-top: 20px ">
                        <div style="display: flex; align-items: center;">
                            <li style="font-size: 14.5px;">
                                <label for="cars">Choose User Id:</label>
                                <select id="cars" style="border-radius: 2rem">
                                    <option value="volvo">User name</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem; padding-bottom: 1rem" >
                                    <label for="deposit">Аванс</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="deposit" name="deposit" value="{{$invests->deposit}}">
                                </div>
                            </li>
                        </div>
                        <div style="display: flex; align-items: center; padding-top: 1rem">
                            <li>
                                <div class="" style="width: 300px;" >
                                    <label for="deposit_date">Аванс дата</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="deposit_date" name="deposit_date" value="{{$invests->deposit_date}}">
                                </div>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem" >
                                    <label for="investment">Bклад </label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investment" name="investment" value="{{$invests->investment}}">
                                </div>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem" >
                                    <label for="investment_date">Bклад дата</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investment_date" name="investment_date" value="{{$invests->investment_date}}">
                                </div>
                            </li>
                        </div>
                        <div style="display: flex;">
                            <div class="" style="width: 300px; padding-top: 2rem" >
                                <label for="percentage">Доля в фонде</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="percentage" name="percentage" value="{{$invests->percentage}}">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="earnings">Доход</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings" name="earnings" value="{{$invests->earnings}}">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="earnings_date">Доход дата</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings_date" name="earnings_date" value="{{$invests->earnings_date}}">
                            </div>
                        </div>
                        <div style="display: flex">
                            <div class="" style="width: 300px; padding-top: 2rem;" >
                                <label for="earnings_percentage	">Доход Процент</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings_percentage	" name="earnings_percentage" value="{{$invests->earnings_percentage}}">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="current_earning">Рыночная актива</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="current_earning" name="current_earning" value="{{$invests->current_earning}}">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="revaluation_date">Дата переоценки</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="revaluation_date" name="revaluation_date" value="{{$invests->revaluation_date}}">
                            </div>
                        </div>
                        <div style="display: flex">
                            <div class="" style="width: 300px; padding-top: 2rem;" >
                                <label for="end_date">Дней до закрытия фонда</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="end_date	" name="end_date" value="{{$invests->end_date}}">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="use_funds">Использование средств</label>
                                <input type="file" style="border-radius: 1rem; border-radius: 1rem; background-color: rgb(188, 222, 250)" class="form-control" id="use_funds" name="use_funds" value="{{$invests->use_funds}}">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="progress_report">Отчет о прогрессе</label>
                                <input type="file" class="form-control" style="border-radius: 1rem; background-color: rgb(188, 222, 250)" class="form-control" id="progress_report" name="progress_report">
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