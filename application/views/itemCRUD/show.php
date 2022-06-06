<div class="row jumbotron">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Items</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Back</a>
        </div>
    </div>
</div>
<div class="row jumbotron">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <?php echo $item->title; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <?php echo $item->description; ?>
        </div>
    </div>
</div>