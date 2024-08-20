<!-- =======================
Cards START -->
<section class="p-0">
	<div class="container">
        <div class="row g-4">
    <?php 
$result2 = mysqli_query($con1,"select *,DATE_FORMAT(CREATE_DATE,'%b %d, %Y') as niceDate from blog where flag = 1 and isDeleted = 0 order by ID desc");

while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){ 
    
?>
    
      <!-- Card item START -->
      <div class="col-sm-6 col-lg-4">
        <div class="card card-overlay-bottom card-img-scale overflow-hidden">
          <!-- Card featured -->
					<span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
          <!-- Card Image -->
          <img src="<?php echo $S3_BUCKET_FOLDER.$row2['image_700X933'] ?>" alt="">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
            <div>
              <!-- Card category -->
              <a href="#" class="badge text-bg-warning"><i class="fas fa-circle me-2 small fw-bold"></i><?php echo $row2['topic'] ?></a>
            </div>
            <div class="w-100 mt-auto">
              
              <!-- Card title -->
              <h4 class="text-white"><a href="post-single-5.html" class="btn-link text-reset stretched-link"><?php echo $row2['title'] ?></a></h4>
              <!-- Card info -->
              <ul class="nav nav-divider text-white-force align-items-center small">
                <li class="nav-item"><?php echo $row2['niceDate'] ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      </div> <!-- Card item END -->
    </div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Cards END -->