@extends('layouts.app')

@section('content')
<header>
    <div class="row">
        <!-- col logo -->
        <div class="col-5">
            <img class="logo my-3" src="/images/dc-logo.png" alt="">
        </div>
    
        <!-- col links -->
        <div class="col-7 d-flex justify-content-between align-items-center">
            @foreach ($links as $link)
            <a href="">{{ $link }}</a>
            @endforeach
        </div>
    </div>
</header>
@endsection