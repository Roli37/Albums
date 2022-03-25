@extends('layouts.main')
@section('title')
    Album View
@endsection
@section('css')
    body{
    background-color: #d8d4d4;
    }
    .gomb{
    background-color: #ffea4a;
    width: 100%;
    border: 2px solid black;
    }
    .img-fluid{
    width: 100%;
    border: 7px solid white;
    border-radius: 10px;
    }
@endsection
@section('content')
    @if (session("success"))
        <div class="alert alert-success mt-2">
            {{session("success")}}
        </div>
    @endif
    <h1 class="text-center mt-4 mb-4">@auth() Hello {{session()->get('user.name')}}! @endauth List of best-selling albums</h1>
    <div class="row">
        @foreach($albums as $a)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 d-grid mb-4 mt-2">
                <h3 class="text-center">{{$a->title}}</h3>
                <?php $url = asset('images') ?>
                <img src="<?= $url ?>/<?= $a->cover ?? 'unknown.jpg'?>" alt="Pic not found" class="img-fluid">
                <br>
                <a href="{{route('home')}}"><button class="btn gomb">Details</button></a>
            </div>
        @endforeach
    </div>
@endsection