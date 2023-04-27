<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Не ебу чё то -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AutoWorks</title>

    <!-- Шрифты и css -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link src="../public/features.css" rel="stylesheet">
    <!-- Скрипты -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="jquery.min.js"></script>
    {{-- Стили --}}
    <style>

        /* Header */

        /* header {
            position: fixed;
            z-index: 1000;
            width: 100%;
            -webkit-box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);} */

        /* Слайдер */

        .my-carousel {
            padding: 0;
        }

        .my-carousel .carousel-item {
            display: flex;
            max-height: 500px;
            background: #000;
        }

        .my-carousel .carousel-item img {

            opacity: 0.6;
        }

        /* Слайдер */

        .cards-list {
            z-index: 0;
            width: 70%;
            margin-left:15%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            }

            .card {
            margin: 30px auto;
            width: 250px;
            height: 250px;
            -webkit-box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: 0.4s;
            }

            .card .card_image {
            width: inherit;
            height: inherit;
            }

            .card .card_image img {
            width: inherit;
            height: inherit;
            object-fit: cover;
            }

            .card .card_title {
            text-align: center;
            border-radius: 0px 0px 40px 40px;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 30px;
            margin-top: -80px;
            height: 40px;
            }

            .card:hover {
            transform: scale(0.9, 0.9);
            box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25),
                -5px -5px 30px 15px rgba(0,0,0,0.22);
            }

            .title-white {
            color: white;
            }

            .title-black {
            color: black;
            }

            @media all and (max-width: 500px) {
            .card-list {
                /* On small screens, we are no longer using row direction but column */
                flex-direction: column;
            }
            }

            /* наши услуги */

            .sec-icon {
            position: relative;
            display: inline-block;
            padding: 0;
            margin: 0 auto;
            }

            .sec-icon::before {
            content: "";
            position: absolute;
            height: 1px;
            left: -70px;
            margin-top: -5.5px;
            top: 60%;
            width: 50px;
            }

            .sec-icon::after {
            content: "";
            position: absolute;
            height: 1px;
            right: -70px;
            margin-top: -5.5px;
            top: 60%;
            width: 50px;
            }

            .advertisers-service-sec span {
            color: rgb(255, 94, 0);
            }

            .advertisers-service-sec .col {
            padding: 0 1em 1em 1em;
            text-align: center;
            }

            .advertisers-service-sec .service-card {
            width: 100%;
            height: 100%;
            padding: 2em 1.5em;
            border-radius: 5px;
            box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            transition: 0.5s;
            position: relative;
            z-index: 2;
            overflow: hidden;
            background: #fff;
            }

            .advertisers-service-sec .service-card::after {
            content: "";
            width: 100%;
            height: 100%;
            background: linear-gradient(#a7a401, rgb(255, 115, 0));
            position: absolute;
            left: 0%;
            top: -98%;
            z-index: -2;
            transition: all 0.4s cubic-bezier(0.77, -0.04, 0, 0.99);
            }

            .advertisers-service-sec h3 {
            font-size: 20px;
            text-transform: capitalize;
            font-weight: 600;
            color: #1f194c;
            margin: 1em 0;
            z-index: 3;
            }

            .advertisers-service-sec p {
            color: #575a7b;
            font-size: 15px;
            line-height: 1.6;
            letter-spacing: 0.03em;
            z-index: 3;
            }

            .advertisers-service-sec .icon-wrapper {
            background-color: #2c7bfe;
            position: relative;
            margin: auto;
            font-size: 30px;
            height: 2.5em;
            width: 2.5em;
            color: #ffffff;
            border-radius: 50%;
            display: grid;
            place-items: center;
            transition: 0.5s;
            z-index: 3;
            }

            .advertisers-service-sec .service-card:hover:after {
            top: 0%;
            }

            .service-card .icon-wrapper {
            background-color: #ffffff;
            color: rgb(255, 23, 131);
            }

            .advertisers-service-sec .service-card:hover .icon-wrapper {
            color: #0dcaf0;
            }

            .advertisers-service-sec .service-card:hover h3 {
            color: #ffffff;
            }

            .advertisers-service-sec .service-card:hover p {
            color: #f0f0f0;
            }

            /* Footer */

            footer {
            background: #0d0d0e;
            width: 100%;
            bottom: 0;
            left: 0;
            }

            footer .content {
            max-width: 1250px;
            margin: auto;
            padding: 30px 40px 40px 40px;
            }
            footer .content .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 50px;
            }
            .content .top .logo-details {
            color: #fdd166;
            font-size: 30px;
            }
            .content .top .media-icons {
            display: flex;
            }
            .content .top .media-icons a {
            height: 40px;
            width: 40px;
            margin: 0 8px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: rgb(255, 255, 255);
            font-size: 17px;
            text-decoration: none;
            transition: all 0.4s ease;
            }
            .top .media-icons a:nth-child(1) {
            background: #4267b2;
            }
            .top .media-icons a:nth-child(1):hover {
            color: #4267b2;
            background: #fff;
            }

            .top .media-icons a:nth-child(2) {
            background: #e1306c;
            }
            .top .media-icons a:nth-child(2):hover {
            color: #e1306c;
            background: #fff;
            }

            footer .content .link-boxes {
            width: 100%;
            display: flex;
            justify-content: space-between;
            }
            footer .content .link-boxes .box {
            width: calc(100% / 5 - 10px);
            }
            .content .link-boxes .box .link_name {
            color: rgb(255, 255, 255);
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 10px;
            position: relative;
            }
            .link-boxes .box .link_name::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 2px;
            width: 35px;
            background: #c97901;
            }
            .content .link-boxes .box li {
            margin: 6px 0;
            list-style: none;
            }
            .content .link-boxes .box li a {
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 400;
            text-decoration: none;
            opacity: 0.8;
            transition: all 0.4s ease;
            }
            .content .link-boxes .box li a:hover {
            opacity: 1;
            text-decoration: underline;
            }
            .content .link-boxes .input-box {
            margin-right: 55px;
            }
            .link-boxes .input-box input {
            height: 40px;
            width: calc(100% + 55px);
            outline: none;
            border: 2px solid #afafb6;
            background: #140b5c;
            border-radius: 4px;
            padding: 0 15px;
            font-size: 15px;
            color: #fff;
            margin-top: 5px;
            }
            .link-boxes .input-box input::placeholder {
            color: #afafb6;
            font-size: 16px;
            }
            .link-boxes .input-box input[type="button"] {
            background: #fff;
            color: #140b5c;
            border: none;
            font-size: 18px;
            font-weight: 500;
            margin: 4px 0;
            opacity: 0.8;
            cursor: pointer;
            transition: all 0.4s ease;
            }
            .input-box input[type="button"]:hover {
            opacity: 1;
            }
            footer .bottom-details {
            width: 100%;
            background: #000;
            border-top: 0.5px solid #fff;
            }
            footer .bottom-details .bottom_text {
            max-width: 1250px;
            margin: auto;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            }
            .bottom-details .bottom_text span,
            .bottom-details .bottom_text a {
            font-size: 14px;
            font-weight: 300;
            color: #fff;
            opacity: 0.8;
            text-decoration: none;
            }
            .bottom-details .bottom_text a:hover {
            opacity: 1;
            text-decoration: underline;
            }
            .bottom-details .bottom_text a {
            margin-right: 10px;
            }

            /* ------------------------------------------media-footer------------------------------------------- */
            @media (max-width: 900px) {
            .company-info {
                width: 100%;
                margin-right: 0rem;
                margin-left: 1rem;
            }
            .company-info p{
                margin-right: 2rem;
                text-align: center;
            }
            .company-info span {
                font-size: 1.7rem;
                font-weight: bold;
                text-align: center;
            }
            .team {
                display: flex;
                justify-content: center;
            }

            .team span {
                font-size: 1.7rem;
                font-weight: bold;
            }
            .company {
                display: flex;
                flex-direction: column;
            }
            .img {
                margin-left: 0rem;
            }
            footer .content .link-boxes {
                flex-wrap: wrap;
            }
            footer .content .link-boxes .input-box {
                width: 40%;
                margin-top: 10px;
            }
            }
            @media (max-width: 700px) {
            footer {
                position: relative;
            }
            .content .top .logo-details {
                font-size: 26px;
            }
            .content .top .media-icons a {
                height: 35px;
                width: 35px;
                font-size: 14px;
                line-height: 35px;
            }
            footer .content .link-boxes .box {
                width: calc(100% / 3 - 10px);
            }
            footer .content .link-boxes .input-box {
                width: 60%;
            }
            .bottom-details .bottom_text span,
            .bottom-details .bottom_text a {
                font-size: 12px;
            }
            }
            @media (max-width: 520px) {
            footer::before {
                top: 145px;
            }
            footer .content .top {
                flex-direction: column;
            }
            .content .top .media-icons {
                margin-top: 16px;
            }
            footer .content .link-boxes .box {
                width: calc(100% / 2 - 10px);
            }
            footer .content .link-boxes .input-box {
                width: 100%;
            }
            }
            @media(max-width:320px){
            .company-info p{
                margin-right: 0rem;
            }
            }



        </style>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
            @yield('search')
            @yield('filials')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
