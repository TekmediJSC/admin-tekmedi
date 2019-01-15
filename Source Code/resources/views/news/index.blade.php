@extends('layouts.app')

@section('title', isset($category) ? $category->name : 'Tin tức')
@section('description', isset($category) ? $category->name : '')
@section('keywords', '')
@section('css')
    <link rel='stylesheet' id='vwcss-icon-iconic-css' href="{{asset('blog/themes/sprout/components/font-icons/iconic/css/iconic357c.css?ver=1.5.4')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='vwcss-icon-social-css' href="{{asset('blog/themes/sprout/components/font-icons/social-icons/css/zocial357c.css?ver=1.5.4')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='vwcss-bootstrap-css' href="{{asset('blog/themes/sprout/css/bootstrap357c.css?ver=1.5.4')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='vwcss-mmenu-css' href="{{asset('blog/themes/sprout/js/jquery-mmenu/css/jquery.mmenu.custom357c.css?ver=1.5.4')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='vwcss-theme-css' href="{{asset('blog/themes/sprout/style357c.css?ver=1.5.4')}}" type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{asset('css/blog.css')}}' type='text/css' media='all'/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
@endsection

@section('content')
    <div class="vw-page-wrapper clearfix vw-sidebar-position-right" style="padding-top:140px;">
        <div class="container">
            <div class="row">
                <div id="vw-page-content" class="vw-page-content" role="main">
                    <div class="vw-post-loop vw-post-loop-masonry-grid-2-col">
                        <div class="row">
                            <div class="col-sm-12">
                                @if(!empty($category))
                                    <div class="vw-page-title-box clearfix">
                                        <div class="vw-page-title-box-inner">
                                            <span class="vw-label vw-header-font">Danh &nbsp; mục</span>
                                            <h1 class="vw-page-title">{{ $category->name }}</h1>
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($keyword))
                                    <div class="vw-page-title-box clearfix">
                                        <h1 class="vw-page-title">Kết quả tìm kiếm cho từ khóa "{{ $keyword }}"</h1>
                                    </div>
                                @endif
                                <div class="vw-post-loop-inner vw-isotope vw-block-grid vw-block-grid-xs-1 vw-block-grid-sm-2">
                                    @foreach($news as $item)
                                        <div class="vw-block-grid-item">
                                            <div class="vw-post-box vw-post-style-block vw-post-style-masonry vw-post-format-standard"
                                                 itemscope itemtype="http://schema.org/Article">
                                                <a class="vw-post-box-thumbnail" href="{{ route('news_detail', $item->id) }}"
                                                   rel="bookmark">
                                                    <img width="360" height="207" src="{{App\Helpers\Url::LFMUrl($item->image)}}"
                                                         class="attachment-vw_one_third_thumbnail_no_crop wp-post-image"
                                                         alt="Tips to solve the common pain points in custom software development"
                                                         itemprop="image"/></a>

                                                <div class="vw-post-box-inner">
                                                    <div class="vw-post-categories">
                                                        <a class=" vw-category-link vw-cat-id-26"
                                                           href="{{route('news_category', $item->news_category_id)}}" title="View all posts in Software Development"
                                                           rel="category">{{ $item->category->name }}
                                                        </a>
                                                    </div>
                                                    <h3 class="vw-post-box-title" itemprop="headline">
                                                        <a href="{{ route('news_detail', $item->id) }}"
                                                           class="" itemprop="url">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h3>

                                                    <div class="vw-post-meta">
                                                        <span
                                                                class="vw-post-date updated">
                                                            <i class="icon-entypo-clock"></i>
                                                            <time itemprop="datePublished" datetime="{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}">
                                                                {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                                            </time>
                                                        </span>
                                                    </div>

                                                    <div class="vw-post-box-excerpt">
                                                        <p>{{ $item->short_description }}</p>
                                                    </div>

                                                </div>

                                                <div class="vw-post-box-footer vw-header-font">

                                                    <a href="{{ route('news_detail', $item->id) }}"
                                                       class="vw-post-box-read-more"><span>Xem tiếp</span>
                                                        <i class="vw-icon icon-iconic-right-circle"></i></a>

                                                    <div class="vw-post-share-icons">
                                                        <a class="vw-post-shares-social vw-post-shares-social-facebook"
                                                           title="Share to Facebook" href="http://www.facebook.com/sharer.php?u={{ urlencode(route('news_detail', $item->id)) }}"
                                                           data-post-id="1497" data-share-to="facebook" data-width="500"
                                                           data-height="300">
                                                            <i class="vw-icon icon-social-facebook"></i>
                                                        </a>
                                                        <a class="vw-post-shares-social vw-post-shares-social-twitter"
                                                           title="Share to Twitter" href="http://twitter.com/home?status={{ urlencode($item->title . ' - ' . route('news_detail', $item->id)) }}"
                                                           data-post-id="1497" data-share-to="twitter" data-width="500"
                                                           data-height="300"><i class="vw-icon icon-social-twitter"></i>
                                                        </a>
                                                        <a class="vw-post-shares-social vw-post-shares-social-gplus"
                                                           title="Share to Google+" href="http://plus.google.com/share?url={{ urlencode(route('news_detail', $item->id)) }}"
                                                           data-post-id="1497" data-share-to="gplus" data-width="500"
                                                           data-height="475"><i class="vw-icon icon-social-gplus"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <nav class="vw-page-navigation clearfix" role="navigation">
                        <span class="vw-page-navigation-title">Trang : </span>

                        {!! $news->links('partials.pagination') !!}

                        <div class="vw-page-navigation-divider"></div>
                    </nav>
                </div>
                <aside class="vw-page-sidebar vw-page-sidebar-right">
                    <meta itemprop="
                        name" content="Right Sidebar">

                    <div class="vw-sticky-sidebar-wrapper">
                        <div class="vw-sticky-sidebar">
                            <div id="search-2" class="widget widget_search">
                                <form role="search" method="get" class="search-form">
                                    <label> <span class="screen-reader-text">Tìm kiếm:</span>
                                        <input type="search" class="search-field" placeholder="Từ khóa &hellip;"
                                               value="" name="s" title="Tìm kiếm:"/> </label>
                                    <input type="submit" class="search-submit" value="Tìm kiếm"/>
                                </form>
                            </div>
                            <div id="recent-posts-2" class="widget widget_recent_entries">
                                <h3 class="widget-title"><span>Tin tức mới</span></h3>
                                <ul>
                                    @foreach($recent as $news)
                                        <li>
                                            <a href="{{ route('news_detail', $news->id)  }}">
                                                {{$news->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="categories-2" class="widget widget_categories">
                                <h3 class="widget-title"><span>Danh mục</span></h3>
                                <ul>
                                    @foreach($categories as $cat)
                                        <li class="cat-item">
                                            <a href="{{ route('news_category', $cat->id)  }}">{{$cat->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>


            </div>
        </div>

    </div>

@endsection