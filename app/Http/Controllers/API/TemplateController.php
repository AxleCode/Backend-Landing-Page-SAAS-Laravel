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
        ]);

        $template->update($request->only([
            'name',
            'thumbnail_url',
            'project_data',
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
}
