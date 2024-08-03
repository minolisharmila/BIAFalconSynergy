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
    <title>SupportTicket</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">

    <?php
        //DB Connection
        include 'connection.php';

        //Variables particular to this page
        $tableTitles = [ 'Ticket Id', 'Checked By', 'Title', 'Description', 'Sent Date', 'Status'];
        $tableColumnNames = [ 'ticketid', 'first_name', 'title', 'description', 'sent_date', 'cs.isactive'];
        $tableName = 'Support Tickets';
        $tableDbName = 'support_ticket';
        
		// Define the primary key column name
		$tablePrimaryKey = 'ticketid';
      
        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' 
                  FROM ' . $tableDbName . ' cs 
                  JOIN user u ON cs.userid = u.userid';
        $result = $conn->query($query);
		
		// Count active and inactive cases
        $activeQuery = "SELECT COUNT(*) as active_count FROM $tableDbName WHERE isactive = 1";
        $inactiveQuery = "SELECT COUNT(*) as inactive_count FROM $tableDbName WHERE isactive = 0";

        $activeResult = $conn->query($activeQuery);
        $inactiveResult = $conn->query($inactiveQuery);

        $activeCount = $activeResult->fetch_assoc()['active_count'];
        $inactiveCount = $inactiveResult->fetch_assoc()['inactive_count'];		

        //Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>