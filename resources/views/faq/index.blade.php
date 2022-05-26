@extends('layout')

@section('content')
<!-- ///////////////////////////////////////////////////////
                  START THE FAQ SECTION
/////////////////////////////////////////////////////////-->
<section id="faq" class="faq">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,128L60,112C120,96,240,64,360,69.3C480,75,600,117,720,144C840,171,960,181,1080,160C1200,139,1320,85,1380,58.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">faq</h1>
            <div class="heading-line"></div>
            <p class="lead">These are some of my most frequently asked questions.</p>
        </div>

        <!-- ACCORDION CONTENT -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">

                    @foreach($faqs as $faq)
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="heading{{$faq->id}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                                    {{$faq->question}}
                                </button>
                            </h2>
                            <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faq->id}}"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{$faq->answer}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,224L48,234.7C96,245,192,267,288,277.3C384,288,480,288,576,250.7C672,213,768,139,864,138.7C960,139,1056,213,1152,240C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
@endsection
