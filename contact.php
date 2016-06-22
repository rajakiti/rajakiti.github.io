<?php
$errors = '';
$myemail = 'prashanth0451@gmail.com';
if(isset($_POST)){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$info = $_POST['info'];

	if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['info'])){
		$errors .= "Error: All fields are required";
	}

	if(empty($errors)){
		$to = $myemail;
		$subject="Enquiry From R base Form";
		$from = $name;
		$message ="<table width='60%' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<td valign='middle' style='height:32px; color:#fff; background:#256895; line-height:30px; font-size:16px; font-family:arial; padding:0 0 0 10px;'>Message From R base Contact Form</td>
			</tr>
			<tr>
				<td>
					<table width='100%' height='171' border='1'  bordercolor='#783d17' cellpadding='0' cellspacing='0'>
						<tr>
							<td width='27%' height='32' align='left' valign='middle'  style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>Name
							</td>
							<td width='73%' align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>$name
							</td>
						</tr>
						<tr>
							<td height='32' align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>Phone
							</td>
							<td align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>$phone
							</td>
						</tr>
						<tr>
							<td height='32' align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>Company
							</td>
							<td align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>$company
							</td>
						</tr>
						<tr>
							<td height='32' align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>Message
							</td>
							<td align='left' valign='middle' style='padding:0 0 0 10px; font-family:arial; font-size:14px; color:#000;'>$message
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>";
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: $name\r\n";
		$headers .= "Reply-To: $email_address";
		mail($to, $subject, $message, $headers);
		header('Location: contact-us.html');
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>R base design studio</title>
		<link rel="icon" type="image/png" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<div class="container">
				<h1 class="logo"><em></em><a href="index.html"><img src="images/logo.png" alt="logo"></a><em></em></h1>
				<nav>
					<ul>
						<li class="border-right"><a class="home-icon" href="index.html"></a></li>
						<li>
							<a href="about-us.html">About</a>
						</li>
						<li>
							<a href="products.html">Products</a>
						</li>
						<li>
							<a href="news.html">News</a>
						</li>
						<li>
							<a href="contact-us.html" class="active">Contact</a>
						</li>
						<ul class="social-icons-group">
							<li>
								<a class="soical-icon fb-icon" href="https://www.facebook.com/R-Base-Design-Studios-880681618654056/timeline/" target="_blank"></a>
							</li>
							<li>
								<a class="soical-icon gplus-icon" href="https://plus.google.com/114195253778410703804/posts" target="_blank"></a>
							</li>
							<li>
								<a class="soical-icon instagram-icon" href="https://instagram.com/rbasedesignstudio/" target="_blank"></a>
							</li>
						</ul>
						<li class="contact-number border-right">
							<span>Call Us: <em>+91 96526 43660</em></span>
							<span>Email: <a href="mailto:raj@rbase.in">raj@rbase.in</a></span>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="clear"></div>
		<div class="container">
			<section>
				<div class="contact-us-page">
					<div class="contact-us">
						<h2 class="title">Contact Us</h2>
						<div class="contact-form">
							<form action="contact.php" method="POST">
								<div class="error-text">
									<?php echo $errors; ?>
								</div>
								<div>
									<label for="name">Your Name: </label>
									<input type="text" name="name" autofocus>
								</div>
								<div>
									<label for="number">Phone Number: </label>
									<input type="text" name="phone">
								</div>
								<div>
									<label for="company">Company<small>(optional)</small>: </label>
									<input type="text" name="company">
								</div>
								<div>
									<label for="message">Message: </label>
									<textarea name="info"></textarea>
								</div>
								<div class="action">
									<input type="submit" value="Submit" class="submit-btn">
								</div>
							</form>
							<address>
								<div class="contact-address">
									<h3>Contact Address</h3>
									<p>
										303, Siri sai orchid,<br>
										Image hospital lane,<br>
										Madhapur, Hyderabad,<br>
										India - 500081.<br>
										<em>Email: <a href="mailto:raj@rbase.in">raj@rbase.in</a></em>
									</p>
								</div>
							</address>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="clear"></div>
		<footer>
			<div class="container">
				<div class="copy-right">
					&copy; 2016 R base design studio. All Rights Reserved.
				</div>
				<div class="footer-links">
					<ul>
						<li>
							<a class="soical-icon fb-icon" href="https://www.facebook.com/R-Base-Design-Studios-880681618654056/timeline/" target="_blank"></a>
						</li>
						<li>
							<a class="soical-icon gplus-icon" href="https://plus.google.com/114195253778410703804/posts" target="_blank"></a>
						</li>
						<li>
							<a class="soical-icon instagram-icon" href="https://instagram.com/rbasedesignstudio/" target="_blank"></a>
						</li>
					</ul>
					<div class="dev_by">
                        <p class="dev_by_left">
                            <a href="http://www.technemo.com">Website Design</a> &amp; 
                            <a href="http://www.technemo.com">Development</a> by
                        </p>
                        <p class="dev_by_right">
                            <a class="imgTip" href="http://www.technemo.com" target="_blank"><img src="images/technemo-monogram.png" width="40" height="40" alt="Technemo"></a>
                        </p>
                    </div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/dev-jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('a.imgTip').tinyTips('yellow', '<img src="images/technemo-logo.png" />');
			});
		</script>
	</body>
</html>