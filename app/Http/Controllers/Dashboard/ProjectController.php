<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Svg;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends BaseController
{
    public function index()
    {
        $projects = Project::with('svgs')->get();
        return view('dashboard.project.index', [
            'projects' => $projects,
        ]);
    }

    public function create()
    {
        return view('dashboard.project.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $project = new Project();
        if ($request->file('photo')) {
            if (is_file(public_path($project->photo))) {
                unlink(public_path($project->photo));
            }
            $project['photo'] = $this->photoSave($request->file('photo'), 'image/project');
        }
        $project->save();

        $svg_name = Str::random(10);
        $request->file('svg')->move(base_path() . '/public/image/project/svg/', $svg_name .  '.' . $request->file('svg')->getClientOriginalExtension());
        $svg = 'image/project/svg/' . $svg_name .  '.' . $request->file('svg')->getClientOriginalExtension();
        // $svg = env('APP_URL') . '/images/floors/svg/' . $svg_name .  '.' . $request->file('svg')->getClientOriginalExtension();

        $file = simplexml_load_file($svg);
        $viewBox = $file->attributes()->viewBox;

        if (isset($file->g)) {
            $file = $file->g->path;
        }

        foreach ($file as $item => $i) {
            $created_svg = new Svg();
            $created_svg->project_id = $project->id;
            $created_svg->viewBox = $viewBox;
            $created_svg->name = 'image/project/svg/' . $svg_name . '.svg';
            $created_svg->cordinates = $i['d'];
            $created_svg->save();
            // $project->svgs()->save($created_svg);
        }
        DB::commit();

        return view('dashboard.project.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('dashboard.project.edit', [
            'project' => $project
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
        $project = Project::find($id);

        if ($request->file('photo')) {
            if (is_file(public_path($project->photo))) {
                unlink(public_path($project->photo));
            }
            $project['photo'] = $this->photoSave($request->file('photo'), 'image/project');
        }
        $project->save();

        if ($request->file('svg')) {
            // deleteSVG from public folder
            $old_svg = $project->svgs[0]->name;

            if (is_file(public_path($old_svg))) {
                unlink(public_path($old_svg));
            }

            // delete SVG from database
            $old_svgs = $project->svgs;
            foreach($old_svgs as $old_svg) {
                $old_svg->delete();
            }

            $svg_name = Str::random(10);
            $request->file('svg')->move(base_path() . '/public/image/project/svg/', $svg_name .  '.' . $request->file('svg')->getClientOriginalExtension());
            $svg = 'image/project/svg/' . $svg_name .  '.' . $request->file('svg')->getClientOriginalExtension();
            // $svg = env('APP_URL') . '/images/floors/svg/' . $svg_name .  '.' . $request->file('svg')->getClientOriginalExtension();

            $file = simplexml_load_file($svg);
            $viewBox = $file->attributes()->viewBox;

            if (isset($file->g)) {
                $file = $file->g->path;
            }
                foreach ($file as $item => $i) {
                    $created_svg = Svg::find($id);
                    $created_svg->project_id = $project->id;
                    $created_svg->viewBox = $viewBox;
                    $created_svg->name = 'image/project/svg/' . $svg_name . '.svg';
                    $created_svg->cordinates = $i['d'];
                    $created_svg->save();
                    // $project->svgs()->save($created_svg);
                }
        }

        return redirect()->route('dashboard.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if (is_file(public_path($project->photo))) {
            unlink(public_path($project->photo));
        }
        $project->delete();
        return redirect()->back();
    }
}
