<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parallax Website Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Additional CSS for animation */
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .fade-in.active {
            opacity: 1;
        }

        .glow-pop-up {
            animation: glowPopUp 1s ease infinite alternate;
        }

        @keyframes glowPopUp {
            0% {
                text-shadow: 0 0 10px #fff;
                transform: scale(1);
            }
            100% {
                text-shadow: 0 0 20px #fff, 0 0 40px #ff00de, 0 0 80px #ff00de, 0 0 100px #ff00de;
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Navigation code remains unchanged -->
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dream Big Inc.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Apply</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Your existing content goes here -->
    <div class="pimg1" id="home">
        <div class="ptext2">
            <span class="border2 glow-pop-up">DREAM BIG</span>
        </div>
    </div>

    <section class="section section-light" id="about">
        <h2>What's About Our Company?</h2>
        <p>Good day friend! 
        Dream Big Inc. is an IT company that offers IT related services.</p>
    </section>

    <div class="pimg2" id="team">
        <div class="ptext">
            <span class="border trans glow-pop-up">Do you want to join in our team?</span>
        </div>
    </div>

    <section class="section section-dark">
    <h2>Are you Qualified for us?</h2>
    <p>We are looking for those who have knowledge in:
        <br>1. Information technology system analysis.
        <br>2. Information Security.
        <br>3. Data networking.
        <br>4. Information technology system risk assessment.
        <br>5. Computer administration
    </p>
</section>


    <div class="pimg3" id="contact">
        <div class="ptext">
            <span class="border trans glow-pop-up">MAKE YOUR DECISION CLEAR</span>
        </div>
    </div>

    <section class="section section-light">
        <h2>APPLY NOW!</h2>
        <p>
            <br>1. Submit your resume to us with a 2x2 picture.
            <br>2. Wait for our call for the schedule of your interview.
        </p>
    </section>

    <div class="pimg1">
        <div class="ptext2">
            <span class="border2 glow-pop-up">CONTACT US!</span>
        </div>
    </div>

    <!-- Footer Menu -->
    <footer class="bg-dark text-white text-center">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h5>Contact Information:</h5>
                    <p>125, Villa Quintana, Palangue Central, Naic, Cavite</p>
                    <p>Email: johnmarkcodera97@gmail.com</p>
                    <p>Phone: 09606953207</p>
                </div>
                <!-- Quick Links -->
<div class="col-md-6 mb-4 mb-md-0">
    <h5>Quick Links</h5>
    <ul class="list-unstyled">
        <li>
            <a href="https://www.facebook.com/jm.codera" class="text-white" target="_blank">Facebook</a>
        </li>
        <li>
            <a href="https://www.instagram.com/diyeyy_em/" class="text-white" target="_blank">Instagram</a>
        </li>
        <li>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=your.johnmarkcodera97@gmail.com" class="text-white">Gmail</a>
        </li>
    </ul>
</div>

            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript for fade-in effect
        $(document).ready(function() {
            $(window).scroll(function() {
                $('.fade-in').each(function() {
                    var top_of_element = $(this).offset().top;
                    var bottom_of_element = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
                    var top_of_screen = $(window).scrollTop();

                    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                });
            });
        });
    </script>
</body>
</html>
