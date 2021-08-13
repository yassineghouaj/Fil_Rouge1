<?php 

		$data = new BmisController();
		$bmis = $data->getAllBmis();


    	
?>



<?php include('./views/includes/alerts.php');?>
<table class="table" style = "width:80%; margin-left: 150px; background-color: #444; color: white;">
					  <thead>
					    <tr>
					     
					     
                <th scope="col">user_id</th>
					      <th scope="col">age</th>
					      <th scope="col">height</th>
					      <th scope="col">weight</th>
					     
                <th scope="col"></th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($bmis as $bmi):?>
					    	<tr>
						     
						      
						      <th scope="row"><?php echo $bmi['user_id'];?></th>
						      <td><?php echo $bmi['age'];?></td>
						      <td><?php echo $bmi['height'];?></td>
                  <td><?php echo $bmi['weight'];?></td>
                             
						 
						      <td class="d-flex flex-row">
                    <form method="post" class="" action="updatebmi" style = 'background-color: #444;'>
						      		<input type="hidden" name="idb" value="<?php echo $bmi['idb'];?>">
						      		<button class="btn btn-sm btn-warning"><i class=""></i>update</button>
						      	</form>
						      
						      	<form method="post" class="" action="delete" style = 'background-color: #444;'>
						      		<input type="hidden" name="idb" value="<?php echo $bmi['idb'];?>">
						      		<button class="btn btn-sm btn-danger"><i class=""></i>delete</button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>





















<!-- <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">age</th>
      <th scope="col">weight</th>
      <th scope="col">height</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $_SESSION['idc']; ?></th>
      <td><?php echo $_SESSION['first_name']; ?></td>
      <td><?php echo $_SESSION['last_name']; ?></td>
      <td><?php echo $_SESSION['age']; ?></td>
      <td><?php echo $_SESSION['weight']; ?></td>
      <td><?php echo $_SESSION['height']; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->




