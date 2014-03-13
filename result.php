<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Benjamin Wong Photography</title>
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Prata' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

//Sending Email to form owner
    $header = "From: $email\n"
    . "Reply-To: $email\n";
    $subject = "Submission From My Form";
    $email_to = "schan21@live.com";
    $message = "name: $name"
    . "email: $email\n" . "message: $message\n";
    mail($email_to, $subject ,$message ,$header ) ;

    ?>
    
    <div class="wrapper clearfix">
        <div class="header">
            <ul class="nav">
                <li><a href="portfolio.html">PORTFOLIO</a>
                    <ul class="sub_nav">
                        <li><a href="engagements.html">engagements</a></li>
                        <li><a href="events.html">events</a></li>
                        <li><a href="personal.html">personal</a></li>
                        <li><a href="portraits.html">portraits</a></li>
                        <li><a href="weddings.html">weddings</a></li>
                    </ul> <!-- sub nav -->
                </li>           
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="index.html">BLOG</a></li>
            </ul> <!-- nav -->
            <img class="logo" src="images/glasses.svg" alt="Benjamin Wong Photography">
        </div> <!-- header -->
        <div class="spacer2"></div>
        <h2>Thank you for your submission.</h2>



    </div> <!-- wrapper end -->

    <div class="footer">
      <p>Copyright © Benjamin Wong, 2014. Site by <a href="http://www.sharonchan.ca/" target="_blank">Sharon Chan</a>.</p>
    </div>

</body>
</html>
