<section class="section" data-vide-bg="assets/video/Velocity" data-vide-options="position: 0% 50%" id="cool-facts">
    <div class="container whychooseusnew">
        <div class="maintitle col-12">
            <h3 class="wow flipInX whitecolor text-center animated" data-wow-delay="0.1s" data-wow-duration="2s">Why
                choose us</h3>
            <div class="linemiddle mb-80 mt-20"></div>
        </div>
        <div class="row whychoose">
            @foreach($chooses as $choose)
                <div class="col-sm-6 col-xs-12 col-lg-4">
                    <div class="fact-block clearfix wow fadeInUp" data-wow-delay=".3s">
                        <div class="facts-item">
                            <img class="pull-left" src="{{ App\Helpers\Url::LFMUrl($choose->image) }}" alt="Experience">
                            <div class="fact-count">
                                <h3><span class="counter">{{ $choose->extra  }}</span>+ {{ $choose->description }}</h3>
                                <h4>{{ $choose->title  }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>