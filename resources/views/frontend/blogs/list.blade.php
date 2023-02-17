@extends('frontend.layouts.default')

@section('content')
{{-- @dd($categories); --}}
{{-- @dd($articles); --}}
    <section class="blog_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="blog_left_sidebar">
            @foreach ($articles as $item)
            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0"
                  src="{{Voyager::image($item->thumbnail('medium'))}}" alt="">
                <a href="#" class="blog_item_date">
                  <h3>15</h3>
                  <p>Jan</p>
                </a>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="{{ route('articles', [Route::current()->blog_slug, $item->slug]) }}">
                  <h2>{{$item->translate()->title}}</h2>
                </a>
                <p>{{$item->translate()->desc}}</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                  <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                </ul>
              </div>
            </article>
            @endforeach
            <nav class="blog-pagination justify-content-center d-flex">
              <ul class="pagination">
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="blog_right_sidebar">
            <aside class="single_sidebar_widget search_widget">
              <form action="#">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control"
                      placeholder='Search Keyword' onfocus="this.placeholder=
                      ''" onblur="this.placeholder= 'Search Keyword'">
                    <div class="input-group-append">
                      <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100
                  btn_1 boxed-btn" type="submit">Search</button>
              </form>
            </aside>
            <aside class="single_sidebar_widget post_category_widget">
              <h4 class="widget_title">{{__('Category')}}</h4>
              <ul class="list cat-list">
                @foreach ($categories as $item)
                <li>
                  <a href="#" class="d-flex">
                    <p>{{$item->translate()->title}}</p>
                    
                  </a>
                </li>
                @endforeach
              </ul>
            </aside>
            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">{{__('Recent Post')}}</h3>
              @foreach($recent_blog as $item)
              <div class="media post_item">
                <img style="height: 60px; width: 90px" src="{{Voyager::image($item->thumbnail('small'))}}" alt="post">
                <div class="media-body">
                  <a href="single-blog.html">
                    <h3>{{$item->translate()->title}}</h3>
                  </a>
                  <p>January 12, 2019</p>
                </div>
              </div>
              @endforeach
            </aside>
            
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection