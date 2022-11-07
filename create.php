<?php

$id = "";
$name = "";
$websitename = "";
$username = "";
$password = "";
$passwordexpiray= "";
$reccuringfields = "";
$expdate = "";
$websitelink="";

$errormessage = "";
$successmessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$id = $_POST["id"];
$name = $_POST["name"];
$websitename = $_POST["websitename"];
$username = $_POST["username"];
$password = $_POST["password"];
$passwordexpiray= $_POST["passwordexpiray"];
$reccuringfields = $_POST["reccuringfields"];
$expdate = $_POST["expdate"];
$websitelink= $_POST["websitelink"];

do {

    if (empty($id) || empty($name) || empty($websitename) || empty($username) || empty($password) || empty($passwordexpiray)    || empty($reccuringfields)  || empty($expdate)  || empty($websitelink) ) {
        $errorMessage = "All the fields are required";
        break;
    }

    //adding a row

    $id = "";
    $name = "";
    $websitename = "";
    $username = "";
    $password = "";
    $passwordexpiray= "";
    $reccuringfields = "";
    $expdate = "";
    $websitelink="";

    $successMessage = "client added successfuly";

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
	</head>
	<body>
    <div class="container my=5">
        <h2>New Row</h2>

        <?php
        if (!empty($errormessage)) {
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
            <label class="col-sm-3 col-form-label">id</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id ?>">
            </div>

            </div>

            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">website name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="websitename" value="<?php echo $websitename ?>">
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
            <label class="col-sm-3 col-form-label">website link</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="websitelink" value="<?php echo $websitelink ?>">
            </div>

            <?php
        if (!empty($successmessage)) {
            echo "
            
            <div class = 'alert alert-warning alert-dissmissible fade show' role='alert'>
                <strong>$successmessage</strong>
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
