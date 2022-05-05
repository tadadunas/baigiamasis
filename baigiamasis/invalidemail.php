<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="logo-header">
            <img src="./images/codingschool.png" class="logo" width="200" height="50">
        </div>
        <div class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="index.php#aboutus">About</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="signin.php"><input type="button" class="button" value="Sign In"></a></li>
                <li><a href="#signup">Sign Up</a></li>
            </ul>
        </div>
        <div class="top-header-container">
            <div class="top-header">
                <img class="Kalnai" src="./images/Layer 78.png" width="100%" height="600">
                <div class="centered">&#9733; Our Mission &#9733;</div>
                <div class="centered-low">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Ipsa,
                    repudiandae ad
                    corporis accusamus deleniti perspiciatis enim eaque voluptatem eius since 1500.</div>
            </div>
        </div>
    </header>
    <div class="about-us" id="aboutus">
        <h1>About</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing salimirum kueana zividra epa. Ipsa, repudiandae <br>ad
            corporis accusamus deleniti perspiciatis enim eaque voluptatem eius since 1500 when an unknown.</p>
    </div>
    </div>
    <div class="team-background">
        <p>Team</p>
        <div class="row">
            <div class="column">
                <img src="./images/team/team1.png" alt=" team1">
                <span class="caption">John Doe</span>
                <span class="caption2">Founder & CEO</span>
            </div>
            <div class="column">
                <img src="./images/team/team2.png" alt=" team2">
                <span class="caption">John Doe</span>
                <span class="caption2">Co- Founder</span>
            </div>
            <div class="column">
                <img src="./images/team/team3.png" alt="team3">
                <span class="caption">John doe</span>
                <span class="caption2">Investor</span>
            </div>
        </div>
        <div class="work-with-us">
            <input type="button" class="button-work" value="Work With Us">
        </div>
    </div>
    </div>
    </div>
    <div class="maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.983600006226!2d25.29012285157996!3d54.70991168019058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b1c1c3bc9f%3A0xb4eca31b162c5579!2sVilnius%20Coding%20School%20-%20Karjeros%20keitimo%20centras%2C%20programavimo%20kursai!5e0!3m2!1slt!2slt!4v1650453056733!5m2!1slt!2slt"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="signup-bg" id="signup">
    <p>Oops, invalid email, try again!</p>

        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <input type="text" name="first" placeholder="First Name" required>
            <input type="text" name="last" placeholder="Last Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="uid" placeholder="Username" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <button type="submit" name="submit">Sign Up</button>

        </form>
        <p class="signup-why">Why You Should Join Us?</p>
    </div>
    <div class="partners">
        <p>Our Partners</p>
        <ul>
            <li><img src="./images/partners/Zyro-Logo-450x286.jpg" alt="zyro" width="160" height="57"></li>
            <li><img src="./images/partners/Zmones_Cinema-450x85.png" alt="zmones-cinema" width="160" height="27"></li>
            <li><img src="./images/partners/sanitex-450x76.png" alt="sanitex" width="160" height="27"></li>
            <li><img src="./images/partners/kevin-450x151.png" alt="kevin" width="160" height="47"></li>
            <li><img src="./images/partners/Barbora-logo-450x174.jpg" alt="barbora" width="160" height="57"></li>
        </ul>
    </div>
    <footer class="footer">
        <div class="footer-nav">
            <ul>
                <li><a href="index.php#aboutus">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Work With Us</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                <li class="instagram"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        </div>
        <img src="./images/social/Shape 5.png" class="footer-dash">
        <div class="privacy-footer">
            <ul class="privacy-list">
                <li><a href="#">© VilniusCoding.lt <?php echo date("Y"); ?></a></li>
                <li><a href="#">|</a></li>
                <li><a href="#">Terms And Conditions</a></li>
                <li><a href="#">|</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>