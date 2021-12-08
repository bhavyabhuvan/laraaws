<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="title" content="Learnwithcomics">
    <meta name="description" content="we use comics to educate children ,let us make learning fun by using this wonderful site">
    <meta name="keywords" content="comics,comic,language,study,grade,class,subject,maths,physics,geography,telugu,tamil,english,kindergarten,">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <title>LearnWithComics</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/main-logo.png')}}" type="image/png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" integrity="sha512-UJfAaOlIRtdR+0P6C3KUoTDAxVTuy3lnSXLyLKlHYJlcSU8Juge/mjeaxDNMlw9LgeIotgz5FP8eUQPhX1q10A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}"><!--<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    -->
    <!-- Bootstrap5 & font awesome 22.09.2021 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    
    <!-- End Bootstrap5 & font awesome 22.09.2021 -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DCK49TM4PP"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-DCK49TM4PP');
    </script>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/tabs.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/aos.min.js')}}"></script>
    <!--<script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/materialize.min.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/tabs.js')}}"></script>-->
</head>
<style>
li {
    list-style: none;
}

a {
    text-decoration: none;
}

.header {
    border-bottom: 1px solid #E2E8F0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
}

.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}

.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 1rem;
}

.nav-link {
    font-size: 1.6rem;
    font-weight: 400;
    color: #475569;
}

.nav-link:hover {
    color: #482ff7;
}

.nav-logo {
    font-size: 2.1rem;
    font-weight: 500;
    color: #482ff7;
    margin-top: 12px;
}

nav ul li a {
    padding: 0 10px !important;
}
.dropdown-trigger,.dropdown-trigger-partnerships{
    cursor: pointer;
    margin-top: 15px !important;
}

@media only screen and (max-width: 1100px) {
    .nav-menu {
        position: fixed;
        left: 0%;
        top: 74px;
        flex-direction: column;
        background-color: #fff;
        width: 100%;
        border-radius: 0px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
        top: 55px;
    }

    .nav-item {
        margin: 2px 0;
    }

    .hamburger {
        display: block;
        cursor: pointer;
    }

    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

}
</style>
<script type="text/javascript">
$(document).ready(function() {
    if ($(window).width() <= 1100) {
        $('.nav-menu').addClass('hide');
        $('.hamburger').click(function() {
            $('.nav-menu').toggleClass('hide');
        });
    }
    
});
</script>

<body>