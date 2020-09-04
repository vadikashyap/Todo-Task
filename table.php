<?php   defined('BASEPATH') OR exit('No direct script access allowed');  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->

    <!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">



<link href="<?=BASE_URL?>/admin_assets/main.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">


       <?php include('menu/header.php'); ?>

       <?php include('menu/theme.php'); ?>

       
        <div class="app-main">
            
            <?php include('menu/sidebar.php'); ?>


                <div class="app-main__outer" >
                	 <div class="app-main__inner">
                	<div class="main-card mb-3 card " >
                        <div class="card-body">
                		<table class="table table-bordered table-hover" id="book-table">
							<thead >
								<tr>
									<td>Action</td>
									<td>Price</td>
									<td>Author</td>
									<td>Rating</td>
								</tr>
							</thead>
							<tbody>
								<tr>
						            <td><a href="#" class="btn btn-success">Active</a> 
						            	<a href="#" class="btn btn-danger">Deactive</a>
						            </td>
						            <td>Row 1 Data 2</td>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						        </tr>
						        <tr>
						            <td>Row 2 Data 1</td>
						            <td>Row 2 Data 2</td>
						            <td>Row 2 Data 1</td>
						            <td>Row 2 Data 2</td>
						        </tr>
						        <tr>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						        </tr>
						        <tr>
						            <td>Row 2 Data 1</td>
						            <td>Row 2 Data 2</td>
						            <td>Row 2 Data 1</td>
						            <td>Row 2 Data 2</td>
						        </tr>
						        <tr>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						        </tr>
						        <tr>
						            <td>Row 2 Data 1</td>
						            <td>Row 2 Data 2</td>
						            <td>Row 2 Data 1</td>
						            <td>Row 2 Data 2</td>
						        </tr>
						        <tr>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						            <td>Row 1 Data 1</td>
						            <td>Row 1 Data 2</td>
						        </tr>
						        <tr>
						        	<td>Kashyap</td>
						        	<td>Vadi</td>
						        	<td>Hello</td>
						        	<td>man</td>
						        </tr>
							</tbody>
						</table>

                	</div>
						
                	</div>
                    </div>











                    
                    <?php include('menu/footer.php'); ?>

                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?=BASE_URL?>/admin_assets/assets/scripts/main.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#book-table').DataTable();
});
</script>
</body>
</html>
