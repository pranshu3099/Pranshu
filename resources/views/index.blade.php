<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <title>Portfolio</title>
  </head>
  <body>
    <nav class="navbar" id="navbar">
      <div class="container">
        <div class="nav-left">
          <a href=""><img src="images/paypal-logo.png" alt="" /></a>
        </div>
        <ul class="list">
          <li>
            <a href="#content">Home</a>
          </li>
          <li><a href="#about">About</a></li>
          <li><a href="#myskills">Skills</a></li>
          <li><a href="#myeducations">Education</a></li>
          <li><a href="#myprojects">Projects</a></li>
          <li><a href="#mycontact">Contact</a></li>
        </ul>
          {{-- <div class="ham-icon" id="ham-icon">
              <img src="images/Hamburger_icon.svg.png" alt="" class="ham-icons"/>
          </div> --}}
      </div>
    </nav>
    <!-- <hr /> -->
    <div class="content" id="content">
      <div class="content-left">
        <h1>Hi There</h1>
        <h1>I'm Pranshu</h1>
        <p>I am in to <span>Web Development</span></p>
        <button class="btn">About Me</button>
        <div class="icons">
          <a href="https://github.com/pranshu3099">
            <img src="images/github-sign.png" alt="" />
          </a>
          <a href="https://www.linkedin.com/in/pranshu-srivastava-78a6001bb/"
            ><img src="images/linkedin.png" alt=""
          /></a>
        </div>
      </div>
      <div class="content-right">
        <img src="images/thumb-removebg-preview.png" alt="" />
      </div>
    </div>
    <!-- --------------- About--------------------->
    <div class="about" id="about">
      <div class="about-me" id="pot">
        <span>I</span> am a graduated engineering student. I like creating
        performant and accessible web applications with the latest tech such as
        Javascript , React js and currently i am working on Laravel.
      </div>

      <div class="sub-about">
        <div>
          <span>2022 - Present</span>
          <p class="p-1">Trainee Software Engineer</p>
          <p class="p-2">Working as a backend developer at Kellton</p>
        </div>
        <div>
          <span>Sept 2021 - Oct 2021</span>
          <p class="p-1">Web Developer Intern</p>
          <p class="p-2">
            Worked as a web developer intern at the sparks foundation
          </p>
        </div>
      </div>
    </div>
    <!-- --------------- About--------------------->

    <!---------------------------- My Skills -------------------------->

    <div class="myskills" id="myskills">
      <div><h1>My Skills</h1></div>
      <div>
        <p>
          Web design and development have been my passion for more over an year.
          I like working with JavaScript, HTML/CSS and Laravel
        </p>
      </div>
    </div>
    <div class="box-container">
      <div class="box">
        <div>
          <img src="images/css-3.svg" alt="" class="img" />
          <h4>HTML-CSS</h4>
          <p>
            I am proficient in HTML/CSS I have made many websites using both of
            these technologies.
          </p>
        </div>

        <div>
          <img src="images/logo-javascript.svg" alt="" class="img" />
          <h4>JavaScript</h4>
          <p>
            I love working with JavaScript and have made many projects using
            various JS libraries and frameworks.
          </p>
        </div>

        <div>
          <img src="images/react-2.svg" alt="" class="img" />
          <h4>React js</h4>
          <p>
            I love working with Reactjs and have made many projects using
            Reactjs.
          </p>
        </div>
        <div>
          <img src="images/laravel-svgrepo-com.svg" alt="" class="img" />
          <h4>Laravel</h4>
          <p>
            I love working with Laravel and have made many projects using
            Laravel and Php.
          </p>
        </div>
      </div>
    </div>

    <!-- -------------------------- My education ------------------------------ -->

    <div class="myeducation" id="myeducations">
      <div><h1>My Education</h1></div>
    </div>

    <div class="education">
      <div>
        <span>April 2014- April 2015</span>
        <p class="p-1">10th</p>
        <p class="p-2">Fatima Senior Secondary School Gonda</p>
      </div>

      <div>
        <span>April 2017 - April 2018</span>
        <p class="p-1">12th</p>
        <p class="p-2">Sri Raghukul Vidya Peeth Gonda</p>
      </div>

      <div>
        <span>August 2018 - August 2022</span>
        <p class="p-1">Graduation</p>
        <p class="p-2">
          Babu Banarasi Das National Institute of Technology and Management
          Lucknow
        </p>
      </div>
    </div>
    <!-- -------------------------- My PROJECTS --------------------------------- -->

    <div class="myprojects" id="myprojects">
      <div><h1>My Projects</h1></div>
      <div>
        <p>
          Listed below are some of the projects that I have worked on using
          HTML/CSS and JavaScript.
        </p>
      </div>
    </div>
    <div class="projectbox-container">
      <div class="project-box">
        <div class="box-1">
          <img src="images/Screenshot from 2022-08-17 02-09-05.png" alt="" />
          <p>
            A web application where you can see synopsis of movies and webseries
            made using HTML/CSS and JavaScript.
            <a href="https://pranshu3099.github.io/movies-hub/index.html"
              >Live link
            </a>
          </p>
        </div>

        <div class="box-1">
          <img src="images/Screenshot from 2022-08-17 02-12-01.png" alt="" />
          <p>
            A public chat room service for any one to join made using HTML/CSS
            JavaScript and Firebase.
            <a href="https://chat-room-81107.web.app/">Live link</a>
          </p>
        </div>
        <div class="box-1">
          <img src="images/Screenshot from 2022-08-17 02-10-30.png" alt="" />
          <p>
            A digital Parking application using Reactjs, Firebase and many
            latest technologies.
            <a href="https://parkade-frontend.vercel.app/dashboard"
              >Live link</a
            >
          </p>
        </div>
      </div>
    </div>

    <!-- ----------------- Contact-------------------- -->

    <div class="mycontact" id="mycontact">
      <div><h1>Contact Details</h1></div>
      <div>
        <p>
          For getting in touch with me please use the following email
          <a href="">srivastavapranshu2@gmail.com</a>
        </p>
      </div>
    </div>
    <form action="/home" method="POST">
      @csrf
      <div class="contact">
        <div>
          <div>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Name"
              style="padding: 20px"
            />
          </div>
          <div>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              style="padding: 20px"
            />
          </div>
          <div>
            <textarea
              name="projectdetails"
              id="project"
              cols="30"
              rows="10"
              placeholder="Project Details"
              style="padding: 20px"
            ></textarea>
          </div>
          <div>
            <button class="submit-contact" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </form>

    <div class="footer">
      <div class="footer-content">
        <div class="icons">
          <a href="https://github.com/pranshu3099">
            <img src="images/github-sign.png" alt="" />
          </a>
          <a href="https://www.linkedin.com/in/pranshu-srivastava-78a6001bb/"
            ><img src="images/linkedin.png" alt=""
          /></a>
        </div>
      </div>
      <div class="footer-end">
        <p>Web Developer</p>
        <p class="copyright">&copy; 2022 Pranshu Srivastava</p>
       </div>
    </div>


    <script src="{{asset('js/index.js')}}"></script>
  </body>
</html>
