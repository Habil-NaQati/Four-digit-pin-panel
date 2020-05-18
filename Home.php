<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main</title>
        <!-- CSS Main-->
        <link href="main-min.css" rel="stylesheet">
        <!-- CSS Compulsory -->
        <link href="response.min.css" rel="stylesheet">

        <link rel="stylesheet" href="animation.css">

    </head>
    <body background='dt1.jpg' class="container u-space-4">

    <form action="next.php" class="u-content-centered" method="post">


        <label class="u-content-centered">
                  <span class=" u-bg-transparent u-label u-label--md u-label--dark ">
                         <strong class="u-text-animation u-text-animation--typing"></strong>
                        </span>

            <div class="d-inline-flex">

                <input class="font-weight-medium font-italic border-1 bg-transparent text-center"
                       name="password" placeholder="Enter 4 Digit Pin"
                       required type="password">


                <button class="btn-link bg-transparent text-white"
                        name="submit" type="submit"> Proceed
                </button>
            </div>
        </label>
    </form>
    </body>
    <!-- JS Implementing Plugins -->
    <script src="typed.min.js"></script> <!--typed file-->
    <script>
        //* initialization of text animation (typing)
        new Typed(".u-text-animation.u-text-animation--typing",
            {
                strings: ["Check Resume for 4 Digit Pin"],
                typeSpeed: 90,
                loop: false,
                // backSpeed: 60,
                // backDelay: 1500,
            });
    </script>
    </html>
<?php
session_destroy();
?>