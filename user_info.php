<?php $db = mysqli_connect('localhost','root','','crud_application'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EXCELLENCE TECHNOLOGIES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">
           <div class="card">
               <div class="card-header bg-info">
                  <h5 class="text-center text-white">Data</h5>
               </div>
               <div class="card-body">
               <a href="index.php" class="btn btn-success">Add New</a>
                   <div class="table-responsive">
               <table class="table table-bordered table-hover table-striped">
                   <thead>
                       <tr>
                           <th>Sr. No</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Moblie</th>
                           <th>Designation</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>

                    <?php

                    $select = mysqli_query($db,"SELECT * FROM user_info"); 
                    $count  = mysqli_num_rows($select); 
                    if($count>0){

                        $i='1';
                        while($row = mysqli_fetch_assoc($select)){ ?>
                                <tr id="delete<?php echo $row['id'];?>">
                                   <td><?php echo $i; ?></td>
                                   <td><?php echo $row['fname']." ".$row['lname'];?></td>
                                   <td><?php echo $row['email'];?></td>
                                   <td><?php echo $row['mobile'];?></td>
                                   <td><?php echo $row['designation'];?></td>
                                   
                                   <td>
                                   <a href="#" onclick="deleteRecord(<?php echo $row['id'];?>)" class="btn btn-danger btn-sm">Delete</a>  
                                    </td>                        
                                </tr>

                     <?php  $i++;
                      }                   

                       

                     }else{ ?>

                        <tr>
                           <td class="text-center" colspan="5">No Data</td> 
                       </tr>

                    <?php }
                     ?>
 
                   </tbody>
               </table>
           </div>
               </div>
           </div>
       </div>
       <script>
   	function deleteRecord(id) {
   		if (confirm('Are you sure')){

   			$.ajax({

                   type: 'post',
                   url :'delete.php',
                   data :{delete_id:id},
                   success:function(data){

                   	$('#delete'+id).hide();

                   }

   			});
   		}
   	}

      
   </script>
</body>

</html>