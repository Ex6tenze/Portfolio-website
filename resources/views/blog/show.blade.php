@extends('layout')

@section('content')
    <div class="preContent">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,160C384,181,480,235,576,229.3C672,224,768,160,864,138.7C960,117,1056,139,1152,133.3C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <section id="singleBlogpost" class="singleBlogpost">

        <!-- TITLE AND TIMESTAMPS -->
        <div class="container">
            <div class="row text-center">
                <h1 class="blogPostHeader display-3 fw-bold text-uppercase">{{$posts->title}}</h1>
                <p class="timestamp"><i>Created at {{$posts->created_at}}</i></p>
                <p class="timestamp"><i>Updated at {{$posts->updated_at}}</i></p>
                <div class="heading-line"></div>
            </div>
        </div>

        <!-- BODY OF THE BLOGPOST -->
        <div class="container">
            <div class="row text-center">
                <p class="postContent">{{$posts->body}}</p>
            </div>
        </div>
    </section>

    <div class="postContent">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,181.3C384,181,480,171,576,144C672,117,768,75,864,96C960,117,1056,203,1152,213.3C1248,224,1344,160,1392,128L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>
@endsection
