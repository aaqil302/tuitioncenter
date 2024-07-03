@extends('frontend.layout.main')
@section('title', 'price-form')
@section('main-container')
<style>
body {
  font-family: Arial, sans-serif;
  background: #012B2A;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="c"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}


</style>

<div class="container-fluid" style="margin-top: 150px;">
  <div class="container">
      <h2 class="text-primary text-center">Book Your Appointment</h2>
      <p class="text-dark text-center">*Fill in the form & The assigned tutor will contact you to confirm the appointment with you.</p>
      <form id="appointmentForm" action="{{route('price-form')}}" method="POSt">
        @csrf
        <div class="form-group">
          <label for="name">Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
          <label for="email">Email <span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
          <label for="number">Number <span class="text-danger">*</span></label>
          <input type="number" class="form-control" id="number" name="number" placeholder="Enter Your Number" required>
        </div>
        <div class="form-group">
          <label for="country">Country <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="country" name="country" placeholder="Enter Your Country" required>
        </div>
        <div class="form-group">
          <label for="courses">Courses <span class="text-danger">*</span></label>
          <select class="form-select" name="courses" id="courses" required>
            <option selected disabled>Select Course</option>
            <option value="1">Madani Qaida Course</option>
            <option value="2">Nazra Tul Quran Course</option>
            <option value="3">Hifz Ul Quran Course</option>
            <option value="4">Tarjuma Ul Quran Course</option>
            <option value="5">Tafsir Ul Quran Course</option>
            <option value="6">Farz Ul Uloom Course</option>
            <option value="7">Namaz Course</option>
            <option value="8">Seerat e Mustafa Course</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
        <!-- Loading spinner -->
      
      </form>
    </div>
  </div>
  <script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('islamicForm');

  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent form submission for now, just for demonstration
    // You can add your form submission logic here
    animateFormSubmission();
  });
});


  </script>

@endsection