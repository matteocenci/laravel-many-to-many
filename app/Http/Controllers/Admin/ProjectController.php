<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * Visualizza tutti i record
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     * Mostra il form per creare un nuono record
     */
    public function create()
    {
        //
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     * salva il nuono record (CREATE)
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Visualizza il singolo record in base all'id passato (READ)
     */
    public function show(Project $project)
    {
        
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     * Mostra il form di modifica
     */
    public function edit(Project $project)
    {
        //
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     * Aggiorna un record in base all'id (UPDATE)
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un record in base all'id
     */
    public function destroy(string $id)
    {
        //
    }
}
