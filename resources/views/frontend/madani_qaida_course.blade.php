@extends('frontend.layout.main')
@section('title', 'madani_qaida_course')
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
                <h1 class="display-5 pb-4 m-0 text-primary">Madani Qaida Course</h1>
                <p class="pb-4 text-light"style="font-size: 16px;">Madani Qaida Online is the perfect way to learn Quran. The Madani Qaida has been designed in such a way that it makes learning Quran easy and interesting.
                    This Madani Qaida online course includes audio, video, and text lessons that will help you understand the basics of Quranic teachings.
                    
                    You will also be able to take quizzes and tests to check your understanding. After completing this course, you will be able to recite the Quran with proper tajweed and understanding. Register now and start learning!</p>
            </div>
        </div>
            </div>
            <div class="col-lg-6 float-right" data-wow-delay="0.5s">
                <img src="{{asset('frontend/img/madani.jpg')}}" alt="" style="height: 20rem; border-radius: 5px;">
            </div>
            <div class="col-lg-12 my-5 wow fadeIn" data-wow-delay="0.5s">
            <ol>
                <b> <li class="text-light"style="font-size: 16px;">Introduce Madani Qaida Online and explain why it is the best way to learn Quran</li></b>
 
                 <p class="text-light"style="font-size: 16px;">Madani Qaida Online is the best way to learn Quran. Because of the following reasons:</p>
 
                 <ul>
                     <li class="text-light"style="font-size: 16px;">It’s a Madani Qaida app with videos, pictures, and audio which are designed in a very Madani and effective way.</li>
 
                     <li class="text-light"style="font-size: 16px;">The Quran Tuition Center has an intelligent learning system that tracks your daily progress and suggests new lessons according to your level. </li>
 
                     <li class="text-light"style="font-size: 16px;">It contains all the essential lessons from Surah Fatiha to the last Surah of the Quran.</li>
 
                     <li class="text-light"style="font-size: 16px;">The Quran Tuition Center is very user-friendly and easy to use. You can start learning anywhere, anytime. </li>
 
                     <li class="text-light"style="font-size: 16px;">It’s very affordable as compared to other Quran learning apps or courses. </li>
                 </ul>
                 <br>
                <b><li class="text-light"style="font-size: 16px;">Describe the features of Madani Qaida Online that make it the perfect learning tool for students of all ages</li></b> 
 
                <p class="text-light"style="font-size: 16px;">Madani Qaida Online is the perfect learning tool for students of all ages for a number of reasons.</p>
                <ul>
                 <li class="text-light"style="font-size: 16px;">It is interactive and engaging, offering students a chance to learn in a fun and stimulating environment.</li>
 
                 <li class="text-light"style="font-size: 16px;">It is flexible and adaptable, allowing students to tailor their learning experience to their individual needs.</li>
 
                 <li class="text-light"style="font-size: 16px;">It is affordable, making it an accessible option for everyone.</li>
 
                 <li class="text-light"style="font-size: 16px;">It is convenient, allowing students to access the material from anywhere in the world at any time. With so many wonderful features, Madani Qaida Online is the perfect choice for anyone looking to learn about Islam.</li>
                </ul>
                <br>
 
              <b><li class="text-light"style="font-size: 16px;">Share personal experiences of how Madani Qaida Online has helped students achieve their goals in Quranic studies</li></b>
              <p class="text-light"style="font-size: 16px;">I have been using Madani Qaida Online for almost a year now, and it has helped me immensely in my Quranic studies.</p>
 
                 <p class="text-light"style="font-size: 16px;">The thing I like most about it is the ease with which I can access the material. I can either read it online or download it to my computer, which makes it very convenient for me.</p>
                 
                     <p class="text-light"style="font-size: 16px;">Additionally, the quality of the material is excellent, and I have found the explanations to be very clear and helpful. Finally, the customer service is great; any time I have had a question or issue, they have been quick to respond and help me out.</p>
                 
                     <p class="text-light"style="font-size: 16px;"> Overall, I am extremely satisfied with Madani Qaida Online and would highly recommend it to anyone interested in Quranic studies.</p>
                     <br>
                     <b><li class="text-light"style="font-size: 16px;">Provide a few tips on how to get the most out of Madani Qaida Online for optimal learning outcomes</li></b>
                     <p class="text-light"style="font-size: 16px;">Here are a few tips to get the most out of Madani Qaida Online:</p>
                     <ul>
                         <li class="text-light"style="font-size: 16px;">Start by taking the placement test to ensure that you are starting at the appropriate level for your skillset.</li>
                         <li class="text-light"style="font-size: 16px;">Make use of the Madani Qaida Progress Tracker to keep track of your progress and identify areas that need improvement.</li>
                         <li class="text-light"style="font-size: 16px;">Complete all of the lessons in each section before moving on to the next one.</li>
                         <li class="text-light"style="font-size: 16px;">Take the quizzes and tests at the end of each section to check your understanding.</li>
                         <li class="text-light"style="font-size: 16px;">Use the Madani Qaida Online forum to ask questions and get feedback from other students.</li>
                         <p class="text-light"style="font-size: 16px;">By following these tips, you will be well on your way to achieving success in Quranic studies. Madani Qaida Online is the perfect tool for anyone looking to learn about Islam. Register now and start learning!</p>
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