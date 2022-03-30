<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="description" content="Hello this is my first web page!." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/landingpage.css" />
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
    <title>Welcome to HOBO</title>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="navbar__brand">
            <img
                src="images/LOGO.png"
                alt="logo"
                class="brand__logo"
            />
        </div>

        <div class="navbar__nav__items">
            <div class="nav__item">
                <div class="dropdown__container">
                    <i class="fas fa-globe"></i>
                    <select
                        name="languages"
                        id="languagesSelect"
                        class="language__drop__down"
                    >
                        <option value="english" selected>English</option>
                        <option value="dutch">Dutch</option>
                    </select>
                </div>
            </div>

            <div class="nav__item">
                <button class="signin__button">Sign in</button>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="hero">
        <div class="hero__bg__image__container">
            <img
                src="images/backgroundimage.jpg"
                class="hero__bg__image"
            />
        </div>
        <div class="hero__bg__overlay"></div>

        <div class="hero__card">
            <h1 class="hero__title">
                Hobo is the new streaming with more lower prices!<br />
            </h1>
            <p class="hero__subtitle">Watch anywhere and cancel anytime.</p>
            <p class="hero__description">
                Ready to watch? Enter your email to create or restart your
                membership .
            </p>

            <div class="email__form__container">
                <div class="form__container">
                    <input type="email" class="email__input" placeholder=" " />
                    <label class="email__label">Email Address</label>
                </div>
                <button class="primary__button">
                    Get Started <i class="fal fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>
    <h1 class="WHYHOBO">Why HOBO?</h1>
    <section class="card-section">

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/why1.png" style="height: 32.5vh;">
                <h3>Share your account</h3>
                <p>Watch on up to 4 screens simultaneously</p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/why2.png" style="height: 30vh;">
                <h3>Watch everywhere</h3>
                <p>Watch on your TV, laptop, tablet, phone or on the go with Download to Go</p>
                <p>Some text</p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/why3.png" style="height: 30vh;">
                <h3>Without ads</h3>
                <p>Watch your favorite movies, series and RTL programs without advertising with Plus and Premium</p>
            </div>
        </div>
    </section>
    <?php

    include_once 'accordion.php';
    ?>
</main>

<footer>
    <div class="footer__row__1">
        <h4>Questions? Call 000-800-040-1843</h4>
    </div>
    <div class="footer__row__2">
        <div class="column__1">
            <p>FAQ</p>
            <p>Investor Relations</p>
            <p>Privacy</p>
            <p>Speed Test</p>
        </div>
        <div class="column__2">
            <p>Help Centre</p>
            <p>Jobs</p>
            <p>Cookie Preferences</p>
            <p>Legal Notices</p>
        </div>
        <div class="column__3">
            <p>Account</p>
            <p>Ways to Watch</p>
            <p>Corporate Information</p>
        </div>
        <div class="column__4">
            <p>Media Centre</p>
            <p>Terms of Use</p>
            <p>Contact Us</p>
        </div>
    </div>
    <div class="footer__row__3">
        <div class="dropdown__container">
            <i class="fas fa-globe"></i>
            <select
                name="languages"
                id="languagesSelect"
                class="language__drop__down"
            >
                <option value="english" selected>English</option>
                <option value="dutch">Dutch</option>
            </select>
        </div>
    </div>
    <div class="footer__row__4">
    </div>
</footer>
<script src="javascript/landingpage.js"></script>
</body>
</html>