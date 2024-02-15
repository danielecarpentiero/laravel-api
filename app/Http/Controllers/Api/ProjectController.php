<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $projects = Project::all();
        return response()->json([
            'success' => 200,
            'results' => $projects
        ]);
    }
}
