<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::with('apartments')->get();
        return view('dashboard.plan.index', [
            'plans'=>$plans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $plan = new Plan();
        if($request->file('photo')){
            $plan['photo'] = $this->photoSave($request->file('photo'), 'image/plan');
        }
        $plan->apartment_id = $request->apartment;
        $plan->area = $request->area;
        $plan->price = $request->price;
        $plan->save();
        return redirect()->route('dashboard.plan.index');
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
        $plan = Plan::find($id);
        return view('dashboard.plan.edit', [
            'plan'=>$plan
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
        $plan = Plan::find($id);
        if($request->file('photo')){
            if(is_file(public_path($plan->photo))){
                unlink(public_path($plan->photo));
            }
            $plan['photo'] = $this->photoSave($request->file('photo'), 'image/plan');
        }
        $plan->apartment_id = $request->apartment;
        $plan->area = $request->area;
        $plan->price = $request->price;
        $plan->save();
        return redirect()->route('dashboard.plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        if(is_file(public_path($plan->photo))){
            unlink(public_path($plan->photo));
        }
        $plan->delete();
        return redirect()->back();
    }
}
