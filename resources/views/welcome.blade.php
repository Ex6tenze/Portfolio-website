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
        <path fill="#fff" fill-opacity="1" 
            d="M0,128L60,138.7C120,149,240,171,360,149.3C480,128,600,64,720,58.7C840,53,960,107,1080,122.7C1200,139,1320,117,1380,106.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
@endsection

{{--This is just here in the case the front page becomes longer.--}}
{{--<!-- BACK TO TOP BUTTON -->--}}
{{--<!-- <a href="#" class="shadow btn-primary rounded-circle back-to-top">--}}
{{--<i class="fas fa-chevron-up"></i>--}}
{{--</a> -->--}}





