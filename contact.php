<?php 
if(isset($_POST['submit'])){
    $to = "abdavis839@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: thank_you.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Blythe's portfolio">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <link href="bootstrap_theme/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="blocks.css">
        <link href="style.css" rel="stylesheet">
        <title>Blythe Davis</title>
    </head>
    <body class="bg-white text-muted">
        <header>
            <nav class="bg-white navbar navbar-expand-lg navbar-light pb-3 pt-3 shadow-none"> 
                <div class="container"> 
                    <a class="align-items-end d-inline-flex navbar-brand text-body text-uppercase" href="portfolio.html"> <span class="fw-bold h5 mb-0">Blythe Davis</span></a> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-2" aria-controls="navbarNavDropdown-2" aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span> 
                    </button>                     
                    <div class="collapse navbar-collapse " id="navbarNavDropdown-2"> 
                        <ul class="ms-auto navbar-nav"> 
                            <li class="nav-item"> 
                                <a class="nav-link pb-lg-3 pe-lg-4 ps-lg-4 pt-lg-3" aria-current="page" href="portfolio.html">Portfolio</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link pb-lg-3 pe-lg-4 ps-lg-4 pt-lg-3" href="about.html">About</a> 
                            </li>
                            <li class="nav-item"> 
</li>
                            <li class="nav-item"> 
</li>
                            <li class="nav-item"> 
</li>
                            <li class="nav-item"> 
                                <a class="active nav-link pb-lg-3 pe-lg-4 ps-lg-4 pt-lg-3" href="contact.php">Contact</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                </div>                 
            </nav>
        </header>
        <main>
            <section class="bg-info pb-5 pt-5 text-white video"> 
                <div class="container"> 
                    <div class="row">
                        <div>
                            <h3 class="text-body text-center">GET IN TOUCH</h3>
                            <section class="bg-white pb-2 pt-0 text-center"> 
                                <div class="container pb-4 pt-4"> 
                                    <div class="row"> 
                                        <div class="bg-white col-lg-8 me-auto ms-auto py-3"> 
                                            <form method="post" action=""> 
                                                <div class="mb-3"> 
                                                    <input type="text" class="bg-light border border-0 form-control rounded-0" name='name' placeholder="Enter name..."> 
                                                </div>                                                 
                                                <div class="mb-3"> 
                                                    <input type="email" class="bg-light border border-0 form-control rounded-0" name='email' placeholder="Enter email..."> 
                                                </div>                                                 
                                                <div class="mb-3"> 
                                                    <textarea class="bg-light border-0 form-control rounded-0" rows="6" name='message' placeholder="Enter your message..."></textarea> 
                                                </div>                                                 
                                                <button type="submit" name="submit" class="btn d-block w-100 btn-primary rounded-0 text-uppercase">Submit</button>                                                 
                                            </form>                                             
                                        </div>
                                    </div>                                     
                                </div>
                            </section>                             
                        </div>
                        <div class="me-auto ms-auto w-75"> 
                            <p class="text-body text-center"><a href="mailto:abdavis839@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="me-3 text-primary">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"/>
                                            <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/>
                                        </g>
                                    </svg> abdavis839@gmail.com</a></p>
                            <p class="col-md-4 float-start text-body text-center"><a href="https://github.com/ablythed"><svg viewBox="0 0 24 24" fill="currentColor" height="24" width="24" class="me-3 text-primary"> 
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill-rule="nonzero" d="M5.883 18.653c-.3-.2-.558-.455-.86-.816a50.32 50.32 0 0 1-.466-.579c-.463-.575-.755-.84-1.057-.949a1 1 0 0 1 .676-1.883c.752.27 1.261.735 1.947 1.588-.094-.117.34.427.433.539.19.227.33.365.44.438.204.137.587.196 1.15.14.023-.382.094-.753.202-1.095C5.38 15.31 3.7 13.396 3.7 9.64c0-1.24.37-2.356 1.058-3.292-.218-.894-.185-1.975.302-3.192a1 1 0 0 1 .63-.582c.081-.024.127-.035.208-.047.803-.123 1.937.17 3.415 1.096A11.731 11.731 0 0 1 12 3.315c.912 0 1.818.104 2.684.308 1.477-.933 2.613-1.226 3.422-1.096.085.013.157.03.218.05a1 1 0 0 1 .616.58c.487 1.216.52 2.297.302 3.19.691.936 1.058 2.045 1.058 3.293 0 3.757-1.674 5.665-4.642 6.392.125.415.19.879.19 1.38a300.492 300.492 0 0 1-.012 2.716 1 1 0 0 1-.019 1.958c-1.139.228-1.983-.532-1.983-1.525l.002-.446.005-.705c.005-.708.007-1.338.007-1.998 0-.697-.183-1.152-.425-1.36-.661-.57-.326-1.655.54-1.752 2.967-.333 4.337-1.482 4.337-4.66 0-.955-.312-1.744-.913-2.404a1 1 0 0 1-.19-1.045c.166-.414.237-.957.096-1.614l-.01.003c-.491.139-1.11.44-1.858.949a1 1 0 0 1-.833.135A9.626 9.626 0 0 0 12 5.315c-.89 0-1.772.119-2.592.35a1 1 0 0 1-.83-.134c-.752-.507-1.374-.807-1.868-.947-.144.653-.073 1.194.092 1.607a1 1 0 0 1-.189 1.045C6.016 7.89 5.7 8.694 5.7 9.64c0 3.172 1.371 4.328 4.322 4.66.865.097 1.201 1.177.544 1.748-.192.168-.429.732-.429 1.364v3.15c0 .986-.835 1.725-1.96 1.528a1 1 0 0 1-.04-1.962v-.99c-.91.061-1.662-.088-2.254-.485z"></path>                                         
                                    </svg>@ablythed</a></p>
                            <p class="col-md-4 float-start text-body text-center"><a href="https://dribbble.com/ablythed"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="me-3 text-primary">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 0 1 1.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.424 25.424 0 0 0-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.814 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.686 8.686 0 0 1 12 3.475zm-3.633.803a53.903 53.903 0 0 1 3.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 0 1 4.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 0 1-2.19-5.705zM12 20.547a8.482 8.482 0 0 1-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.309 35.309 0 0 1 1.823 6.475 8.4 8.4 0 0 1-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.66-6.084 2.68-.423 5.023.271 5.315.369a8.468 8.468 0 0 1-3.655 5.715z"/>
                                        </g>
                                    </svg>@ablythed</a></p>
                            <p class="col-md-4 float-start text-body text-center"><a href="https://twitter.com/ablythed"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24" class="me-3 text-primary">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill-rule="nonzero" d="M15.3 5.55a2.9 2.9 0 0 0-2.9 2.847l-.028 1.575a.6.6 0 0 1-.68.583l-1.561-.212c-2.054-.28-4.022-1.226-5.91-2.799-.598 3.31.57 5.603 3.383 7.372l1.747 1.098a.6.6 0 0 1 .034.993L7.793 18.17c.947.059 1.846.017 2.592-.131 4.718-.942 7.855-4.492 7.855-10.348 0-.478-1.012-2.141-2.94-2.141zm-4.9 2.81a4.9 4.9 0 0 1 8.385-3.355c.711-.005 1.316.175 2.669-.645-.335 1.64-.5 2.352-1.214 3.331 0 7.642-4.697 11.358-9.463 12.309-3.268.652-8.02-.419-9.382-1.841.694-.054 3.514-.357 5.144-1.55C5.16 15.7-.329 12.47 3.278 3.786c1.693 1.977 3.41 3.323 5.15 4.037 1.158.475 1.442.465 1.973.538z"></path>
                                        </g>
                                    </svg>@ablythed</a></p> 
                        </div>                         
                    </div>                     
                </div>                 
            </section>
        </main>
        <footer class="bg-white pt-5 text-white"> 
            <div class="container"> 
                <div class="pb-3 pt-3 small"> 
                    <div class="align-items-center row">
                        <div class="col-md pb-2 pt-2">
                            <p class="bg-white mb-0 text-black-50">&copy; 2022. All rights reserved - Blythe Davis</p>
                        </div>
                    </div>                     
                </div>                 
            </div>             
        </footer>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
