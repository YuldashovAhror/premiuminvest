@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{route('admin.project')}}" method="get" style="margin-top: 2rem; padding-left: 1rem">
                @csrf
                <button type="submit" class="btn btn-primary" style="background-color: blue">Back</button>
            </form>
            <div>
                <form action="{{Route('admin.project.update', $project->id)}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Photo</label>
                                    <input type="file" name="photo" class="form-control" style="color: rgb(27, 59, 221)">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$project->name}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Less_description UZ</label>
                                    <input type="text" class="form-control" name="less_description_uz" value="{{$project->less_description_uz}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Less_description RU</label>
                                    <input type="text" class="form-control" name="less_description_ru" value="{{$project->less_description_ru}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Less_description EN</label>
                                    <input type="text" class="form-control" name="less_description_en" value="{{$project->less_description_en}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Description UZ</label>
                                    <input type="text" class="form-control" name="description_uz" value="{{$project->description_uz}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Description RU</label>
                                    <input type="text" class="form-control" name="description_ru" value="{{$project->description_ru}}">
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Description EN</label>
                                    <input type="text" class="form-control" name="description_en" value="{{$project->description_en}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Date_from_to</label>
                                    <input type="text" class="form-control" name="date_from_to" value="{{$project->date_from_to}}"> 
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Прибыль</label>
                                    <input type="text" class="form-control" name="profit" value="{{$project->profit}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Roi</label>
                                    <input type="text" class="form-control" name="roi" value="{{$project->roi}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Рентабельность</label>
                                    <input type="text" class="form-control" name="profitability" value="{{$project->profitability}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Количество квартир</label>
                                    <input type="text" class="form-control" name="apart_qty" value="{{$project->apart_qty}}">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Этажность</label>
                                    <input type="text" class="form-control" name="floors" value="{{$project->floors}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Площадь квартир</label>
                                    <input type="text" class="form-control" name="apart_size" value="{{$project->apart_size}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Площадь ком. помещений</label>
                                    <input type="text" class="form-control" name="commerce_size" value="{{$project->commerce_size}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Доходы тыс $</label>
                                    <input type="text" class="form-control" name="fin_income" value="{{$project->fin_income}}"> 
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">В т.ч. Земля</label>
                                    <input type="text" class="form-control" name="fin_earth" value="{{$project->fin_earth}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">СМР</label>
                                    <input type="text" class="form-control" name="fin_cmr" value="{{$project->fin_cmr}}">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Накладные (ПИР, реализация, админ, резерв)</label>
                                    <input type="text" class="form-control" name="fin_overhead" value="{{$project->fin_overhead}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Прибыль (до налога)</label>
                                    <input type="text" class="form-control" name="fin_profit_before_tax" value="{{$project->fin_profit_before_tax}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Рентабельность (до налога)</label>
                                    <input type="text" class="form-control" name="fin_profitability_before_tax" value="{{$project->fin_profitability_before_tax}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Прибыль (после налога)</label>
                                    <input type="text" class="form-control" name="fin_profit_after_tax" value="{{$project->fin_profit_after_tax}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Рентабельность (после налога)</label>
                                    <input type="text" class="form-control" name="fin_profitability_after_tax" value="{{$project->fin_profitability_after_tax}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Инвестиции</label>
                                    <input type="text" class="form-control" name="fin_investments" value="{{$project->fin_investments}}">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">ROI (до налога)</label>
                                    <input type="text" class="form-control" name="fin_roi_before_tax" value="{{$project->fin_roi_before_tax}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">ROI (после налога)</label>
                                    <input type="text" class="form-control" name="fin_roi_after_tax" value="{{$project->fin_roi_after_tax}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Земельный участок, м2</label>
                                    <input type="text" class="form-control" name="fin_land_plot" value="{{$project->fin_land_plot}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">End_date</label>
                                    <input type="text" class="form-control" name="end_date" value="{{$project->end_date}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Area</label>
                                    <input type="text" class="form-control" name="area" value="{{$project->area}}">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Realizable_area</label>
                                    <input type="text" class="form-control" name="realizable_area" value="{{$project->realizable_area}}">
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