<?php
session_start();







?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
			<?php
				if (isset($_SESSION['message'])) {
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				}
			?>
			<div class="card">
				<div class="card-header">
					<h4>How to import data into database</h4>
				</div>
				<div class="card-body">
					<form action="code.php" method="post" enctype="multipart/form-data">
						<input type="file" name="import_file" class="form-control">
						<button type="submit" class="btn btn-info my-3" name="import">IMPORT</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- =============== -->

<div class="container">
	<div class="row">
		<div class="com-md-12 mt-4">
				<div class="card">
				<div class="card-header">
					<h4>Export data from database in excelsheet</h4>
				</div>
				<div class="card-body">
					<form action="code.php" method="post">
						<select name="export_file_type" class="form-control">
							<option value="xlsx">xlsx</option>
							<option value="xls">xls</option>
							<option value="csv">csv</option>
						</select>
						<button type="submit" class="btn btn-info my-3" name="export_excel_btn">Export</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>