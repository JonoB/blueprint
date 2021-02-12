@extends('common.template')

@section('heading')
    Edit Project : {{ $project->name }}
@stop

@section('content')

    {!! Form::model($project, ['method' => 'put', 'route' => ['projects.update', $project->id]]) !!}

    @include('projects.partials.form')

@stop
