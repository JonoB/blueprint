<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Interfaces\ProjectEloquentInterface;
use Illuminate\Http\RedirectResponse;

class ProjectsController extends Controller
{
    /**
     * @var ProjectEloquentInterface
     */
    protected $projects;

    /**
     * ProjectsController constructor.
     *
     * @param ProjectEloquentInterface $projects
     */
    public function __construct(ProjectEloquentInterface $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->projects->paginate('name');

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubscriberListRequest $request
     * @return RedirectResponse
     */
    public function store(ProjectRequest $request)
    {
        $this->projects->store($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        app()->abort(404, 'Not implemented');

        return view('projects.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = $this->projects->find($id);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(ProjectRequest $request, $id)
    {
        $this->projects->update($id, $request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        app()->abort(404, 'Not implemented');
    }
}
