@extends('frontend.layout.main')
@section('title', 'seerat_e_mustafa_course')
@section('main-container')
<style>
    body{
        background: #012B2A;
    }
</style>
<div class="container-fluid about py-5" style="margin-top: 150px; background-color: #012B2A">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12" data-wow-delay="0.5s">
                <h1 class="display-5 pb-4 m-0 text-primary">Seerat e Mustafa Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Welcome to our Seerat e Mustafa Course, where we delve deep into the life and teachings of the Prophet Muhammad (PBUH), the exemplar of mercy and guidance for all humanity. This course offers a comprehensive exploration of the Prophet's life, character, and legacy, providing invaluable insights into his teachings and their relevance in today's world.</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/seerat.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">
                <b><p class="text-primary">Course Overview:</p></b>
             <ol>
               <b> <li class="text-light"style="font-size: 16px;">Introduction to Seerat-e-Nabi:</li></b>

                <ul>
                    <li class="text-light"style="font-size: 16px;">Understanding the importance and significance of studying the life of the Prophet Muhammad (PBUH).</li>

                    <li class="text-light"style="font-size: 16px;">Exploring the sources of Seerah and methodologies for studying the Prophet's biography.</li>

                    <li class="text-light"style="font-size: 16px;">Emphasizing the universal message of mercy, justice, and compassion exemplified by the Prophet.</li>
                </ul>
<br>
                <b> <li class="text-light"style="font-size: 16px;">Early Life and Pre-Prophethood:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Examining the socio-political context of pre-Islamic Arabia.</li>

                    <li class="text-light"style="font-size: 16px;">Narrating the events surrounding the Prophet's birth and upbringing.</li>

                    <li class="text-light"style="font-size: 16px;">Analyzing the early signs of prophethood and the spiritual journey of the Prophet.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Prophethood and Revelation:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Understanding the circumstances surrounding the first revelation.</li>

                    <li class="text-light"style="font-size: 16px;">Exploring the initial challenges faced by the Prophet and his companions.</li>

                    <li class="text-light"style="font-size: 16px;">Reflecting on the divine messages conveyed through the Quranic revelations.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Establishing the Muslim Community:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Tracing the migration to Medina and the establishment of the first Islamic state.</li>

                    <li class="text-light"style="font-size: 16px;">Analyzing the Prophet's leadership qualities and governance principles.</li>

                    <li class="text-light"style="font-size: 16px;">Examining the treaties, alliances, and diplomatic relations during the time of the Prophet.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Challenges and Triumphs:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Narrating the major battles and expeditions during the Prophet's lifetime.</li>

                    <li class="text-light"style="font-size: 16px;">Reflecting on the Prophet's exemplary conduct during times of adversity.</li>

                    <li class="text-light"style="font-size: 16px;">Highlighting the miraculous events and divine interventions in support of the Prophet and the Muslim community.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Moral and Ethical Teachings:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Exploring the Prophet's teachings on morality, ethics, and interpersonal relations.</li>

                    <li class="text-light"style="font-size: 16px;">Emphasizing the importance of kindness, compassion, and justice in everyday life.</li>

                    <li class="text-light"style="font-size: 16px;">Drawing practical lessons from the Prophet's interactions with individuals from diverse backgrounds.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Last Days and Legacy:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Narrating the events leading up to the Prophet's passing.</li>

                    <li class="text-light"style="font-size: 16px;">Reflecting on the farewell sermon and the final advice of the Prophet.</li>

                    <li class="text-light"style="font-size: 16px;">Examining the Prophet's enduring legacy and his impact on subsequent generations.</li>
                </ul>
             </ol>
            </div>
        </div>

            <div class="row" style="margin-top: 15px;">
            <div class="col-lg-12 text-center" data-wow-delay="0.5s">
                <a class="btn btn-primary" href="{{route('price')}}">Apply Now</a>
            </div>
        </div>
    </div>
</div>




@endsection