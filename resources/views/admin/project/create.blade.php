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
                <form action="">
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
                                    <input type="text" class="form-control" wire:model="key">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Less_description UZ</label>
                                    <input type="text" class="form-control" name="less_description_uz">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Less_description RU</label>
                                    <input type="text" class="form-control" name="less_description_ru">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Less_description EN</label>
                                    <input type="text" class="form-control" name="less_description_en">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Description UZ</label>
                                    <input type="text" class="form-control" name="description_uz">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Description RU</label>
                                    <input type="text" class="form-control" name="description_ru">
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Description EN</label>
                                    <input type="text" class="form-control" name="description_en">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Date_from_to</label>
                                    <input type="text" class="form-control" name="date_from_to">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Profit</label>
                                    <input type="text" class="form-control" name="profit">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Roi</label>
                                    <input type="text" class="form-control" name="roi">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Profitability</label>
                                    <input type="text" class="form-control" name="profitability">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Apart_qty</label>
                                    <input type="text" class="form-control" name="apart_qty">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">floors</label>
                                    <input type="text" class="form-control" name="floors">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Apart_size</label>
                                    <input type="text" class="form-control" name="apart_size">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Commerce_size</label>
                                    <input type="text" class="form-control" name="commerce_size">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_income</label>
                                    <input type="text" class="form-control" name="fin_income">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_earth</label>
                                    <input type="text" class="form-control" name="fin_earth">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_cmr</label>
                                    <input type="text" class="form-control" name="fin_cmr">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">fin_overhead</label>
                                    <input type="text" class="form-control" name="fin_overhead">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_profit_before_tax</label>
                                    <input type="text" class="form-control" name="fin_profit_before_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_profitability_before_tax</label>
                                    <input type="text" class="form-control" name="fin_profitability_before_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_profit_after_tax</label>
                                    <input type="text" class="form-control" name="fin_profit_after_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_profitability_after_tax</label>
                                    <input type="text" class="form-control" name="fin_profitability_after_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_investments</label>
                                    <input type="text" class="form-control" name="fin_investments">
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_roi_before_tax</label>
                                    <input type="text" class="form-control" name="fin_roi_before_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_roi_after_tax</label>
                                    <input type="text" class="form-control" name="fin_roi_after_tax">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Fin_land_plot</label>
                                    <input type="text" class="form-control" name="fin_land_plot">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">End_date</label>
                                    <input type="text" class="form-control" name="end_date">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Area</label>
                                    <input type="text" class="form-control" name="area">
                                </div>
                                <div class="col-md-2">
                                    <label for="" class="form-label">Realizable_area</label>
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