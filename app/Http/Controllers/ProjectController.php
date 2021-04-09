<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Auth\Events\Validated;
use Illuminate\Mail\Events\MessageSending;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('status',  $request->title.' fue creado con exito.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project)->with('status', $request->title.' fue actualizado con exito.');
    }

    public function destroy(Project $project)
    {
        $title = $project->title;
        $project->delete();
        return redirect()->route('projects.index')->with('status', $title.' fue borrado con exito.');
    }
}
