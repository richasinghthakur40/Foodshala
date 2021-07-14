<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from laravel.spruko.com/Notion Insurance Broker/Horizontal-Light/signin by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 10:51:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Notion Insurance Broker">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Registration </title>

		<!---Fontawesome css-->
		<link href="assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

		<!---Ionicons css-->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

		<!---Typicons css-->
		<link href="assets/plugins/typicons.font/typicons.css" rel="stylesheet">

		<!---Feather css-->
		<link href="assets/plugins/feather/feather.css" rel="stylesheet">

		<!---Falg-icons css-->
		<link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		<!---Style css-->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/custom-style.css" rel="stylesheet">
		<link href="assets/css/skins.css" rel="stylesheet">
		<link href="assets/css/dark-style.css" rel="stylesheet">
		<link href="assets/css/custom-dark-style.css" rel="stylesheet">

		
	</head>

	<body class="main-body">
		<div class="image">
    <br>
    <br>

    <form @fade  [formGroup]="loginPage" style="text-align:center">
        <table align="center" class="table"
            style="color: black; font-family:'Times New Roman', Times, serif;font-size:x-large;background: linear-gradient(to top right,blue,orange);width: 25%;">
            <tr>
                <th>&nbsp;Registration&nbsp;</th>
            </tr>
        </table>
        <table align="center" border="2" class="table"
            style="background: linear-gradient(to bottom right,blue,orange,red);width: 25%;font-family: 'Times New Roman', Times, serif;">
            <tr>
                <th>&nbsp;Enter Name</th>
                <td><input formControlName="SMID" type="text" /></td>
            </tr>
			<tr>
                <th>&nbsp;Enter Email</th>
                <td><input formControlName="email" type="email" /></td>
            </tr>
            <tr>
                <th>&nbsp;Password</th>
                <td><input formControlName="Password" type="password" /></td>
            </tr>
		
		<tr>
            <th>Type</th>
            <td><select class="form-control" formControlName="Type" style="width: 170px;" required>
                   <option value="Restaurant">Restaurant</option>
                    <option value="Customer">Customer</option>
                </select>
            </td>
		</tr>
		<tr>
            <th>Preference</th>
            <td><select class="form-control" formControlName="Type" style="width: 170px;" required>
                   <option value="Veg">Veg</option>
                    <option value="NonVeg">NonVeg</option>
                </select>
            </td>
		</tr>
        
			
            <tr>
                <td></td>
                <td><button type="button" (click)="login()" class="btn btn-success">Login</button></td>
            </tr>
        </table>
    </form>
	</br>
    <div align="center" *ngIf="alert" class="alert alert-danger alert-dismissible fade show" role="alert"
        style="align-items: center;">
        <strong>Already Registered?</strong> 
        <h3 ><i class="fa fa-envelope" style="font-family: 'Times New Roman', Times, serif; height:35px ;" aria-hidden="true"></i>&nbsp;<a href="C:/xampp/htdocs/foodshala/resources/views/login">Login Here</a></h3>
		
    </div>
</div>
		
		<!-- End Page -->
		<!-- Jquery js-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js-->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Perfect-scrollbar js-->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		
		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		
		<!-- Custom js-->
		<script src="assets/js/custom.js"></script>



	
	</body>

<!-- Mirrored from laravel.spruko.com/Notion Insurance Broker/Horizontal-Light/signin by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 10:51:56 GMT -->
</html><?php /**PATH C:\xampp\htdocs\foodshala\resources\views/loginPage.blade.php ENDPATH**/ ?>