@extends('layout')

@section('content')
<!-- ///////////////////////////////////////////////////////
                  START THE DOWNLOADS SECTION
/////////////////////////////////////////////////////////-->

<section id="downloads" class="downloads">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,192L80,176C160,160,320,128,480,144C640,160,800,224,960,224C1120,224,1280,160,1360,128L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">Downloads</h1>
            <div class="heading-line"></div>
            <p class="lead">Reports are written externally. You can download these files here.</p>
        </div>

        <!-- START THE TABLE -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                <th scope="col">File Name</th>
                <th scope="col">Size</th>
                <th scope="col">Format</th>
                <th scope="col">Download</th>
                </thead>
                <tbody>
                <tr>
                    <td>PCO - Motivation</td>
                    <td>894 KB</td>
                    <td>.docx</td>
                    <td><a href="files/PCO - Motivation.docx"><i class="icon fas fa-solid fa-download"></i></a></td>
                </tr>
                <tr>
                    <td>PCO - View on the job</td>
                    <td>1,571 KB</td>
                    <td>.docx</td>
                    <td><a href="files/PCO - View on the Job.docx" download><i
                                class="icon fas fa-solid fa-download"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,224L80,202.7C160,181,320,139,480,144C640,149,800,203,960,224C1120,245,1280,235,1360,229.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
</section>
@endsection
