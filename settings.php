<?php
include('config.php');
//echo "<pre>";
if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('location: ' . $site_Name . '/login.php');
}

include('header.php');
$error = "";


$query = mysqli_query($conn, "select * from settings");
$site_data = mysqli_fetch_assoc($query);
$logo_img =  $site_Name . "/stuimages/" . $site_data['logo_img'];


if (isset($_POST['submit_settings'])) {



    if (isset($_FILES['logo_img'])) {
        $rand = rand(111111111, 999999999);
        $errors = array();
        $file_name = $_FILES['logo_img']['name'];
        $file_size = $_FILES['logo_img']['size'];
        $file_tmp = $_FILES['logo_img']['tmp_name'];
        $file_type = $_FILES['logo_img']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['logo_img']['name'])));
        $file_first_name = strtolower(current(explode('.', $_FILES['logo_img']['name'])));
        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            $new_file_name = $rand . $file_first_name . "." . $file_ext;
            move_uploaded_file($file_tmp, "stuimages/" . $new_file_name);
        } else {
            print_r($errors);
        }
    }












    $college_name = mysqli_real_escape_string($conn, $_POST['college_name']);
    $footer_info = mysqli_real_escape_string($conn, $_POST['footer_info']);



    echo  $sql_update = "UPDATE settings SET id=1,logo_img = '$new_file_name', college_name = '$college_name', footer_info = '$footer_info' WHERE id='1'";


    $results = mysqli_query($conn, $sql_update);
    if ($results) {
?><div class="alert alert-success" role="alert">
    Setting Saved;
</div>
<?php  } else { ?>
<div class="alert alert-danger" role="alert">
    Something is Wrong. Please Check;
</div>
<?php }
}

?>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Software Settings</h1>




    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleFormControlFile1">Logo</label>
                    <input type="file" name="logo_img" class="form-control-file" onchange="readURL(this);">
                </div>
            </div>


            <div class="col-md-6">
                <img id="blah" src="<?php echo $logo_img; ?>" alt="Logo" style="height:100px; width:100px;">
            </div>


        </div>
        <div class="form-group">
            <label>College / University Name</label>
            <input type="text" class="form-control" name="college_name" value="<?= $site_data['college_name'] ?>">

        </div>
        <div class="form-group">
            <label>Footer Info</label>
            <input type="text" class="form-control" name="footer_info" value="<?= $site_data['footer_info'] ?>">

        </div>


        <button type="submit" name="submit_settings" class="btn btn-primary btn-block">Update</button>
    </form>




















</div>

<?php include('footer.php') ?>