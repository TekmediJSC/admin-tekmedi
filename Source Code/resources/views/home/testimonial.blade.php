<div class="single-testimonial-area">
    <div class="container">
        <div class="row mb-0">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.3s">
                <h3 class="wow flipInX text-center animated" data-wow-delay="0.1s" data-wow-duration="2s">What our
                    clients say</h3>
                <div class="linemiddle mt-30 mb-0"></div>
            </div>
        </div>
        <div class="owl-carousel" id="single-testimonial-item">
            @foreach($testimonials as $testimonial)
                <div class="item">
                    <div class="row justify-content-md-center">
                        <div class="col-lg-8 col-md-auto col-12">
                            <div class="testimonial-inner text-md-center">
                                <div class="testimonial-images">
                                    <img alt="Heini Zachariassen"
                                         class="img-circle text-md-center"
                                         src="{{ App\Helpers\Url::LFMUrl($testimonial->image) }}">
                                </div>
                                <blockquote>
                                    {{ $testimonial->description  }}
                                </blockquote>
                                <div class="testimonial-footer">
                                    {{ $testimonial->title  }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>