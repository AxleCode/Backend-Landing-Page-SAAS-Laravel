<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of user's projects.
     */
    public function index(Request $request)
    {
        $projects = Project::where('user_id', Auth::id())->get();

        return response()->json([
            'data' => $projects
        ]);
    }

    /**
     * Store a newly created project.
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'content_json' => 'required|array',
            'html_content' => 'required|string',
            'css_content' => 'required|string',
            'template_id' => 'nullable|uuid|exists:templates,id',
        ]);

        $project = Project::create([
            'user_id' => Auth::id(),
            'template_id' => $request->template_id,
            'project_name' => $request->project_name,
            'content_json' => $request->content_json,
            'html_content' => $request->html_content,
            'css_content' => $request->css_content,
        ]);

        return response()->json([
            'message' => 'Project created successfully',
            'id' => $project->id,
            'project_name' => $project->project_name,
            'user_id' => $project->user_id,
        ], 201);
    }

    /**
     * Display the specified project.
     */
    public function show(string $id)
    {
        $project = Project::where('user_id', Auth::id())->find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json($project);
    }

    /**
     * Update the specified project.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::where('user_id', Auth::id())->find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $request->validate([
            'project_name' => 'sometimes|string|max:255',
            'content_json' => 'array',
            'html_content' => 'string',
            'css_content' => 'string',
        ]);

        $project->update($request->only([
            'project_name',
            'content_json',
            'html_content',
            'css_content',
        ]));

        return response()->json([
            'message' => 'Project updated successfully',
            'id' => $project->id,
        ]);
    }

    /**
     * Remove the specified project.
     */
    public function destroy(string $id)
    {
        $project = Project::where('user_id', Auth::id())->find($id);

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        $project->delete();

        return response()->json(['message' => 'Project deleted successfully']);
    }
}
