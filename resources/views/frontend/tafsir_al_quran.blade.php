@extends('frontend.layout.main')
@section('title', 'tafsir_al_quran')
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
                <h1 class="display-5 pb-4 m-0 text-primary">Tafsir Ul Quran Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Tafsir Ul Quran, often simply referred to as Tafsir, is the scholarly interpretation and exegesis of the Quran, the central religious text of Islam. It is a profound endeavor aimed at unraveling the layers of meanings, wisdom, and guidance embedded within the verses of the Quran, offering insights into its context, linguistic nuances, and timeless relevance to humanity.</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/tafsir.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">
               <b> <p class="text-light"style="font-size: 16px;">Key Areas of Study:</p></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;"> Tafsir delves into the historical background of Quranic revelations, exploring the circumstances surrounding each verse's revelation, the events of the time, and their implications for understanding the Quranic text.</li>

                    <li class="text-light"style="font-size: 16px;">Linguistic analysis is crucial in Tafsir, as it helps decipher the meanings of Arabic words and phrases used in the Quran, considering their etymology, morphology, and usage in classical Arabic literature.</li>

                    <li class="text-light">Tafsir utilizes interpretive tools such as grammar, syntax, rhetoric, and semantics to extract deeper meanings from the Quranic text, uncovering layers of subtlety and wisdom.</li>

                    <li class="text-light"style="font-size: 16px;">Tafsir often incorporates Prophetic traditions (Hadith) related to specific Quranic verses, providing additional context, explanations, and practical insights into their meanings and application.</li>

                    <li class="text-light"style="font-size: 16px;">Scholars of Tafsir draw upon the works of predecessors, exploring classical commentaries and interpretations of the Quran to benefit from the wisdom and insights accumulated over centuries of Islamic scholarship.</li>

                </ul>

                    <b><p class="text-light">The Significance of Tafsir:</p></b>
                    <ul>
                        <li class="text-light"style="font-size: 16px;">Tafsir helps Muslims deepen their understanding of the Quran, enabling them to derive guidance and inspiration from its verses to navigate various aspects of life.</li>
    
                        <li class="text-light"style="font-size: 16px;">Tafsir facilitates spiritual enlightenment and contemplation, as it encourages believers to reflect on the profound meanings and wisdom contained within the Quranic text.</li>
    
                        <li class="text-light"> Tafsir plays a crucial role in preserving and transmitting Islamic knowledge from generation to generation, ensuring the continuity of Quranic teachings and interpretations.</li>
    
                        <li class="text-light"style="font-size: 16px;"> Tafsir serves as a safeguard against misinterpretations and distortions of the Quran, providing authoritative interpretations based on sound methodology and scholarship.</li>
    
    
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