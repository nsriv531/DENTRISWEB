<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$doctor = "";
$websitelink = "";
$username = "";
$password = "";
$passwordexpiray= "";
$reccuringfields = "";
$expdate = "";
$websitelinkk="";
$eob="";
$approval="";


$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$id = $_POST["id"];
$doctor = $_POST["doctor"];
$websitelink = $_POST["websitelink"];
$username = $_POST["username"];
$password = $_POST["password"];
$passwordexpiray= $_POST["passwordexpiray"];
$reccuringfields = $_POST["reccuringfields"];
$expdate = $_POST["expdate"];
$websitelinkk = $_POST["websitelinkk"];
$eob = $_POST["eob"];
$approval=$_POST["approval"];

do {

    if (empty($id) || empty($doctor) || empty($websitelink) || empty($username) || empty($password) || empty($passwordexpiray) || empty($reccuringfields)  || empty($expdate)  || empty($websitelinkk) || empty($eob) || empty($approval)) {
        $errormessage = "All the fields are required";
        break;
    }

    //adding a row

    $sql = "INSERT INTO main_table (ins_comp_name, doctor, website_link, username, password, pw_expiray_date, reccuring_fields, exp_date, website_linkk, eob, approval) " . "VALUES ('$id', '$doctor', '$websitelink', '$username', '$password', '$passwordexpiray', '$reccuringfields', '$expdate', '$websitelinkk' , '$eob', '$approval')";
    $result = $connection->query($sql);

    if (!$result) {
        $errormessage = "Invalid query: " . $connection->error;
        break;
    }

    $id = "";
    $doctor = "";
    $websitelink = "";
    $username="";
    $password = "";
    $passwordexpiray= "";
    $reccuringfields = "";
    $expdate = "";
    $websitelinkk="";
    $eob="";
    $approval="";
    $successMessage = "client added successfuly";

    header("location: /dentrisweb/mainindex.php");
    exit;

} while(false);

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Document</title>
		<meta charset="UTF-8">
		<meta http=equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Nik Srivastava">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
    <div class="container my=5">
        <h2>New Row</h2>

        <?php
        if (   !empty($errormessage)    ) {
            echo "
            
            <div class = 'alert alert-warning alert-dissmissible fade show' role='alert'>
                <strong>$errormessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
        
        ?>
        <form method="post">
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Ins Company Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id ?>">
            </div>

            </div>

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">doctor</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="doctor" value="<?php echo $doctor ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">website link</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="websitelink" value="<?php echo $websitelink ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">username</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" value="<?php echo $username ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">password</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="password" value="<?php echo $password ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">password expiry date</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="passwordexpiray" value="<?php echo $passwordexpiray ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">reccuring fields</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="reccuringfields" value="<?php echo $reccuringfields ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">exp date</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="expdate" value="<?php echo $expdate ?>">
            </div>

            </div> 

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">next reset</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="websitelinkk" value="<?php echo $websitelinkk ?>">
            </div>

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Eob</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="eob" value="<?php echo $eob ?>">
            </div>

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Approvals</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="approval" value="<?php echo $approval ?>">
            </div>
            
            <?php
        if (!empty($successMessage)) {
            echo "
            
            <div class = 'alert alert-warning alert-dissmissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
        
        ?>

            <div class="row mb-3">
           
             <div class="offset-sm-3 col-sm-3 d-grid">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
               <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="new 1.php" role="button">Cancel</a> 

            </div> 

        </form>
        </div>          

	</body>
</html>
