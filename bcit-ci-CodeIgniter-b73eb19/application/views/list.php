<!DOCTYPE html>
<html>
    <head>
        <title>TODO List  - View List </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    </head>    
<body>

<div class="navbar navbar-dark bg-dark">
    <div class ="container">
        <a href="a" class=navbar-brand>TODO List</a>
    </div>    
</div>   
                    
<div class="container" style="padding-top: 10px;">

<div class="row">
      <div class="col-md-12">
      <?php
      $success = $this->session->userdata('success');
      if($success != ""){
        ?>
        <div class="alert alert-success"><?php echo $success;?></div>
        <?php
      }
      ?>
       <?php
      $failure = $this->session->userdata('failure');
      if($failure != ""){
        ?>
        <div class="alert alert-success"><?php echo $failure;?></div>
        <?php
      }
      ?>
    </div>   
 </div>

    <div class="row">
      <div class="col-md-8">
          <div class="row">
              <div class="col-6">
                  <h3>View List </h3>
                  <div class="col-6 text-right">
                      <a href="<?php  echo base_url().'index.php/Tasklist/add/';?>" class="btn btn-primary">Add</a>
                  </div>    
               </div>
             </div>
          <hr>
      </div>   
    </div>

    <div class = "row">
       <div class="col-md-8">   
           <table class="table table-striped">
               <tr>
                   <th>ID</th>
                   <th>Task</th>
                   <th>Sub Task</th>
                   <th width="60">Edit</th>
                   <th width="60">Delete</th>

               </tr>

               <?php if(!empty($todo)) { foreach($todo as $user){?>

                <tr>
                    <td><?php echo $user['id']?></td>
                    <td><?php echo $user['task']?></td>
                    <td><?php echo $user['subTask']?></td>
                    <td>
                        <a href="<?php echo base_url().'index.php/Tasklist/edit/'.$user['id']?>" class="btn btn-primary">Update</a>
                    </td>  
                    <td>
                        <a href="<?php echo base_url().'index.php/Tasklist/delete/'.$user['id']?>" class="btn btn-danger">Delete</a>
                    </td>  
               </tr>    
               <?php
               }}else{
                   ?>
                   <tr>
                       <td colspan = "5">Record not found </td>
               </tr>

               <?php } ?>

        </table>
       </div>

    </div>
  
</div>   

</body>
</html>