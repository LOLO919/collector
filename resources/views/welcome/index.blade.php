@extends('layout')
@section('content')
    <div class="site-section">
        @include('welcome.about_me', ['page'=>$aboutMe])
        @include('welcome.about_me', ['page'=>$meeting])
    </div>

    <div class="site-section" id="team-section">
        @include('welcome.doll_list',['dolls'=>$dolls])
    </div>
@endsection
