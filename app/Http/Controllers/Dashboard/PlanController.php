<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\AttributePlan;
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
        $plans = Plan::with('buildings')->get();
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
        $plan = new Plan();
        if($request->file('photo')){
            $plan['photo'] = $this->photoSave($request->file('photo'), 'image/plan');
        }
        $plan->building_id = $request->apartment;
        $plan->area = $request->area;
        $plan->room = $request->room;
        $plan->price = $request->price;
        $plan->save();

        // TODO: Request dan arrtibutes ($request->attributes) kelishi kerak, array holatda. ex: [1, 4, 7].
        foreach($request->attributes as $attribute) {
            $plan_attribute = new AttributePlan();
            $plan_attribute->plan_id = $plan->id;
            $plan_attribute->attribute_id = $request->attribute;
            $plan_attribute->size = $request->size;
            $plan_attribute->save();
        }

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
        $plan->building_id = $request->apartment;
        $plan->area = $request->area;
        $plan->room = $request->room;
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
