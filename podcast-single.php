<?php
if(isset($_GET['ID'])){
    $page_id = $_GET['ID'];
} else {
    $page_id = 0;
}
?>


<?php
if ( $page_id > 0) {
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

<body>
<!-- Header START -->
<?php include_once './inc/header.php'; ?>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Podcast single START -->
<?php
$result2 = mysqli_query($con1,"select *,DATE_FORMAT(CREATE_DATE,'%b %d, %Y') as niceDate from blog 
								where flag = 1 and isDeleted = 0 and ID = ".$page_id." order by ID desc");
$rowcount=mysqli_num_rows($result2);
//echo "Rows : ".$rowcount;
if($rowcount > 0){
while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){ 
?>
<section class="pt-4">
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<div class="col-12">
				<!-- Podcast title -->
				<a href="#" class="badge text-bg-danger mb-2"><?php echo $row2['topic']. ' - '. $page_id;?></a>
				<h1><?php echo $row2['title']; ?></h1>
				<!-- Podcast avatar -->
				<div class="row align-items-center mb-2">
					<div class="col-lg-6">
						<div class="d-flex align-items-center">
							<div class="d-flex align-items-center position-relative me-3">
								<div class="avatar avatar-xs me-2">
									<img class="avatar-img  rounded-circle" src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>avatar/avatar_djbis.jpg" alt="avatar">
								</div>
									<h6 class="mb-0"><a href="#" class="stretched-link text-reset btn-link">DJ BIS Amsterdam</a></h6>
							</div>
							<span> <i class="bi bi-clock-fill me-2"></i><?php echo $row2['duration']; ?></span>
						</div>
					</div>
					<div class="col-lg-6">
						<!-- Podcast listen -->
						<ul class="list-unstyled d-flex justify-content-md-end gap-1 gap-sm-2 align-items-center mt-3 mb-sm-4">
							<li class="h5 mb-0">Listen on:</li>
							<li class="ms-2"><a href="#"> <img src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>icon/apple-podcasts.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>icon/divider-icon.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>icon/spotify.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>icon/google-podcasts.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>icon/pocket.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>icon/sound-cloud.svg" alt=""> </a></li>
						</ul>
					</div>
				</div>
				<!-- Podcast short description -->
				<p class="lead"><?php echo $row2['subtitle']; ?> </p>
				<!-- Audio START -->
				<?php echo $row2['soundcloud_link']; ?>
				<!-- Audio END -->
			</div>
		</div>
		<div class="row g-4">
			<div class="col-lg-8">
				<!-- Episode Description -->
				<h4 class="mb-3">Story Behind this track</h4>
				<p><span class="dropcap bg-success bg-opacity-10 text-success px-2 rounded"><?php if (strlen($row2['description']) > 0){echo $row2['description'][0]; }?></span><?php echo $row2['description']; ?></p>
			

				

				<!-- Share social START -->
				<div class="border mt-4 py-2 px-3 rounded">
					<div class="list-group-inline list-unstyled">
						<h6 class="mt-2 me-4 d-inline-block"><i class="fas fa-share-alt me-2"></i>Share on:</h6>
						<ul class="list-inline list-unstyled d-inline-block mb-0">
							<li class="list-inline-item"><a href="#" class="me-3 text-body">Facebook</a></li>
							<li class="list-inline-item"><a href="#" class="me-3 text-body">Twitter</a></li>
							<li class="list-inline-item"><a href="#" class="me-3 text-body">LinkedIn</a></li>
						</ul>
					</div>
				</div>
				<!-- Share social END -->

				
			</div>
			<!-- Hosted START -->
			<div class="col-lg-4">
				<div class="text-center" data-sticky data-margin-top="80" data-sticky-for="991">
					<div class="avatar avatar-xxxl">
						<img class="avatar-img rounded-circle" src="<?php echo $S3_BUCKET_IMAGES_FOLDER; ?>avatar/avatar_djbis_176x176.jpg" alt="avatar">
					</div>
					<!-- Host name -->
					<div class="mt-3">
						<span>Hosted by </span>
						<h5>DJ BIS Amsterdam</h5>
					</div>
					<!-- Host dec -->
					<p class="px-sm-5">Classical music with the energetic beats of Techno. DJ Bis is on a mission to create a new kind of music that brings together the old and the new. </p>
					<!-- Host social -->
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="https://x.com/BisDj855534"><i class="fab fa-twitter-square"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-2 fs-5" href="https://www.linkedin.com/in/dj-bis-amsterdam-6a415b326"><i class="fab fa-linkedin"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Hosted START -->
		</div>
	</div>
</section>
<?php } } else { include_once './inc/404.php';}?>
<!-- =======================
Episode single END -->
 
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<?php include_once './inc/footer.php'; ?>
<!-- =======================
Footer END -->
<!-- =======================
Bottom  START -->
<?php include_once './inc/foot.php' ?>
<!-- =======================
Bottom  END -->
<?php } else {?>
	
<?php include_once './404.php'; }?>
<?php 
	$con1->close();
?>