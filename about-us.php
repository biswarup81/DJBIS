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
              <h1 class="text-white display-4">About DJ BISWARUP</h1>
              <!-- breadcrumb -->
              <nav class="d-flex justify-content-center" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                  <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house me-1"></i> Home</a></li>
                  <li class="breadcrumb-item active">About DJ BIS</li>
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
          <li><b>Corporate Events: </b>DJ BIS combines professionalism, experience, and a client-centric approach to deliver exceptional DJ services for corporate events. Our commitment to punctuality, reliability, and a polished presentation ensures a seamless and memorable experience. With years of expertise in catering to diverse corporate functions, we customize our offerings to meet your specific needs and preferences. From tailored playlists and state-of-the-art sound and lighting to emcee services and interactive entertainment, we work closely with you to bring your vision to life and make your event a resounding success.</li>
          <li><b>Private Parties: </b>When it comes to private parties, [DJ Name] is your go-to source for turning any gathering into an unforgettable celebration. Whether you're planning a birthday bash, anniversary celebration, graduation party, or any other special occasion, our DJ services are designed to elevate the atmosphere and keep your guests entertained from start to finish.</li>
          <li><b>Club Nights: </b>specialize in creating electrifying nightclub experiences that keep the dance floor packed and the energy levels soaring. With a deep understanding of club culture and a talent for reading the crowd, we bring dynamic and unforgettable performances that resonate with partygoers and club owners alike. Whether it's a high-profile venue, an exclusive members-only club, or a trendy nightlife hotspot, our DJ services are designed to elevate your club nights to new heights.</li>
        </ul>
        
        <!-- Service START -->
        <h3 class="mb-3 mt-5">What we do</h3>
        <div class="row">
          <!-- Service item-->
          <div class="col-md-6 col-lg-4 mb-4">
            <img class="rounded" src="<?php echo $S3_BUCKET_FOLDER;?>coporate-events.jpg" alt="Card image">
            <h4 class="mt-3">Corporate Events</h4>
            <p>Every event is unique, and we pride ourselves on our ability to customize our services to meet your specific needs and preferences.
            </p>
          </div>
          <!-- Service item-->
          <div class="col-md-6 col-lg-4 mb-4">
            <img class="rounded" src="<?php echo $S3_BUCKET_FOLDER;?>private-party.jpg" alt="Card image">
            <h4 class="mt-3">Private Parties</h4>
            <p>A playlist that reflects your personal taste and the vibe of your party. From chart-topping hits to timeless classics, we ensure the music suits the occasion and keeps everyone dancing.</p>
          </div>
          <!-- Service item-->
          <div class="col-md-6 col-lg-4 mb-4">
            <img class="rounded" src="<?php echo $S3_BUCKET_FOLDER;?>night-clubs.jpg" alt="Card image">
            <h4 class="mt-3">Night Club</h4>
            <p>Tailored to fit the unique vibe of your nightclub, our sets are designed to build excitement and maintain a pulsating rhythm throughout the night.</p>
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
<?php 
	$con1->close();
?>