<div class="row jumbotron">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Register Yourself !!!!!!!</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/login');?>"> Already Registered Sign In!!</a>
        </div>
    </div>
</div>
<form method="post" action="<?php echo base_url('itemCRUD/registerstore');?>">
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
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="enter your name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="enter your email">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact No:</strong>
                <input type="number" name="contact" class="form-control" placeholder="enter your Contact Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="text" name="password" class="form-control" placeholder="enter your Password">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                <input type="text" name="cpassword" class="form-control" placeholder="enter your confirm Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="submit" name="submit"  class="btn btn-primary" value="Register Now!!!" ></input>
        </div>
        </div>
        
    </div>


</form>