<?php 
    //starts session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>News_Events</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">

<?php

include 'connection.php';


$tableColumnNames = ['userid','title', 'location', 'content', 'content_type' , 'image'];
$columns = implode(',', $tableColumnNames);
$placeholders = implode(',', array_fill(0, count($tableColumnNames), '?'));


		
		
// Database details
$tableDbName = "news_events";
$tableName = 'News & Events';


    // Prepare SQL insert statement
   // $stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES ($placeholders)");
   // $stmt->bind_param($SESSION['user_id'], $title, $content, $contentType, $uploadfile);

   
	

    //Page standard body
        include 'AdminPagesBodyCreate.php';
    ?>

    
</body>
</html>

<!-- page1.php -->
