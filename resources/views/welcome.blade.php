<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NoteRoom</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            html, body {
                background-color: #fff;
                color: grey;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: white;
            }

            .links > a {
                color: #4d9dff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .split{
                font-size: 70px;
            }

            .section-white{
                height: 100px;
            }

            .parallax { 
                background-image: url("img/csunov.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax1 { 
                background-image: url("img/brick.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }  
            .parallax2 { 
                background-image: url("img/notebook.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax3 { 
                background-image: url("img/network.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax4 { 
                background-image: url("img/phone.jpg");
                height: 100%; 
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>

    <body>
        <div class="clearfix">
            <div class="parallax">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @if (Auth::check())
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif
                        </div>
                    @endif
                    <div class="content">
                        <div class="title m-b-md">
                            NoteRoom
                        </div>
                        <div class="links">
                            <a href="#about">About</a>
                            <a href="#explain">What is it?</a>
                            <a href="#team">Meet the Team</a>
                            <a href="#contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            
                                <div class="split">About</div>
                           
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax1" id="about">
            <div class = "flex-center position-ref full-height">
            Aboot
            </div>
        </div>

        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">What is NoteRoom?</div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax2" id="explain">
            <div class = "flex-center position-ref full-height">
            Explain NoteRoom
            </div>
        </div>

        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">Meet the Team</div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax3" id="team">
            <div class = "flex-center position-ref full-height">
            The Team
            </div>
        </div>

        <section class = "section section-white">
                <div class="container white-space" style="display: block; text-align: center;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="split">Contact Us</div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="parallax4" id="contact">
            <div class = "flex-center position-ref full-height">
            Phone numbers
            </div>
        </div>

    </body>
</html>
