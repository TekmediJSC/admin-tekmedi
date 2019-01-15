@extends('layouts.app')

@section('title', $news->title)
@section('description', $news->meta_description)
@section('keywords', $news->meta_keyword)
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
    <div class="vw-page-wrapper clearfix vw-sidebar-position-right" style="padding-top:90px;">
        <div class="container">
            <div class="row">
                <div class="vw-page-content" role="main">
                    <article class="vw-main-post clearfix post-1497 post type-post status-publish format-standard has-post-thumbnail hentry category-software-development tag-custom-software-development tag-outsource-software-development"
                             itemscope itemtype="http://schema.org/Article">

                        <div class="vw-post-categories">
                            <a class=" vw-category-link vw-cat-id-26" href="{{ route('news_category', $news->news_category_id) }}"
                               title="View all posts in Software Development" rel="category">{{ $news->category->name }}
                            </a>
                        </div>
                        <h1 class="entry-title" itemprop="headline">{{ $news->title }}</h1>
                        <span class="updated hidden">{{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y') }}</span>

                        <div class="vw-post-meta vw-post-meta-large">
                            <div class="vw-post-meta-inner">

                                <a href="index.html" class="vw-post-date updated" title="Permalink to Tips to solve the common pain points in custom software development"
                                   rel="bookmark"><i class="icon-entypo-clock"></i>
                                    <time itemprop="datePublished" datetime="{{ \Carbon\Carbon::parse($news->created_at)->format('Y-m-d') }}">
                                        {{ \Carbon\Carbon::parse($news->created_at)->format('d/m/Y') }}
                                    </time>
                                </a>
                            </div>

                            <div class="vw-post-meta-icons">

                                <span class="vw-post-meta-icon vw-post-view-count vw-post-views-id-1497" data-post-id="1497" title="Views"> <i
                                            class="vw-icon icon-iconic-eye"></i> <span class="vw-post-view-number">{{ $news->views }}</span></span>

                            </div>
                        </div>
                        <figure class="vw-featured-image " itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                            <img width="750" height="432" src="{{ App\Helpers\Url::LFMUrl($news->image) }}"
                                 class="attachment-vw_two_third_thumbnail_no_crop wp-post-image" alt="{{$news->title}}"
                                 itemprop="image"/>
                        </figure>

                        <div class="vw-post-content clearfix" itemprop="articleBody">
                            {!! $news->content !!}
                        </div>

                    </article>

                </div>


                <aside class="vw-page-sidebar vw-page-sidebar-right"
                ">
                <meta itemprop=" name" content="Right Sidebar">

                <div class="vw-sticky-sidebar-wrapper">
                    <div class="vw-sticky-sidebar">
                        <div id="search-2" class="widget widget_search">
                            <form role="search" method="get" class="search-form" action="{{route('news')}}">
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