@extends('layout')

@section('content')
    <!-- Waves before the content -->
    <div class="preContent">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <section id="editFaq" class="editFaq">

        <div class="container">
            <div class="row text-center">
                <h1 class="header display-3 fw-bold text-uppercase">Edit an existing Q&A</h1>

                <!-- FORM TO EDIT THE FAQ -->
                <form method="POST" action="/faq/{{$faqs->id}}">
                @csrf
                @method('PUT')

                <!-- Question field -->
                    <div class="field">
                        <label class="label display-6 fw-bold text-uppercase" for="question">Question</label>

                        <div class="control">
                            <input class="input" type="text" name="question" id="question" placeholder="A question..." value="{{$faqs->question}}">
                        </div>
                    </div>

                    <!-- Answer field -->
                    <div class="field">
                        <label class="label display-6 fw-bold text-uppercase" for="answer">Answer</label>

                        <div class="control">
                            <textarea class="input" name="answer" id="answer" placeholder="The answer...">{{$faqs->answer}}</textarea>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- FORM TO DELETE THE FAQ -->
                <form method="POST" action="/faq/{{ $faqs->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="button is-link" type="submit">Delete</button>
                </form>
            </div>
        </div>

    </section>

    <!-- Waves after the content -->
    <div class="postContent">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,32L48,37.3C96,43,192,53,288,80C384,107,480,149,576,176C672,203,768,213,864,192C960,171,1056,117,1152,101.3C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>
@endsection
