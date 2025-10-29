@extends('layout')
@section('content')
    <div class="site-section">
        @include('common.static_page_item', [])
    </div>

    <div class="site-section" id="team-section">
        @include('common.doll_list',['dolls'=>$dolls])
    </div>
@endsection
