<?php
    require "lib/nusoap.php";
    include "db.php";

    $client = new nusoap_client("http://localhost/SOAP-100052/service.php?wsdl");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOAP Web Service Client Side Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>SOAP Web Service Client</h2>
  <form class="form-inline" action="" method="POST">
  <span class="text-info"><?php echo $conn_msg; ?></span>
    <div class="form-group">
      <label for="name">Insert Student Admin Number</label>
      <input type="text" name="student_ID" class="form-control"  placeholder="Enter Admin_no" required/>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
  <p>&nbsp;</p>
  <h3>

  <?php
	if(isset($_POST['submit']))
	{   
		$student_id = trim($_POST['student_ID']);
        $response = $client->call('get_student_details',array("student_id"=>$student_id));
        
		if(empty($response))
			echo "The student ID provided does not exist";
		else
			echo $response;
	}
   ?>

  </h3>
</div>
</body>
</html>