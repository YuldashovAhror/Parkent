<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('dashboard.banner.index',[
            'banners'=>$banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.banner.create');
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
        
        $banners = new Banner();

        if($request->file('photo_day')){
            $banners['photo_day'] = $this->photoSave($request->file('photo_day'), 'image/banner');
        }
        $banners->title_uz = $request->title_uz;
        $banners->title_ru = $request->title_ru;
        $banners->title_en = $request->title_en;
        $banners->discription_uz = $request->discription_uz;
        $banners->discription_ru = $request->discription_ru;
        $banners->discription_en = $request->discription_en;
        $banners->title2_uz = $request->title2_uz;
        $banners->title2_ru = $request->title2_ru;
        $banners->title2_en = $request->title2_en;
        if($request->file('photo_night')){
            $banners['photo_night'] = $this->photoSave($request->file('photo_night'), 'image/banner');
        }
        $banners->save();
        return redirect()->route('dashboard.banner.index');
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
        $banner = Banner::find($id);
        return view('dashboard.banner.edit', [
            'banner'=>$banner
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
        $banner = Banner::find($id);
        if($request->file('photo_day')){
            if(is_file(public_path($banner->photo_day))){
                unlink(public_path($banner->photo_day));
            }
            $banner['photo_day'] = $this->photoSave($request->file('photo_day'), 'image/banner');
        }
            $banner->title_uz = $request->title_uz;
            $banner->title_ru = $request->title_ru;
            $banner->title_en = $request->title_en;
            $banner->discription_uz = $request->discription_uz;
            $banner->discription_ru = $request->discription_ru;
            $banner->discription_en = $request->discription_en;
            $banner->title2_uz = $request->title2_uz;
            $banner->title2_ru = $request->title2_ru;
            $banner->title2_en = $request->title2_en;
            if($request->file('photo_night')){
                if(is_file(public_path($banner->photo_night))){
                    unlink(public_path($banner->photo_night));
            }
            $banner['photo_night'] = $this->photoSave($request->file('photo_night'), 'image/banner');
        }
        $banner->save();
        return redirect()->route('dashboard.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(is_file(public_path($banner->photo_day))){
            unlink(public_path($banner->photo_day));
        }
        if(is_file(public_path($banner->photo_night))){
            unlink(public_path($banner->photo_night));
        }
        $banner->delete();
        return redirect()->back();
    }
}
