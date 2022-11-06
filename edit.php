<?php
// Include config file
require_once "db_conn.php";
 
// Define variables and initialize with empty values
$image_url=$nim = $nama =  $tugas =$uts =$uas= $keterangan= $gender ="";
$image_url_err=$nama_err = $nim_err  =$tugas_err =$uts_err =$uas_err= $gender_err= $keterangan_err ="";

 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate nim
   

    // Validate name
  $input_nama = trim($_POST["nama"]);
  if(empty($input_nama)){
      $nama_err = "Please enter a name.";
  } elseif(!filter_var($input_nama, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
      $nama_err = "Please enter a valid name.";
  } else{
      $nama = $input_nama;
  }

  
  // Validate tugas
  $input_Tugas = trim($_POST["tugas"]);
  if(empty($input_Tugas)){
      $tugas_err = "Please enter the tugas value.";
  } elseif(!ctype_digit($input_Tugas)){
      $tugas_err = "Please enter a positive integer value.";
  } else{
      $tugas = $input_Tugas;
  }

  // Validate uts
  $input_UTS = trim($_POST["uts"]);
  if(empty($input_UTS)){
      $uts_err = "Please enter the uts value.";
  } elseif(!ctype_digit($input_UTS)){
      $uts_err = "Please enter a positive integer value.";
  } else{
      $uts = $input_UTS;
  }

  // Validate uas
  $input_UAS = trim($_POST["uas"]);
  if(empty($input_UAS)){
      $uas_err = "Please enter the uas value.";
  } elseif(!ctype_digit($input_UAS)){
      $uas_err = "Please enter a positive integer value.";
  } else{
      $uas = $input_UAS;
  }
  $input_nim = trim($_POST["nim"]);
  if(empty($input_nim)){
      $nim_err = "Please enter the uas value.";
  } elseif(!ctype_digit($input_nim)){
      $nim_err = "Please enter a positive integer value.";
  } else{
      $nim = $input_nim;
  }

  $input_gender = trim($_POST["uas"]);
  if(empty($input_gender)){
      $gender_err = "Please enter the uas value.";
  } elseif(!ctype_alnum($input_gender)){
      $gender_err = "Please enter a positive integer value.";
  } else{
      $gender = $input_gender;
  }

  $input_keterangan = trim($_POST["keterangan"]);
  if(empty($input_keterangan)){
      $keterangan_err = "Please enter the uas value.";
  } elseif(!ctype_alnum($input_keterangan)){
      $keterangan_err = "Please enter a positive integer value.";
  } else{
      $keterangan = $input_keterangan;
  }

    // Check input errors before inserting in database
    if(empty($image_url_err) && empty($nama_err) && empty($nim_err)  && empty($tugas_err)  && empty($uts_err) && empty($uas_err) && empty($keterangan_err)&& empty($gender_err)){
        // Prepare an update statement
        $sql = "UPDATE images SET image_url=?, nama=?, nim=?, tugas=?, uts=?, uas=? , gender=?, keterangan=? WHERE id=?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssi",$param_image,$param_nama, $param_nim,  $param_tugas,  $param_uts,  $param_uas,$param_gender,$param_keterangan, $param_id);

            // Set parameters\
            $param_image=$image_url;
            $param_nama = $nama;
            $param_nim = $nim;
            $param_tugas =  $tugas;
            $param_uts = $uts;
            $param_uas = $uas;
            $param_gender = $gender;
            $param_keterangan = $keterangan;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: view.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM images WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $image_url= $row["image_url"];
                    $nama= $row["nama"];
                    $nim = $row["nim"];
                    $tugas = $row["tugas"];
                    $uts = $row["uts"];
                    $uas = $row["uas"];
                    $gender = $row["gender"];
                    $keterangan = $row["keterangan"];
                   
                } 
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                            <span class="help-block"><?php echo $nama_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>FILE</label>
                            <input type="file" name="image_url" class="form-control" value="<?php echo $image_url; ?>">
                      
                        </div>
                        <div class="form-group <?php echo (!empty($nim_err)) ? 'has-error' : ''; ?>">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" value="<?php echo $nim; ?>">
                            <span class="help-block"><?php echo $nim_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($tugas_err)) ? 'has-error' : ''; ?>">
                            <label>Tugas</label>
                            <input type="text" name="tugas" class="form-control" value="<?php echo $tugas; ?>">
                            <span class="help-block"><?php echo $tugas_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($uts_err)) ? 'has-error' : ''; ?>">
                            <label>UTS</label>
                            <input type="text" name="uts" class="form-control" value="<?php echo $uts; ?>">
                            <span class="help-block"><?php echo $uts_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($uas_err)) ? 'has-error' : ''; ?>">
                            <label>UAS</label>
                            <input type="text" name="uas" class="form-control" value="<?php echo $uas; ?>">
                            <span class="help-block"><?php echo $uas_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>">
                            <label>Gender* </label>
                            <select name="gender" class="form-control" value="<?php echo $gender; ?>">
                                <option>Pilih</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            <span class="help-block"><?php echo $uas_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($keterangan_err)) ? 'has-error' : ''; ?>">
                            <label>Keterangan*</label>
                            <textarea name="keterangan" class="form-control" cols="30" rows="10"  value="<?php echo $keterangan; ?>"></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="read.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>