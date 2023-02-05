
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shahidul Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('Frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.theme.default.mi')}}n.css">
    <link rel="stylesheet" href="{{asset('Frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('Frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('Frontend/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('Frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('index.page')}}">SHAHIDUL</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style=" background-image:url({{asset('uploads/headers')}}/{{$headers->header_photo}});">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm <span>{{$headers->name}}</span></h1>
			            <h2 class="mb-4">{{$headers->designation_one}}</h2>
			            <p><a href="https://www.linkedin.com/in/shahidul-islam-shovon/" class="btn btn-primary py-3 px-4">Hire me</a> <a href="https://github.com/ShahidulLaravel?tab=repositories" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url({{asset('uploads/headers')}}/{{$headers_two->header_photo}});">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm a <span>{{$headers->designation_two}}</span></h1>
			            <p><a href="https://www.linkedin.com/in/shahidul-islam-shovon/" class="btn btn-primary py-3 px-4">Hire me</a> <a href="https://github.com/ShahidulLaravel?tab=repositories" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{asset('uploads/headers')}}/{{$headers_two->header_photo}}">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>A small and Little Description about myself</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>{{$headers->name}}</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>October 05, 1999</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Narayanganj, Dhaka, Bangladesh</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>1400</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>shahidul.webdev@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>01631903731</span></li>
		            </ul>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="7">0</span>
	                <span>Project complete</span>
                </p>
                <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Resume</h1>
            <h2 class="mb-4">Resume</h2>
            <p>Here is my Academic and educational qualifications Details</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
    					<span class="date">2022-2023</span>
    					<h2>Professional Web Development</h2>
    					<span class="position">Creative IT Institute</span>
						<br>
						<span class="position">Key Features-</span>
						<ul>
							<li>Web Design</li>
							<li>Core Concept's of PHP</li>
							<li>PHP Advanced</li>
							<li>OOP Concept</li>
							<li>Ajax</li>
							<li>Advance laravel</li>
						</ul>
    					<p class="mt-4">Professional Web Development helding by Creative IT </p>
    				</div>
					<div class="resume-wrap ftco-animate">
    					<span class="date">2016-2021</span>
    					<h2>Diploma en Engineering</h2>
    					<span class="position">Rajdahni Polytechnic and Textile College</span>
						<br>
						<span class="position">Passing Year: 2022</span>
						<br>
						<span class="position">CGPA: 3.75 in a scale of 4.00</span>
    					<p class="mt-4">Completing diploma degree in 2022 and major was computer technology</p>
    				</div>
    							
    			</div>

    			<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
    					<span class="date">2022-2026</span>
    					<h2>Bachelor of Science</h2>
    					<span class="position">Sonargoan University</span>
						<br>
    					<span class="position">Curentlly Enrolled</span>
    					<p class="mt-4">Major Computer Science and Engineering</p>
    				</div>
					
					<div class="resume-wrap ftco-animate">
    					<span class="date">2011-2016</span>
    					<h2>Secondary School Certificate</h2>
    					<span class="position">Deobhog Hazi Uzir Ali High School</span>
						<br>
    					<span class="position">GPA: 3.86 in a scale of 5.00</span>
    					<p class="mt-4">Passing SSC examination in 2016 and the major was Business Studies</p>
    				</div>
					
    			</div>
				<div class="col-md-12">
					<div class="resume-wrap ftco-animate">
    					<span class="date">2021-2022</span>
    					<h2>Web Development with PHP and Laravel</h2>
    					<span class="position">BASIS Institute of Technology & Management (BITM)</span>
						<br>
						<span class="position">Key Features</span>
						<ul>
							<li>Fundamentals PHP</li>
							<li>OOP</li>
							<li>Advance PHP</li>
							<li>Advance laravel</li>
						</ul>
    					<p class="mt-4">Professional Web Development helding by BASIS Institute of Technology & Management (BITM). It was a great journey with them </p>
    				</div>
				</div>
    		</div>
    		
    	</div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>Here is my Service's List which i Provide to my Clients</p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('Frontend/images/005-backend-1.png')}}" alt="">
							</span>
							<div class="desc">
								<h3 class="mb-5">Front End Development</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('Frontend/images/01.png')}}" alt="">
							</span>
							<div class="desc">
								<h3 class="mb-5">Graphics Design</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('Frontend/images/04.png')}}" alt="">
							</span>
							<div class="desc">
								<h3 class="mb-5">Backend Development</h3>
							</div>
						</a>
					</div>

					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('Frontend/images/002-gitlab.png')}}" alt="">
							</span>
							<div class="desc">
								<h3 class="mb-5">Github</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('Frontend/images/009-code.png')}}" alt="">
							</span>
							<div class="desc">
								<h3 class="mb-5">Clean Code</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<img src="{{asset('Frontend/images/03.png')}}" alt="">
							</span>
							<div class="desc">
								<h3 class="mb-5">Admin Pannel</h3>
							</div>
						</a>
					</div>
				</div>
    	</div>
    </section>

		
		<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
            <p>Here is My Programming SKills </p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>HTML 5</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>100%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>CSS 3</h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
							  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
							    <span>85%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Javascirpt</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Bootstrap 5</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Tailwind CSS</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="50"
							  	aria-valuemin="0" aria-valuemax="100" style="width:50%">
							    <span>50%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>React Js</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="60"
							  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
							    <span>60%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>PHP</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Laravel</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Github</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="60"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>60%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Photoshop</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="60"
							  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
							    <span>60%</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">My Recent Projects</h2>
            <p>Here is my recent Projects and many more project's are coming Soon</p>
          </div>
        </div>
    		<div class="row">

				@foreach ($projects as $project)
					<div class="col-md-6">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url({{asset('uploads/projects')}}/{{$project->photo}});">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="#">{{$project->name}}</a></h3>
	    					<span>Project Live Link: <a class="text-dark" href="{{$project->link}}" target="_blank">{{$project->link ? $project->link : 'Site Under Construction'}}</a></span>
	    				</div>
    				</div>
  				</div>
				@endforeach
    			
    		</div>
    	</div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="7">0</strong>
                <span>Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="15">15</strong>
                <span>Complete Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="200">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="80">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url({{asset('Frontend/images/bg_1.jpg')}})">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>

						<p class="text-white">I am able for work as a Freelancer, any remote job or any On site developer Jobs</p>
						<p class="mb-0"><button class="btn btn-primary py-3 px-5"><a class="text-dark" href="https://www.linkedin.com/in/shahidul-islam-shovon/">Hire me</a></button></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>If you need any Query then fell free to call me</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Narayanganj Sadar, Narayanganj, Dhaka</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="#">01631903731</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="#">shahidul.webdev@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="https://myportfolio.shahiduldeveloper.com">myportfolio.shahiduldeveloper.com</a></p>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">

            <form action="{{route('send.message')}}" method="POST" class="bg-light p-4 p-md-5 contact-form">
				@csrf 
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input name="subject" type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="desp" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-warning" type="submit">Send Message</button>
				<br>
				@if(session('success'))
				<strong class="text-success">{{session('success')}}</strong>
				@endif
              </div>
            </form>

          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url({{asset('uploads/headers')}}/{{$headers_two->header_photo}});"></div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>This is my official Business Portfolio. you can contact me with these mentioned information.</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Front End Development</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Backend Development</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphics</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Clean Code</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Admin Pannel</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Narayanganj, Dhaka</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+880-1631903731</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"> </span> <span class="text"> shahidul.webdev@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row mb-0">
          <div class="col-md-12 text-center">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by Shahidul Islam Khan </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('Frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('Frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('Frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('Frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('Frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('Frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('Frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('Frontend/js/aos.js')}}"></script>
  <script src="{{asset('Frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('Frontend/js/scrollax.min.js')}}"></script>
  <script src="{{asset('Frontend/js/main.js')}}"></script>
    
  </body>
</html>