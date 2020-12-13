<link href="/style/contact.css" rel="stylesheet">

<?php
 include('navbar.php');
?>


<div id="contactContainer">  
  <form id="contact" action="handler/contactHandler.php" method="POST">
    <h3>Contact Us</h3>
    <h4>Contact us today, and get a reply by the next business day!</h4>
    <fieldset>
      <input placeholder="Your name" name="Name" type="text" tabindex="1" maxlength="50" autocomplete="off" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="Email" type="email" maxlength="50" autocomplete="off" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" name="PhoneNumber" type="tel" maxlength="20" autocomplete="off" tabindex="3" required>
    </fieldset>
    <!-- <fieldset>
      <input placeholder="Enter Subject" name="Subject" type="text" maxlength="200" autocomplete="off" tabindex="4" required>
    </fieldset>
    <fieldset> -->
      <textarea placeholder="Type your Message Here...." name="Message" maxlength="800" autocomplete="off" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
    </fieldset>
  </form>
</div>