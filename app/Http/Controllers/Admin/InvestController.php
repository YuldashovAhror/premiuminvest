<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invest = Invest::all();
        
        return view('admin.invest.index',[
            'invest' => $invest
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.invest.create',[
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invest = new Invest();
        $invest->user_id = $request->user_id;
        $invest->deposit = $request->deposit;
        $invest->deposit_date = $request->deposit_date;
        $invest->investment = $request->investment;
        $invest->investment_date = $request->investment_date;
        $invest->percentage = $request->percentage;
        $invest->earnings = $request->earnings;
        $invest->earnings_date = $request->earnings_date;
        $invest->earnings_percentage = $request->earnings_percentage;
        $invest->current_earning = $request->current_earning;
        $invest->revaluation_date = $request->revaluation_date;
        $invest->end_date = $request->end_date;

        if(!empty($request->file('use_funds'))){
            $img_name = Str::random(10).'.'.$request->file('use_funds')->getClientOriginalExtension();
            $request->file('use_funds')->move(public_path('/images/usefunds'), $img_name);
            $invest->use_funds = '/images/usefunds/'.$img_name;
        }
        if(!empty($request->file('progress_report'))){
            $img_name = Str::random(10).'.'.$request->file('progress_report')->getClientOriginalExtension();
            $request->file('progress_report')->move(public_path('/images/progressreport'), $img_name);
            $invest->progress_report = '/images/progressreport/'.$img_name;
        }
        $invest->save();
        return redirect()->route('admin.invest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invests = Invest::find($id);
        $users = User::all();
        return view('admin.invest.edit',[
            'invests' => $invests,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invest = Invest::find($id);
        $invest->user_id = $request->user_id;
        $invest->deposit = $request->deposit;
        $invest->deposit_date = $request->deposit_date;
        $invest->investment = $request->investment;
        $invest->investment_date = $request->investment_date;
        $invest->percentage = $request->percentage;
        $invest->earnings = $request->earnings;
        $invest->earnings_date = $request->earnings_date;
        $invest->earnings_percentage = $request->earnings_percentage;
        $invest->current_earning = $request->current_earning;
        $invest->revaluation_date = $request->revaluation_date;
        $invest->end_date = $request->end_date;
        if(!empty($request->file('use_funds'))){
            $img_name = Str::random(10).'.'.$request->file('use_funds')->getClientOriginalExtension();
            $request->file('use_funds')->move(public_path('/images/usefunds'), $img_name);
            $invest->use_funds = '/images/usefunds/'.$img_name;
        }
        if(!empty($request->file('progress_report'))){
            $img_name = Str::random(10).'.'.$request->file('progress_report')->getClientOriginalExtension();
            $request->file('progress_report')->move(public_path('/images/progressreport'), $img_name);
            $invest->progress_report = '/images/progressreport/'.$img_name;
        }
        $invest->save();
        return redirect()->route('admin.invest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invest = Invest::find($id);
        $invest->delete();
        return redirect()->route('admin.invest');
    }
}
