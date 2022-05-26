@extends('layout')

@section('content')
<!-- ///////////////////////////////////////////////////////
                  START THE ABOUT SECTION
/////////////////////////////////////////////////////////-->
<section id="profile" class="interests">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold">About me</h1>
            <div class="heading-line mb-1"></div>
        </div>

        <!-- START THE DESCRIPTION CONTENT -->
        <!-- <div class="row pt-2 pb-2 mt-0 mb-3">
          <div class="col-md-6 border-right">
            <div class="bg-white p-3">
              <h2 class="fw-bold text-capitalize text-center">
                I study at the HZ, but who am I?
              </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-white p-4 text-start">
              <p class="fw-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptates eaque rerum blanditiis non commodi facere corporis nihil quia reiciendis voluptas iusto suscipit neque ea officiis accusantium, veniam at porro?
              </p>
            </div>
          </div>
        </div> -->
    </div>

    <!-- START THE CONTENT FOR ABOUTME -->
    <div class="container">

        <!-- START PERSONAL CONTENT -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 interests mt-4">
                <div class="interests__content">
                    <div class="icon d-block fas fa-user"></div>
                    <h3 class="display-3--title mt-1">Who I am</h3>
                    <p class="lh-lg">
                        I am a 19 year old student at the HZ, pursuing a bachelor level diploma in the field of IT.
                        I grew up in the neighboring city of Vlissingen, where I still live to this day. I graduated from
                        Scheldemond College with a
                        HAVO N+G diploma, along with an advanced first aid certification. I am currently employed in an elderly
                        care home called Scheldehof,
                        where I have worked for the past 3 years and counting.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 interests mt-4 text-end">
                <div class="interests__image">
                    <img src="img/about-me/Personal data _Isometric.png" alt="Personal illustration" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- START HOBBIES/INTERESTS CONTENT -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 interests mt-4 text-start">
                <div class="interests__image">
                    <img src="img/about-me/Drone_Isometric.png" alt="Hobbies illustration" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 interests mt-4">
                <div class="interests__content">
                    <div class="icon d-block fas fa-gamepad"></div>
                    <h3 class="display-3--title mt-1">My interests</h3>
                    <p class="lh-lg">
                        I greatly enjoy technology, both hardware and software. Gaming, drones, phones, Virtual Reality;
                        I love watching them come to life at the tap of a button. I'm currently working on getting my desktop PC a
                        liquid-cooling overhaul, as well as figuring out some details and technicalities to start building my own
                        drone.
                        If the parts ever become available, of course.
                    </p>
                </div>
            </div>
        </div>

        <!-- START IT CONTENT -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 interests mt-4 text-end">
                <div class="interests__content">
                    <div class="icon d-block fas fa-code"></div>
                    <h3 class="display-3--title mt-1">IT and me</h3>
                    <p class="lh-lg">
                        Due to a hearing defect, I am unable to enter the fields of First Responders. However, technology still
                        exists
                        within those fields, and IT is a great way to side-step into the world of emergency response. Digital
                        detectives,
                        VR/AR training modules, and defibrilator drones are just some of many paths I can take.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 interests mt-4">
                <div class="interests__image">
                    <img src="img/about-me/VR_Isometric.png" alt="IT illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
