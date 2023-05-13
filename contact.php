<?php require('head.php'); ?>

<section class="header" style="background:#f3e6de;">
        <div class="navbar-option" style="background:#f3e6de;">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/images/seklistapp-logo.png" alt="" width="80px" height="70px" style="margin-top:-27px;"/></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-left" style="font-family:'Dosis', sans-serif;">
                            <li><a href="index.php"><span class="active">Home</span></a></li>
                            <li><a href="index.php#features">Features</a></li>
                            <li><a href="index.php#gallery">Gallery</a></li>
                            <li><a href="team.php">Our Team</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="https://appsenjoy.com/en/zh4XchX2jCR5mtZ/file" style="border: 1px solid #b51d46; color: #b51d46; border-radius: 20px; padding: 9px; margin-top: 5px; margin-left: 12px;" download>Download Now</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    <section class="contact-form" style="background:#f3e6de;">
        <div class="container">
            <div class="contact-heading" style="font-family:'Dosis', sans-serif;">
                <h1 style="color:#b51d46;">Contact Us</h1>
                <h3 style="font-family:'Dosis', sans-serif;">You can send your feedback or report any issues by submitting the form.</h3>
            </div>
            <form id="form" action="" method="post">
                <h3 style="font-family:'Dosis', sans-serif;">Leave your query here</h3>
                <fieldset>
                    <input id="name" name="name" placeholder="Your name" type="text" required autofocus>
                </fieldset>
                <fieldset>
                    <input id="email" name="email" placeholder="Your Email Address" type="email"  required>
                </fieldset>
                <fieldset>
                    <input id="mobile" name="mobile" placeholder="Your Phone Number (optional)" type="tel">
                </fieldset>
                <fieldset>
                    <textarea id="message" name="message" placeholder="Type your message here...."  required></textarea>
                </fieldset>
                <fieldset>
                    <button type="submit" onclick="send_message(), send_message2()" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>

        </div>
</section>
    <?php require('footer.php'); ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/owl-carousel/highlight.js"></script>
    <script src="assets/js/owl-carousel/app.js"></script>

<script>
    function send_message(){

	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var message=jQuery("#message").val();
	
	if(name==""){
		alert('Fields cannot be empty!');
	}else if(email==""){
		alert('Fields cannot be empty!');
	}else if(mobile==""){
		alert('Fields cannot be empty!');
	}else if(message==""){
		alert('Fields cannot be empty!');
	}else{
		jQuery.ajax({
            url:'send_message.php',
            type:'post',
            data:'&name='+name+'&email='+email+'&mobile='+mobile+'&message='+message,
            success:function(result){
                /*alert("Thank you, your message has been sent!");*/
                document.getElementById("form").reset();
            }
        });
	}	
}
</script>

<script>
  function send_message2() {
    var nameInput = document.getElementById('name');
    var mobileInput = document.getElementById('mobile');

    var namePattern = /^[a-zA-Z ]+$/;
    var mobilePattern = /^\d{11}$/;

    // Validate name
    if (!namePattern.test(nameInput.value)) {
      alert("Please enter a valid name without numbers or special characters.");
      return false;
    }

    // Validate mobile phone number
    if (mobileInput.value && !mobilePattern.test(mobileInput.value)) {
      alert("Please enter a valid mobile phone number with 11 digits.");
      return false;
    }
    alert("Thank you, your message has been sent!");
  }
</script>
    
<script>
    $(document).ready(function() {
      $('.navbar-toggle').click(function() {
        $('.navbar-collapse').toggle();
      });
    });
</script>