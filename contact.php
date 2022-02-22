<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <?php
    include("includes/css.php");
    ?>
</head>

<body>
<!-- preloader start here -->
<?php
include("includes/preloader.php");
?>
<!-- preloader ending here -->

<!-- ===============// header section start here \\================= -->
<?php
include("includes/navbar.php");
?>
<!-- ===============//header section end here \\================= -->


<!-- ==========Page Header Section Start Here========== -->
<section class="page-header-section style-1">
    <div class="container">
        <div class="page-header-content">
            <div class="page-header-inner">
                <div class="page-title">
                    <h2>Contact Us </h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page Header Section Ends Here========== -->


<!-- Contact Us Section Start Here -->
<div class="contact-section">
    <div class="contact-top padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <article class="contact-form-wrapper">
                    <div class="contact-form">
                        <h4>Don't Be A Stranger Just Say Hello.</h4>
                        <form action="#" method="POST" id="commentform" class="comment-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contactName"
                                               placeholder="Name" required>
                                        <label for="contactName">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingPassword"
                                               placeholder="Email" required>
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="inputSub"
                                               placeholder="Subject" required>
                                        <label for="inputSub">Subject</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contactNumber"
                                               placeholder="Number" required>
                                        <label for="contactNumber">Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                                <textarea class="form-control" placeholder="Message"
                                                          id="msgBox" required></textarea>
                                        <label for="msgBox">Message</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="default-btn move-right">
                                <span>Send Message</span>
                            </button>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section ENding Here -->


<!-- ===============//footer section start here \\================= -->
<?php
include("includes/footer.php");
?>
</body>


<!-- Mirrored from demos.codexcoder.com/labartisan/html/nft/enftomark/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Feb 2022 06:24:42 GMT -->
</html>