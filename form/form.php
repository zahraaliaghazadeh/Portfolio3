<?php include('form_process.php');?>

<link rel="stylesheet" href="form.css" type="text/css">

<div class="container">  
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
      <span class="error"><?= $name_error ?> </span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" >
      <span class="error"><?= $email_error ?> </span>

    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" name="phone" tabindex="3" >
      <span class="error"><?= $phone_error ?> </span>

    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" name="url" tabindex="4" >
      <span class="error"><?= $url_error ?> </span>

    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="message" tabindex="5" ></textarea>
      <span class="error"><?= $message_error ?> </span>

    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>