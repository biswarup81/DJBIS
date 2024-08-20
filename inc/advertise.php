<!-- =======================
Adv START -->
<section class="py-3 my-2">
	<div class="container">
		<div class="row">
			<div class="col">
			<?php 
$result3 = mysqli_query($con1,"select *,DATE_FORMAT(CREATE_DATE,'%b %d, %Y') as niceDate from blog");

while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){ 
    
?>
				<a href="#" class="d-block card-img-flash  rounded-3 overflow-hidden">
					<img src="<?php echo $S3_BUCKET_FOLDER.$row3['image_700X933'] ?>" alt="">
				</a>
<?php }?>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Adv END -->