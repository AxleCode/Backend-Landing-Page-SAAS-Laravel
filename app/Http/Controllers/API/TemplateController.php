<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of templates.
     */
    public function index(Request $request)
    {
        $templates = Template::all();

        return response()->json([
            'data' => $templates
        ]);
    }

    /**
     * Display the specified template.
     */
    public function show(string $id)
    {
        $template = Template::find($id);

        if (!$template) {
            return response()->json(['message' => 'Template not found'], 404);
        }

        return response()->json($template);
    }

    /**
     * Update the specified template.
     */
    public function update(Request $request, string $id)
    {
        $template = Template::find($id);

        if (!$template) {
            return response()->json(['message' => 'Template not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'thumbnail_url' => 'nullable|url',
            'project_data' => 'array',
            'html_content' => 'nullable|string',
            'css_content' => 'nullable|string',
        ]);

        $template->update($request->only([
            'name',
            'thumbnail_url',
            'project_data',
            'html_content',
            'css_content',
        ]));

        return response()->json($template);
    }

    /**
     * Remove the specified template.
     */
    public function destroy(string $id)
    {
        $template = Template::find($id);

        if (!$template) {
            return response()->json(['message' => 'Template not found'], 404);
        }

        $template->delete();

        return response()->json(['message' => 'Template deleted successfully']);
    }

    /**
     * Store a newly created template.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail_url' => 'nullable|url',
            'project_data' => 'required|array',
            'html_content' => 'nullable|string',
            'css_content' => 'nullable|string',
        ]);

        $template = Template::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'thumbnail_url' => $request->thumbnail_url,
            'project_data' => $request->project_data,
            'html_content' => $request->html_content,
            'css_content' => $request->css_content,
        ]);

        return response()->json($template, 201);
    }
}
