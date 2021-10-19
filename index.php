<?php $db = mysqli_connect('localhost','root','','crud_application');

if(isset($_POST['submit'])){
   

    $fname         =   $_POST['fname'];
    $lname         =   $_POST['lname'];
    $email         =   $_POST['email'];
    $date_of_birth =   $_POST['date_of_birth'];
    $mobile        =   $_POST['mobile'];
    $designation   =   $_POST['designation'];
    $gender        =   $_POST['gender'];
    $hobby         =   $_POST['hobby'];
    $hobbies="";
    foreach($hobby as $value)  
    {  
       $hobbies.= $value.",";  
    }   

$insert = "INSERT INTO `user_info` (`fname`,`lname`,`email`,`date_of_birth`,`mobile`,`designation`,`gender`,`hobby`) 
VALUES ('$fname','$lname','$email','$date_of_birth','$mobile','$designation','$gender','$hobbies')";

$query  = mysqli_query($db,$insert);
if($query){
  
    echo "<script>alert('Data Inserted Successfully Done');window.location.assign('user_info.php');</script>";
}else{
    echo "<script>alert('Data not Inserted Successfully Done');window.location.assign('index.php');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>EXCELLENCE TECHNOLOGIES</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  .container-fluid
  {
    
    background: #f05837;
    height: 100%;
    width: 100%;
    
  }
  </style>
</head>
<body>

<div class="container-fluid">
  <h3 class="text-center text-info pt-5">EXCELLENCE TECHNOLOGIES</h3>
   <br>
   <div class="row">
   <div class="col-md-3">
   </div>
     <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                  <h5 class="text-center text-white">Input Form</h5>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="row my-1">
                            <div class="col-sm-6">
                                <label> First Name: </label>
                                <input type="text" minlength="3" name="fname" class="form-control" placeholder="First Name" required="">  
                            </div>
                            <div class="col-sm-6">
                                <label> Last Name: </label>
                                <input type="text" name="lname" minlength="3" class="form-control" placeholder="Last Name" required="">  
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-sm-12">
                                <label> Email: </label>
                                <input type="email" name="email" minlength="12" class="form-control" placeholder="Email" required="">
                            </div>                            
                        </div>
                        <div class="row my-1">
                            <div class="col-sm-12">
                            <label> Date Of Birth: </label>
                                <input type="date" name="date_of_birth" class="form-control" placeholder="Date Of Birth" required="">
                            </div>                            
                        </div>
                        <div class="row my-1">
                            <div class="col-sm-12">
                                <label> Mobile: </label>
                                <input type="text" name="mobile" onkeypress="return onlyNumberKey(event)" class="form-control" placeholder="Mobile" required="">  
                            </div>                            
                        </div>
                        <div class="row my-1">
                            <div class="col-sm-12">
                                <label> Designation: </label>
                                <input type="text" name="designation" class="form-control" placeholder="Designation" required="">  
                            </div>                            
                        </div>
                        <div class="row my-1">
                            <div class="col-sm-4">
                                <label>Gender</label>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-arround">
                                <label> Male: </label>
                                <input type="radio" name="gender" value="Male" class="form-control mt-2" placeholder="First Name" checked="" style="margin-right:4%;">
                                <label> Female: </label>
                                <input type="radio" name="gender" value="Female" class="form-control mt-2" placeholder="First Name" style="margin-right:4%;">
                                <label> Other: </label>
                                <input type="radio" name="gender" value="Other" class="form-control mt-2" placeholder="First Name"  style="margin-right:4%;">  
                            </div>                             
                        </div>
                        <div class="row my-1">
                            <div class="col-sm-12" required="">
                                <label>Hobbies: </label>
                                <input type="checkbox" name="hobby[]" value="Music">
                                <label>Music</label>
                                <input type="checkbox" name="hobby[]" value="Reading">
                                <label>Reading</label>
                                <input type="checkbox" name="hobby[]" value="Sports">
                                <label>Sports</label>
                                <input type="checkbox" name="hobby[]" value="Traveling">
                                <label>Traveling</label>
                                </select>
                            </div>
                           
                        </div>
                     
                        <br>
                         <button class="btn btn-primary float-right" type="submit" name="submit"> Submit </button>
                
                    </form>
                </div> 
            </div>           
       </div>
 
   </div> 


</div>
<!-- only enter numbers -->
<script>
	function onlyNumberKey(evt) {
		
		var ASCIICode = (evt.which) ? evt.which : evt.keyCode
		if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
			return false;
		return true;
	}
    </script>
</body>
</html>