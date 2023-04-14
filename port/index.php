<?php

require_once "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = trim (strtolower ($_POST['email']));

    $name = trim($_POST['name']);

   $number = trim($_POST['number']);
   $msg = trim($_POST['message']);

   $sql = "INSERT INTO `contact_form`(name, email, number, message)
      VALUES(:name, :email, :number, :msg)" or die('query failed');
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue('email', $email);
    $stmt->bindValue('name', $name);
    $stmt->bindValue('number', $number);
    $stmt->bindValue('message', $msg);
    $message[] = 'message sent successfully!';
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <link rel="image_src" href="images/icon.png" />
   <title>Erinn Szarek, Developer and Designer</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <!-- custom css file link  -->

    <script src="https://cdn.jsdelivr.net/npm/github-repo-cards@1.0.9/app.js" defer></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/background.css">


</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#services">services</a>
         <a href="#portfolio">portfolio</a>
         <a href="#contact">contact</a>
      </nav>

      <div class="follow">
<!--         <a href="#" class="fab fa-facebook-f"></a>-->
<!--         <a href="#" class="fab fa-twitter"></a>-->
<!--         <a href="#" class="fab fa-instagram"></a>-->
         <a href="https://www.linkedin.com/in/erinnszarek/" class="fab fa-linkedin"></a>
         <a href="https://github.com/eszarek" class="fab fa-github"></a>
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">
       <div id="hex">
           <!-- PARTICLES -->
           <canvas id="particles"></canvas>

           <!-- HEXAGON GRID -->
           <div id="hexagonGrid"></div>

       </div>
      <div class="image" data-aos="fade-right">
         <img class="avatar" src="images/Erinn_Szarek.jpg" alt="Erinn Szarek">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">Erinn Szarek</h3>
         <span data-aos="fade-up">Developer and Designer</span>
         <p data-aos="fade-up">Full-stack Web and Software Developer with industry experience in
             front-end design motivated by accessibility.</p>
         <a data-aos="fade-up" href="#about" class="btn">about me</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->
   <section class="about" id="about">
   <div class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

      <div class="biography">

         <p data-aos="fade-up">Effective student committed to learning and developing skills in software and web
             development. Full-time undergraduate at Coastal Carolina University studying Information Systems
             and Graphic design. History of Masters of Science in applied clinical counseling psychology.
             Graduating Spring of 2023 and seeking a full-time job in the profession.</p>

         <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Erinn Szarek </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> erinnszarek@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Raleigh, NC </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> (843)333-5797 </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
         </div>



         <a href="file/resume.pdf" class="btn" data-aos="fade-up">download resume</a>

      </div>
 <!-- Skill section  -->



       </div>-->
       <div class="edu-exp"  data-aos="fade-up">

           <h1 class="heading" data-aos="fade-up"> <span>Skills</span> </h1>

           <div class="row">

               <div class="box-container">

                   <h3 class="title" data-aos="fade-right">Front End</h3>

                   <div class="box" data-aos="fade-right">

                       <h3>HTML</h3>
                   </div>

                   <div class="box" data-aos="fade-right">

                       <h3> CSS</h3>
                   </div>

                   <div class="box" data-aos="fade-right">

                       <h3>JavaScript</h3>

                   </div>
                   <div class="box" data-aos="fade-right">

                       <h3>Bootstrap</h3>

                   </div>
                   <div class="box" data-aos="fade-left">

                       <h3>Design Software</h3>
                       <p>Adobe Suite, Figma, Mockup</p>

                   </div>

               </div>

               <div class="box-container">

                   <h3 class="title" data-aos="fade-left">Back End</h3>

                   <div class="box" data-aos="fade-left">

                       <h3>C#/.NET</h3>

                   </div>

                   <div class="box" data-aos="fade-left">

                       <h3>PHP</h3>

                   </div>

                   <div class="box" data-aos="fade-left">

                       <h3>Python</h3>

                   </div>

                   <div class="box" data-aos="fade-left">

                       <h3>Java</h3>

                   </div>

                   <div class="box" data-aos="fade-left">

                       <h3>MySQL</h3>

                   </div>

               </div>

           </div>

       </div>




       <div class="edu-exp">

           <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>
           <div class="box-container" id="merit">
           <i class="fas fa-external-link"></i> <a data-aos="fade-up" href="https://meritpages.com/Erinnszarek" target="_blank" rel="noopener noreferrer" class="btn">Academic Awards</a>
           </div>
           <div class="row">

               <div class="box-container">

                   <h3 class="title" data-aos="fade-right">education</h3>

                   <div class="box" data-aos="fade-right">
                       <span>( 2021 &#8211 2023 )</span>
                       <h3>B.S. Information Systems and Graphic Design</h3>
                       <h4> Coastal Carolina University</h4>
                       <p>As a graduate of Coastal Carolina University's ABET accredited Bachelor of Science in Information
                           Systems program, I have acquired a solid understanding of the fundamental principles and
                           practical applications of information technology. With a focus on real-world scenarios and
                           hands-on experience, I am well-equipped to excel in a variety of roles in the field of
                           information systems.Consistently achieving Dean's List recognition throughout my academic
                           journey is a testament to my hard work and academic achievement.</p>
                   </div>

                   <div class="box" data-aos="fade-right">
                       <span>( 2017 &#8211 2019 )</span>
                       <h3> M.S. Applied Clinical Counseling Psychology</h3>
                       <h4> Francis Marion University</h4>
                       <p>My Master's degree in Clinical/Counseling Psychology from
                           Francis Marion University has equipped me with essential soft skills for a programming career,
                           including communication, problem-solving, critical thinking, and cultural sensitivity. These
                           skills make me a valuable asset to any programming team.</p>
                   </div>

                   <div class="box" data-aos="fade-right">
                       <span>( 2013 &#8211 2016 )</span>
                       <h3>B.S. Psychology</h3>
                       <p>I am proud to have earned a spot on the Dean's List every semester of my academic career,
                           demonstrating my commitment to academic excellence and dedication to achieving my goals.</p>
                   </div>

               </div>

               <div class="box-container">

                   <h3 class="title" data-aos="fade-left">Experience</h3>

                   <div class="box" data-aos="fade-left">
                       <span>( 2021 - 2023 )</span>
                       <h3>Student Affairs Website and Design Assistant</h3>
                       <ul>
                           <li> Led website development projects, transforming mockups into functional
                               web pages using HTML, CSS, and Bootstrap.</li>
                           <li>Optimized website flow for ease of use and implemented
                               SEO best practices to enhance accessibility.</li>
                           <li>Utilized Photoshop, Illustrator, and InDesign to design
                               and execute visually appealing front-end website designs.</li>
                           <li>Gathered and analyzed design and development requirements from various departments
                               within Student Affairs to ensure seamless communication and project success.</li>
                       </ul>
                   </div>

                   <div class="box" data-aos="fade-left">
                       <span>( 2020 - 2021 )</span>
                       <h3>Licensed Mental Health Counselor</h3>
                       <p>Used advanced counseling skills and evidence-based practices to establish goals and treatment plans with patients.
                           Guided clients in effective therapeutic exercises integrated from Cognitive Behavior Therapy and Dialectical Behavior Therapy (DBT).
                           Created and implemented additional website design to enhance user experience and increase accessability.</p>
                   </div>

                   <div class="box" data-aos="fade-left">
                       <span>( 2021 - 2022 )</span>
                       <h3>Licensed Clinical Professional Counselor- Associate</h3>
                       <p> provided counseling, psychotherapy, and conducted assessments for individuals, couples, families, and groups under the guidance of a fully licensed LCPC.
                           Collaborated with clients to develop treatment plans and facilitated their progress towards achieving their goals</p>
                   </div>

               </div>

           </div>

       </div>

   </section>

   <!-- about section ends -->


   <!-- classwork section -->
       <section class="classes" id="classes">


           <button  class="btn" id="classButton">Classes Taken</button>
           <div class="box-container" id="classesContainer">
               <div id="myDIV" data-aos="fade-down" class="row">
                   <div class="box-container" id="leftClass">
                       <?php require_once 'halfClasses.php' ?>
                   </div>
                   <div class="box-container" id="rightClass">
                       <?php require_once 'latterClasses.php' ?>
                   </div>
               </div>
            </div>

       </section>

   <!-- Classes ends -->
   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fa-brands fa-html5"></i>
            <h3>web development</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>Website Design & Redesign</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-palette"></i>
            <h3>Graphic Design</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>backend development</h3>
         </div>

         <div class="box" data-aos="zoom-in">
             <i class="fas fa-file-code"></i>
            <h3>API Applications</h3>

         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-database"></i>
            <h3>Database Operation</h3>

         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- portfolio section starts  -->
   <section class="portfolio" id="portfolio">
       <!-- Credit: https://github.com/fedeperin/github-repo-cards -->
       &nbsp;
       <div class="projects" data-aos="fade-up">
           <h1 class="heading"> <span>Projects</span> </h1>
           <section class="github-repo-cards" data-user="eszarek" data-background="#ffffff" data-target-blank="true"></section>
       </div>
   </section>

   <!-- portfolio section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
         </div>
         <input data-aos="fade-up" type="tel"  name="number" placeholder="enter your number" class="box"
            required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30"
            rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
      </form>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>(843)333-5797</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>erinnszarek@gmail.com</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Raleigh, NC</p>
         </div>

      </div>

   </section>


   <!-- contact section ends -->

   <div class="credit"> &copy; copyright @
      <?php echo date('Y'); ?> by <span>Erinn Szarek</span>
   </div>

   <!--interactive background.js -->
   <script type="text/javascript" src="js/bkg.js"></script>



   <!-- custom js file link  -->
   <script src="js/script.js"></script>
   <script>
       const toggleRow = (element) => {
           element.getElementsByClassName('expanded-row-content')[0].classList.toggle('hide-row');
           console.log(event);
       }
   </script>
   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>

</body>
<script>
    $(document).ready(function () {
        $('#classButton').click(function () {
            $('#myDIV').slideToggle('slow', function () {
            });
        });
    });
</script>
</html>