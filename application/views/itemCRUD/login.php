<div class="row jumbotron">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Login Yourself !!!!!!!</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/register');?>"> Haven't Registered yet register Now!!</a>
        </div>
    </div>
</div>
<form method="post" action="<?php echo base_url('itemCRUD/loginstore');?>">
    <?php
    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="enter your email">
            </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" class="form-control" placeholder="enter your Password">
            </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="submit" name="login"  class="btn btn-primary" value="Login Now!!!" ></input>
        </div>
        </div>
        
    </div>


</form>