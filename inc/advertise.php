<!-- =======================
Adv START -->
<section class="py-3 my-2">
	<div class="container">
		<div class="row">
			<div class="col">
			<?php 
$result3 = mysqli_query($con1,"select * from blog where flag=2 and isDeleted = 0 order by ID desc");

while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){ 
	$ad = $S3_BUCKET_FOLDER.$row3['image_700X933'];
}
    
?>
				<a href="#" class="d-block card-img-flash  rounded-3 overflow-hidden">
					<img src="<?php echo $ad  ?>" alt="">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Adv END -->