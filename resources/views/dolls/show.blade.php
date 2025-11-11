<?php
/** @var \App\Models\Doll $doll */
?>

@extends('layout')

@section('content')
<div class="block__73694 mb-2" id="services-section">
    <div class="container">
        <div class="row d-flex no-gutters align-items-stretch">
{{-- #TODO /storage/$doll->photo storage_path() не смотрит в storage в проекте --}}
            <div class="col-12 col-lg-6 block__73422" style="background-image: url('{{ "/storage/$doll->photo" }}');" data-aos="fade-right" data-aos-delay="">
            </div>
            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                <h2 class="mb-3 text-black">{{ $doll->name }}</h2>
                <ul class="ul-check primary list-unstyled mt-5">
                    <li>Год выпуска {{ $doll->year_of_issue }}</li>
                    <li>Тираж {{ $doll->edition }}</li>
                </ul>
                <p>{{ $doll->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
