<?php
	include 'db_connection.php';

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM careers WHERE isactive = 1";
	$sql2 = "SELECT * FROM testimonial WHERE isactive = 1";	
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
    $ab_title= "SELECT title FROM careers WHERE isactive = 1";
    $ab_content= "SELECT content FROM careers WHERE isactive = 1";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About | KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Konnexio is a custom machine builder located in London Ontario. Our specialty is adapto™ which is a modular assembly line construction technology.">
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/id_styles.css"> -->
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="About.css">
	

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    

    <style>
        #main-content {
            margin-top: 20px; 
        }
        .section-separator {
            margin-top: 40px; 
        }
		.fixed-size-img {
		  width: 200px; 
		  height: 200px; 
		  object-fit: cover; 
		}
		.careers-card {
		border: 1px solid #ddd;
		border-radius: 5px;
		overflow: hidden;
		display: flex;
		flex-direction: column;
		background-color: #f8f9fa;
		padding: 10px; 
		margin: 0 auto; 
		}

		
		.careers-title {
			font-size: 1rem; 
			font-weight: bold;
			margin-bottom: 0.5rem; 
		}

		
		.careers-content-text {
			font-size: 0.875rem; 	
			margin-bottom: 0; 
		}

			
		.card-body {
			padding: 0.75rem; 
			background-color: #3d5a78;
		}

    </style>
	
</head>

<body>
	<!--Header Data-->
    <?php include 'header.php'; ?>

    <div class="page-sec-main">
        <h1>About</h1>
        <br>
        <div class="page-sec-main-text">
	        <h5>KONNEXIO Inc., based in London, Ontario, designs and builds cutting-edge automation machines for diverse industries, offering unparalleled flexibility and ROI with our innovative adapto™ system</h5>
		</div>
    </div>	
        
		  <!-- Our Story -->
		  <section class="container-fluid p-3 bg-light text-dark" id="company_story">
		  <hr>
			<div class="row justify-content-center text-center">
					<div class="col-lg-8 col-12">
			  <h2 class="mb-4 mt-5" data-aos="fade-up">Our Story</h2>
			  <p class="text-center" data-aos="fade-up" data-aos-delay="300">KONNEXIO Inc, based in London, Ontario Canada designs and builds machines for the automation of assembly and test processes for automotive, consumer goods, and medical device industries. adapto™, a unique and innovative assembly automation and testing machine system comprised of modular Smart Cells, was developed to offer customers the highest degree of flexibility in their assembly applications while providing unparalleled return on investment and simple, effortless options for future retooling requirements. Results-driven: KONNEXIO’s commitment to excellence provides customers with the confidence that their project’s priorities will be addressed with the greatest of care and respect. Right-sized: We’re small enough to be nimble, flexible and accessible from the top down, plus have the resources, experience and judgement to have been trusted for engagements from a top-tier clientele around the globe for 30 years and counting..</p>
					</div>
			</div>
		</section>  
		
		<!-- Our People -->
		<section class="container-fluid p-3 bg-light text-dark" id="our_people">
		<hr>
		  <div class="container my-5 text-center">
			<h2>Our People</h2>
			<div class="row">
			  <div class="col-md-4 text-center">
				<div class="icon mb-3">
				  <img src="./Images/Image7a.jpg" alt="Partner Konnerth" class="img-fluid mb-3 fixed-size-img">
				</div>
				<h3>Founder</h3>
				<p>Our commitment to precision and innovation has earned us the trust of industry leaders.</p>
			  </div>
			  <div class="col-md-4 text-center">
				<div class="icon mb-3">
				  <img src="./Images/Image7b.jpg" alt="Partner OKU" class="img-fluid mb-3 fixed-size-img">
				</div>
				<h3>HR Manager</h3>
				<p>We believe in building a community that supports and grows together.</p>
			  </div>
			  <div class="col-md-4 text-center">
				<div class="icon mb-3">
				  <img src="./Images/Image7c.jpg" alt="Partner Konnerth" class="img-fluid mb-3 fixed-size-img">
				</div>
				<h3>Mechanical Engineer</h3>
				<p>Our strategic decisions are guided by a commitment to excellence and ethical principles.</p>
			  </div>
			</div>
		  </div>
		</section>

		<!-- Associations -->
		  <section class="container-fluid p-3 bg-light text-dark" id="associations">
		  <hr>
			<div class="container my-5 text-center" >
			  <h2 style="margin-bottom: 2rem;">Our Associations</h2>
			  <div class="row">
				<div class="col-md-4 text-center">
				  <div class="association-item d-flex align-items-center p-3 bg-light">
					<div class="association-logo">
					  <img src="https://via.placeholder.com/100x100" alt="Association 1" class="img-fluid rounded-circle">
					</div>
					<div class="association-content ms-3">
					  <h4>Association One</h4>
					  <p>We collaborate with Association One to enhance automation solutions and drive innovation in the industry.</p>
					</div>
				  </div>
				</div>
				<div class="col-md-4 mb-4">
				  <div class="association-item d-flex align-items-center p-3 bg-light">
					<div class="association-logo">
					  <img src="https://via.placeholder.com/100x100" alt="Association 2" class="img-fluid rounded-circle">
					</div>
					<div class="association-content ms-3">
					  <h4>Association Two</h4>
					  <p>Association Two partners with us to bring cutting-edge technology to the market and enhance our capabilities.</p>
					</div>
				  </div>
				</div>
				<div class="col-md-4 mb-4">
				  <div class="association-item d-flex align-items-center p-3 bg-light">
					<div class="association-logo">
					  <img src="https://via.placeholder.com/100x100" alt="Association 3" class="img-fluid rounded-circle">
					</div>
					<div class="association-content ms-3">
					  <h4>Association Three</h4>
					  <p>Our partnership with Association Three supports mutual growth and innovation in the automation sector.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		
			<!-- Testimonials -->
			<section class="container-fluid p-3 bg-light text-dark" id="testimonials">
				<?php
				// Check if there are any rows in the result set
				if ($result2->num_rows > 0) {
					?>
					<hr>
					<div class="col-lg-10 offset-lg-1 pt-5 pb-5" >
					<h2 class="text-center mb-4">What Our Clients Say</h2>
						<div id="testi-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
							<div class="carousel-inner" role="listbox">
								<?php
								$activeClass = "active";
								$indicatorIndex = 0;
								while ($row = $result2->fetch_assoc()) {
									?>
									<div class="carousel-item testi-carousel-item <?php echo $activeClass; ?> text-center p-4">
										<blockquote class="blockquote text-center">
											<p class="mb-0"><i class="fa fa-quote-left"></i><?php echo $row["content"]; ?></p>
											<br><?php echo $row["title"]; ?>
										</blockquote>
									</div>
									<?php
									$activeClass = ""; // Only the first item should be active
									$indicatorIndex++;
								}
								?>
							</div>
							<a class="carousel-control-prev" href="#testi-carousel" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon testi-carousel-control-prev-icon" aria-hidden="true">
									<i class="fa fa-chevron-left"></i>
								</span>
								<span class="sr-only"></span>
							</a>
							<a class="carousel-control-next" href="#testi-carousel" role="button" data-slide="next">
								<span class="carousel-control-next-icon testi-carousel-control-next-icon" aria-hidden="true">
									<i class="fa fa-chevron-right"></i>
								</span>
								<span class="sr-only"></span>
							</a>
							<ol class="carousel-indicators testi-carousel-indicators">
								<?php
								for ($i = 0; $i < $indicatorIndex; $i++) {
									?>
									<li data-target="#testi-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i === 0) ? 'active' : ''; ?>"></li>
									<?php
								}
								?>
							</ol>
						</div>
					</div>
					<?php
				} else {
					?>
					<hr>
					<div class="col-lg-10 offset-lg-1 pt-5 pb-5">
						<h2 class="text-center mb-4">What Our Clients Say</h2>
						<div id="testi-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item testi-carousel-item active text-center p-4">
									<blockquote class="blockquote text-center">
										<p class="mb-0"><i class="fa fa-quote-left"></i> No active Testimonials found.</p>
									</blockquote>
								</div>
							</div>
							<a class="carousel-control-prev" href="#testi-carousel" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon testi-carousel-control-prev-icon" aria-hidden="true">
									<i class="fa fa-chevron-left"></i>
								</span>
								<span class="sr-only"></span>
							</a>
							<a class="carousel-control-next" href="#testi-carousel" role="button" data-slide="next">
								<span class="carousel-control-next-icon testi-carousel-control-next-icon" aria-hidden="true">
									<i class="fa fa-chevron-right"></i>
								</span>
								<span class="sr-only"></span>
							</a>
							<ol class="carousel-indicators testi-carousel-indicators">
								<li data-target="#testi-carousel" data-slide-to="0" class="active"></li>
							</ol>
						</div>
					</div>
					<?php
				}
				?>
			</section>

			<!-- Careers Section -->
			<section id="careers" class="container-fluid p-3 bg-light text-dark">
				<div class="row no-gutters">
					<?php
					// Check if there are any rows in the result set
					if ($result->num_rows > 0) {
					echo '<hr>';
					echo '<h1 class="section-title text-center">Careers</h1>';
					echo '<p class="section-subtitle text-center">Join our team and be a part of our success story</p>';
					
						$cardCount = 0;
						while ($row = $result->fetch_assoc()) {
							if ($cardCount % 4 == 0 && $cardCount > 0) {
								echo '</div>'; // Close the previous row
							}
							if ($cardCount % 4 == 0) {
								echo '<div class="col-12">';
							}
							?>
							<div class="col-12 col-sm-6 col-md-3 mb-4">
								<div class="card career-card">
									<div class="card-inner">
										<div class="card-front">
											<div class="box front-background"></div>
											<div class="card-body">
												<h1 class="card-title"><?php echo $row["title"]; ?></h1>
											</div>
										</div>
										<div class="card-back">
											<div class="card-body">
												<h5 class="card-title"><?php echo $row["content"]; ?></h5>
												<p class="card-text"><i>Posted on: <?php echo $row["posted_date"]; ?></i></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
							$cardCount++;
						}
						
						if ($cardCount % 4 != 0) {
							echo '</div>';
						}
					} else {
						?>
						<div class="col-12">
							<div class="card career-card">
								<div class="card-inner">
									<div class="card-front">
										<div class="box front-background"></div>
										<div class="card-body">
											<h1 class="card-title">No Job Postings</h1>
										</div>
									</div>
									<div class="card-back">
										<div class="card-body">
											<h3 class="card-title">No Active Job Postings</h3>
											<p class="card-text">Check back later for new opportunities to join our team.</p>
											<button class="btn btn-dark" onclick="location.href='careers.php';">Back to Careers</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</section>




  <div class="accordion" id="accordionExample">
  <div class="accordion" id="accordionExample">
    <?php 
    // Debug: check if there are rows in the result set
    if ($result->num_rows > 0){
        $counter = 0;
        while ($row = $result->fetch_assoc()){
            $counter++;
            echo '<div class="accordion-item">
            <h2 class="accordion-header" id="heading'.$counter.'">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$counter.'" aria-expanded="true" aria-controls="collapse'.$counter.'">'
            .htmlspecialchars($row["title"]).'
            </button>
            </h2>
            <div id="collapse'.$counter.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">'
            .htmlspecialchars($row["content"]).'
            </div>
            </div>
            </div>';
        }
    } else {
        echo '<p>No records found.</p>';
    }
    ?>
</div>

    <?php if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo '<div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">'
            .$row["title"].'
            </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">'
            .$row["content"].'
            </div>
            </div>
        </div>';
        }} ?>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
            </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
            </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
            </div>
        </div>
    
    </div>

    </div>


		
		
		
		
    </main>



    <!--footer data -->
    <?php include 'footer.php'; ?>  

</body>

</html>
