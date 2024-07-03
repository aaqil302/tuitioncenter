@extends('frontend.layout.main')
@section('title', 'tarjuma_tul_quran')
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
                <h1 class="display-5 pb-4 m-0 text-primary">Tarjuma Ul Quran Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Tarjuma Tul Quran, often referred to simply as Quran translation, is the process of rendering the meanings of the Quranic verses from classical Arabic into other languages. This practice allows individuals who do not understand Arabic to access and comprehend the profound wisdom, guidance, and teachings contained within the Quran.</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right"data-wow-delay="0.5s" >
                <img src="{{asset('frontend/img/tarjuma.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">
               <b> <p class="text-light"style="font-size: 16px;">Key Considerations in Quran Translation:</p></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Translators endeavor to accurately convey the meanings of Quranic verses, taking into account the linguistic nuances, idiomatic expressions, and eloquence of classical Arabic.</li>

                    <li class="text-light"style="font-size: 16px;">Translators strive to understand the historical and cultural context of Quranic revelations, as well as the broader context of Islamic jurisprudence and theological principles, to ensure accurate interpretation and translation.</li>

                    <li class="text-light">Quran translators aim to preserve the integrity and authenticity of the Quranic message, avoiding interpretations or additions that deviate from the original text's intended meanings.</li>

                    <li class="text-light"style="font-size: 16px;">Translations of the Quran prioritize clarity and accessibility, making the profound teachings and guidance accessible to readers of varying linguistic backgrounds and levels of religious knowledge.</li>

                    <li class="text-light"style="font-size: 16px;">Quran translation often involves the expertise of scholars and linguists well-versed in both classical Arabic and the target language, ensuring accurate interpretation and translation of Quranic verses.</li>

                </ul>

                    <b><p class="text-light">The Significance of Tarjuma Tul Quran:</p></b>
                    <ul>
                        <li class="text-light"style="font-size: 16px;"> Quran translations enable individuals who do not understand Arabic to access and benefit from the divine guidance, wisdom, and teachings contained within the Quran, fostering spiritual growth and enlightenment.</li>
    
                        <li class="text-light"style="font-size: 16px;"> Translations of the Quran facilitate study, reflection, and contemplation, allowing readers to deepen their understanding of Islamic beliefs, values, and principles.</li>
    
                        <li class="text-light">Quran translations contribute to promoting interfaith dialogue and understanding by making the Quranic message accessible to individuals of diverse religious backgrounds and cultures.</li>
    
                        <li class="text-light"style="font-size: 16px;">Translations of the Quran play a crucial role in spreading Islam's message to diverse communities worldwide, fostering a deeper appreciation for the Quran's universal values and teachings.</li>
    
    
                    </ul>
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