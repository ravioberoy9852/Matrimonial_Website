<?php include_once("functions.php");?>
<!DOCTYPE HTML>
<html>
<head>
<title>Makemy Love</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	   <form action="auth/auth.php?user=1" method="post">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
	      <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required">
	    </div>
	    <div class="form-item form-type-password form-item-pass">
	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
	      <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
	    </div>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
	    </div>
	   </form>
	  </div>
	  <div class="col-sm-6">
	    <ul class="sharing">
		<li><a aria-label="View Varad on linkedin" href="https://www.linkedin.com/in/ravioberoy9852/" target="_blank" data-position="top" data-tooltip="View Varad on linkedin" class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i class="fa fa-linkedin"></i></a></li>
		<li><a aria-label="View Varad on facebook" href="https://www.facebook.com/ravi.oberoy23082002/" target="_blank" data-position="top" data-tooltip="View Varad on facebook" class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i class="fa fa-facebook"></i></a></li>
		<li><a aria-label="View Varad on twitter" href="https://x.com/ravioberoy9852" target="_blank" data-position="top" data-tooltip="View Varad on twitter" class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i class="fa fa-twitter"></i></a></li>
		<li><a aria-label="View Varad on github" href="https://github.com/ravioberoy9852" target="_blank" data-position="top" data-tooltip="View Varad on github" class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i class="fa fa-github"></i></a></li>
		<li><a aria-label="View Varad on instagram" href="https://instagram.com/ravi._.oberoy" target="_blank" data-position="top" data-tooltip="View Varad on instagram" class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped"><i class="fa fa-instagram"></i></a></li>


		</ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>


<?php include_once("footer.php");?>

