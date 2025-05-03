<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    // Show all projects
    public function index()
    {
        $projects = Project::all();  // Retrieve all projects
        return view('sections.projects', compact('projects'));  // Pass to the view
    }

    // Show the form to create a new project
    public function create()
    {
        $projects = Project::all();  // Retrieve all projects
        return view('projects.manage', compact('projects'));
    }

    // Store a new project
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string',
            'role' => 'nullable|string',
            'project_date' => 'nullable|date',
            'link' => 'nullable|url',
            'media.*' => 'nullable|file|mimes:jpg,jpeg,png,gif,mp4,avi,webm|max:10240', // Validate media files
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->client = $request->client;
        $project->role = $request->role;
        $project->project_date = $request->project_date;
        $project->link = $request->link;

        $media = [];

        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('projects/media', 'public');
                $media[] = $path;
            }
        }

        // Now just assign the array directly (no json_encode)
        $project->media_paths = $media;
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }



public function show($id)
{
    $project = Project::findOrFail($id);

    // Get the next project
    $nextProject = Project::where('id', '>', $id)->orderBy('id')->first();

    // Prepare OG metadata
    $og_title = $project->title;
    $og_description = Str::limit(strip_tags($project->description), 150);

    // Get first image for OG image or fallback
    $og_image = $project->images->isNotEmpty()
        ? asset('storage/' . $project->images->first())
        : asset('logos/6upe-logo-white.png');

    return view('projects.show', compact('project', 'nextProject', 'og_title', 'og_description', 'og_image'));
}


    // Show the form to edit an existing project
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.manage', compact('projectToEdit', 'projects'));  // Pass existing project for editing
    }

    // Update an existing project
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client' => 'nullable|string',
            'role' => 'nullable|string',
            'project_date' => 'nullable|date',
            'link' => 'nullable|url',
            'media.*' => 'nullable|file|mimes:jpg,jpeg,png,gif,mp4,avi,webm|max:10240', // Validate media files
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->client = $request->client;
        $project->role = $request->role;
        $project->project_date = $request->project_date;
        $project->link = $request->link;

        // Handle file uploads (if new media is uploaded)
        if ($request->hasFile('media')) {
            $media = [];
            foreach ($request->file('media') as $file) {
                $path = $file->store('projects/media', 'public');  // Store the media files
                $media[] = $path;
            }
            $project->media = json_encode($media);  // Save media paths as JSON
        }

        $project->save();  // Save the updated project

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    // Delete a project
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
