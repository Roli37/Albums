@extends('layouts.main')
@section('title')
    Regisztráció
@endsection
@section('css')
.gomb{
background-color: #ffd460;
border: 2px solid black;
}
@endsection
@section('content')
    <h2 @class('mt-2')>Regisztráció</h2>
    {!! Form::open(['route' => 'register.store', 'method' => 'post']) !!}
    {!! Form::label('name', 'Név') !!}
    {!! Form::text('name', "", ['class' => 'form-control']) !!}
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', "", ['class' => 'form-control']) !!}
    {!! Form::label('password', 'Jelszó') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    {!! Form::label('password_confirmation', 'Jelszó újra') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    {!! Form::submit('Regisztráció', ['class' => 'btn gomb mt-3']) !!}
    {!! Form::close() !!}
@endsection