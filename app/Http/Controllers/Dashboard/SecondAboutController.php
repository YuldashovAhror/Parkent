<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SecondAbout;
use Illuminate\Http\Request;

class SecondAboutController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secondabouts = SecondAbout::all();
        return view('dashboard.secondabout.index', [
            'secondabouts'=>$secondabouts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.secondabout.create');
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
            'text_uz' => 'required|string|max:255',
            'text_ru' => 'required|string|max:255',
            'text_en' => 'required|string|max:255',
        ]);

        $secondabout = new SecondAbout();
        if($request->file('photo')){
            $secondabout['photo'] = $this->photoSave($request->file('photo'), 'image/secondabout');
        }
        $secondabout->text_uz = $request->text_uz;
        $secondabout->text_ru = $request->text_ru;
        $secondabout->text_en = $request->text_en;
        $secondabout->size = $request->size;
        $secondabout->save();
        return redirect()->route('dashboard.secondabout.index');
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
        $secondabout = SecondAbout::find($id);
        return view('dashboard.secondabout.edit', [
            'secondabout'=>$secondabout
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
        $secondabout = SecondAbout::find($id);
        if($request->file('photo')){
            if(is_file(public_path($secondabout->photo))){
                unlink(public_path($secondabout->photo));
            }
            $secondabout['photo'] = $this->photoSave($request->file('photo'), 'image/secondabout');
        }
        $secondabout->text_uz = $request->text_uz;
        $secondabout->text_ru = $request->text_ru;
        $secondabout->text_en = $request->text_en;
        $secondabout->size = $request->size;
        $secondabout->save();
        return redirect()->route('dashboard.secondabout.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secondabout = SecondAbout::find($id);
        if(is_file(public_path($secondabout->photo))){
            unlink(public_path($secondabout->photo));
        }
        $secondabout->delete();
        return redirect()->back();
    }
}
