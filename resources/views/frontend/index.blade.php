@extends('frontend.layout.main')
@section('main-container')

        <!-- Hero Start -->
        <div class="container-fluid hero-header" >
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-7 ">
                        <div class="hero-header-inner animated zoomIn">
                            <p class="fs-4 text-light">WELCOME TO Quran Tuition Center</p>
                            <h1 class="display-1 mb-5 text-light">Learn Quran Online</h1>
                            <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5">About Us</a>
                        </div>
                    </div>
                    <div class="col-5" >
                        <div class="quran-pic animated zoomIn" >
                            <img src="{{ asset('frontend/img/05.png') }}" alt="" class="img-fluid"style="height: 480px; margin-left:30px;" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hero End -->



        <!-- Activities Start -->
        <div class="container-fluid activities py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Courses</p>
                    <h1 class="display-3">Here Are Our Courses</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Madani Qaida Course</h4>
                                <p class="mb-4">Learn Madani Qaida from Quran Tuition Center</p>
                                <a href="{{route('madani-qaida-course')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Nazra-tul-Quran</h4>
                                <p class="mb-4">Learn Nazra-tul-Quran from Quran Tuition Center</p>
                                <a href="{{route('nazra-tul-quran')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Hifz-ul-Quran</h4>
                                <p class="mb-4">Learn Hifz-ul-Quran from Quran Tuition Center</p>
                                <a href="{{route('hifz-ul-quran')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Tarjuma-tul-Quran</h4>
                                <p class="mb-4">Learn Tarjuma-tul-Quran from Quran Tuition Center</p>
                                <a href="{{route('tarjuma-tul-quran')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Tafsir-al-Quran</h4>
                                <p class="mb-4">Learn Tafsir-al-Quran from Quran Tuition Center</p>
                                <a href="{{route('tafsir-al-quran')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Farz-Uloom Course</h4>
                                <p class="mb-4">Learn Farz-Uloom from Quran Tuition Center</p>
                                <a href="{{route('farz-uloom-course')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Namaz Course</h4>
                                <p class="mb-4">Learn the correct way to pray Namaz from Quran Tuition Center</p>
                                <a href="{{route('namaz-course')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="ms-4">
                                <h4>Seerat-e-Mustafa Course</h4>
                                <p class="mb-4">Learn all about the Seerat-e-Nabi from Quran Tuition Center</p>
                                <a href="{{route('seerat-e-mustafa-course')}}" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Activities Start -->
        
        <!-- About Satrt -->
        <div class="container-fluid about py-5" style="margin-top: 50px; background-color: #012B2A; height: 55rem;">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-xl-6 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="display-5 pb-4 m-0 text-primary">About Us</h1>
                        <p class="pb-4 text-light mb-4" style="font-size: 16px;">Quran Tuition Center is an Online Quran Academy that offers Online Quran Classes to people all over the World. We seek to deliver the best and completely accurate comprehension of Basic Quran Reading, Quran with Tajweed, Quran Memorization, Tafseer e Quran, and Quranic Arabic on one platform. In this Digital age, learning the Quran is not difficult. The top teachers are available to you even if you choose to learn at home.

                           <p class="pb-4 text-light mb-4"  style="font-size: 16px;"> Quran Tuition Center is one of the leading and legit platforms for learning the Quran. Any device that has Internet access may be used to learn the Quran Online. It might be your laptop, Tablet, Computer, or even your Mobile Phone. With the aid of thorough knowledge of Tajweed, comprehension of this esteemed text, and Quranic Arabic, our main focus is on imparting the best Quranic interpretations.</p>
                            
                            <p class="pb-4 text-light mb-4"  style="font-size: 16px;">Due to its commitment to Students and its persistent attempts to enhance it over time, the Quran Tuition Center has steadily soared to new heights in a relatively short period of time. We want to include as many students as we can in the charitable deed of Hifz al Quran.</p>
                    </div>
                    <div class="col-xl-6 wow fadeIn" data-wow-delay="0.1s">
                        <img src="{{asset('frontend/img/q.jpg')}}" style="height: 35rem; margin-left: 50px; margin-top: 90px;" class="img-fluid" alt="">
                    </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
        <!-- About End -->

        @endsection
    