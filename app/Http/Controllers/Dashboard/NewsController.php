<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('dashboard.news.index',[
            'news'=>$news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
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
        
        $news = new News();

        if($request->file('photo')){
            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->discription_uz = $request->discription_uz;
        $news->discription_ru = $request->discription_ru;
        $news->discription_en = $request->discription_en;
        $news->save();
        return redirect()->route('dashboard.news.index');
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
        $new = News::find($id);
        return view('dashboard.news.edit', [
            'new'=>$new
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
        $news = News::find($id);
        if($request->file('photo')){
            if(is_file(public_path($news->photo))){
                unlink(public_path($news->photo));
            }
            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->discription_uz = $request->discription_uz;
        $news->discription_ru = $request->discription_ru;
        $news->discription_en = $request->discription_en;
        $news->save();
        return redirect()->route('dashboard.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id);
        if(is_file(public_path($new->photo))){
            unlink(public_path($new->photo));
        }
        $new->delete();
        return redirect()->back();
    }
}
