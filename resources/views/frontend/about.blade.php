@extends('frontend.layout.main')
@section('title', 'about')
@section('main-container')
<style>
    body{
        background: #012B2A;
    }
</style>
        <!-- About Satrt -->
        <div class="container-fluid about py-5" style="background-color: #012B2A;">
            <div class="container py-5"style="margin-top: 100px;">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 pb-4 m-0 text-primary">Who we are?</h1>
                        <p class="pb-4 text-light"style="font-size: 16px;">Quran Tuition Center, like many other projects, was birthed from a single pure intention: to readily make available these Quranic teachings and resources to Muslims around the globe to spread the Nur of Islam. It was more than a momentary lapse. In our journey to spread the Holy teachings and make the understanding of them embed deep into the hearts of our brothers and sisters, we set out with clear motives.</p>
                      <ul>
                       <b> <li class="text-light" style="font-size: 16px;">Today, we facilitate students from all around the world, foster an ever-growing supportive Islamic community, and make our brothers and sisters in Islam reach their goals with convenience and comfort.</li>
                        <br>
                        <li class="text-light"style="font-size: 16px;">
                            We create everlasting impacts together with our bright pupils and motivated tutors.
                        </li>
                        <br>
                        <li class="text-light"style="font-size: 16px;">
                            Here, at Quran Tutor, we are a family with one direction.
                        </li>
                       </b>
                      </ul>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <img src="{{asset('frontend/img/quran.jpg')}}" style="height: 532px; margin-left: 50px" class="img-fluid" alt="">
                    </div>
                    </div>
                   
                </div>
                <div class="container-fluid">
                    <div class="container">
                        <div class="row g-5 mb-5">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <img src="{{asset('frontend/img/study.jpg')}}" class="img-fluid" alt=""> 
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <h1 class="display-5 pb-4 m-0 text-primary">Our Mission</h1>
                                <p class="pb-4 text-light"style="font-size: 16px;">Our primary goal is to spread the message of Allah to the Muslims in the form of Quran teaching. We aim to enable our students to learn Quran fluently to get affection and love from Allah in the world and hereafter. Our certified Quran teachers not only teach students with Quran teaching but also commit their ethical training.
                                As a result, our students get success in every aspect of life. Hence, stay carefree with our online Quran classes for your kids. We assure you that your kids become great Muslims who know the value of the Quran and Islamic study</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        {{-- <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Our Team</p>
                    <h1 class="display-3">Meet Our Organizer</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-xl-5">
                        <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                            <img src="{{asset('frontend/img/team-1.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-7">
                        <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                            <h1>Anamul Hasan</h1>
                            <h5 class="fw-normal fst-italic text-primary mb-4">President</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. aliquip ex ea commodo consequat.</p>
                            <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary">
                                <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-lg-square me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-lg-square"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                                    <img src="{{asset('frontend/img/team-2.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Mustafa Kamal</h5>
                                            <p class="text-dark">Imam</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                                    <img src="{{asset('frontend/img/team-3.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Nahiyan Momen</h5>
                                            <p class="text-dark">Teacher</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.6s">
                                    <img src="{{asset('frontend/img/team-4.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Asfaque Ali</h5>
                                            <p class="text-dark">Volunteer</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End --> --}}
        @endsection