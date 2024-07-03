@extends('frontend.layout.main')
@section('title', 'nazra_tul_quran')
@section('main-container')
<style>
    body{
        background: #012B2A;
    }
</style>
 <!-- About Satrt -->
 <div class="container-fluid about py-5" style="margin-top: 150px; background-color: #012B2A">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12" data-wow-delay="0.5s">
                <h1 class="display-5 pb-4 m-0 text-primary">Nazra Tul Quran Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Every Muslim is obligated to read the Holy Quran with Tajweed rules. Our online Quran Reading Course is catered towards individuals of all ages and genders, both kids and adults. This course is designed for those who have just completed their Noorani Qaida course, can read Quran but need to improve their reading skills. Our Quran Reading course will provide the necessary practice for students to build confidence in applying the methods taught in their Qaida course. Our teacher will ensure students complete the full Quran Reading course in a timely manner.</p>
                <b><p class="pb-4 text-primary">Allah Ta’ala says in the noble Qur’an: “And recite the Qur’an with Tarteel (in a slow pleasant tone and style).” (73:4) The Prophet Mohammad (Sallallaahu Alayhi Wasallam) has said:”Verily the one who recites the Qur’an beautifully, smoothly, and precisely, he will be in the company of the noble and obedient angels. And as for the one who recites with difficulty, stammering or stumbling through its verses, then he will have twice that reward.” [Al-Bukhari and Muslim]</p></b>

            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/nazra.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">

               <b> <p class="text-light"style="font-size: 16px;">Curriculum of Nazra e Quran Course:</p></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;"> Arabic letters and their sounds</li>

                    <li class="text-light"style="font-size: 16px;">Recognition of the shape of the letter in the initial, medial and final positions</li>

                    <li class="text-light"style="font-size: 16px;">Synthesis of Arabic words</li>

                    <li class="text-light"style="font-size: 16px;">Learning how to recognize short vowels (with 2 letters, 3 letters and 4 letters), long vowels (normal madd: fattah, dammah, kasrah) and sukun</li>

                    <li class="text-light"style="font-size: 16px;">Rules of using normal madd, extended madd and tanween</li>

                    <li class="text-light"style="font-size: 16px;">Rules of using fattah followed by wau or yaa sakin, extended madd, shad</li>

                    <li class="text-light"style="font-size: 16px;">Formation of the word while properly placing the vowels on each letter, to finally forming an Arabic sentence</li>
                    <li class="text-light"style="font-size: 16px;">Perfection of skills in independent reading of the Qur’an</li>

                    <li class="text-light"style="font-size: 16px;">Articulation points of the Arabic letter</li>
                    <li class="text-light"style="font-size: 16px;">Tajweed and the rules of noon saakinah, meem saakinah, lam saakinah, and qalqalah mechanism</li>

                    <li class="text-light"style="font-size: 16px;">The different lengthening (mudood), and how voweled, and non-voweled letters are formed.</li>

                    <li class="text-light"style="font-size: 16px;">Here at Darul Uloom Abu Hanifah, we offer a class based and a one on one course where our instructors teach the science to study every letter of the Qur’an with the correct pronunciation. The Nazrah course is a basic course to learning how to recite Qur’an correctly with its rules.</li>

                    <li class="text-light"style="font-size: 16px;">Students will learn the following; articulation points of the Arabic letters, tajweed and the rules of noon saakinah, meem saakinah, lam saakinah, and qalqalah mechanism. The different lengthening (mudood), and how voweled, and non-voweled letters are formed.</li>
                </ul>
                <br>

               <b><p class="text-light"style="font-size: 16px;">Requirements</p></b> 
            <ul>
                <li class="text-light"style="font-size: 16px;">Minimum entry age for the course is 5.</li>

                <li class="text-light"style="font-size: 16px;">Sincere attention to earn the pleasure of the Almighty Allah</li>

                <li class="text-light"style="font-size: 16px;">A long term commitment to study</li>

                <li class="text-light"style="font-size: 16px;">Recognition that this is an amaanah (a trust) and therefore an attitude to fulfil this amanaah properly is essential, thus you will uphold a good record of attendance and punctuality, good mannerisms and respect throughout your studies.</li>
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