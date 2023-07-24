<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il model
use App\Models\Project;


class LoggedController extends Controller
{
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('show', compact('project'));
    }
}
