@extends('auth.layouts')

@section('content')
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <nav class="navigasi">
            <a href="#" style="--i:2;" class="active">Home</a>`
            <a href="#" style="--i:2;">About</a>
            <a href="#" style="--i:3;">Skills</a>
        </nav>
    </header>

    <section class="home d-flex flex-column justify-content-center align-items-center">
        <div class="homeee d-flex flex-column justify-content-center align-items-center">`
            <h1>My Name Is Huda</h1>
            <h3>I'm A Fullstack Web Developer</h3>
            <p>A Vocational School
                A Student of Software Engineering Technology at Gadjah Mada University year 2022. A vibrant person that
                loves to explore and learn a specific thing i learn before.</p>

            <div class="social-media">
                <a href="#" style="--i:7;"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#" style="--i:8;"><i class='bx bxl-linkedin-square'></i></a>
                <a href="#" style="--i:9;"><i class='bx bxl-github'></i></a>
                <a href="#" style="--i:10;"><i class='bx bxl-twitter'></i></a>
            </div>
            <a href="#" class="cv">Download CV</a>
        </div>
        <div class="home-img">
            <img src="" alt="">
        </div>
    </section>
@endsection
