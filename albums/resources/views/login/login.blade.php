@extends('layouts.main')
@section('title')
    Bejelentkezés
@endsection
@section('css')
    .gomb{
    background-color: #ffd460;
    border: 2px solid black;
    }
@endsection
@section('content')
    @if (session("success"))
        <div class="alert alert-success mt-2">
            {{session("success")}}
        </div>
    @endif
    <h2 @class('mt-2')>Bejelentkezés</h2>
    {!! Form::open(['route' => 'auth.authenticate', 'method' => 'post']) !!}
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', "", ['class' => 'form-control']) !!}
    {!! Form::label('password', 'Jelszó') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    {!! Form::submit('Bejelentkezés', ['class' => 'btn gomb mt-3']) !!}
    {!! Form::close() !!}
    @if (session("error"))
        <div class="alert alert-danger mt-3">
            {{session("error")}}
        </div>
    @endif
@endsection