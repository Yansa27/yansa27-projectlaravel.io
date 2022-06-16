<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav Icon -->
    <link rel="icon" href="images/ICON/Logo.png" type="image/gif" sizes="16x16">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sahitya&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">

    <style>
        body{
    font-family: 'Sahitya', serif;
    font-size: large;
}

h1, h2, h3, h4, h5, h6, p, li{
    cursor: pointer;
}



/* Header nav start  */

a.nav-link {
    margin-right: 20px;
    font-weight: 700;

}

a.navbar-brand img {
    width: 194px;
}

.navbar-light .navbar-nav .active>.nav-link.sing:hover
{
    background-color: transparent;
}

.navbar-light .navbar-nav .active>.nav-link.sing
{
    color: white;
    background-color: #21B573;
    border-radius: 10px;
}

.navbar-light .navbar-nav .active>.nav-link:hover{
    color: #ffffff;
}

nav.fill ul li a.nav-link {
    transition: all .5s;
}
    
nav.fill ul li a.nav-link:after {
    text-align: left;
    content: ' ';
    margin: 0;
    opacity: 0;
}
    
nav.fill ul li a.nav-link:hover {
    color: white;
    z-index: 1;
}
    
nav.fill ul li a.nav-link:hover:after {
    z-index: -10;
    animation: fill 1s forwards;
    opacity: 1;
}
    
nav.fill ul li a.nav-link {
      position: relative;
}
    
nav.fill ul li a.nav-link:after {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      width: 0%;
      content: '.';
      color: transparent;
      background: #21B573;
      height: 1px;

}

/* End  */


/* section Learn start  */

section#learn-on
{
    padding: 5%;
    background-color: rgb(33,181,115, .1);
}

.learn {
    padding: 5% 2%;
    z-index: 1;
}


.learn p {
    margin-bottom: 30px;
}

a.learn-btn {
    font-weight: bold;
    background-color: #21B573;
    color: white;
    border: 2px solid #21B573;
    padding: 15px;
    border-radius: 10px;
    text-transform: uppercase;
    transition: 1s;
    cursor: pointer;
    text-decoration: none;
}

a.learn-btn:hover {
    background-color: white;
    color: #21B573;
}


/* End  */

/* section Details start  */

section#details
{
    text-align: center;
    padding: 5%;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 70px;
}

.card.text-center.details-hover {
    border: none;
    transition: .5s;
}
.card.text-center.details-hover:hover {
    box-shadow: 10px 10px 30px gray;
    background-color: rgb(33,181,115, .1);
}

/* End  */

/* section Online courses start  */

section#online
{
    padding: 5%;
}

.online-header{
    margin-bottom: 50px;
}

.card.card-shadow {
    box-shadow: 10px 10px 20px gray;
    border-radius: 25px;
    border: none;
    padding: 5%;
}

.img-thumbnail{
    border: none;
}

a.online-btn {
    font-weight: bold;
    background-color: #21B573;
    color: white;
    border: 2px solid #21B573;
    padding: 15px;
    border-radius: 10px;
    text-transform: uppercase;
    transition: 1s;
    cursor: pointer;
    text-decoration: none;
}

a.online-btn:hover {
    background-color: white;
    color: #21B573;
}


/* End  */

/* Testimonials start  */

section#testimonials
{
    padding: 5%;
}

.testimonials-card {
    box-shadow: 0px 5px 15px gray;
    padding: 5%;
}

img.img-fluid.img {
    width: 150px;
    padding-top: 35px;
}
/* End  */

/* Footer  */
footer {
    background-color: #282531;
    padding: 5%;
}
footer ul li{
    color: white;
    list-style: none;
    letter-spacing: 2px;
}
/* End  */

/* Nav animation */

@-webkit-keyframes fill {
    0% {
      width: 0%;
      height: 1px;
    }
    50% {
      width: 100%;
      height: 1px;
    }
    100% {
      width: 100%;
      height: 100%;
      background: #21B573;
      border-radius: 10px;
    }
  }
        </style>

    <title>@yield('judul')</title>
  </head>
  <body>
    <main> 
        <!-- Header start  -->
        <header>
            <div class="container">
              <nav class="navbar navbar-expand-lg navbar-light fill">
                <a class="navbar-brand" href="/landingpage"><img src="images/ICON/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="/datasiswa">DATA SISWA</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="/dataguru">DATA GURU</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/jadwal">JADWAL KELAS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link sing" href="/login">Sing in</a>
                  </li>
                </ul>
                </div>
            </nav>
            </div>
        </header>
        <!--  end  -->

        <!-- Learn section start -->

        <!-- End  -->
        @yield('konten');
    </body> <!-- Testimonials Start -->
</html>