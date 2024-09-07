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
<!-- Header START -->
<?php include_once './inc/header.php'; ?>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url(<?php echo $S3_BUCKET_FOLDER;?>adv-12.jpeg); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
              <h1 class="text-white display-4">About DJ BIS</h1>
              <!-- breadcrumb -->
              <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                  <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house me-1"></i> Home</a></li>
                  <li class="breadcrumb-item active">About us</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
About START -->
<section class="pt-4 pb-0">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
        <h2>Story of a Classical Flute player turned to a Techno DJ</h2>
        <p class="lead">
		Elevate your events with DJ BIS's top-tier DJ services. From weddings and corporate events to nightclubs and private parties, we deliver unforgettable musical experiences.
	        </p>
        <p>Meet DJ Bis. An Indian Classical Flute player and crazy about Techno Music. Right now, learning how to DJ. What is unique? Mixing the beautiful tunes of Indian Classical music with the energetic beats of Techno. DJ Bis is on a mission to create a new kind of music that brings together the old and the new. Now blending the soulful melodies of classical music with the futuristic sounds of Techno, using the skills to make something fresh and exciting for everyone to enjoy.</p>
        <h3 class="mt-4">DJ Services curated to your taste</h3>
        <ul>
          <li><b>Weddings: </b>Personalized playlists for your special day.</li>
          <li><b>Corporate Events: </b>Professional DJ services to set the perfect tone.</li>
          <li><b>Private Parties: </b>Make any celebration a hit.</li>
          <li><b>Club Nights: </b>Expert mixing to keep the vibe electric.</li>
        </ul>
        
        <!-- Service START -->
        <h3 class="mb-3 mt-5">What we do</h3>
        <div class="row">
          <!-- Service item-->
          <div class="col-md-6 col-lg-4 mb-4">
            <img class="rounded" src="assets/images/blog/3by2/04.jpg" alt="Card image">
            <h4 class="mt-3">Corporate Events</h4>
            <p>Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among.</p>
          </div>
          <!-- Service item-->
          <div class="col-md-6 col-lg-4 mb-4">
            <img class="rounded" src="assets/images/blog/3by2/01.jpg" alt="Card image">
            <h4 class="mt-3">Private Parties</h4>
            <p>Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced.</p>
          </div>
          <!-- Service item-->
          <div class="col-md-6 col-lg-4 mb-4">
            <img class="rounded" src="assets/images/blog/3by2/03.jpg" alt="Card image">
            <h4 class="mt-3">Night Club</h4>
            <p> Yet uncommonly his ten who diminution astonished. Demesne new manners savings staying had. </p>
          </div>
        </div>
        <!-- Service END -->
      </div>  <!-- Col END -->
     </div>
  </div>
</section>
<!-- =======================
About END -->

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