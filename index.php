<?php 

session_start();
$_SESSION["authenticate"] = false;
?>



<html lang="en">

<head>
    <title>Ambulance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mystyle.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="top-header bg-danger">
            <div class="container py-3">
                <div class="row">
                    <div class="col-3">
                        <img src="./ambimg/Stock Image_ Objects.jpg" alt="" width="48%" height="140px">
                    </div>
                    <div class="col-4 py-5">
                        <div class="text">
                            <h1>Ambulance Book karo!!</h1>
                        </div>
                    </div>
                    <div class="col py-5">
                        <div class="btn1">
                            <button type="button " id="btn-5" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-2">BOOk NOW</button>
                            <button type="button " id="btn-5" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal-1">LOG-IN</button>
                            <button type="button " id="btn-5" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">SIGN-UP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section-1>
        <div class="container py-5">
            <div class="row">
                <div class="col-6 bg-light" id="frm-1">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NAME</label>
                            <input type="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone Num</label>
                            <input type="phonenum" class="form-control" id="exampleInputPhonenum">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">SIGN-UP</button>
                    </form>
                </div>
                <div class="col-6">
                    <div class="background-img">
                    </div>
                </div>
            </div>
        </div>
    </section-1>
    <section-2>
        <div class="container-fliud">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./ambimg/mat-napo-ejWJ3a92FEs-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./ambimg/fas-khan-n-DPU28GoEA-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./ambimg/jose-de-azpiazu-Fz4bjB8LdT4-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section-2>
    <section-3>
        <div class="container-fliud bg-primary px-5 py-5">
            <div class="row" id="section-3">
                <div class="col-6 px-5">
                    <div class="About-img-1">
                        <img src="./ambimg/about1.webp">
                    </div>
                    <div class="About-img-2">
                        <img src="ambimg/about2.webp">
                    </div>
                </div>
                <div class="col-6 px-5 position-centers">
                    <i class="bi bi-hospital mx-5" style="font-size:2rem" ;></i>
                    <h1 class="mx-4 my-5">ABOUT US</h1>
                    <div class="para-1 my-5">
                        <p>
                            Our user-friendly interface allows individuals, medical facilities,
                            and emergency response centers to quickly request an ambulance.
                            The system collects essential details such as the location, nature
                            of the emergency, and the required level of medical care.
                            In critical situations, the system can automatically trigger
                            emergency alerts to notify nearby medical facilities, law
                            enforcement agencies, or other relevant parties. These
                            alerts help mobilize additional resources and support for
                            the emergency response.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section-3>
    <!--COUNTER-->
    <section>
        <div class="counter bg-danger">
            <div class="container py-5">
                <div class="row">
                    <div class="sectiontitle">
                        <h2>Projects statistics</h2>
                        <span class="headerLine"></span>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="count-up">
                            <p class="counter-count">100</p>
                            <h3>Ambulance Available</h3>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="count-up">
                            <p class="counter-count">200</p>
                            <h3>Helicopter Available</h3>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="count-up">
                            <p class="counter-count">300</p>
                            <h3>Success Operation</h3>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="count-up">
                            <p class="counter-count">400</p>
                            <h3>Connected Hospital</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section-4>
        <!--Testimonial-->
        <!-- 
	use the left and right arrow keys on your keyboard or just swipe left and right on your smart phone to interact with the slider
         -->
        <section id="testim" class="testim">
            <div class="container">
                <!--         <div class="testim-cover"> -->
                <div class="wrap">

                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li><!--
                        -->
                        <li class="dot"></li><!--
                        -->
                        <li class="dot"></li><!--
                        -->
                        <li class="dot"></li><!--
                        -->
                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">

                        <div class="active">
                            <div class="img"><img
                                    src="https://images.unsplash.com/photo-1625241152315-4a698f74ceb7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80"
                                    alt=""></div>
                            <h2>R. A. Rao</h2>
                            <p>I had a very hassle-free experience with this application even from the moment I
                                contacted you till I brought back my Grandfather from Pondy to Chennai. They picked me
                                up on time from Chennai and overall experience was very good. The patient was very
                                comfortable during the travel. The vehicle maintenance was good and the drivers were
                                helpful
                            </p>
                        </div>

                        <div>
                            <div class="img"><img
                                    src="https://images.unsplash.com/photo-1621787279751-2baabc22d976?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                    alt=""></div>
                            <h2>Aman Singh</h2>
                            <p>
                                We called the ambulance in the midnight to shift my father to Railway hospital.
                                Excellent coordination from the team and appreciate the good work.
                            </p>
                        </div>

                        <div>
                            <div class="img"><img
                                    src="https://images.unsplash.com/photo-1562783530-df27356a200d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                    alt=""></div>
                            <h2>Sara Chakraborty</h2>
                            <p>We approached them for a transport Ambulance and the service given was very much helpful
                                and satisfying.
                            </p>
                        </div>

                        <div>
                            <div class="img"><img
                                    src="https://images.unsplash.com/photo-1660314019032-268d70002b7f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                    alt=""></div>
                            <h2>Aryan Sidana</h2>
                            <p>We had a great experience with them. The vehicle was very comfortable and it was
                                maintained well.
                            </p>
                        </div>

                        <div>
                            <div class="img"><img
                                    src="https://images.unsplash.com/photo-1583058905141-deef2de746bb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=588&q=80"
                                    alt=""></div>
                            <h2>Aadriti Jha</h2>
                            <p>
                                We had a great experience with them. The vehicle was very comfortable and it was
                                maintained well.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--         </div> -->
        </section>
    </section-4>

    <!--FOOTER-->
    <footer>
        <div class="container-fliud bg-danger py-5 my-5">
            <div class="row">
                <div class="col-6 px-5 py-5">
                    <img src="./ambimg/100+ Text Logo Designs That Will Win You Customers - LogoWhistle.jpg"
                        height="200px" width="250px">
                </div>
                <div class="col-6">
                    <div class="feedbacktext py-5">
                        <h1>Ambulance Reservation easily<br> for patients</h1>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <ul class="list-1">
                                <li>SOCIAL</li>
                                <li><a href="wwww.facebook.com">FACEBOOK</a></li>
                                <li><a href="wwww.twitter.com">TWITTER</a></li>
                                <li><a href="www.instagram.com">INSTAGRAM</a>
                                <li><a href="wwww.dribble.com">DRIBBLE</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="list-2">
                                <li>MENU</li>
                                <li>HOME</li>
                                <li>Contacts</li>
                                <li>SERVICES</li>
                                <li>ABOUT US</li>
                                <li>FEATURES</li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="list-2">
                                <lI>SAY HELLO</lI>
                                <lI>info@gmail.com</lI>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5 border-top py-5">
                <div class="col-6">
                    <h2>Piyush © 2023. All Rights Reserved.</h2>
                </div>
                <div class="col-4">
                    <div class="icon">
                        <i class="bi bi-facebook" style="font-size: 2rem;"></i>
                        <i class="bi bi-instagram" style="font-size: 2rem;"></i>
                        <i class="bi bi-dribbble" style="font-size: 2rem;"></i>
                        <i class="bi bi-twitter" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal for sign-up-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SIGN-UP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="sign-up">
                        <form method="post" action="./signup.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NAME</label>
                                <input type="name" name="fname" class="form-control" id="exampleInputname"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone Num</label>
                                <input type="phonenum" name="pnum" class="form-control" id="exampleInputPhonenum">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login form-->
    <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOG-IN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="mx-3" method="post" action="./login.php">
                    <div class="mb-3">

                        <label for="phone" class="form-label">Phone Number:</label>
                        <input type="text" name="pnum" class="form-control" id="phone" name="phone" required
                            pattern="[0-9]{10}" title="Please enter a 10-digit phone number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!--book now form-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Your Pincode</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./bookinglist.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputpincode" class="form-label">PIN CODE</label>
                            <input type="pincode" name="pincode" class="form-control" id="exampleInputPhonenum">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit" value="Submit" class="btn btn-secondary"
                                data-bs-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>