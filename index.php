<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Coming Soon: Unveiling My Professional Journey! - Peter B. Kostandy" />
    <meta name="author" content="Peter B. Kostandy" />
    <title>Coming Soon: Unveiling My Professional Journey!</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="assets/mp4/bg.mp4" type="video/mp4" />
    </video>

    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h2 class="fst-italic lh-1 mb-4">Eng. Peter B. Kostandy</h2><h3>Unveiling My Professional Journey!</h3>
                <p class="mb-5">Welcome to my exclusive "Coming Soon" page! I'm thrilled to announce that I'm currently working on an exciting new web profile that will showcase my journey, skills, and accomplishments in a captivating way.
                    Want to be the first to know when my web profile goes live? Subscribe to my newsletter and join my network.
                    By subscribing, you'll receive exclusive updates, early access to my content, and special insights into my journey.</p>



                <form id="contactForm" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="top-right">
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" id="email" type="email" placeholder="Enter email address..." name="email" /></div>
                        <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit">Notify Me!</button></div>
                    </div>

                    <!-- Submit message-->
                    <div id="submitSuccessMessage">
                        <div class="text-center mb-3 mt-2">
                            <?php
                            // Display the success or fail message (if present in the URL)
                            if (isset($_GET['message'])) {
                                if ($_GET['message'] === 'success') {
                                    echo '<div class="fw-bolder">Form submission successful!</div>';
                                } elseif ($_GET['message'] === 'fail') {
                                    echo '<div class="fw-bolder" style="color: red;">Error sending message!</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Social Icons-->
    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="https://twitter.com/petobarkar"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark m-3" href="https://twitter.com/petobarkar"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark m-3" href="https://www.linkedin.com/in/peterkostandy"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>