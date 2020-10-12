<!DOCTYPE html>
<?php include("funct.php");?>
<html>
<head>
	<title>Flight Plan</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3>Flight Plan</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Flight Model</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Airport Clearance</th>
            <th>Onboard</th>
         
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Make new Plan</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="funct.php" method="post">
                <label>Flight Model</label>
<input type="text" name="Payment_id" class="form-control"><br>
 
                    <label>Source</label>
                    <input type="text" name="Amount" class="form-control"><br>
                    <label>Destination</label>
                    <input type="text" name="customer_id" class="form-control"><br>
                    <label>Airspace Clearance</label>
                    <input type="text" name="customer_name" class="form-control"><br>
                    <label>Onboard Flight Status</label>
                    
<input type="text" name="payment_type" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="pay_submit" value="ADD">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>