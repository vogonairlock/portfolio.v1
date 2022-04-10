<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Email: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $senderEmail");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body class="contact">
    <header class="flex">
        <nav class="main-header">   
           <div class="logo-container">
                <span class="sr-only"><a href="#contact-container">skip to main content</a></span>
                <a href="https://zazcdev.github.io/webportfolio" id="logo">
                   <span class="sr-only"><h1>website title: zaz c</h1></span>
                   <h1 aria-hidden="true">zazc.</h1>
               </a>
           </div>
           
           <ul id="primary-nav" class="nav-container moz-nav">
                <li><a class="nav1" href="https://zazcdev.github.io/webportfolio/">home</a></li>
                <li><a class="nav1" href="https://zazcdev.github.io/webportfolio/about.html">about</a></li>
                <li><a class="nav1" href="https://zazcdev.github.io/webportfolio/portfolio.html">portfolio</a></li>
                <li><a class="nav1" href="https://zazcdev.github.io/webportfolio/contact.html">contact</a></li>
            </ul>
       
           
           <a href="javascript:void(0);" id="mobile-toggle" class="menu-icon" onclick="trigger()">
               <i id="icon" class="material-icons md-48">menu</i>
           </a>
       </nav>
    </header>
    
    <main>
        <section id="contact-container">
            <h2 class="contact-heading">contact</h2>
            
            <div class="social">
                <a class="social-link" href="assets/pdfs/zazcdevResume.pdf">resume</a>
                <a class="social-link" href="https://www.linkedin.com/in/zazcdev/">linkedin</a>
                <a class="social-link" href="https://github.com/zazcdev">github</a>
            </div>

            
            <div class="form-container">

                <?=$thankYou ?>

                <form action="contact.php" method="POST">
                    <label class="sr-only" for="email">email input</label>
                    <input type="email" name="email" id="email" placeholder="email">

                    <label class="sr-only" for="message">message input</label>
                    <textarea id="message" name="message" placeholder="message" style="height:150px"></textarea>
                    
                    <label class="sr-only" for="submit">submit button</label>
                    <input id="contact-btn" type="submit" value="submit">
                </form>
                
            </div>
        </section>
    </main>

</body>
</html>