
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio site for bert0018</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/vendors/css/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>

<body>
<!-- ///////////////////////////////////////////////////////
                  START THE NAVBAR SECTION
/////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo_small_long.png" alt="logo image">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === '/' ? 'disabled': 'active'}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'about' ? 'disabled': 'active'}}" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'dashboard' ? 'disabled': 'active'}}" href="dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'faq' ? 'disabled': 'active'}}" href="faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'blog' ? 'disabled': 'active'}}" href="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() === 'download' ? 'disabled': 'active'}}" href="download">Downloads</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- ///////////////////////////////////////////////////////
                  START THE FOOTER SECTION
/////////////////////////////////////////////////////////-->
<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- CONTENT FOR THE PHONE -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        <path d="M15 7a2 2 0 0 1 2 2" />
                        <path d="M15 3a6 6 0 0 1 6 6" />
                    </svg>
                </div>
                <div class="contact-box__info">
                    <a href="" class="contact-box__info--title">+0118 489 000</a>
                    <p class="contact-box__info--subtitle">Mon-Fri 08:00-20:00 </p>
                </div>
            </div>

            <!-- CONTENT FOR EMAIL -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="3 9 12 15 21 9 12 3 3 9" />
                        <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                        <line x1="3" y1="19" x2="9" y2="13" />
                        <line x1="15" y1="13" x2="21" y2="19" />
                    </svg>
                </div>
                <div class="contact-box__info">
                    <a href="" class="contact-box__info--title">info@hz.nl</a>
                    <p class="contact-box__info--subtitle">HZ email</p>
                </div>
            </div>

            <!-- CONTENT FOR LOCATION -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                <div class="contact-box__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24"
                         stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="18" y1="6" x2="18" y2="6.01" />
                        <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                        <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                        <line x1="9" y1="4" x2="9" y2="17" />
                        <line x1="15" y1="15" x2="15" y2="20" />
                    </svg>
                </div>
                <div class="contact-box__info">
                    <a href="" class="contact-box__info--title">Middelburg, Netherlands</a>
                    <p class="contact-box__info--subtitle">Het Groene Woud 1, 4331 NB</p>
                </div>
            </div>
        </div>
    </div>

    <!-- START SCHOOL INFO CONTENT -->
    <div class="container">
        <div class="row text-white justify-content-center mt-3 pb-3">
            <div class="col-12 col-sm-6 col-lg-6">
                <h5 class="text-capitalize fw-bold">Hogeschool Zeeland</h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <p class="lh-lg">
                    The HZ University of Applied Sciences (Dutch: Hogeschool Zeeland - HZ) is a vocational university in the
                    Dutch province of Zeeland and has buildings in Vlissingen, Roosendaal and Middelburg.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                <h5 class="text-capitalize fw-bold">Useful links</h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <ul class="list-inline company-list">
                    <li><a
                            href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
                            target="_blank" rel="noopener noreferrer">CER 2021-2022</a></li>
                    <li><a
                            href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
                            target="_blank" rel="noopener noreferrer">IR 2020-2021</a></li>
                    <li><a href="https://learn.hz.nl/my/" target="_blank" rel="noopener noreferrer">HZ Learn</a></li>
                    <li><a
                            href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                            target="_blank" rel="noopener noreferrer">MS Teams</a></li>
                    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank"
                           rel="noopener noreferrer">Study Progress</a></li>
                    <li><a href="https://github.com/HZ-HBO-ICT" target="_blank" rel="noopener noreferrer">Github</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                <h5 class="text-capitalize fw-bold">Contacts</h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <ul class="list-inline company-list">
                    <li><a href="mailto:bert0018@hz.nl" target="_blank" rel="noopener noreferrer">Email</a></li>
                    <li><a href="https://github.com/bert0018" target="_blank" rel="noopener noreferrer">Github</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                <h5 class="text-capitalize fw-bold">Projects</h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <ul class="list-inline company-list">
                    <li><a href="https://github.com/bert0018/bert0018.github.io" target="_blank"
                           rel="noopener noreferrer">Website</a></li>
                    <li><a href="https://lifelinegame.github.io/" target="_blank" rel="noopener noreferrer">LifeLine</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- START COPYRIGHT INFO -->
    <div class="footer-bottom pt-5 pb-5">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12">
                    <div class="footer-bottom__copyright">
                        &COPY; Copyright 2021 Portfolio Website | Created by Jesper Bertijn
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/js/bootstrap.bundle.js"></script>

</body>
</html>
