<style type="text/css">
    @media only screen and (min-device-width: 319px) and (max-device-width: 667px) {
        .mainpost {
            width: 353px;
            position: absolute;
            top: 70px;
            left: 50%;
            margin-left: -176px;
            cursor: pointer;
        }

        .hero-area-caption {
            width: 100%;
            height: auto;
            display: table-cell;
            vertical-align: middle;
            opacity: 1;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;

        }
    }
</style>

<!-- SLIDE-->
<!--SLIDE 1-->
<div id="test" class="carousel slide home-1 height100" data-ride="carousel">

    @foreach($slides as $index => $slide)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }} home-1 height100">
            <div class="hero-area home-1 height100" style="background: url('{{ App\Helpers\Url::LFMUrl($slide->image) }}'); background-size: cover;">
                <div class="hero-area-inner">
                    <div class="hero-area-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 text-center">
                                    <h1 class="subtitle">{{ $slide->title  }}</h1>
                                    <div class="text-center">
                                        <h2 class="whitecolor">{{$slide->description}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <a class="carousel-control-prev" href="#test" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#test" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    <div class="col-lg-12 text-center knowmore12">
        <a href="#about"><img src="assets/img/downscroll.png" alt="downbutton" class="downarroweffect"></a>
    </div>
</div>
