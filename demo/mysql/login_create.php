<?php include 'db.php';?>
<?php include 'functions.php';?>
<?php createRows(); ?>


<?php include "includes/header.php"; ?>


	<div class="container">
		<div class="col-sm-6">

			<h1 class="text-center">CREATE</h1>

			<form action="login_create.php" method="post">
			<label for="username">Username</label>
			<div class="form-group">
				<input type="text" class="form-control" name="username">
			</div>

			<label for="password">Password</label>
			<div class="form-group">
				<input type="password" class="form-control" name="password">
			</div>

			<div class="form-group">

				<select id="1" name="id">

					<option value="">1</option>

				</select>

			</div><!--form-group-->

		<input type="submit" name="submit" value="Create" class=" btn btn-primary">
</div>
	</div>

			</form>

<?php include "includes/footer.php"; ?>
