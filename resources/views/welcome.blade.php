@extends('layout')
@section('content')
    <div class="site-section">
        @include('welcome.static_page_item', [])
    </div>

    <div class="site-section" id="team-section">
        @include('welcome.doll_list',['dolls'=>$dolls])
    </div>
@endsection
