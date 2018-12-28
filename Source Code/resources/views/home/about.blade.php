<section id="about" class="section section--angle bg-white imagesizenew pt-50 pb-50">
    <div class="section__content">
        <div class="container wow fadeInUp" data-wow-delay="0.3s">
            <h3 class="section-title text-center wow flipInX animated animated" data-wow-delay=".2s">Here's what we can
                work on together
            </h3>
            <div class="linemiddle mb-60"></div>
            <div class="service__grid">
                @php $delay = 0.2 @endphp
                @foreach($services as $service)
                    <div class="service__item center wow fadeInUp" data-wow-delay="{{ $delay }}s">
                        <div class="service__icon">
                            <img src="{{ \App\Helpers\Url::LFMUrl($service->image)  }}" alt="Mobile Design App"></div>
                        <h4 class="service__title">{{ $service->title }}</h4>
                        <div class="service__overlay"
                             style="cursor: pointer;">
                            <p>{{ $service->description  }}<br>
                            </p>
                        </div>
                        <div class="service__border service__border--y"></div>
                        <div class="service__border service__border--x"></div>
                    </div>
                    @php $delay += 0.2 @endphp
                @endforeach
            </div>
        </div>
    </div>
</section>