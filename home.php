<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devic-width, initial-scale=1.0">
    <tilte>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac42c3b1f7.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
  <nav class="shadow navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="#"><img src="https://i.pinimg.com/originals/b1/fe/43/b1fe43b1d5c1305009c9d8c8b7cd517a.jpg" class="img-logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav m-auto">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link active" href="#abtusSection">About Us</a>
                <a class="nav-link active" href="#servSection">Services</a>
                <a class="nav-link active" href="#">Our Doctors</a>
                <a class="nav-link active" href="#">Reviews</a>
                <a class="nav-link active" href="#">Contact Us</a>
                <button class="btn btn-primary ml-5" onclick="">Make Appointment</button>
            </div>
        </div>
  </nav>
    <div class="bg-home">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://st2.depositphotos.com/1017986/7171/i/450/depositphotos_71718843-stock-photo-happy-young-female-dentist-with.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://imgk.timesnownews.com/story/dentist.gif" class="d-block w-100 img-design" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-photo/photo-smiling-dentist-standing-with-arms-crossed-with-her-colleague-showing-okay-sign_496169-1043.jpg?size=626&ext=jpg&ga=GA1.1.1700460183.1708300800&semt=ais" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="shadow bg-abtus p-3 m-5" id="abtusSection">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlh_lDgnsYBpPCyMXy_TZ9qalH8PLIRSdhfmpUb_QLMQ&s" class="img-abt m-4"/>
                </div>
                <div class="col-6 mt-5">
                  <h4 class="abt-head">About Us</h4>
                  <h2 class="">True Healthcare For Your Family</h2>
                  <p class="">At Dr Smiles we believe that patient care is of utmost importance. We strive to ensure that every dental visit is not just an appointment, but an experience. We provide comprehensive dental care for all age groups. Our team of highly trained and friendly professionals are committed to helping every individual maintain their oral health. We make use of the latest technologies and equipment to provide the highest quality of care to every patient.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-serv mb-5 d-flex flex-row justify-content-center" id="servSection">
      <div class="container">
        <div class="row">
          <div class="col-12 mt-5">
            <h1 class="text-center">OUR SERVICES</h1>
          </div>
          <div class="bg-serv-card w-50 col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="serv-icon d-flex flex-row justify-content-center">
              <i class="fa-solid fa-tooth"></i>
            </div>
            <h6>Alignment Specialist</h6>
            <p>Orthodontic Consultation, Assessment of dental and facial structure, Diagnosis,Treatment Planning,Braces and Orthodontic Appliances...</p>
          </div>
          <div class="bg-serv-card col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="serv-icon d-flex flex-row justify-content-center">
              <i class="fa-solid fa-tooth"></i>
            </div>
            <h6>Cosmetic Dentistry</h6>
            <p>Teeth Whitening,Dental Veneers,Dental Bonding,Smile Makeovers,Gum Contouring,Cosmetic Crowns and Bridges...</p>
          </div>
          <div class="bg-serv-card col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="serv-icon d-flex flex-row justify-content-center">
              <i class="fa-solid fa-tooth"></i>
            </div>
            <h6>Oral Hygiene Experts</h6>
            <p>Routine Cleanings,Periodontal Maintenance,Oral Hygiene Education,Preventive Care,Treatment of Halitosis (Bad Breath)...</p>
          </div>
          <div class="bg-serv-card col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="serv-icon d-flex flex-row justify-content-center">
              <i class="fa-solid fa-tooth"></i>
            </div>
            <h6>Root Canal Specialist</h6>
            <p>Root Canal Therapy,Apicoectomy,Treatment of Dental Trauma,Retreatment of Failed Root Canals...</p>
          </div>
          <div class="bg-serv-card col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="serv-icon d-flex flex-row justify-content-center">
              <i class="fa-solid fa-tooth"></i>
            </div>
            <h6>Live Dental Advisory</h6>
            <p>Emergency Consultations,Treatment Planning,Second Opinions,Teleconsultations,Postoperative Care Instructions,Pain Management Advice...</p>
          </div>
          <div class="bg-serv-card col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="serv-icon">
              <i class="fa-solid fa-tooth"></i>
            </div>
            <h6>Cavity Inspection</h6>
            <p>Clinical Examination,Dental X-rays,Caries Risk Assessment,Use of Diagnostic Tools,Visual Inspection with Magnification,,Digital Imaging Technology,Fluoride Assessment...</p>
          </div>
        </div>
      </div>
    </div>



     <!-- contact section starts -->
<section class="contact" id="contact">

<h1 class="heading"> Make appointment</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php
       if(isset($message)){
        foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
       }
    ?>
    <span>Your name :</span>
    <input type="text" name="name" placeholder="enter your name" class="box" required>
    <span>Your email :</span>
    <input type="email" name="email" placeholder="enter your email" class="box" required>
    <span>Your number :</span>
    <input type="number" name="number" placeholder="enter your number" class="box" required>
    <span>Appointment date :</span>
    <input type="datetime-local" name="date" class="box" required>
    <input type="submit" value="make appoinment" name="submit" class="link-btn">
 </form>
</section>
<!-- contact section starts -->
  </body>
</html>
