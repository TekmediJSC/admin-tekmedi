@extends('layouts.app')

@section('title', $item->name)
@section('description', $item->meta_description)
@section('keywords', $item->meta_keyword)

@section('content')
    <section class="bannerblue  active-section" id="hero1">
        <div class="ocean">
            <div class="bluewave"></div>
        </div>
        <div class="col-lg-12 text-center knowmore123">
            <a href="#content">
                <img src="{{ asset('assets/img/downscroll.png')}}" alt="downbutton" class="downarroweffect"></a>
        </div>
        <div class="container height100">
            <div class="row textmiddle">
                <div class="col-md-6 displaytable">
                    <div class="herotext">
                        <h1 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1s">
                            {{ $item->name }}
                        </h1>

                        <h3 class="lead wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="2s">
                            {{ $item->short_description  }}
                        </h3>
                    </div>
                </div>
                <div class="col-md-6 wow zoomInDown  hidden-xs-down" data-wow-delay="0.1s" data-wow-duration="1s">
                    <img class="mt-150"
                         src="{{ App\Helpers\Url::LFMUrl($item->image) }}">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-50 pb-50" id="content">
        <div class="container">
            {!! $item->content !!}
        </div>
    </section>

@endsection