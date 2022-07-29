@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{route('admin.invest')}}" method="get" style="margin-top: 2rem; padding-left: 1rem">
                @csrf
                <button type="submit" class="btn btn-primary" style="background-color: blue">Назад</button>
            </form>
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px;display: flex ">
                <form action="{{route('admin.invest.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <ul style="padding-top: 20px ">
                        <div style="display: flex; align-items: center;">
                            <li style="font-size: 14.5px;">
                                <label for="cars">Выберите идентификатор пользователя:</label>
                                <select name="user_id" id="cars" style="border-radius: 2rem">
                                    <option value="volvo">Имя пользователя</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}} {{$user->last_name}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li>
                                <div class="" style="width: 390px; padding-left: 5rem; padding-bottom: 1rem" >
                                    <label for="deposit">Аванс</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="deposit" name="deposit">
                                </div>
                            </li>
                        </div>
                        <div style="display: flex; align-items: center; padding-top: 1rem">
                            <li>
                                <div class="" style="width: 300px;" >
                                    <label for="deposit_date">Аванс дата</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="deposit_date" name="deposit_date">
                                </div>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem" >
                                    <label for="investment">Bклад </label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investment" name="investment">
                                </div>
                            </li>
                            <li>
                                <div class="" style="width: 400px; padding-left: 5rem" >
                                    <label for="investment_date">Bклад дата</label>
                                    <input type="text" style="border-radius: 1rem" class="form-control" id="investment_date" name="investment_date">
                                </div>
                            </li>
                        </div>
                        <div style="display: flex;">
                            <div class="" style="width: 300px; padding-top: 2rem" >
                                <label for="percentage">Доля в фонде</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="percentage" name="percentage">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="earnings">Доход</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings" name="earnings">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="earnings_date">Доход дата</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings_date" name="earnings_date">
                            </div>
                        </div>
                        <div style="display: flex">
                            <div class="" style="width: 300px; padding-top: 2rem;" >
                                <label for="earnings_percentage	">Доход Процент</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="earnings_percentage	" name="earnings_percentage">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="current_earning">Рыночная актива</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="current_earning" name="current_earning">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="revaluation_date">Дата переоценки</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="revaluation_date" name="revaluation_date">
                            </div>
                        </div>
                        <div style="display: flex">
                            <div class="" style="width: 300px; padding-top: 2rem;" >
                                <label for="end_date">Дней до закрытия фонда</label>
                                <input type="text" style="border-radius: 1rem" class="form-control" id="end_date	" name="end_date">
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="use_funds">Использование средств</label>
                                <input name="use_funds" type="file" style="border-radius: 1rem; border-radius: 1rem; background-color: rgb(188, 222, 250)" class="form-control" id="use_funds" >
                            </div>
                            <div class="" style="width: 400px; padding-top: 2rem; padding-left: 5rem" >
                                <label for="progress_report">Отчет о прогрессе</label>
                                <input name="progress_report" type="file" class="form-control" style="border-radius: 1rem; background-color: rgb(188, 222, 250)" class="form-control" id="progress_report" >
                            </div>
                            {{-- <div class="" style="width: 100%; padding-left: 5rem;" >
                                <label style="" for="photo">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" style="background-color: rgb(188, 222, 250);">
                            </div> --}}
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