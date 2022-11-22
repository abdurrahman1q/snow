<?php
include('dbconnect.php');
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];


    $insert_query = "INSERT INTO contact(name, email, subject, msg, date) VALUES ('$name', '$email','$subject', '$msg')";
    $submit = mysqli_query($con, $insert_query);

    if ($submit) {
        header("location: contact.php");
    } else {
        echo 'beta tumse na ho payega';
    }
}
?>


<main class="main-content mb-n2">

    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Contact Us</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="page-header-thumb">
                        <img src="assets/images/photos/page-title.png" alt="Image-HasTech" width="546" height="281">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <div class="contact-area section-top-space">
        <div class="container">
            <div class="contact-wrp"
                data-bg-img="https://images.pexels.com/photos/990432/pexels-photo-990432.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <div class="row">
                    <div class="col-lg-5 col-xl-4">
                        <div class="contact-info-area">
                            <h3 class="contact-info-area-title text-black">Contact Info</h3>

                            <!--== Start Contact Info Item ==-->
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <img src="assets/images/icons/pin2.png" alt="Icon">
                                </div>
                                <div class="contact-info-content">
                                    <h4 class="contact-info-title mb-2 mt-n1">Head Office</h4>
                                    <p>Your address here <span>54/X, New Down City</span></p>
                                </div>
                            </div>
                            <!--== End Contact Info Item ==-->

                            <!--== Start Contact Info Item ==-->
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <img src="assets/images/icons/call.png" alt="Icon">
                                </div>
                                <div class="contact-info-content">
                                    <h4 class="contact-info-title mb-2 mt-n1">Phone</h4>
                                    <a href="tel://+00123456789 ">+00 123 456 789</a>
                                    <a href="tel://+00123456989">+00 123 456 989</a>
                                </div>
                            </div>
                            <!--== End Contact Info Item ==-->

                            <!--== Start Contact Info Item ==-->
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <img src="assets/images/icons/email.png" alt="Icon">
                                </div>
                                <div class="contact-info-content">
                                    <h4 class="contact-info-title mt-n1">Email</h4>
                                    <a href="mailto://demo@example.com">youremail@demo.com</a>
                                    <a href="mailto://example@demo.info">www.yoursite.web</a>
                                </div>
                            </div>
                            <!--== End Contact Info Item ==-->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                        <div class="contact-form-area">
                            <h3 class="contact-form-title text-black">Get In Touch</h3>
                            <!--== Start Contact Form ==-->
                            <form class="contact-form" id="contact-form" action="contact.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="Your Name">
                                            <i class="icon fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-item">
                                            <input class="form-control" type="email" name="email" id="mail"
                                                placeholder="Enter Your Mail">
                                            <i class="icon fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="text" name="subject" id="subject"
                                        placeholder="Your Subject">
                                    <i class="icon fa fa-phone-square"></i>
                                </div>
                                <div class="form-input-item">
                                    <textarea class="form-control" name="msg" id="message"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <input type="submit" value="Submit" name="submit" class="btn btn-success ">
                            </form>
                            <!--== End Contact Form ==-->

                            <!--== Message Notification ==-->
                            <!-- <div class="form-message"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Contact Area Wrapper ==-->


</main>