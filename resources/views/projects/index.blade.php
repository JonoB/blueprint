@extends('common.template')

@section('heading')
    Projects
@endsection

@section('content')
    <div class="actions-container">
        <a class="btn btn-primary btn-flat pull-right" href="{{ route('projects.create') }}">Create Project</a>
        <div class="clearfix"></div>
    </div>

    <div class="box box-primary">
        <div class="box-body no-padding">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                            <td>
                                <a href="{{ route('projects.edit', [$project->id]) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
