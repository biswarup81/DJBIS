<?php
require 'vendor/autoload.php'; // AWS SDK for PHP
include_once "variables.php";
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3Client = new S3Client([
    'region' => $region,
    'version' => 'latest',
    'credentials' => [
        'key' => $accessKey,
        'secret' => $secretKey,
    ]
]);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image700x933 = $_FILES['image_700X933']['name'];
    $image1300x732 = $_FILES['image_1300X732']['name'];
    $topic = $_POST['topic'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $soundcloud_link = $_POST['soundcloud_link'];
    $duration = $_POST['duration'];

    // Upload images to S3
    // $uploadedImage700x933 = "temp path1";
    // $uploadedImage1300x732 = "temp path2";
    $uploadedImage700x933 = uploadToS3($image700x933, $_FILES['image_700X933']['tmp_name'], $s3Client, $bucketName);
    $uploadedImage1300x732 = uploadToS3($image1300x732, $_FILES['image_1300X732']['tmp_name'], $s3Client, $bucketName);

    $mysqli = mysqli_connect($_HOST,$_USER ,$_PASSWD ,$_DBNAME);
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare and bind
    $stmt = $mysqli->prepare("INSERT INTO blog (image_700X933, image_1300X732, topic, flag, title, subtitle, description, soundcloud_link, duration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $flag = 1; // Default value

    $stmt->bind_param("sssssssss", $uploadedImage700x933, $uploadedImage1300x732, $topic, $flag, $title, $subtitle, $description, $soundcloud_link, $duration);

    if ($stmt->execute()) {
        echo "Record successfully inserted!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}

function uploadToS3($fileName, $fileTmpName, $s3Client, $bucketName) {
    try {
        $result = $s3Client->putObject([
            'Bucket' => $bucketName,
            'Key' => 'assets/images/blog/'.basename($fileName),
            'SourceFile' => $fileTmpName,
            'ACL' => 'public-read', // Adjust as necessary
        ]);

        return $result['ObjectURL']; // Return S3 URL
    } catch (AwsException $e) {
        echo "Error uploading image: " . $e->getMessage();
        return null;
    }
}
?>
