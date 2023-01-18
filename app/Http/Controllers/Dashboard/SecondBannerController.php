<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SecondBanner;
use Illuminate\Http\Request;

class SecondBannerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secondbanner = SecondBanner::all();
        return view('dashboard.secondbanner.index',[
            'secondbanner'=>$secondbanner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.secondbanner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'discription_en' => 'required|string',
            'discription_ru' => 'required|string',
            'discription_uz' => 'required|string',
        ]);
        
        $secondbanner = new SecondBanner();
        if($request->file('photo')){
            $secondbanner['photo'] = $this->photoSave($request->file('photo'), 'image/secondbanner');
        }
        $secondbanner->title_uz = $request->title_uz;
        $secondbanner->title_ru = $request->title_ru;
        $secondbanner->title_en = $request->title_en;
        $secondbanner->discription_uz = $request->discription_uz;
        $secondbanner->discription_ru = $request->discription_ru;
        $secondbanner->discription_en = $request->discription_en;
        $secondbanner->save();
        return redirect()->route('dashboard.secondbanner.index');
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
        $secondbanner = SecondBanner::find($id);
        return view('dashboard.secondbanner.edit', [
            'secondbanner'=>$secondbanner
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
        $secondbanner = SecondBanner::find($id);
        if($request->file('photo')){
            if(is_file(public_path($secondbanner->photo))){
                unlink(public_path($secondbanner->photo));
            }
            $secondbanner['photo'] = $this->photoSave($request->file('photo'), 'image/secondbanner');
        }
        $secondbanner->title_uz = $request->title_uz;
        $secondbanner->title_ru = $request->title_ru;
        $secondbanner->title_en = $request->title_en;
        $secondbanner->discription_uz = $request->discription_uz;
        $secondbanner->discription_ru = $request->discription_ru;
        $secondbanner->discription_en = $request->discription_en;
        $secondbanner->save();
        return redirect()->route('dashboard.secondbanner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secondbanner = SecondBanner::find($id);
        if(is_file(public_path($secondbanner->photo))){
            unlink(public_path($secondbanner->photo));
        }
        $secondbanner->delete();
        return redirect()->back();
    }
}
