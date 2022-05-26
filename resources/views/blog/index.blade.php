@extends('layout')

@section('content')
<!-- ///////////////////////////////////////////////////////
                  START THE BLOG SECTION
/////////////////////////////////////////////////////////-->
<section id="blog" class="blog">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,96L80,85.3C160,75,320,53,480,85.3C640,117,800,203,960,213.3C1120,224,1280,160,1360,128L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">blog</h1>
            <div class="heading-line"></div>
        </div>
    </div>

    <!-- CONTENT FOR ENTRIES -->
    <div class="container">
        <div class="row blogListings">
            @foreach($posts as $post)
                <div class="col-lg-5 blogPost shadow mb-3">
                    <h2 class="postTitle">
                        <a href="blog/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <hr class="solid">
                    <p class="postExcerpt">{{$post->excerpt}}</p>
                    <p class="postDate">Published on {{$post->created_at}}</p>
                 </div>
             @endforeach
        </div>
    </div>

    <!-- Back to top button -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,64L80,64C160,64,320,64,480,85.3C640,107,800,149,960,176C1120,203,1280,213,1360,218.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
</section>
@endsection
