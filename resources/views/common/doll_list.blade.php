<div class="container">
    <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>МОИ КУКЛЫ</h2>
            </div>
        </div>
    </div>
    <div class="row">

       @foreach($dolls as $doll)

           @include('common.doll_item', ['doll'=>$doll])

       @endforeach
    </div>
</div>
