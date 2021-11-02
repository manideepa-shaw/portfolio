<?php
    if(isset($_POST['go'])){
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $num=$_POST['PhoneNo'];
        $reason=$_POST['reason'];
        $details=$_POST['message'];
        $body="Name : ".$name."\n\nEmail Id : ".$email."\n\nContact No. : ".$num."\n\nReason to contact : ".$reason. "\n\nMessage : ".$details;
        if(mail("jiyamanipriya@gmail.com",$reason,$body))
        {
            mail($email,"Successful Submission","Your Message has been successfully submitted.\n\n".$body);
        }
        // mail("jiyamanipriya@gmail.com",$reason,$body,$name);
        // if(mail("jiyamanipriya@gmail.com","Name : ",$name,"Email Id : ",$email,"Contact No. : ",$num,"Reason to contact : ",$reason, "Message : ",$message))
        // {
        //     echo "Done Bro!!";
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manideepa Shaw</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js.js"></script>
</head>
<body>
    <header id="home">
        MANIDEEPA SHAW
        <div class="chotu">Front End Developer</div>
        <div class="topnav" id="myTopnav">
            <a class="childs" href="#contact">Contact</a>
            <a class="childs" href="#testimonial">Testimonial</a>
            <a class="childs" href="#work">My Work</a>
            <a class="childs" href="#services">Services</a>
            <a class="childs" href="#about" class="active">Home</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
</header>   
    <div id="about">
        <div class="ab">
        <ul >
            <li class="written"><h1>Manideepa Shaw</h1><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque laudantium similique aliquam placeat corrupti vel aspernatur, aliquid ad nemo cupiditate, voluptate commodi suscipit iure, molestiae natus quam minus voluptates vitae.
            
            </li>
            <li class="im"><img src="thobra.jpg"></li></ul></div>
            <!-- <div class="cv">
            <a href="resume.pdf" target="Manideepa Shaw">Open Resume</a>
            <a href="resume.pdf" download="Manideepa_Shaw_Resume">Download Resume</a>
        </div> -->
    </div>
    <div id="services">
        <h1>Services I Provide</h1>
        <ul><li></li></ul>
        <div class="items">
            <div class="card">
                <i class="fa fa-newspaper-o" style="font-size:36px"></i><br><br>
                <h2>Website Design</h2>
                <p>The complete design of website will be taken care of. It may vary from client to client and also personal choices will be given preferences.</p>
            </div>
            <div class="card">
                <i class="fa fa-file-code-o" style="font-size:36px"></i><br><br>
                <h2>Frontend Development</h2>
                <p>Frontend development services aimed to create efficient and sustainable applications. It consists of languages like HTML, CSS and JavaScript.</p>
            </div>
            <div class="card">
                <i class="fa fa-vcard-o" style="font-size:36px"></i><br><br>
                <h2>Responsive Webpage</h2>
                <p>The Webpages will be designed in a user-friendly manner. The websites can be easily used from any device by the users.</p>
            </div>
        </div>
    </div>
    <div id="work">
        <h1>My Works</h1>
        <ul><li></li></ul>
        <br><br>
        <div class="project-items">
        <a href="https://manideepa-shaw.github.io/Animated_loginpage/"><img class="project" src="project1.png" alt=""><br><div class="projectname">
            Animated Login Page
        </div></a>
        <a href="https://manideepa-shaw.github.io/Simple_tic-tac-tae/">
            <img class="project" src="project3.png" alt=""><br>
            <div class="projectname">
            Tic-Tac-Toe
        </div></a>
        <a href="https://manideepa-shaw.github.io/Restaurant_website/">
            <img class="project" src="Project2.png" alt=""><br>
            <div class="projectname">
            Restaraunt Webpage
        </div></a>
    </div>
    </div>

    <div id="testimonial">
        <h1>Testimonials</h1>
        <ul><li></li></ul>
    </div>

    <div id="contact">
        <h1>Contact Me</h1>
        <ul><li></li></ul>

        <div class="outer">
        <form action="" method="post"><br>
            <br>
            <input type="text" name="Name" placeholder="*Enter Your Name" required><br>
            <input type="email" name="Email" placeholder="*Enter Your Email" required><br>
            <input type="tel" name="PhoneNo" placeholder="*Contact Number" pattern="[6-9]{1}[0-9]{9}" required><br>
            <textarea name="reason" cols="30" rows="2" placeholder="*Why are you contacting me?" required></textarea><br>
            <textarea name="message" cols="30" rows="5" placeholder="Enter Your Message"></textarea><br>
            <button name="go" type="submit"><i class="fa fa-paper-plane-o"></i> Send</button>
        </form>
    </div>
    </div>
    <footer>
        Manideepa Shaw <br>
        Front End Developer <br>
        <br>
        <ul>
            <li><a href="https://www.linkedin.com/in/manideepa-shaw-1842b7213/" class="fa fa-linkedin"></a></li>
            <li><a href="https://github.com/manideepa-shaw" class="fa fa-github"></a></li>
        </ul>
        <br><br>
        <a id="call" href="tel:8910694890">Call Me</a>
        <a id="mail" href="mailto:jiyamanipriya@gmail.com">Mail Me!</a><br><br><br>
        <ul class="last"><li><a href="#about">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#work">My Work</a></li>
        <li><a href="#testimonial">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    </footer>
</body>
</html>