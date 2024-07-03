@extends('frontend.layout.main')
@section('title', 'namaz_course')
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
                <h1 class="display-5 pb-4 m-0 text-primary">Namaz Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Welcome to our Namaz Course, where you will embark on a journey to deepen your understanding and enhance your practice of Salah, the fundamental pillar of Islam. This course is meticulously designed to cater to learners of all levels, whether you're a beginner seeking to learn the basics or an experienced practitioner aiming to refine your techniques and spiritual connection.</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/namaz.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">
                <b><p class="text-primary">Course Overview:</p></b>
             <ol>
               <b> <li class="text-light"style="font-size: 16px;">Understanding the Essence of Salah:</li></b>

                <ul>
                    <li class="text-light"style="font-size: 16px;">Introduction to Salah: Origins, significance, and its importance in Islam.</li>

                    <li class="text-light"style="font-size: 16px;">The spiritual dimensions of Salah and its role in strengthening faith.</li>

                    <li class="text-light"style="font-size: 16px;">Exploring the benefits of establishing a consistent prayer routine.</li>
                </ul>
<br>
                <b> <li class="text-light"style="font-size: 16px;">Step-by-Step Guide to Performing Salah:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Detailed breakdown of the physical postures and movements in each prayer.</li>

                    <li class="text-light"style="font-size: 16px;">Learning the correct pronunciation of Arabic supplications (Duas) and Surahs.</li>

                    <li class="text-light"style="font-size: 16px;">Practical demonstrations and interactive exercises to perfect your technique.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Inner Dimensions and Concentration in Prayer:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Techniques to enhance focus and mindfulness during Salah.</li>

                    <li class="text-light"style="font-size: 16px;">Understanding the inner meanings behind the gestures and recitations.</li>

                    <li class="text-light"style="font-size: 16px;">Overcoming common distractions and obstacles in achieving Khushu (devotion) in prayer.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Common Mistakes and Corrections:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Identifying and rectifying errors in prayer.</li>

                    <li class="text-light"style="font-size: 16px;">Addressing misconceptions and clarifying doubts related to Salah.</li>

                    <li class="text-light"style="font-size: 16px;">Guidance on seeking forgiveness for past mistakes and improving future performances.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Variations in Salah:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Exploring the differences between obligatory (Fard) and recommended (Sunnah) prayers.</li>

                    <li class="text-light"style="font-size: 16px;">Understanding the special prayers, such as Taraweeh, Janazah, and Eid Salah.</li>

                    <li class="text-light"style="font-size: 16px;">Adapting Salah during travel, illness, and other exceptional circumstances.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Etiquette and Manners of Prayer:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Importance of cleanliness (Taharah) and purification before Salah.</li>

                    <li class="text-light"style="font-size: 16px;">Adab (manners) of entering and exiting the prayer area.</li>

                    <li class="text-light"style="font-size: 16px;">Respecting the sanctity of congregational prayers and the role of the Imam.</li>
                </ul>
                <br>
                <b> <li class="text-light"style="font-size: 16px;">Integration of Salah into Daily Life:</li></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;">Establishing a consistent prayer schedule amidst daily commitments.</li>

                    <li class="text-light"style="font-size: 16px;">Strategies for managing time effectively to prioritize Salah.</li>

                    <li class="text-light"style="font-size: 16px;">Cultivating a deeper spiritual connection through regular supplications and remembrance.</li>
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