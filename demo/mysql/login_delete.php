<?php

include 'db.php';
include 'functions.php';





deleteRows();




 ?>


<?php include "includes/header.php"; ?>

	<div class="container">
		<div class="col-sm-6">
      <h1 class="text-center">DELETE</h1>
			<form action="login_delete.php" method="post">
			<label for="username">Username</label>
			<div class="form-group">
				<input type="text" class="form-control" name="username">
			</div>

			<label for="password">Password</label>
			<div class="form-group">
				<input type="password" class="form-control" name="password">
			</div>

			<div class="form-group">

				<select id="id" name="id">

					<?php showAllData(); ?>

				</select>

			</div><!--form-group-->

		<input type="submit" name="submit" value="Delete" class=" btn btn-primary">
</div>
	</div>

			</form>

<?php include "includes/footer.php"; ?>
