@extends('front.layout.app')
@section('title',dataJson()['blog']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['blog']['page-name'])
    
    <!-- End Main Header Page -->
<!-- Start Blog-->
<section class="section-blog"> 
      <div class="main-title text-center center-title mb-5">
        <h3 class="title__text" data-title="{{dataJson()['blog']['recent-blog']['title']}}">{{dataJson()['blog']['recent-blog']['header']}}</h3>
      </div>
      <div class="container"> 
        <div class="row"> 
          @foreach ($blogs as $blog)
          <div class="col-lg-4 mb-4">
            <div class="blog__item"> <img class="blog__item-img" src="content/assets/images/blog/blog-1.webp" alt="img-blog">
              <div class="blog__item-information p-4"> <span class="blog__item-information-date text-uppercase">AUGUST 3, 2020 ADMIN</span>
                <p class="my-3 blog__item-information-desc">{{$blog->small_description}}</p>
                <div class="d-flex justify-content-between align-items-center"><a class="btn main-btn" href="#">Read more</a>
                  <div class="blog__item-information-comment"><span class="blog__item-information-icon me-1"> <i class="fa fa-comment" aria-hidden="true"></i></span><span>3</span></div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          <!-- End col-->
        </div>
        <div class="blog_pagination d-flex justify-content-center">
        {{$blogs->links()}}
        </div>
      </div>
    </section>
    <!-- End Blog-->
@endsection