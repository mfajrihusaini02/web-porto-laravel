@extends('layouts.app')

@section('title')
    Fajri Portfolio
@endsection

@section('content')
    <section id="intro">
        <div class="intro-overlay"></div>

        <div class="intro-content">
            <div class="row">
                <div class="col-twelve">
                    <h5>Hello, World.</h5>
                    <h1>I'm Muhammad Fajri Husaini.</h1>

                    <p class="intro-position">
                        <span>Front-end Developer</span>
                        <span>Mobile Developer</span>
                    </p>

                    <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
                </div>
            </div>
        </div>
        <!-- /intro-content -->

        <ul class="intro-social">
            <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-github"></i></a>
            </li>
        </ul>
        <!-- /intro-social -->
    </section>
    <!-- /intro -->

    <!-- about section
                           ================================================== -->
    <section id="about">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5>About</h5>
                <h1>Let me introduce myself.</h1>

                <div class="intro-info">
                    <img src="images/profile-pic.jpg" alt="Profile Picture" />

                    <p class="lead">
                        Lorem ipsum Exercitation culpa qui dolor consequat exercitation
                        fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure
                        sunt id pariatur Duis laboris amet exercitation veniam labore
                        consectetur ea id quis eiusmod.
                    </p>
                </div>
            </div>
        </div>
        <!-- /section-intro -->

        <div class="row about-content">
            <div class="col-six tab-full">
                <h3>Profile</h3>
                <p>
                    Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse
                    in magna sint minim officia consectetur nisi commodo ea magna
                    pariatur nisi cillum.
                </p>

                <ul class="info-list">
                    <li>
                        <strong>Fullname:</strong>
                        <span>Muhammad Fajri Husaini</span>
                    </li>
                    <li>
                        <strong>Age:</strong>
                        <span>23</span>
                    </li>
                    <li>
                        <strong>Job:</strong>
                        <span>Freelancer, Frontend Developer</span>
                    </li>
                    <li>
                        <strong>Email:</strong>
                        <span>mfajrihusaini05@gmail.com</span>
                    </li>
                </ul>
                <!-- /info-list -->
            </div>

            <div class="col-six tab-full">
                <h3>Skills</h3>
                <p>
                    Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse
                    in magna sint minim officia consectetur nisi commodo ea magna
                    pariatur nisi cillum.
                </p>

                <ul class="skill-bars">
                    <li>
                        <strong>Vue JS</strong>
                    </li>
                    <li>
                        <strong>Flutter</strong>
                    </li>
                    <li>
                        <strong>Laravel</strong>
                    </li>
                    <li>
                        <strong>PHP</strong>
                    </li>
                    <li>
                        <strong>Javascript</strong>
                    </li>
                </ul>
                <!-- /skill-bars -->
            </div>
        </div>

        <div class="row button-section">
            <div class="col-twelve">
                <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
                <a href="assets/cv.pdf" download="Fajri.pdf" title="Download CV" class="button button-primary">
                    Download CV
                </a>
            </div>
        </div>
    </section>
    <!-- /process-->

    <!-- resume Section
                           ================================================== -->
    <section id="resume" class="grey-section">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5>Resume</h5>
                <h1>More of my credentials.</h1>

                <p class="lead">
                    Lorem ipsum Do commodo in proident enim in dolor cupidatat
                    adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem
                    ipsum Consectetur ut in in eu do.
                </p>
            </div>
        </div>
        <!-- /section-intro-->

        <div class="row resume-timeline">
            <div class="col-twelve resume-header">
                <h2>Work Experience</h2>
            </div>
            <!-- /resume-header -->

            <div class="col-twelve">
                <div class="timeline-wrap">
                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>Front-End Developer</h3>
                            <p>Mei 2023 - Present</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Skyworx Indonesia</h4>
                            <p>
                                Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in
                                magna consectetur nisi cupidatat laboris esse eiusmod deserunt
                                aute do quis velit esse sed Ut proident cupidatat nulla esse
                                cillum laborum occaecat nostrud sit dolor incididunt amet est
                                occaecat nisi.
                            </p>
                        </div>
                    </div>
                    <!-- /timeline-block -->

                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>Multi-Platform and Back-End (Independent Campus)</h3>
                            <p>Februari 2022 - August 2022</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Dicoding Indonesia</h4>
                            <p>
                                Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in
                                magna consectetur nisi cupidatat laboris esse eiusmod deserunt
                                aute do quis velit esse sed Ut proident cupidatat nulla esse
                                cillum laborum occaecat nostrud sit dolor incididunt amet est
                                occaecat nisi incididunt.
                            </p>
                        </div>
                    </div>
                    <!-- /timeline-block -->

                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>Mobile Developer</h3>
                            <p>August 2021 - January 2022</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Seven Inc</h4>
                            <p>
                                Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in
                                magna consectetur nisi cupidatat laboris esse eiusmod deserunt
                                aute do quis velit esse sed Ut proident cupidatat nulla esse
                                cillum laborum occaecat nostrud sit dolor incididunt amet est
                                occaecat nisi incididunt.
                            </p>
                        </div>
                    </div>
                    <!-- /timeline-block -->
                </div>
                <!-- /timeline-wrap -->
            </div>
            <!-- /col-twelve -->
        </div>
        <!-- /resume-timeline -->

        <div class="row resume-timeline">
            <div class="col-twelve resume-header">
                <h2>Education</h2>
            </div>
            <!-- /resume-header -->

            <div class="col-twelve">
                <div class="timeline-wrap">
                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-graduation-cap"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>Diploma in Computer Engineering | GPA 3.63</h3>
                            <p>2019 - 2022</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Padang State Polytechnic</h4>
                            <p>
                                Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in
                                magna consectetur nisi cupidatat laboris esse eiusmod deserunt
                                aute do quis velit esse sed Ut proident cupidatat nulla esse
                                cillum laborum occaecat nostrud sit dolor incididunt amet est
                                occaecat nisi.
                            </p>
                        </div>
                    </div>
                    <!-- /timeline-block -->

                    <div class="timeline-block">
                        <div class="timeline-ico">
                            <i class="fa fa-graduation-cap"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>Science | GPA 89.00</h3>
                            <p>2016 - 2019</p>
                        </div>

                        <div class="timeline-content">
                            <h4>One Senior High School Rengat</h4>
                            <p>
                                Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in
                                magna consectetur nisi cupidatat laboris esse eiusmod deserunt
                                aute do quis velit esse sed Ut proident cupidatat nulla esse
                                cillum laborum occaecat nostrud sit dolor incididunt amet est
                                occaecat nisi incididunt.
                            </p>
                        </div>
                    </div>
                    <!-- /timeline-block -->
                </div>
                <!-- /timeline-wrap -->
            </div>
            <!-- /col-twelve -->
        </div>
        <!-- /resume-timeline -->
    </section>
    <!-- /features -->

    <!-- Portfolio Section
                           ================================================== -->
    <section id="portfolio">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5>Portfolio</h5>
                <h1>Check Out Some of My Works.</h1>

                <p class="lead">
                    Lorem ipsum Do commodo in proident enim in dolor cupidatat
                    adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem
                    ipsum Consectetur ut in in eu do.
                </p>
            </div>
        </div>
        <!-- /section-intro-->

        <div class="row portfolio-content">
            <div class="col-twelve">
                <!-- portfolio-wrapper -->
                <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="images/portfolio/liberty.jpg" alt="Liberty" />
                            <a href="#modal-01" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Liberty</h3>
                                        <span class="folio-types"> Graphic Design </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="images/portfolio/shutterbug.jpg" alt="Shutterbug" />
                            <a href="#modal-02" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Shutterbug</h3>
                                        <span class="folio-types"> Web Design </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="images/portfolio/clouds.jpg" alt="Clouds" />
                            <a href="#modal-03" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Clouds</h3>
                                        <span class="folio-types"> Web Design </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="images/portfolio/beetle.jpg" alt="Beetle" />
                            <a href="#modal-04" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Beetle</h3>
                                        <span class="folio-types"> Branding </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="images/portfolio/lighthouse.jpg" alt="Lighthouse" />
                            <a href="#modal-05" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Lighthouse</h3>
                                        <span class="folio-types"> Web Development </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="images/portfolio/salad.jpg" alt="Salad" />
                            <a href="#modal-06" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Salad</h3>
                                        <span class="folio-types"> Branding </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /folio-item -->

                    <!-- modal popups - begin
                         ============================================================= -->
                    <div id="modal-01" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src="images/portfolio/modals/m-liberty.jpg" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Liberty</h4>
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                ipsum, nec sagittis sem nibh id elit.
                            </p>

                            <div class="categories">Web Development</div>
                        </div>

                        <div class="link-box">
                            <!-- <a href="#">Details</a> -->
                            <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>
                    </div>
                    <!-- /modal-01 -->

                    <div id="modal-02" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src="images/portfolio/modals/m-shutterbug.jpg" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Shutterbug</h4>
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                ipsum, nec sagittis sem nibh id elit.
                            </p>

                            <div class="categories">Web Design</div>
                        </div>

                        <div class="link-box">
                            <!-- <a href="#">Details</a> -->
                            <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>
                    </div>
                    <!-- /modal-02 -->

                    <div id="modal-03" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src="images/portfolio/modals/m-clouds.jpg" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Clouds</h4>
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                ipsum, nec sagittis sem nibh id elit.
                            </p>

                            <div class="categories">Web Design</div>
                        </div>

                        <div class="link-box">
                            <!-- <a href="#">Details</a> -->
                            <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>
                    </div>
                    <!-- /modal-03 -->

                    <div id="modal-04" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src="images/portfolio/modals/m-beetle.jpg" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Beetle</h4>
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                ipsum, nec sagittis sem nibh id elit.
                            </p>

                            <div class="categories">Branding</div>
                        </div>

                        <div class="link-box">
                            <!-- <a href="#">Details</a> -->
                            <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>
                    </div>
                    <!-- /modal-04 -->

                    <div id="modal-05" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src="images/portfolio/modals/m-lighthouse.jpg" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Lighthouse</h4>
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                ipsum, nec sagittis sem nibh id elit.
                            </p>

                            <div class="categories">Web Development</div>
                        </div>

                        <div class="link-box">
                            <!-- <a href="#">Details</a> -->
                            <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>
                    </div>
                    <!-- /modal-05 -->

                    <div id="modal-06" class="popup-modal slider mfp-hide">
                        <div class="media">
                            <img src="images/portfolio/modals/m-salad.jpg" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Salad</h4>
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean
                                sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                ipsum, nec sagittis sem nibh id elit.
                            </p>

                            <div class="categories">Branding</div>
                        </div>

                        <div class="link-box">
                            <!-- <a href="#">Details</a> -->
                            <a href="#" class="popup-modal-dismiss">Close</a>
                        </div>
                    </div>
                    <!-- /modal-06 -->

                    <!-- modal popups - end
                         ============================================================= -->
                </div>
                <!-- /portfolio-wrapper -->
            </div>
            <!-- /twelve -->
        </div>
        <!-- /portfolio-content -->
    </section>
    <!-- /portfolio -->

    <!-- services Section
                           ================================================== -->
    <section id="services">
        <div class="overlay"></div>

        <div class="row section-intro">
            <div class="col-twelve">
                <h5>Services</h5>
                <h1>What Can I Do For You?</h1>

                <p class="lead">
                    Lorem ipsum Do commodo in proident enim in dolor cupidatat
                    adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem
                    ipsum Consectetur ut in in eu do.
                </p>
            </div>
        </div>
        <!-- /section-intro -->

        <div class="row services-content">
            <div id="owl-slider" class="owl-carousel services-list">
                <div class="service">
                    <span class="icon"><i class="icon-earth"></i></span>

                    <div class="service-content">
                        <h3>Mobile Development</h3>

                        <p class="desc">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit.
                        </p>
                    </div>
                </div>
                <!-- /service -->

                <div class="service">
                    <span class="icon"><i class="icon-window"></i></span>

                    <div class="service-content">
                        <h3>Web Development</h3>

                        <p class="desc">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit.
                        </p>
                    </div>
                </div>
                <!-- /service -->

                <div class="service">
                    <span class="icon"><i class="icon-chat"></i></span>

                    <div class="service-content">
                        <h3>Consultancy</h3>

                        <p class="desc">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit.
                        </p>
                    </div>
                </div>
                <!-- /service -->
            </div>
            <!-- /services-list -->
        </div>
        <!-- /services-content -->
    </section>
    <!-- /services -->

    <!-- stats Section
                           ================================================== -->
    <section id="stats" class="count-up">
        <div class="row">
            <div class="col-twelve">
                <div class="block-1-3 block-s-1-3 block-tab-1-2 block-mob-full stats-list">
                    <div class="bgrid stat">
                        <div class="icon-part">
                            <i class="icon-pencil-ruler"></i>
                        </div>

                        <h3 class="stat-count">1500</h3>

                        <h5 class="stat-title">Projects Completed</h5>
                    </div>
                    <!-- /stat -->

                    <div class="bgrid stat">
                        <div class="icon-part">
                            <i class="icon-cup"></i>
                        </div>

                        <h3 class="stat-count">1500</h3>

                        <h5 class="stat-title">Coffee Cups</h5>
                    </div>
                    <!-- /stat -->

                    <div class="bgrid stat">
                        <div class="icon-part">
                            <i class="icon-clock"></i>
                        </div>

                        <h3 class="stat-count">7200</h3>

                        <h5 class="stat-title">Hours</h5>
                    </div>
                    <!-- /stat -->
                </div>
                <!-- /stats-list -->
            </div>
            <!-- /twelve -->
        </div>
        <!-- /row -->
    </section>
    <!-- /stats -->

    <!-- contact
                           ================================================== -->
    <section id="contact">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5>Contact</h5>
                <h1>I'd Love To Hear From You.</h1>

                <p class="lead">
                    Lorem ipsum Do commodo in proident enim in dolor cupidatat
                    adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem
                    ipsum Consectetur ut in in eu do.
                </p>
            </div>
        </div>
        <!-- /section-intro -->

        <div class="row contact-form">
            <div class="col-twelve">
                <!-- form -->
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>
                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Name" value=""
                                minlength="2" required="" />
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email"
                                value="" required="" />
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject"
                                value="" />
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50"
                                required=""></textarea>
                        </div>
                        <div class="form-field">
                            <button class="submitform">Submit</button>
                            <div id="submit-loader">
                                <div class="text-loader">Sending...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <!-- Form End -->

                <!-- contact-warning -->
                <div id="message-warning"></div>
                <!-- contact-success -->
                <div id="message-success">
                    <i class="fa fa-check"></i>Your message was sent, thank you!<br />
                </div>
            </div>
            <!-- /col-twelve -->
        </div>
        <!-- /contact-form -->

        <div class="row contact-info">
            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-pin"></i>
                </div>

                <h5>Where to find me</h5>

                <p>
                    Tomang Raya Tinggi<br />
                    Tomang<br />
                    11440 IDN
                </p>
            </div>

            <div class="col-four tab-full collapse">
                <div class="icon">
                    <i class="icon-mail"></i>
                </div>

                <h5>Email Me At</h5>

                <p>mfajrihusaini05@gmail.com<br /></p>
            </div>

            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-phone"></i>
                </div>

                <h5>Call Me At</h5>

                <p>Mobile: (+62) 822 8765 6102<br /></p>
            </div>
        </div>
        <!-- /contact-info -->
    </section>
    <!-- /contact -->
@endsection
