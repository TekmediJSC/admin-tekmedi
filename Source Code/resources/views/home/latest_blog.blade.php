<div class="index-content mb-0 graybg">
    <div class="container">
        <div class="row">
            <div class="maintitle col-12">
                <h3 class="wow flipInX  text-center animated" data-wow-delay="0.1s" data-wow-duration="2s">Latest from
                    blog</h3>
                <div class="linemiddle mb-30 mt-20"></div>
            </div>
            @foreach($news as $n)
                <div class="col-lg-4 col-sm-4 col-12">
                    <div class="card">
                        <img src="{{App\Helpers\Url::LFMUrl($n->image)}}" alt="Sphinx Report">
                        <h4 class="mb-0">{{$n->title}}</h4>
                        <p class="mt-0 mb-0"><span>{{\Carbon\Carbon::parse($n->created_at)->format('d/m/Y')}}</span></p>
                        <p class="mt-5">{{$n->short_description}}</p>
                        <a href="{{route('news_detail', $n->id)}}"
                           class="blue-button"
                           target="_blank">Xem thêm
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>