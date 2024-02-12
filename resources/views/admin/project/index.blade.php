@extends('layouts.admin')

@section('title', 'Projects')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-4">All my Projects</h1>
            </div>
            <div class="col-12 mb-3 text-end">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-info text-white me-4">Add New Project</a>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Author</th>
                            <th scope="col">Project Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->author }}</th>
                                <td>{{ $project->title }}</td>
                                <td>Premi su Load More per saperne di più</td>
                                <td>{{ $project->date }}</td>
                                <td>
                                    <a class="btn btn-primary">Load More</a>
                                    <a class="btn btn-success">Edit</a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No projects Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection