@extends('layouts.master')
@section('title')
	Dashboard
@endsection
@section('container')
	{{--  alert untuk menunjukkan bahwa berhasil login  --}}
	@if ($message = Session::get('success'))
		<script>
			alert('{{ $message }}')
		</script>
	@endif
	 <!-- HOME SECTION DESIGN -->
	 <section class="home" id="home">
      <div class="home-text">
        <div class="slide">
          <span class="one">Hello</span>
          <span class="two">I'm</span>
        </div>
        <h1>Huda Muhammad Nur</h1>
        <h3>UI/UX<span>Designer.</span></h3>
        <p>
          I am a passionate UI/UX designer dedicated to creating visually appealing and user-friendly designs. With a keen eye for detail and a strong understanding of design principles, I strive to deliver the best user experience. I believe in the power of design to make a positive impact and bring ideas to life. Let's work together to create something amazing!
        </p>
        <div class="button">
          <a href="#" class="btn">Say Hello</a>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION DESIGN -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="image\img2.jpeg" alt="" />
      </div>

      <div class="about-text">
        <h2>About<span>Me</span></h2>
        <h4>Creative UI/UX Designer!</h4>
        <p>
          I am a creative UI/UX designer with a passion for crafting intuitive and visually appealing designs. I believe in the power of design to solve problems and enhance user experiences. Through my work, I strive to create designs that not only look great but also deliver seamless interactions and engaging user interfaces. Let's bring your ideas to life with thoughtful design!</p>
        <a href="https://drive.google.com/file/d/1Ab80TZ4I7jHrYkFi0QXuIL6G6jLdUCXw/view?usp=sharing" class="btn2">
          <span><i class="bx bx-play"></i></span>Watch About Me!</a>
      </div>
    </section>

    <!-- SERVICE SECTION DESIGN -->
    <section class="service" id="service">
      <div class="main-text">
        <p>What I'm Expert in</p>
        <h2><span>My</span> Services</h2>
      </div>

      <div class="services-content">
        <div class="box">
          <div class="s-icons">
            <i class="bx bx-mobile-alt"></i>
          </div>
          <h3>Web/App Designer</h3>
          <p>
            As a web/app designer, I specialize in creating stunning and user-friendly interfaces for websites and mobile applications. I combine my design skills with a deep understanding of user behavior to deliver exceptional digital experiences.
          </p>
        </div>

        <div class="box">
          <div class="s-icons">
            <i class="bx bx-edit-alt"></i>
          </div>
          <h3>Creative Design</h3>
          <p>
            Creativity is at the core of my design process. I love pushing the boundaries and exploring new ideas to create unique and memorable designs. Whether it's branding, illustrations, or visual storytelling, I strive to bring creativity to every project.
          </p>
        </div>

        <div class="box">
          <div class="s-icons">
            <i class="bx bx-code-alt"></i>
          </div>
          <h3>Expert Programmer</h3>
          <p>
            In addition to my design skills, I am also an expert programmer. I have a strong background in coding and can bring designs to life with clean and efficient code. I am proficient in various programming languages and always stay up to date with the latest technologies.
          </p>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO SECTION DESIGN -->
    <section class="portfolio" id="portfolio">
      <div class="main-text">
        <p>Portfolio</p>
        <h2><span>Latest</span> Services</h2>
      </div>

      <div class="portfolio-content">
        <div class="row">
          <img
            src="image\img3.png"
            alt="portfolio1" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="3"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="image\img4.png"
            alt="portfolio2" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="4"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="image\img5.png"
            alt="portfolio3" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="5"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="image\img6.png"
            alt="portfolio4" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="6"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="image\img7.png"
            alt="portfolio5" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="7"><i class="bx bx-link-external"></i></a>
          </div>
        </div>

        <div class="row">
          <img
            src="image\img8.png"
            alt="portfolio6" class="imgPortfo" 
          />
          <div class="layer">
            <h5>Visual Design</h5>
            <p>
              Check out my latest visual design project.
            </p>
            <a  class="imgPortfoClick" data-value="8"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT ME SECTION DESIGN -->
    <section class="contactt" id="contact">
      <div class="contact-text">
        <h2>Contact <span>Me!</span></h2>
        <h4>If You have any Project in Your mind!</h4>
        <p>
          I would love to hear from you! If you have any project in mind or need any assistance, please don't hesitate to reach out to me.
        </p>
        <div class="list">
          <li><a href="#">085156338314</a></li>
          <li><a href="#">hudamnur21@gmail.com</a></li>
          <li><a href="#">Please treat me some coffee</a></li>
        </div>

        <div class="contact-icons">
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-twitter"></i></a>
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-instagram"></i></a>
          <a href="https://instagram.com/hudaaaamn?igshid=MzNlNGNkZWQ4Mg=="><i class="bx bxl-youtube"></i></a>
        </div>
      </div>
    </section>

	<!-- END SECTION DESIGN -->
    <section class="end">
      <div class="last-text">
        <p>Copyright &copy; by huddd All Rights Reserved.</p>
      </div>

      <div class="top">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </section>
    <script src="{{ asset('/js/main.js') }}"></script>
@endsection