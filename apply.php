<?php
include 'header.php';
?>
	<center>
		<div class="row">
		 <div class="login-container">
     
                <div class="col-md-6 login-form-2">
                    <div class="example-title">Signup Here</div>
                    
	<form method="POST" action="apply1.php" enctype="multipart/form-data">
		<div class="form-group">
			<label>Surname</label><br>
			<input clsss="col-sm-6 col-md-12" type="text" name="snam" placeholder="Surname" required />
		</div>
		<div class="form-group">
			<label>Firstname</label><br>
			<input clsss="col-sm-4 col-md-2" type="text" name="fnam" placeholder="Firstname" required />
		</div>
		<div class="form-group">
			<label>Othername</label><br>
			<input clsss="col-sm-4 col-md-2" type="text" name="onam" placeholder="Othername" required />
		</div>
		<div class="form-group">
			<label>E-Mail</label><br>
			<input clsss="col-sm-4 col-md-2" type="email" name="email" placeholder="Email" required />
		</div>
		<div class="form-group">
			<label>Date of Birth</label><br>
			<input clsss="col-sm-4 col-md-2" type="date" name="dob" placeholder="Example: 22/12/2000" required />
		</div>
		<div class="form-group">
			<label>Phone No.</label><br>
			<input clsss="col-sm-4 col-md-2" type="number" name="phone" placeholder="Example: 2" required />
		</div>

		<div class="form-group">
			<label>State</label><br>
			<input clsss="col-sm-4 col-md-2" type="text" name="statee" placeholder="Example: Lagos" required />
		</div>

		<div class="form-group">
			<label>Local Government</label><br>
			<input clsss="col-sm-4 col-md-2" type="text" name="lga" placeholder="Example: Ikeja" required />
		</div>


		<div class="form-group">
			<label>Department</label><br>
			<select clsss="col-sm-4 col-md-2" name="dept" required>
				<option value="">Select</option>
				<?php
				include 'cn.php';
				$sq1 = "SELECT * FROM dept";
$do = mysqli_query($conn,$sq1);
if ($do) {
  while ($row = mysqli_fetch_array($do,MYSQLI_ASSOC)) {
    $dept = $row['dept'];
echo "
	<option value=\"$dept\">$dept</option>
		";
		}
	}
				?>
			</select>
		</div>
		<div class="form-group">
			<label>Upload Passport</label><br>
		 <img src="<?php echo @$img; ?>" id="profileDisplay">
           
            <input type="file"  name="images" onchange="preview()"  class="form-group" style="display: all;">
</div>

		<div class="form-group">
			
			<input clsss="btn btn-primary btn-lg" type="submit" name="submit" value="Register"  />
		</div>
	</form>
</div>

	

</div>

</div>
</center>
<script type="text/javascript">
     function preview(){
        var a = document.querySelector('img');
        var b = document.querySelector('input[type=file]').files[0];
           var reader = new FileReader ();
           reader.onloadend = function(){
            a.src = reader.result;
           }
           if(b){
            reader.readAsDataURL(b);
           }
           else{
            a.src="";
           }
    }
    preview();
</script>
	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

