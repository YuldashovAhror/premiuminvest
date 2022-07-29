@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{route('admin.project')}}" method="get" style="margin-top: 2rem; padding-left: 1rem">
                @csrf
                <button type="submit" class="btn btn-primary" style="background-color: blue">Назад</button>
            </form>
            <div>
                <form action="{{Route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Фото</label>
                                    <input type="file" name="photo" class="form-control" style="color: rgb(27, 59, 221)">
                                </div>
                            </div>
                            <div class="mt-4 row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Имя</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Меньше_описания UZ</label>
                                    <input type="text" class="form-control" name="less_description_uz">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Меньше_описания RU</label>
                                    <input type="text" class="form-control" name="less_description_ru">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Меньше_описания EN</label>
                                    <input type="text" class="form-control" name="less_description_en">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Описания UZ</label>
                                    <input type="text" class="form-control" name="description_uz">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Описания RU</label>
                                    <input type="text" class="form-control" name="description_ru">
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Описания EN</label>
                                    <input type="text" class="form-control" name="description_en">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Дата_от_до</label>
                                    <input type="text" class="form-control" name="date_from_to">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Прибыль</label>
                                    <input type="text" class="form-control" name="profit">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Roi</label>
                                    <input type="text" class="form-control" name="roi">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Рентабельность</label>
                                    <input type="text" class="form-control" name="profitability">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Количество квартир</label>
                                    <input type="text" class="form-control" name="apart_qty">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Этажность</label>
                                    <input type="text" class="form-control" name="floors">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Площадь квартир</label>
                                    <input type="text" class="form-control" name="apart_size">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Площадь ком. помещений</label>
                                    <input type="text" class="form-control" name="commerce_size">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Доходы тыс $</label>
                                    <input type="text" class="form-control" name="fin_income">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">В т.ч. Земля</label>
                                    <input type="text" class="form-control" name="fin_earth">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">СМР</label>
                                    <input type="text" class="form-control" name="fin_cmr">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Накладные (ПИР, реализация, админ, резерв)</label>
                                    <input type="text" class="form-control" name="fin_overhead">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Прибыль (до налога)</label>
                                    <input type="text" class="form-control" name="fin_profit_before_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Рентабельность (до налога)</label>
                                    <input type="text" class="form-control" name="fin_profitability_before_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Прибыль (после налога)</label>
                                    <input type="text" class="form-control" name="fin_profit_after_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Рентабельность (после налога)</label>
                                    <input type="text" class="form-control" name="fin_profitability_after_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Инвестиции</label>
                                    <input type="text" class="form-control" name="fin_investments">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">ROI (до налога)</label>
                                    <input type="text" class="form-control" name="fin_roi_before_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">ROI (после налога)</label>
                                    <input type="text" class="form-control" name="fin_roi_after_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Земельный участок, м2</label>
                                    <input type="text" class="form-control" name="fin_land_plot">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Дата окончания</label>
                                    <input type="text" class="form-control" name="end_date">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Область</label>
                                    <input type="text" class="form-control" name="area">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Реализуемая_область</label>
                                    <input type="text" class="form-control" name="realizable_area">
                                </div>
                                
                            </div>
                            <div class="col-md-3" style="margin-top:28px">
                                <button class="btn btn-success" wire:click='store()'>сохранить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>

@endsection