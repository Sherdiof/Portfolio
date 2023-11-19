<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'detail' => 'required',
            'link' => 'required',
            'image_project' => 'required'
        ]);

        $projects = Project::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'link' => $request->link,
            'image_project' => $request->image_project,
        ]);

        return redirect()->route('projects.index', ['projects' => $projects]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }


    public function updates(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:255',
            'detail' => 'required',
            'link' => 'required',
            'image_project' => 'max:2048',
        ]);

        $image_path = public_path('projects_img/'.$project->image_project);

        if(file_exists($image_path))
        {
            return $image_path;
        }
        return $image_path;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'detail' => 'required',
            'link' => 'required',
            'image_project',
        ]);

        $project->title = $request->title;
        $project->detail = $request->detail;
        $project->link = $request->link;

        if ($request->file('image_project')){

            $image_path = public_path('projects_img/'.$project->image_project);
            if(file_exists($image_path))
            {
                unlink($image_path);
            }
            $image = $request->file('image_project');
            $nameImage = Str::uuid().'.'. $image->extension();

            $imageServer = Image::make($image)->fit(382, 287);
            $imagePath = public_path('projects_img').'/'.$nameImage;
            $imageServer->save($imagePath);
            $project->image_project = $nameImage;
        }

        $project->update();

        return redirect()->route('projects.index', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $image_path = public_path('projects_img/' . $project->image_project);
        $project->delete();

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        return redirect()->route('projects.index');
    }
}
