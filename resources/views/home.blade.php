@extends('layouts.nav')
@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="container text-center blur">
        <h1 class="text">Where work connects</h1>
        <p class="text">Connect work to goals and automate workflows</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/sign" class="btn0">Get Started</a>
            <a href="/contact" class="btn1">Contact Sales</a>
        </div>
    </div>
</section>

<section id="about" class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h2 class="section-title text-center">About Us</h2>
                <p class="section-description">
                    At Listify, we believe in the power of organization and automation. Our mission is to help individuals and businesses
                    streamline their workflows and connect their work to goals in a smarter, more efficient way. Powered by cutting-edge
                    AI technology, Listify automates tasks, improves collaboration, and drives productivity.
                </p>
                <a href="/sign" class="btn2">Get Started</a>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('Images/about.jpg') }}" alt="About Us Image" class="img-fluid rounded-3 shadow-lg" />
            </div>
        </div>
    </div>
</section>
<section id="feedback">
    <div class="container mt-5">
        <h2 class="section-title text-center">Send Us a Feedback Message</h2>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Write a Feedback Message</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button style="border: none;" type="submit" class="btn2">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection


