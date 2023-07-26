<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il model
use App\Models\Project;
use App\Models\Type;


class LoggedController extends Controller
{
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('show', compact('project'));
    }

    public function create()
    {
        $types = Type::all();

        return view('create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        dd($data);

        // $project = Project::create($data);

        // return redirect()->route('project.show', $project->id);
    }
}
