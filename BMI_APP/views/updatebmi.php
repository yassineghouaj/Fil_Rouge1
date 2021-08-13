
<?php   

$data = new BmisController();
$bmis = $data->getOneBmi();

if(isset($_POST['update'])){

$update = new BmisController();
$update->updateBmi();
}


?>



<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">update bmi </div>
				
				<div class="card-body bg-gray">

				

					<?php foreach($bmis as $bmi):?>
					<form  method="post">


						<div class="form-group">
							<label for="user_id">idb*</label>
							<input type="text" name="idb" class="form-control" placeholder="user_id"
							value="<?php echo $bmi['idb'];?>"
							>
						</div>

						<div class="form-group">
							<label for="age">age*</label>
							<input type="text" name="age" class="form-control" placeholder="age"
							value="<?php echo $bmi['age'];?>"
							>
						</div>

						<div class="form-group">
							<label for="weight">weight*</label>
							<input type="text" name="weight" class="form-control" placeholder="weight"
							value="<?php echo $bmi['weight'];?>"
							>
						</div>
					
                      
					
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="update">update</button>
						</div>

					</form>
						<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>