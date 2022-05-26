@extends('layout')

@section('content')
<!-- ///////////////////////////////////////////////////////
                  START THE DASHBOARD SECTION
/////////////////////////////////////////////////////////-->
<section id="dashboard" class="monitor">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,256L48,256C96,256,192,256,288,218.7C384,181,480,107,576,101.3C672,96,768,160,864,170.7C960,181,1056,139,1152,128C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <div class="container col-md-12">
        <div class="row text-center">
            <h1 class="display-3 fw-bold">Dashboard</h1>
            <div class="heading-line mb-1"></div>
        </div>

        <!-- START THE TABLE -->
        <div class="table-responsive">
            <table class="table table-striped table-hover border table-bordered table-sm">
                <thead>
                <tr>
                    <th scope="col">Quartile</th>
                    <th scope="col">Course</th>
                    <th scope="col">EC</th>
                    <th scope="col">Exam</th>
                    <th scope="col">Grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row" rowspan="3">1</td>
                    <td>Programme and Career Orientation (PCO)</td>
                    <td>2,5</td>
                    <td>Assessment</td>
                    <td>9,3</td>
                </tr>
                <tr>
                    <td>Computer Science Basics (CSB)</td>
                    <td>5,0</td>
                    <td>Written</td>
                    <td>7,1</td>
                </tr>
                <tr>
                    <td>Programming Basics (PB)</td>
                    <td>5,0</td>
                    <td>Case Study</td>
                    <td>9,0</td>
                </tr>
                <tr>
                    <td scope="row" rowspan="2">2</td>
                    <td rowspan="2">Object Oriented Programming (OOP)</td>
                    <td rowspan="2">10,0</td>
                    <td>Case Study</td>
                    <td>6,0</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>7,8</td>
                </tr>
                <tr>
                    <td scope="row" rowspan="4">3</td>
                    <td>Framework Development 1 (FDE1)</td>
                    <td>5,0</td>
                    <td>Case Study</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="3">Framework Project 1 (FPE1)</td>
                    <td rowspan="3">7,5</td>
                    <td>Project</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Assessment</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Report</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td scope="row" rowspan="3">4</td>
                    <td rowspan="3">Framework Project 2 (FPE2)</td>
                    <td rowspan="3">10,0</td>
                    <td>Portfolio</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Assessment</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td scope="row" rowspan="3">Year</td>
                    <td>Personal Professional Development (PPD)</td>
                    <td>12,5</td>
                    <td>Portfolio</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Personality 1</td>
                    <td>1,25</td>
                    <td></td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Personality 2</td>
                    <td>1,25</td>
                    <td></td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
        </div>

        <p class="tableFooter">Obtaining all points from quartile 1-4 secures the minimum 45 EC needed for the BSA
            guideline.</p>
        <p class="tableFooter">Personality 1+2 can be done all year long. PPD is graded at the end of the year.</p>
    </div>

    <!-- START THE PROGRESS BAR -->
    <!-- <div class="progress">
    <div class="progress-bar bg-primary border rounded progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20.83%">21%</div>
  </div> -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
              d="M0,192L48,202.7C96,213,192,235,288,245.3C384,256,480,256,576,240C672,224,768,192,864,192C960,192,1056,224,1152,245.3C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
@endsection
