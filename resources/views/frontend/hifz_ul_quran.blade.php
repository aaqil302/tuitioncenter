@extends('frontend.layout.main')
@section('title', 'hifz_ul_quran')
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
                <h1 class="display-5 pb-4 m-0 text-primary">Hifz Ul Quran Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Hifzul Qur’an Course simply means learning Qur’an by heart. At the time of the Prophet (peace be upon him), writing was an uncommon style of storing matters; thus, memorization and oral transmission were the most effective modes of preserving information. This course is designed for those who want to memorize the holy Qur’an online. Hifz ul Quran Program Online classes are assigned to a Qur’an tutor who will be Hafizul Qur’an and will guide students step by step giving them specific lessons every day as homework. These Qur’an memorization classes are structured in the way of physical classes in Madrassas / Islamic centers. You will memorize the holy Qur’an at your own pace.</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/hifz.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">

               <b> <p class="text-light"style="font-size: 16px;">The method to memorize the Qur’an :</p></b>
                <ul>
                    <li class="text-light"style="font-size: 16px;"> New lesson (every day)</li>

                    <li class="text-light"style="font-size: 16px;">Newly memorized portion (Sabaqi)</li>
                    <p class="text-light">This is the number of verses of the Holy Qur’an you have memorized in the last seven days. This is the most important part of the Lesson.</p>
                    <li class="text-light"style="font-size: 16px;">Old memorization portion</li>
                </ul>
                    <p class="text-light">This is all of that portion which you have memorized before and become an old lesson of memorization of the Qur’an.</p>
                    <p class="text-light">Hifzul Qur’an Course requires students as well guardians to show complete dedication and punctuality in the classes and the assignments assigned by our teachers. To complete Hifzul Qur’an Program within 3 years, the parents of the children also have to look after their kids daily.</p>
                    <p class="text-light">Usually, Hifz students require more time as compared to students of other courses as they have to memorize and then have to recite the previous days’ lesson too. The teacher would give lessons to students to memorize according to her/his ability (as much as they can intake in a day). For better results, we would always stay in contact with the parents of the children to update them about the progress of their children.</p>
                    <p class="text-light">Our program not only concentrates on memorizing the Qur’an with correct tajweed but also a strong emphasis is made on maintaining what has already been memorized. Students are encouraged to work rigorously in order to preserve the previous lessons.</p>
                    <p class="text-light">The academy also strives to nurture students’ overall moral and ethical values, preparing them to become model citizens and positive contributors to society.</p>
                    <p class="text-light">We always emphasize quality, not quantity. Hence every day, before giving a new lesson, the teacher listens to yesterday’s lesson and from older lessons too, so that the students would not lose grip over the previous lessons. As a result, as soon as they finish Hifzul Qur’an, they would be a perfect Hafiz and would not require spending more time for finalization in-shaa Allah.</p>
                    <p class="text-light">At Quran Tuition Center, we emphasize quality, not quantity. Making sure that after memorizing it will be easy for each student to retain what they have memorized. To get the most out of the program, it is very important that the student stay regular and consistent in memorizing their lesson and revising the previous lessons on a daily basis. Although Hifz usually takes about 2-3 years, the time will vary depending on the time and effort each individual puts in.</p>
               
                    <b><p class="text-light">Golden rules for Memorizing the Holy Qur’an :</p></b>
                    <ul>
                    <li class="text-light">Be Sincere.</li>
                    <li class="text-light">Correct Pronunciation and Recitation</li>
                    <li class="text-light">Apportion the Daily Number of Verses to Memorize</li>
                    <li class="text-light">Do Not Move to the Next Portion Till You Master the Present One</li>
                    <li class="text-light">Stick to One Specific Copy of the Glorious Qur’an</li>
                    <li class="text-light">Understand What You Are Memorizing</li>
                    <li class="text-light">Do Not Move from One Surah to Another till You Connect Its Beginning to Its End</li>
                    <li class="text-light">Recite Frequently before Others</li>
                    <li class="text-light">Follow Up Frequently</li>
                    <li class="text-light">Pay Attention to Similarities</li>
                    <li class="text-light">Seize the Opportunity of the Golden Years to Memorize</li>
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