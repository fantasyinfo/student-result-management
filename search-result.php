<?php
include('config.php');
$error = "";
if (isset($_POST['check_result'])) {
    $stu_en_roll_num = mysqli_real_escape_string($conn, $_POST['stu_en_roll_num']);
    $stu_roll_num = mysqli_real_escape_string($conn, $_POST['stu_roll_num']);

    $select_s_sql = "select * from results where stu_en_roll_num = '$stu_en_roll_num' and stu_roll_num = '$stu_roll_num'";

    $result_s_query = mysqli_query($conn, $select_s_sql);

    if (mysqli_num_rows($result_s_query) > 0) {
        $data =  mysqli_fetch_assoc($result_s_query);
        $_SESSION['ROLL_NO'] = $data['stu_roll_num'];
        $_SESSION['ENR_NO'] = $data['stu_en_roll_num'];
        header('location: ' . $site_Name . '/result.php');
    } else {
        $error = "Please Enter Correct Details. Roll Number and Enrollment Number Not Found";
    }
}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <title>Hello, world!</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center container">
        <div class="card py-5 px-3">
            <button class="login_submit1 btn btn-light btn-outline-danger" id="login_submit1">Result</button><br>
            <div class="st_hide" style="display:none">
                <form action="" id="LoginfHomeForm" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label>Student Enrollment No</label><br>
                        <input type="text" name="stu_en_roll_num" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Student Roll No</label><br>
                        <input type="text" name="stu_roll_num" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-block form-control mt-3" name="check_result"
                            id="login" value="View Result">
                    </div>

                </form>
            </div>
            <div class="text-danger">
                <p>
                    <?= $error; ?>
                </p>
            </div>
        </div>
    </div>







    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <script>
    $("#login_submit1").click(function() {
        $(".st_hide").toggle(2000);
    });
    </script>


</body>

</html>