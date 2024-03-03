<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if(isset($_POST['submit'])){
   $name =  mysqli_real_escape_string($conn, $_POST['name']);
   $email =  mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO contact_form (name, email , number, date)
    VALUES('$name','$email', '$number','$date')") or die('query failed');
   
  if($insert){
      $message[ ] = 'appointment made successfully!';
  }
 else{
       $message[ ]= 'appointment failed';
       }
}
?>




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
                <a class="nav-link active" href="#docSection">Our Doctors</a>
                <a class="nav-link active" href="#revSection">Reviews</a>
                <a class="nav-link active" href="#contact">Contact Us</a>
                <a href="#contact">
                <button class="btn btn-primary ml-5" >Make Appointment</button></a>
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
                    <img src="https://st2.depositphotos.com/1017986/7171/i/450/depositphotos_71718843-stock-photo-happy-young-female-dentist-with.jpg" class="d-block img-caro" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="head-caro">LET US BRIGHTEN YOUR SMILE</h3>
                        <p class="para-caro">Your dental health is our delight!!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://imgk.timesnownews.com/story/dentist.gif" class="d-block img-caro" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="head-caro">SMILE BRIGHT, LIVE LIGHT</h3>
                        <p class="para-caro">We make dental visits a joy to bear!!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-photo/photo-smiling-dentist-standing-with-arms-crossed-with-her-colleague-showing-okay-sign_496169-1043.jpg?size=626&ext=jpg&ga=GA1.1.1700460183.1708300800&semt=ais" class="d-block img-caro" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="head-caro">WE ARE NOT JUST FIXING TEETH</h3>
                        <p class="para-caro">We are creating smiles that breath!!</p>
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
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlh_lDgnsYBpPCyMXy_TZ9qalH8PLIRSdhfmpUb_QLMQ&s" class="img-abt mt-5"/>
                </div>
                <div class="col-6 mt-5">
                  <h4 class="abt-head">About Us</h4>
                  <h2 class="">True Healthcare For Your Family</h2>
                  <p class="">At Dr Smiles we believe that patient care is of utmost importance. We strive to ensure that every dental visit is not just an appointment, but an experience. We provide comprehensive dental care for all age groups. Our team of highly trained and friendly professionals are committed to helping every individual maintain their oral health. We uses the latest technologies and equipment to provide the highest quality of care to every patient.</p>
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
          <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="bg-serv-card">
              <div class="serv-icon d-flex flex-row justify-content-center">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h6>Alignment Specialist</h6>
              <p>Orthodontic Consultation, Assessment of dental and facial structure, Diagnosis,Treatment Planning,Braces and Orthodontic Appliances...</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="bg-serv-card">
              <div class="serv-icon d-flex flex-row justify-content-center">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h6>Cosmetic Dentistry</h6>
              <p>Teeth Whitening,Dental Veneers,Dental Bonding,Smile Makeovers,Gum Contouring,Cosmetic Crowns and Bridges...</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="bg-serv-card">
              <div class="serv-icon d-flex flex-row justify-content-center">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h6>Oral Hygiene Experts</h6>
              <p>Routine Cleanings,Periodontal Maintenance,Oral Hygiene Education,Preventive Care,Treatment of Halitosis (Bad Breath)...</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="bg-serv-card">
              <div class="serv-icon d-flex flex-row justify-content-center">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h6>Root Canal Specialist</h6>
              <p>Root Canal Therapy,Apicoectomy,Treatment of Dental Trauma,Retreatment of Failed Root Canals...</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="bg-serv-card">
              <div class="serv-icon d-flex flex-row justify-content-center">
              <i class="fa-solid fa-tooth"></i>
              </div>
              <h6>Live Dental Advisory</h6>
              <p>Emergency Consultations,Treatment Planning,Second Opinions,Teleconsultations,Postoperative Care Instructions,Pain Management Advice...</p>
            </div>
          </div>
          <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
            <div class="bg-serv-card">
              <div class="serv-icon">
                <i class="fa-solid fa-tooth"></i>
              </div>
              <h6>Cavity Inspection</h6>
              <p>Clinical Examination,Dental X-rays,Caries Risk Assessment,Uses of Diagnostic Tools,Visual Inspection with Magnification,,Digital Imaging Technology,Fluoride Assessment...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-serv mt-3 mb-3" id="docSection">
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
          <h1 class="text-center">OUR DOCTORS</h1>
        </div>
        <div class="col-12 col-md-4">
          <div class="bg-doc-card">
            <div claass="m-auto d-flex flex-row justify-content-center">
              <img src="https://static.vecteezy.com/system/resources/thumbnails/028/287/384/small/a-mature-indian-male-doctor-on-a-white-background-ai-generated-photo.jpg" class="img-doc"/>
            </div>
            <p class="doc-para text-center">Specialist in diagnosing and treating dental and facial irregularities. Employing braces, aligners, and innovative devices, they strive to correct misaligned teeth and achieve optimal bite and facial aesthetics.</p>
            <div class="bg-doc-rate text-center m-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
              </svg>
            </div>
            <h6 class="mt-2 text-center">John Mathew</h6>
            <p class="doc-para text-center">Orthodontist</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="bg-doc-card">
            <div claass="m-auto d-flex flex-row justify-content-center">
              <img src="https://st4.depositphotos.com/1017986/21088/i/450/depositphotos_210888716-stock-photo-happy-doctor-with-clipboard-at.jpg" class="img-doc"/>
            </div>
            <p class="doc-para text-center">The expertise of endodontists lies in the intricate treatment of dental pulp and related tissues. Through root canal therapy, they address infections and inflammations, alleviating tooth pain and preserving dental health.</p>
            <div class="bg-doc-rate text-center m-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
              </svg>
            </div>
            <h6 class="mt-2 text-center">Sebastien</h6>
            <p class="doc-para text-center">Endodontist</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="bg-doc-card">
            <div claass="m-auto d-flex flex-row justify-content-center">
              <img src="https://static.vecteezy.com/system/resources/thumbnails/028/287/555/small/an-indian-young-female-doctor-isolated-on-green-ai-generated-photo.jpg" class="img-doc"/>
            </div>
            <p class="doc-para text-center">Specializing in gum health, periodontists focus on preventing, diagnosing, and treating gum diseases. Their skills extend to advanced procedures like scaling and root planing, as well as managing dental implants.</p>
            <div class="bg-doc-rate text-center m-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </div>
            <h6 class="mt-2 text-center">Edna George</h6>
            <p class="doc-para text-center">Periodontist</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="bg-serv mt-3 mb-3" id="revSection">
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
          <h1 class="text-center">SATISFIED CLIENTS</h1>
        </div>
        <div class="col-12 col-md-4">
          <div class="bg-doc-card">
            <div claass="m-auto d-flex flex-row justify-content-center">
              <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" class="img-doc"/>
            </div>
            <p class="doc-para text-center"><B>Very professional dentist</B><BR>Super helpful to take an emergency for a broken tooth and to find a solution in doing a crown in 24h.</p>
            <div class="bg-doc-rate text-center m-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
              </svg>
            </div>
            <h6 class="mt-2 text-center">Ken Mathew</h6>
            <p class="doc-para text-center">Satisfied Client</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="bg-doc-card">
            <div claass="m-auto d-flex flex-row justify-content-center">
              <img src="https://img.freepik.com/free-photo/close-up-confident-corporate-woman-professional-entrepreneur-smiling-cross-arms-chest-smiling-enthusiastic-standing-white-background_1258-85600.jpg?size=626&ext=jpg&ga=GA1.1.1395880969.1708992000&semt=ais" class="img-doc"/>
            </div>
            <p class="doc-para text-center"><B>Absolutely a great dentist!</B><BR>Excellent work with reasonable fees! Absolutely a great dentist! </p>
            <div class="bg-doc-rate text-center m-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
              </svg>
            </div>
            <h6 class="mt-2 text-center">Maria</h6>
            <p class="doc-para text-center">Satisfied Client</p>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="bg-doc-card">
            <div claass="m-auto d-flex flex-row justify-content-center">
              <img src="https://st2.depositphotos.com/4153545/8121/i/450/depositphotos_81211808-stock-photo-young-woman-at-outdoors.jpg" class="img-doc"/>
            </div>
            <p class="doc-para text-center"><B>Very satisfied with the treament done.</B><BR>I got my 4 root canal treatments done and also got my tooth crowns done. Very satisfied with the treament done. </p>
            <div class="bg-doc-rate text-center m-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
            </div>
            <h6 class="mt-2 text-center">Monika Kaur</h6>
            <p class="doc-para text-center">Satisfied Client</p>
          </div>
        </div>
      </div>
    </div>
  </div>




     <!-- contact section starts -->
<section class="contact mb-3" id="contact">

<h1 class="heading text-center"> MAKE  APPOINTMENT</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php
       if(isset($message)){
        foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
       }
    ?>
    <div class="bg-appoint pb-2 m-auto d-flex flex-column justify-content-center">
      <div class="box-appear ">
        <span>Your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
      </div>
      <div class="box-appear">
        <span>Your email :</span>
        <input type="email" name="email" placeholder="abc@gmail.com" class="box" required>
      </div>
      <div class="box-appear">
        <span>Your number :</span>
        <input type="number" name="number" placeholder="XXXXXXXXXX" class="box" required>
      </div>
      <div class="box-appear">
        <span>Appointment date :</span>
        <input type="datetime-local" name="date" class="box" required>
      </div>
      <input type="submit" value="Make Appoinment" name="submit" class="link-btn btn btn-primary" onclick="fun()">
      <script>function fun(){
        alert("APPOINTMENT SUCCESSFUL!!");
      }</script>
    </div>
 </form>
</section>
<!-- contact section starts -->

<div class="bg-foot" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-3 d-flex flex-column justify-content-center">
        <div class="box-icon">
          <i class="fas fa-phone icon"></i>
        </div>
        <h3 class="text-center">Phone number</h3>
        <p class="foot-para text-center">+91-9867566710, +91-8547682390</p>
      </div>
      <div class="col-3 d-flex flex-column justify-content-center">
        <div class="box-icon appear">
          <i class="fas fa-map-marker-alt icon"></i>
        </div>
        <h3 class="text-center">Our Address</h3>
        <p class="foot-para text-center">Kalamassery,Kochi,India-682030</p>
      </div>
      <div class="col-3 d-flex flex-column justify-content-center">
        <div class="box-icon">
          <i class="fas fa-clock icon"></i>
        </div>
        <h3 class="text-center">Opening Hours</h3>
        <p class="foot-para text-center">09:00AM to 04:00PM</p>
      </div>
      <div class="col-3 d-flex flex-column justify-content-center">
        <div class="box-icon">
          <i class="fas fa-envelope icon"></i>
        </div>
        <h3 class="text-center">Our Email</h3>
        <p class="foot-para text-center">johnmathew08@gmail.com<br>ednageorge@gmail.com</p>
      </div>
    </div>
  </div>
 
  </body>
</html>
