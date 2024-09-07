<?php
//Define variables
include_once './inc/variables.php'; 
$con1 = mysqli_connect($_HOST,$_USER ,$_PASSWD ,$_DBNAME);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>


<?php
//include_once "./inc/datacon.php";
include_once './inc/head.php'; ?>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-9 mx-auto text-center">
        <h1 class="display-4">Contact us</h1>
        <!-- breadcrumb -->
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house me-1"></i> Home</a></li>
            <li class="breadcrumb-item active">Contact us</li>
          </ol>
        </nav>      
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Contact info START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
        <iframe class="w-100 h-300 grayscale" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4872.434826641321!2d5.189273476590149!3d52.36647764758468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c616d244faa0bb%3A0x66ab7effe493b466!2sMessiaenplantsoen%20114%2C%201323%20LJ%20Almere!5e0!3m2!1sen!2snl!4v1725707428202!5m2!1sen!2snl" height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>	
        
		  <div class="row mt-5">
          <div class="col-sm-6 mb-5 mb-sm-0">
            <h3>Advertise / Sponsorships</h3>
            <p>Contact us directly related Advertisement</p>
            <address>Messiaenplantsoen 114, 1323 LJ, Almere, Netherlands</address>
            <p>Call: <a href="#" class="text-reset"><u>(+31) 0682326496 </u></a></p>
            <p>Email: <a href="#" class="text-reset"><u>djbisamsterdam@gmail.com</u></a></p>
            <p>Support time: Monday to Saturday 
              <br>
              9:30 am to 8:00 pm
            </p>
          </div>
          <div class="col-sm-6">
            <h3>Contact Information </h3>
            <p>Get in touch with us to see how we can help you with your query</p>
            <address>Messiaenplantsoen 114, 1323 LJ, Almere, Netherlands</address>
            <p>Call: <a href="#" class="text-reset"><u>(+31) 0682326496</u></a></p>
            <p>Email: <a href="#" class="text-reset"><u>djbisamsterdam@gmail.com</u></a></p>
            <p>Support time: Monday to Sunday 
              <br>
              9:00 am to 8:30 pm
            </p>
          </div>
        </div>
        
        <hr class="my-5">
        
        <div class="row">
          <div class="col-12">
          <h2>Contact us</h2>
          <p>Please fill in the form below and we will contact you very soon. Your email address will not be published.</p>
          <!-- Form START -->
          <form class="contact-form" id="contact-form" name="contactform" method="POST">
            <!-- Main form -->
            <div class="row">
              <div class="col-md-6">
                <!-- name -->
                <div class="mb-3">
                  <input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <!-- email -->
                <div class="mb-3">
                  <input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Subject -->
                <div class="mb-3">
                  <input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-12">
                <!-- Message -->
                <div class="mb-3">
                  <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
                </div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 text-start"><button class="btn btn-primary w-100" type="submit">Send Message</button></div>
            </div>
          </form>
			  	<!-- Form END -->
          </div>
        </div>
      </div>  <!-- Col END -->
     </div>
  </div>
</section>
<!-- =======================
Contact info END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
<!-- =======================
Footer START -->
<?php include_once './inc/footer.php'; ?>

<!-- =======================
Bottom  START -->
<?php include_once './inc/foot.php' ?>
<!-- =======================
Bottom  END -->