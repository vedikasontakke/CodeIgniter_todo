<!DOCTYPE html>
<html>
    <head>
        <title>TODO List Add List </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    </head>    
<body>

<div class="navbar navbar-dark bg-dark">
    <div class ="container">
        <a href="a" class=navbar-brand>TODO List</a>
    </div>    
</div>   
                    
<div class="container" style="padding-top: 10px;">

    <h3>Add Task</h3>
    <hr>
    <form  method="post" name="createUser" action="<?php echo base_url().'index.php/Tasklist/add/';?>">
    
    <div class ="row">

        <div class="col-md-6">
            <div class="form-group">
                <label>Task</label>
                <input type="text" name="task" value="<?php echo set_value('task');?>" class="form-control">
                <?php echo form_error('task');?>
            </div> 
            
            <div class="form-group">
                <label>Sub Task</label>
                <input type="text" name="subTask" value="<?php echo set_value('subTask');?>" class="form-control">
                <?php echo form_error('subTask');?>
            </div> 

            <div class="form-group" style="padding-top: 10px;">
              <button class="btn btn-primary" >Add</button>
              <a href="<?php echo base_url().'index.php/TaskList/index/';?>" class="btn-secondary btn">Cancel</a>
            </div> 
        </div>    
    </div>  
    </form>
  
</div>   

</body>
</html>