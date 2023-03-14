@extends('main')

@section('projects-page')
<div class="section-content content-project">
    <img src="assets/img/logo-basiru-1.png" alt="logo-basiru-1" class="logo logo-1">
    <img src="assets/img/logo-basiru-2.png" alt="logo-basiru-2" class="logo logo-2">
    <div id="project" class="section">
        <img src="assets/img/h1-s.png" alt="logo-basiru-1" class="logo logo-h1-s">
        <img src="assets/img/h1-e.png" alt="logo-basiru-2" class="logo logo-h1-e">
        <h2 class="title-primary">My Projects</h2>
        <hr class="mb-5 text-white">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5 col-12 mb-4">
                <div class="card text-center mx-auto">
                    <img src="assets/img/img-project-1.jpg" class="card-img-top img-project" alt="img-project-laravel">
                    <div class="card-body">
                      <h5 class="card-title">Landing Page PT Qwords Indonesia</h5>
                      <p class="card-text">Creating and redesigning websites using the Laravel 8 framework</p>
                      <a href="https://github.com/shodiqbasiru/Qwords-Landing-Page" target="_blank" class="btn button-primary ">Source</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5 col-12 mb-4">
                <div class="card text-center mx-auto">
                    <img src="assets/img/img-project-2.jpg" class="card-img-top img-project" alt="img-project-laravel">
                    <div class="card-body">
                      <h5 class="card-title">Web Portofolio Jannalytics</h5>
                      <p class="card-text">Create a portfolio website using javascript, jquery, bootstrap, AOS and formsbumit.co</p>
                      <a href="https://github.com/shodiqbasiru/portofolio-jannalytics" target="_blank" class="btn button-primary ">Source</a>
                    </div>
                </div>
            </div>    
            <div class="col-xl-4 col-md-5 col-12 mb-4">
                <div class="card text-center mx-auto">
                    <img src="assets/img/img-project-3.jpg" class="card-img-top img-project" alt="img-project-laravel">
                    <div class="card-body">
                      <h5 class="card-title">Mall Pelayanan Publik KBB</h5>
                      <p class="card-text">Create a website interface and create a login feature and registration feature using the Laravel 8 framework.</p>
                      <a href="https://github.com/shodiqbasiru/MPP-KBB" target="_blank" class="btn button-primary ">Source</a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
   
</div>
@endsection
