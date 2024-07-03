@extends('frontend.layout.main')
@section('title', 'farz_uloom_course')
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
                <h1 class="display-5 pb-4 m-0 text-primary">Farz Ul Uloom Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Farz Ul Uloom, also known as Farz Al-Ulum, is an integral aspect of Islamic education that focuses on the fundamental obligations (Farz) incumbent upon every Muslim to know and practice. Rooted in the Quran and Hadith, Farz Ul Uloom encompasses various disciplines, teachings, and practices essential for leading a devout Islamic life.</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/farz.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">
               <b> <p class="text-light"style="font-size: 16px;">Key Areas of Study:</p></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;"> This branch of Islamic studies focuses on beliefs and creed, exploring the fundamentals of Tawheed (monotheism), Prophethood, and the Hereafter.</li>

                    <li class="text-light"style="font-size: 16px;">Fiqh delves into Islamic law and jurisprudence, elucidating the practical aspects of worship, transactions, family matters, and other aspects of daily life in accordance with Shariah principles.</li>

                    <li class="text-light">Tafsir involves the interpretation and explanation of the Quran, elucidating its meanings, context, and relevance to contemporary issues.</li>

                    <li class="text-light"style="font-size: 16px;"> Hadith studies focus on the traditions and sayings of the Prophet Muhammad (peace be upon him), providing guidance on various aspects of life and religious practices.</li>

                    <li class="text-light"style="font-size: 16px;">Seerah explores the life and teachings of the Prophet Muhammad (peace be upon him), offering insights into his character, actions, and exemplary conduct.</li>

                    <li class="text-light"style="font-size: 16px;">Proficiency in Arabic is essential for understanding the Quran and Hadith in their original language, making it a fundamental component of Farz Ul Uloom.</li>

                </ul>

                    <b><p class="text-light">Importance and Benefits:</p></b>

                    <p class="text-light">Studying Farz Ul Uloom equips individuals with the knowledge and skills necessary to fulfill their religious obligations and navigate various aspects of life in accordance with Islamic principles. It fosters a deeper understanding of faith, enhances spiritual growth, and strengthens one's connection with Allah (SWT) and the teachings of Islam.</p>

                    <p class="text-light">Furthermore, Farz Ul Uloom plays a crucial role in preserving and transmitting Islamic knowledge from one generation to another, ensuring the continuity of Islamic traditions and values.</p>

                </div>
            </div>
    
                <div class="row" data-wow-delay="0.5s" style="margin-top: 15px;">
                <div class="col-lg-12 text-center" >
                    <a class="btn btn-primary" href="{{route('price')}}">Apply Now</a>
                </div>
            </div>
        </div>
    </div>




@endsection