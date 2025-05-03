@extends('layouts.app')

@section('content')
    <div class="untree_co-section untree_co-section-4 padding-md">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto contents">
                    <div class="row">
                        <!-- CREATE PROJECT FORM -->
                        <div class="col-lg-6">
                            <div class="custom-block" data-aos="fade-up">
                                <h2 class="section-title text-black">Create Project</h2>
                                <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Project Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="client">Client</label>
                                        <input type="text" class="form-control" id="client" name="client">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <input type="text" class="form-control" id="role" name="role">
                                    </div>
                                    <div class="form-group">
                                        <label for="project_date">Project Date</label>
                                        <input type="date" class="form-control" id="project_date" name="project_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Project Link</label>
                                        <input type="url" class="form-control" id="link" name="link">
                                    </div>
                                    <div class="form-group">
                                        <label for="media">Upload Media (Images & Videos)</label>
                                        <input type="file" class="form-control" id="media" name="media[]" multiple>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Project</button>
                                </form>
                            </div>
                        </div>

                        <!-- VIEW AND MANAGE EXISTING PROJECTS -->
                        <div class="col-lg-6">
                            <div class="custom-block" data-aos="fade-up">
                                <h2 class="section-title text-black">Manage Projects</h2>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Client</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($projects as $project)
                                            <tr>
                                                <td>{{ $project->id }}</td>
                                                <td>{{ $project->title }}</td>
                                                <td>{{ $project->client }}</td>
                                                <td>
                                                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                                                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- EDIT PROJECT FORM (if editing) -->
                    @isset($projectToEdit)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="custom-block" data-aos="fade-up">
                                    <h2 class="section-title text-black">Edit Project</h2>
                                    <form method="POST" action="{{ route('projects.update', $projectToEdit->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="title">Project Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $projectToEdit->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="5">{{ $projectToEdit->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="client">Client</label>
                                            <input type="text" class="form-control" id="client" name="client" value="{{ $projectToEdit->client }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <input type="text" class="form-control" id="role" name="role" value="{{ $projectToEdit->role }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="project_date">Project Date</label>
                                            <input type="date" class="form-control" id="project_date" name="project_date" value="{{ $projectToEdit->project_date }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="link">Project Link</label>
                                            <input type="url" class="form-control" id="link" name="link" value="{{ $projectToEdit->link }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="media">Upload New Media (Images & Videos)</label>
                                            <input type="file" class="form-control" id="media" name="media[]" multiple>
                                        </div>
                                        <button type="submit" class="btn btn-warning">Update Project</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection
