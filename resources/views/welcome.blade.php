@extends('layout')

@section('content')
<!-- ///////////////////////////////////////////////////////
                  START THE INTRO SECTION
/////////////////////////////////////////////////////////-->
<section id="home" class="intro-section">
    <div class="container">
        <div class="row align-items-center text-white">

            <!-- START THE CONTENT FOR THE INTRO -->
            <div class="col-md-6 intros text-start">
                <h1 class="display-2">
                    <span class="display-2--intro">Hey! I'm Jesper</span>
                    <span class="display-2--description lh-base">This is my portfolio website following my bachelor IT studies at the HZ.</span>
                </h1>
            </div>

            <!-- START THE CONTENT FOR THE BLOG POST PREVIEW -->
            <div class="col-md-6 intros">
                <ul class="blogPreviews">
                    @foreach($Posts as $post)
                        <li class="blogPost shadow mb-3">
                            <h2 class="postTitle">
                                <a href="blog/{{$post->id}}">{{$post->title}}</a>
                            </h2>
                            <hr class="solid">
                            <p class="postExcerpt">{{$post->excerpt}}</p>
                            <p class="postDate">Published on {{$post->created_at}}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill=#fff fill-opacity="1"
              d="M0,192L48,202.7C96,213,192,235,288,213.3C384,192,480,128,576,122.7C672,117,768,171,864,176C960,181,1056,139,1152,138.7C1248,139,1344,181,1392,202.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
@endsection

{{--This is just here in the case the front page becomes longer.--}}
{{--<!-- BACK TO TOP BUTTON -->--}}
{{--<!-- <a href="#" class="shadow btn-primary rounded-circle back-to-top">--}}
{{--<i class="fas fa-chevron-up"></i>--}}
{{--</a> -->--}}





