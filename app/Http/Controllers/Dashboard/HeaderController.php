<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HeaderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::find(1);
        return view('dashboard.header.index', [
            'header'=>$header
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $header = Header::find($id);
        $header->percent = $request->percent;
        $header->build_day = $request->build_day;
        $header->pdf_size = $request->pdf_size;
        if(!empty($request->file('pdf'))){
            if(is_file(public_path($header->pdf))){
                unlink(public_path($header->pdf));
            }
            $img_name = Str::random(10).'.'.$request->file('pdf')->getClientOriginalExtension();
            $request->file('pdf')->move(public_path('/image/header'), $img_name);
            $header->pdf = '/image/header/'.$img_name;
        }
        $header->save();
        return redirect()->route('dashboard.header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
