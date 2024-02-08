<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lineawesome/lineawesome/css/line-awesome.css">
    <link rel="stylesheet" href="./DataTables/datatables.css">
    <script src="./jquery.js"></script>
    <script src="./DataTables/datatables.js"></script>
    <script src="./sweetalert2/sweetalert2/dist/sweetalert2.all.js"></script>

</head>
<body>
    
</body>
</html>
<?php
    include "server.php";
    if (isset($_POST['btn'])) {
        
    if (isset($_FILES["csvFile"]) && $_FILES["csvFile"]["error"] == UPLOAD_ERR_OK) {
        // Get details of the uploaded file
        $fileTmpPath = $_FILES["csvFile"]["tmp_name"];
        $fileName = $_FILES["csvFile"]["name"];

        // Validate file extension (optional)
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if ($fileExtension != "csv") {
            echo "Invalid file format. Please upload a CSV file.";
            exit();
        }

        $file = fopen($fileTmpPath, 'r');
        while (($row = fgetcsv($file)) !== false) {
            // Process each row as needed
            // print_r($row);
            $sql = "INSERT INTO result1(`SN`,`NAME`, `REG_NUMBER`, `ENGLISH`, `MATHEMATICS`, `BIOLOGY`, `CHEMISTRY`, `BASIC_SCIENCE`, `CIVIC_EDUCATION`, `BASIC_TECHNOLOGY`,`PHYSICS`)VALUES('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[6]."','".$row[7]."','".$row[8]."','".$row[9]."','".$row[10]."')";
            $res = $conn->query($sql);
            if ($res !== true) {
                echo"<script>
                        swal.fire('Error','Uploading Fails...','error')
                    </script>".$conn->error;
            }else{
                echo"<script>
                        swal.fire('Done','Uploading Successfully','success')
                    </script>";
            }
            // break;
        }
        fclose($file);

    } else {
        echo "Error uploading file. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./lineawesome/lineawesome/css/line-awesome.css">
    <style>
      #myTable{
        width: 70%;
      }
      footer{
       
        padding: 10px;
      }
    </style>
</head>
<body class="" style="background-color: #f1f1f1;">
    <div class="container">
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class=" lert alert-light ">
                    
            <h1 class="text-center text-primary">File Upload</h1>
            <label for="csvFile">Upload Your File:</label>
        <div class="row">
                <div class="col-md-8">
                    <input type="file" class="form-control" id="csvFile" name="csvFile" accept=".csv" required>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary " name="btn">Import<i class="la la-upload"></i></button>
                    <a href="./form.php" class="btn btn-success ">Form Add<i class="la la-edit"></i></a>
                    <a href="./delete.php" class="btn btn-danger ">Delete all<i class="la la-trash"></i></a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<hr>
<table id="myTable" class="display table table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>SN</th>
            <th>NAME</th>
            <th>REG REG NUMBER</th>
            <th>ENGLISH</th>
            <th>MATHEMATICS</th>
            <th>BIOLOGY</th>
            <th>CHEMISTRY</th>
            <th>BASIC SCIENCE</th>
            <th>CIVIC EDUCATION</th>
            <th>BASIC TECHNOLOGY</th>
            <th>PHYSICS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM result1";
            $result = $conn->query($sql);
            $result->num_rows>0;
            while($data = $result->fetch_assoc()):;

        ?>
        <tr>
            <td><?=$data['SN']; ?></td>
            <td><?=$data['NAME']; ?></td>
            <td><?=$data['REG_NUMBER']; ?></td>
            <td><?=$data['ENGLISH']; ?></td>
            <td><?=$data['MATHEMATICS']; ?></td>
            <td><?=$data['BIOLOGY']; ?></td>
            <td><?=$data['CHEMISTRY']; ?></td>
            <td><?=$data['BASIC_SCIENCE']; ?></td>
            <td><?=$data['CIVIC_EDUCATION']; ?></td>
            <td><?=$data['BASIC_TECHNOLOGY']; ?></td>
            <td><?=$data['PHYSICS']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
</div>

<footer class="p-3 text-center text-primary alert alert-primary">
    <p>Copy write @MIKK COMPUTERS</p>
</footer>
    <script>
        let myTable = new DataTable("#myTable", {


        });
    </script>
</body>
</html>
