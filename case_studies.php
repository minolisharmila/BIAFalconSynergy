<?php
	include 'db_connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="konnexio-icon.png" type="image/vnd.microsoft.icon" />

	<!-- put JS library first  --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
<script>
$(document).ready(function() {
    $('.learn-more-btn').click(function() {
        var title = $(this).data('title');
        $('#caseStudyTitle').val(title);
        $('#emailModal').modal('show');
    });

    $('#emailForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            type: 'POST',
            url: 'handle_email.php', // PHP script to handle email
            data: formData, // Send serialized form data
            success: function(response) {
                alert(response); // Display response from PHP script
                $('#emailModal').modal('hide');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log the detailed error
                alert('Error submitting email. Please try again.');
            }
        });
    });
});
</script>

</head>

<body>
	<!--Header Data-->
    <?php include 'header.php'; ?>

    <main>
        <!--Third Section (Image Containers)-->
        <section class="container">
            <?php
            // Check if there are any rows in the result set
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="sec3b bg-light">
                                <img src="image/<?php echo $row['image']; ?>" alt="Case Study Image"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sec3b bg-light p-3">
                                <h2><?php echo $row["title"]; ?></h2>
                                <p><?php echo $row["content"]; ?></p>
                                <button class="btn btn-danger btn-lg learn-more-btn"
                                    data-title="<?php echo $row['title']; ?>">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='row'><div class='col'><p>No active case studies found.</p></div></div>";
            }
            ?>
        </section>

        <!-- Modal for Email -->
        <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="emailModalLabel">Enter Your Email Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="emailForm">
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailInput" name="email" required>
                            </div>
                            <input type="hidden" id="caseStudyTitle">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

  <!--footer data -->
  <?php include 'footer.php'; ?>  

</body>

</html>
