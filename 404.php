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

<!-- =======================
Header START -->
<?php include_once './inc/header.php'; ?>
<!-- =======================
Header END -->

<!-- **************** MAIN CONTENT START **************** -->

<?php include_once './inc/404.php'; ?>

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

