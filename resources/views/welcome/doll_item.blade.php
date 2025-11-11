<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
    <div class="block-team-member-1 text-center rounded">
        <figure>
            <img src="{{ "/storage/$doll->photo" }}" alt="Image" class="img-fluid rounded-circle">
        </figure>
        <h3 class="font-size-20 text-black">{{ $doll->name }}</h3>
        <div class="">
            <a
                href="{{ route('dolls.show', $doll) }}"
                class="btn border-w-2 rounded primary-primary-outline--hover"
            >Перейти</a>
        </div>
    </div>
</div>
