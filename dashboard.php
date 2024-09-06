<?php
//include_once "./inc/datacon.php";
include_once './inc/head.php'; ?>

<body>
<!-- Header START -->
<?php include_once './inc/header.php'; ?>

<?php include_once './inc/variables.php'; ?>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	<style>
		.table-cell {
 		 	max-height: 100px !important; /* Adjust this height as needed */
			overflow-y: auto !important; /* Enables vertical scrolling if content overflows */
			overflow-x: hidden !important; /* Hides horizontal overflow */
  			white-space: normal !important; /* Allows text to wrap */
		}
	</style>	

<?php 
	
	$con1 = mysqli_connect($_HOST,$_USER ,$_PASSWD ,$_DBNAME);
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	$sql = "SELECT * FROM blog ORDER BY CREATE_DATE DESC";
	$result = $con1->query($sql);
?>
<!-- =======================
Main contain START -->
<section class="py-4">
	<div class="container">
		<div class="row g-4">
			<div class="col-12">
				<!-- Blog list table START -->
				<div class="card border bg-transparent rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom p-3">
						<div class="d-sm-flex justify-content-between align-items-center">
							<h5 class="mb-2 mb-sm-0">Blog list</h5>
							<!-- <a href="#" class="btn btn-sm btn-primary mb-0">Add New</a> -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Add New</button>
						</div>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">
					 <?php if ($result->num_rows > 0) { ?>
						<!-- Blog list table START -->
						<div class="table-responsive border-0">
							<table class="table align-middle p-4 mb-0 table-hover table-shrink">
								<!-- Table head -->
								<thead class="table-dark">
									<tr>
										<th scope="col" class="border-0 rounded-start">Title</th>
										<th scope="col" class="border-0">Topic</th>
										<th scope="col" class="border-0">Subtitle</th>
										<th scope="col" class="border-0">Description</th>
										<th scope="col" class="border-0">SoundCloud Link</th>
										<th scope="col" class="border-0">Duration</th>
										<th scope="col" class="border-0">Image 700x933</th>
										<th scope="col" class="border-0">Image 1300x732</th>
										<th scope="col" class="border-0">Is Deleted ?</th>
										<th scope="col" class="border-0">Create Date </th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody class="border-top-0">
								<?php while($row = $result->fetch_assoc()) { ?>
                					<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="course-title mt-2 mt-md-0 mb-0 table-cell"><?php echo htmlspecialchars($row['title']); ?></h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<span class="badge bg-success bg-opacity-10 text-success mb-2 table-cell"><?php echo htmlspecialchars($row['topic']); ?></span>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="mb-0 table-cell"><?php echo htmlspecialchars($row['subtitle']); ?></h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="mb-0 mh-4 table-cell"><?php echo htmlspecialchars($row['description']); ?></h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="mb-0 table-cell"><?php echo $row['soundcloud_link']; ?></h6>
										</td>
										<!-- Table data -->
										<td class="table-cell" style="max">
											<h6 class="mb-0 table-cell"><?php echo htmlspecialchars($row['duration']); ?></h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="course-title mt-2 mt-md-0 mb-0 table-cell">
												<a href="<?php echo $S3_BUCKET_FOLDER . htmlspecialchars($row['image_700X933']); ?>"><?php echo htmlspecialchars($row['image_700X933']); ?></a>
											</h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="course-title mt-2 mt-md-0 mb-0 table-cell">
												<a href="<?php echo $S3_BUCKET_FOLDER . htmlspecialchars($row['image_1300X732']); ?>"><?php echo htmlspecialchars($row['image_1300X732']); ?></a>
											</h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="course-title mt-2 mt-md-0 mb-0 table-cell"><?php echo $row['isDeleted'] == 0 ? "No" : "Yes"; ?></h6>
										</td>
										<!-- Table data -->
										<td class="table-cell">
											<h6 class="course-title mt-2 mt-md-0 mb-0 table-cell"><?php echo htmlspecialchars($row['CREATE_DATE']); ?></h6>
										</td>
										<!-- Table data -->
										<td>
											<div class="d-flex gap-2">
												<a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
													<i class="bi bi-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<?php } ?>	
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Blog list table END -->
					<?php } ?>
					</div>
				</div>
				<!-- Blog list table END -->
			</div>
		</div>

		<!-- Modal START-->
		<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close btn btn-info btn-sm" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- Upload Form inside modal -->
						<form id="uploadForm">
							<div class="form-group">
								<label for="image_700X933">Image 700x933</label>
								<input type="file" name="image_700X933" class="form-control" id="image_700X933" required>
							</div>
							<div class="form-group">
								<label for="image_1300X732">Image 1300x732</label>
								<input type="file" name="image_1300X732" class="form-control" id="image_1300X732" required>
							</div>
							<div class="form-group">
								<label for="topic">Topic</label>
								<input type="text" name="topic" class="form-control" id="topic" required>
							</div>
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control" id="title" required>
							</div>
							<div class="form-group">
								<label for="subtitle">Subtitle</label>
								<input type="text" name="subtitle" class="form-control" id="subtitle">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea name="description" class="form-control" id="description" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label for="soundcloud_link">SoundCloud Link</label>
								<input type="text" name="soundcloud_link" class="form-control" id="soundcloud_link">
							</div>
							<div class="form-group">
								<label for="duration">Duration</label>
								<input type="text" name="duration" class="form-control" id="duration">
							</div>
							<button type="submit" class="btn btn-primary">Upload</button>
						</form>
						<div id="uploadMessage" class="mt-3"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal END-->
	</div>
</section>
<!-- =======================
Main contain END -->
<?php 
	$con1->close();
?>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = new FormData(this);

            fetch('./inc/upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('uploadMessage').innerHTML = '<div class="alert alert-success">Upload successful!</div>';
                // You can handle success response here
            })
            .catch(error => {
                document.getElementById('uploadMessage').innerHTML = '<div class="alert alert-danger">Error uploading file.</div>';
                // You can handle error response here
            });
        });
    });
</script>


<!-- =======================
Footer START -->
<?php include_once './inc/footer.php'; ?>

<!-- =======================
Bottom  START -->
<?php include_once './inc/foot.php' ?>
<!-- =======================
Bottom  END -->