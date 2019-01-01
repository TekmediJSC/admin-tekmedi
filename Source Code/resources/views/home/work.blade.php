<section class="section" id="blog">
    <div class="container">
        <h3 class="section-title text-center wow flipInX animated" data-wow-delay=".2s">We believe our work speaks for
            itself</h3>
        <div class="linemiddle mb-60"></div>
        <div class="row">
            @php $delay = 0.3 @endphp
            @foreach($works as $work)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-item-wrapper wow fadeIn" data-wow-delay="{{$delay}}s">
                        <div class="blog-item-img item">
                            <a href="{{ $work->link  }}">
                                <img alt="Vivino"
                                     src="{{ App\Helpers\Url::LFMUrl($work->image) }}"></a>
                        </div>
                        <div class="blog-item-text">
                            <h4 class="small-title">
                                <a href="portfolio-item/vivino-wine-apps/index.html">{{ $work->title  }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                @php $delay += 0.3 @endphp
            @endforeach
        </div>
    </div>
</section>