@extends('layouts.main')
@section('title')
    Album készítés
@endsection
@section('content')
    @if (session("success"))
        <div class="alert alert-success mt-2">
            {{session("success")}}
        </div>
    @endif
    <h1 class="text-center">Create Album</h1>
    {!! Form::open(['route' => 'admin-admin.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    {!! Form::label('artist', 'Artist') !!}
    <select name="artist" id="artist">
        @foreach($artists as $a)
            <option value="{{$a->id}}">{{$a->name}}</option>
        @endforeach
    </select>
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! Form::label('genre', 'Genre') !!}
    {!! Form::text('genre', null, ['class' => 'form-control']) !!}
    {!! Form::label('released', 'Released') !!}
    {!! Form::number('released', null, ['class' => 'form-control']) !!}
    {!! Form::label('tcc', 'Total certified copies') !!}
    {!! Form::number('tcc', null, ['class' => 'form-control']) !!}
    {!! Form::label('sales', 'Claimed sales') !!}
    {!! Form::number('sales', null, ['class' => 'form-control']) !!}
    {!! Form::label('cover', 'Cover') !!}
    {!! Form::file('cover', ['class' => 'form-control']) !!}
    {!! Form::submit('Mentés', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection