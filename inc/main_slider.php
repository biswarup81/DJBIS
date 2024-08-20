<section class="pt-0 card-grid">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
					<div class="tiny-slider-inner"
					data-autoplay="true"
					data-hoverpause="true"
					data-gutter="0"
					data-arrow="true"
					data-dots="false"
					data-items="1">
<?php 
$result = mysqli_query($con1,"select *,DATE_FORMAT(CREATE_DATE,'%b %d, %Y') as niceDate from blog");
$count = 1;

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
    
?>

						<!-- Slide 1 -->
						<div class="card card-overlay-bottom card-bg-scale h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url(<?php echo $S3_BUCKET_FOLDER.$row['image_1300X732'] ?>); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
		          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5"> 
		            <div class="w-100 mt-auto">
			            <div class="col-md-10 col-lg-7">
			            	<!-- Card category -->
			            	<a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $row['topic'] ?></a>
			            	<!-- Card title -->
			              <h2 class="text-white display-5"><a href="post-single-4.html" class="btn-link text-reset fw-normal"><?php echo $row['title'] ?></a></h2>
			              <p class="text-white"><?php echo $row['subtitle'] ?></p>
			              <!-- Card info -->
										<ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
					
										  <li class="nav-item"><?php echo $row['niceDate'] ?></li>
										  <li class="nav-item"> <?php echo $row['duration'] ?></li>
										</ul>
			            </div>
		            </div>
		          </div>
                  
			</div>
            <?php } ?>
		</div> <!-- Row END -->
	</div>
</section>