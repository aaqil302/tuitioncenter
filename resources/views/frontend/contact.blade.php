@extends('frontend.layout.main')
@section('title', 'contact')
@section('main-container')
       
        <!-- Contact Start -->
        <div class="container-fluid contact py-5" style="margin-top: 150px">
            @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Get In Touch</p>
                    <h1 class="display-3">Contact For Any Queries</h1>
                    <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                </div>
                <form action="{{route('info')}}" method="POST" class="form-group">
                    @csrf
                <div class="row g-4 wow fadeIn" data-wow-delay="0.3s">
                    
                        <div class="col-sm-6">
                            <input type="text" class="form-control bg-transparent p-3" placeholder="Your Name" name="name">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" class="form-control bg-transparent p-3" placeholder="Your Email" name="email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control bg-transparent p-3" placeholder="Subject" name="subject">
                        </div>
                        <div class="col-12">
                            <textarea class="w-100 form-control bg-transparent p-3" rows="6" cols="10" placeholder="Your Message" name="message"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary border-0 py-3 px-5" type="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
        </div>
        <!-- Contact Start -->
        @endsection