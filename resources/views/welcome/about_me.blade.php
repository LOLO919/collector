@php
/** @var \App\Models\StaticPage $page */
$hasPhoto =  $page->photo !== null;
$lg = $hasPhoto ? 5 : 12;
@endphp

<div class="block__73694 mb-2" id="services-section">
    <div class="container">
        <div class="row d-flex no-gutters align-items-stretch">

            @if($hasPhoto)
            <div class="col-12 col-lg-6 block__73422" style="background-image: url({{ asset( "/storage/$page->photo" ) }});"
                 data-aos="fade-right" data-aos-delay="">
            </div>
            @endif

            <div class="col-lg-{{ $lg }} ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
                <h2 class="mb-3 text-black">{{$page->title}}</h2>
                {!! $page->description !!}

                <p>
                    Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores
                    facere officiis. Cum, esse, iusto?
                </p>

                <ul class="ul-check primary list-unstyled mt-5">
                    <li>Lorem ipsum dolor.</li>
                    <li>Quod, amet. Provident.</li>
                    <li>Quo, adipisci, quis.</li>
                    <li>Cumque perspiciatis, blanditiis?</li>
                </ul>
            </div>
        </div>
    </div>
</div>
