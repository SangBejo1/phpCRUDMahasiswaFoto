<!DOCTYPE html>
<html>

<head>
	<title>Image Upload Using PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
		body {
			font-family: 'Nunito', sans-serif;
			display: flex;
			justify-content: auto;
			align-items: auto;
			flex-direction: column;
			min-height: 100vh;
			background-image: linear-gradient(#ACB6E5, #86FDE8);
			
			
		}
		form {
  max-width: 800px;
  margin: 10px auto;
  padding: 30px 200px;
  background: #f4f7f8;
  border-radius: 8px;
}
	</style>
</head>

<body>
	<?php if (isset($_GET['error'])): ?>
	<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	
	<form action="upload.php" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label>Nama* </label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Foto Profile* </label>
			<input type="file" name="my_image" class="form-control">


		</div>
		<div class="form-group">
			<label>NIM Mahasiswa* </label>
			<input type="text" class="form-control" name="nim">
		</div>
		<div class="form-group">
			<label>Gender* </label>
			<select name="gender" class="form-control">
				<option>Pilih</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Wanita">Wanita</option>
			</select>
		</div>
		<div class="form-group">
			<label>Keterangan*</label>
			<textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>
		</div>
		<div class="form-group">
			<label>Nilai Tugas*</label>
			<input type="text" class="form-control" name="tugas">
		</div>
		<div class="form-group">
			<label>Nilai UTS*</label>
			<input type="text" class="form-control" name="uts">
		</div>

		<div class="form-group">
			<label>Nilai UAS*</label>
			<input type="text" class="form-control" name="uas">
		</div>
		 <input type="submit" class="btn btn-primary" name="submit" value="Upload"> 
    <a href="read_detail.php" type="submit" class="btn btn-primary">Cancel</a>

	</form>
</body>

</html>