<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="row jumbotron">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> CRUD Operation in Codeigniter</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo('itemCRUD/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>
<table class="table table-bordered table-stripped jumbotron">
  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th width="220px">Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->title; ?></td>
          <td><?php echo $item->description; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo ('itemCRUD/delete/'.$item->id);?>">
          <a class="btn btn-info" onclick:swal(); href="<?php echo ('itemCRUD/'.$item->id)  ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo ('itemCRUD/edit/'.$item->id) ?>"> Edit</a>
          <button onclick="deleteVal(<?php $item->id; ?>)" type="submit" class="btn btn-danger"> Delete <?php   ?></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>


<script type="text/javascript">

    function deleteVal(id){
        swal("Good job!", "You clicked the button!", "success");
    }

</script>

</body>
</html>