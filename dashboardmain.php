<html lang="en">

<head>
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body {
        background: rgba(0, 0, 0, .25);
    }

    .details {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-gap: 30px;
        /* margin-top: 10px; */
    }

    .details .recentbokking {
        position: relative;
        display: grid;
        min-height: 500px;
        background: var(--white);
        padding: 20px;
        box-shadow: 0 7px 25px rgba(152, 16, 16, 0.08);
        border-radius: 20px;
    }

    .details .cardHeader {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .cardHeader h2 {
        font-weight: 600;
        color: var(--blue);
    }

    .user-img {
        background-image: url(./ambimg/driver4.jpg);
        background-size: cover;

    }

    .clr {
        background-color: rgba(0, 0, 0, .25);
    }

    .user-card {
        border-radius: 50%;
    }
</style>

<body>
    <?php
    session_start();
    // $conn=mysqli_connect("localhost","root","","ambulance_reservation");
    // $query="select driver_name,driver_num,driver_car,driver_hospital from booking_detail where user_num=$_SESSION['id']";
    
    // $result=mysqli_query($conn,$query);
    // while($row=mysqli_fetch_array($result))
    // {
    //     $drivername=$row['driver_name']
    //     $drivernum=$row['driver_num']
    //     $hospitalname=$row['driver_hospital']
    //     $carnum=$row['$driver_car']
    // }
    
    ?>
    <section>
        <div class="nav">
            <div class="col-2 bg-dark">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div class="col-8 py-5 px-5">
                <div class="row">
                    <div class="card clr" style="width: 11rem;">
                        <img src="./ambimg/user1.jfif" class="card-img-top user-card" alt="...">
                        <div class="card-body">
                            <div class="name">
                                <h5>Piyush Kumar</h5>
                            </div>
                            <div class="experience-points"><i class="bi bi-phone"></i>
                                <h6>9876543210</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Dashboard</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Help</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Notification</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="details py-5">
                                <div class="recentbokking">
                                    <div class="cardHeader">
                                        <h2>Recent Bookings</h2>

                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <td>Hospital Name</td>
                                                <td>Driver Name</td>
                                                <td>Driver Number</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php echo $drivername; ?>
                                                </td>
                                                <td>
                                                    <?php echo $drivernum; ?>
                                                </td>
                                                <td>
                                                    <?php echo $hospitalname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $carnum; ?>
                                                </td>


                                            </tr>
                                            <tr>
                                                <td>RIIMS</td>
                                                <td>SUBODH KUMAR</td>
                                                <td>9876543210</td>
                                            </tr>
                                            <tr>
                                                <td>RIIMS</td>
                                                <td>SUBODH KUMAR</td>
                                                <td>9876543210</td>
                                            </tr>
                                            <tr>
                                                <td>RIIMS</td>
                                                <td>SUBODH KUMAR</td>
                                                <td>9876543210</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How to Book ambulance ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <span>Step1: Click on the booknow button.</span><br>
                                            <span>Step2: Enter your Pincode.</span><br>
                                            <span>Step3: Suggested Driver are avialbale.</span><br>
                                            <span>Step4: Now, Click on the submit button.</span><br>
                                            <span>Step5: Your ambulance is booked.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to style each element. These classes control the overall appearance, as well
                                            as the showing and hiding via CSS transitions. You can modify any of this
                                            with custom CSS or overriding our default variables. It's also worth noting
                                            that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to style each element. These classes control the overall appearance, as well
                                            as the showing and hiding via CSS transitions. You can modify any of this
                                            with custom CSS or overriding our default variables. It's also worth noting
                                            that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </div>
            </div>
            <div class="col-2 py-5">
                <!-- <button type="button" class="btn-primary"><i class="bi bi-box-arrow-right"></i>Sign-Out</button> -->
                <form method="post" action="./logout.php">
                    <i class="bi bi-box-arrow-right"></i>
                    <input type="submit" class="btn-primary" value="Log Out">
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>