@extends('frontend.layout.main')
@section('title', 'price')
@section('main-container')
<style>
  body{
      background: #012B2A;
  }
</style>
<div class="container py-3" style="margin-top: 200px">

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col price-card">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">3 DAYS/WEEK</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$50<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> Free Trial Classes</li>
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> 30 Minutes/Class</li>
              <li  class="my-2"><b><span style="color: green;">&#10003;</span></b> 12 Classes/Month</li>
            </ul>
            <a href="{{route('price-form')}}" class="w-100 btn btn-lg btn-primary">Get started</a>
            
          </div>
        </div>
      </div>
      <div class="col price-card">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">4 DAYS/WEEK</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$65<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> Free Trial Classes</li>
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> 30 Minutes/Class</li>
              <li  class="my-2"><b><span style="color: green;">&#10003;</span></b> 16 Classes/Month</li>
            </ul>
            <a href="{{route('price-form')}}" class="w-100 btn btn-lg btn-primary">Get started</a>
          </div>
        </div>
      </div>
      <div class="col price-card">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-bg-primary">
            <h4 class="my-0 fw-normal">5 DAYS/WEEK</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$150<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> Free Trial Classes</li>
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> 60 Minutes/Class</li>
              <li  class="my-2"><b><span style="color: green;">&#10003;</span></b> 20 Classes/Month</li>
            </ul>
            <a href="{{route('price-form')}}" class="w-100 btn btn-lg btn-primary">Get started</a>
          </div>
        </div>
      </div>

      <div class="col price-card">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-bg-primary">
            <h4 class="my-0 fw-normal">5 DAYS/WEEK</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$80<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> Free Trial Classes</li>
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> 30 Minutes/Class</li>
              <li  class="my-2"><b><span style="color: green;">&#10003;</span></b> 20 Classes/Month</li>
            </ul>
            <a href="{{route('price-form')}}" class="w-100 btn btn-lg btn-primary">Get started</a>
          </div>
        </div>
      </div>
      <div class="col price-card">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 text-bg-primary">
            <h4 class="my-0 fw-normal">WEEKEND</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$36<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> Free Trial Classes</li>
              <li class="my-2"><b><span style="color: green;">&#10003;</span></b> 30 Minutes/Class</li>
              <li  class="my-2"><b><span style="color: green;">&#10003;</span></b> 8 Classes/Month</li>
            </ul>
            <a href="{{route('price-form')}}" class="w-100 btn btn-lg btn-primary">Get started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

    

