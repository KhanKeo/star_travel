<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" id="cpswitch" href="css/orange.css">
<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">

<link rel="stylesheet" href="css/flexslider.css" type="text/css" />

<link rel="stylesheet" href="css/datepicker.css">

<link rel="stylesheet" href="css/magnific-popup.css">
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<script src="js/bootstrap.min.js"></script>

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
	$fname=$_POST['fname'];
	$email=$_POST['email'];	
	$mobileno=$_POST['mobileno'];
	$subject=$_POST['subject'];	
	$description=$_POST['description'];
	$sql="INSERT INTO  gopy(hoten,id_email,sdt,chude,noidung) VALUES(:fname,:email,:mobileno,:subject,:description)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':fname',$fname,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
	$query->bindParam(':subject',$subject,PDO::PARAM_STR);
	$query->bindParam(':description',$description,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
		$msg="G???i th??nh c??ng";
	}
	else 
	{
		$error="???? x???y ra l???i. Vui l??ng th??? l???i";
	}

}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Starvel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tourism Management System In PHP" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		}
		.succWrap{
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		}
	</style>
</head>
<body>

	<div class="top-header">
		<?php include('includes/header.php');?>
		<section class="page-cover" id="cover-cruise-grid-list" style="background: url('images/cover-tour-grid-list.jpg') 50% 84%;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Ph???n h???i</h1>
						<ul class="breadcrumb">
							<li><a href="#">Trang ch???</a></li>
							<li class="active">Ph???n h???i</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<br>
		<div class="privacy">
			<div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

				<div class="side-bar-block filter-block" style="background: url(images/bl2.jpeg); width: 305px; height: 400px;" >
					<h3>Du l???ch Nh???t B???n</h3>
					<p>Tham quan ?????t n?????c m???t tr???i m???c v???i hoa anh ????o</p>

				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<div class="side-bar-block main-block ad-block">
							<div class="main-img ad-img">
								<a href="#">
									<img src="images/rr.jpg" class="img-responsive" alt="car-ad" />
									<div class="ad-mask">
										<div class="ad-text">
											<span>Du l???ch</span>
											<h2>Xe</h2>
											<span>Sang</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-12">    
						<div class="side-bar-block support-block">
							<h3>H??? tr???</h3>
							<p>????? c?? c?? s??? g??p ph???n ?????m b???o quy???n l???i cho kh??ch h??ng, gi??p kh??ch h??ng so???n th???o ???????c c??c v??n b???n ph??p l??, c??c c??ng v??n ch??nh x??c theo quy ?????nh c???a ph??p lu???t.</p>
							<div class="support-contact">
								<span><i class="fa fa-phone"></i></span>
								<p>+84 973536796</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Ph???n h???i</h3>
				<form name="enquiry" method="post" style="box-shadow: 0px 0px 10px -4px #000;
				margin-bottom: 2em;
				padding: 4em;
				margin-left: 260px;
				margin-top: 50px;
				">
				<?php if($error){?><div class="errorWrap"><strong>L???i</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>Ho??n th??nh</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<p style="width: 450px; margin-left: 135px;">

					<b>H??? t??n</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Nh???p h??? t??n" required="">
				</p> 
				<p style="width: 450px; margin-left: 135px;">
					<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Nh???p email c???a b???n" required="">
				</p> 

				<p style="width: 450px; margin-left: 135px;">
					<b>??i???n tho???i</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="nh???p s??? ??i???n tho???i" required="">
				</p> 

				<p style="width: 450px; margin-left: 135px;">
					<b>Ch??? ?????</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Nh???p ch??? ?????" required="">
				</p> 
				<p style="width: 450px; margin-left: 135px;">
					<b>N???i dung</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Nh???p n???i dung" required=""></textarea> 
				</p> 

				<p style="width: 450px; margin-left: 135px;">
					<button type="submit" name="submit1" class="btn-primary btn">G???i</button>
				</p>
			</form>


		</div>
	</div>
	<br>
	<?php include('includes/footer.php');?>
	<?php include('includes/signup.php');?>			
	<?php include('includes/signin.php');?>			
	<?php include('includes/write-us.php');?>
</body>
</html>
	<script src="js/jquery.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/custom-navigation.js"></script>
		<script src="js/custom-flex.js"></script>
		<script src="js/custom-owl.js"></script>
		<script src="js/custom-date-picker.js"></script>
		<script src="js/custom-video.js"></script>