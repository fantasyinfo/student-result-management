<?php
include('config.php');
//echo "<pre>";
if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('location: ' . $site_Name . '/login.php');
}

include('header.php');
$error = "";


if (isset($_POST['submit_stu_result']) && !empty($_POST['stu_roll_num']) && !empty($_POST['stu_en_roll_num'])) {


    if (isset($_FILES['stu_img'])) {
        $rand = rand(111111111, 999999999);
        $errors = array();
        $file_name = $_FILES['stu_img']['name'];
        $file_size = $_FILES['stu_img']['size'];
        $file_tmp = $_FILES['stu_img']['tmp_name'];
        $file_type = $_FILES['stu_img']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['stu_img']['name'])));
        $file_first_name = strtolower(current(explode('.', $_FILES['stu_img']['name'])));






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


    $examination_class = mysqli_real_escape_string($conn, $_POST['examination_class']);
    $stu_name = mysqli_real_escape_string($conn, $_POST['stu_name']);
    $stu_fname = mysqli_real_escape_string($conn, $_POST['stu_fname']);
    $stu_roll_num = mysqli_real_escape_string($conn, $_POST['stu_roll_num']);
    $stu_en_roll_num = mysqli_real_escape_string($conn, $_POST['stu_en_roll_num']);
    $college_center_name = mysqli_real_escape_string($conn, $_POST['college_center_name']);

    // papers
    if (isset($_POST['p1']) && !empty($_POST['p1'])) {
        $paper_1 = mysqli_real_escape_string($conn, $_POST['p1']);
        $paper_1_marks = mysqli_real_escape_string($conn, $_POST['p1_marks']);
    } else {
        $paper_1 = "";
        $paper_1_marks = 0;
    }

    // papers

    // papers
    if (isset($_POST['p2']) && !empty($_POST['p2'])) {
        $paper_2 = mysqli_real_escape_string($conn, $_POST['p2']);
        $paper_2_marks = mysqli_real_escape_string($conn, $_POST['p2_marks']);
    } else {
        $paper_2 = "";
        $paper_2_marks = 0;
    }



    // papers
    if (isset($_POST['p3']) && !empty($_POST['p3'])) {
        $paper_3 = mysqli_real_escape_string($conn, $_POST['p3']);
        $paper_3_marks = mysqli_real_escape_string($conn, $_POST['p3_marks']);
    } else {
        $paper_3 = "";
        $paper_3_marks = 0;
    }

    // papers

    // papers
    if (isset($_POST['p4']) && !empty($_POST['p4'])) {
        $paper_4 = mysqli_real_escape_string($conn, $_POST['p4']);
        $paper_4_marks = mysqli_real_escape_string($conn, $_POST['p4_marks']);
    } else {
        $paper_4 = "";
        $paper_4_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p5']) && !empty($_POST['p5'])) {
        $paper_5 = mysqli_real_escape_string($conn, $_POST['p5']);
        $paper_5_marks = mysqli_real_escape_string($conn, $_POST['p5_marks']);
    } else {
        $paper_5 = "";
        $paper_5_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p6']) && !empty($_POST['p6'])) {
        $paper_6 = mysqli_real_escape_string($conn, $_POST['p6']);
        $paper_6_marks = mysqli_real_escape_string($conn, $_POST['p6_marks']);
    } else {
        $paper_6 = "";
        $paper_6_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p7']) && !empty($_POST['p7'])) {
        $paper_7 = mysqli_real_escape_string($conn, $_POST['p7']);
        $paper_7_marks = mysqli_real_escape_string($conn, $_POST['p7_marks']);
    } else {
        $paper_7 = "";
        $paper_7_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p8']) && !empty($_POST['p8'])) {
        $paper_8 = mysqli_real_escape_string($conn, $_POST['p8']);
        $paper_8_marks = mysqli_real_escape_string($conn, $_POST['p8_marks']);
    } else {
        $paper_8 = "";
        $paper_8_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p9']) && !empty($_POST['p9'])) {
        $paper_9 = mysqli_real_escape_string($conn, $_POST['p9']);
        $paper_9_marks = mysqli_real_escape_string($conn, $_POST['p9_marks']);
    } else {
        $paper_9 = "";
        $paper_9_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p10']) && !empty($_POST['p10'])) {
        $paper_10 = mysqli_real_escape_string($conn, $_POST['p10']);
        $paper_10_marks = mysqli_real_escape_string($conn, $_POST['p10_marks']);
    } else {
        $paper_10 = "";
        $paper_10_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p11']) && !empty($_POST['p11'])) {
        $paper_11 = mysqli_real_escape_string($conn, $_POST['p11']);
        $paper_11_marks = mysqli_real_escape_string($conn, $_POST['p11_marks']);
    } else {
        $paper_11 = "";
        $paper_11_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p12']) && !empty($_POST['p12'])) {
        $paper_12 = mysqli_real_escape_string($conn, $_POST['p12']);
        $paper_12_marks = mysqli_real_escape_string($conn, $_POST['p12_marks']);
    } else {
        $paper_12 = "";
        $paper_12_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p13']) && !empty($_POST['p13'])) {
        $paper_13 = mysqli_real_escape_string($conn, $_POST['p13']);
        $paper_13_marks = mysqli_real_escape_string($conn, $_POST['p13_marks']);
    } else {
        $paper_13 = "";
        $paper_13_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p14']) && !empty($_POST['p14'])) {
        $paper_14 = mysqli_real_escape_string($conn, $_POST['p14']);
        $paper_14_marks = mysqli_real_escape_string($conn, $_POST['p14_marks']);
    } else {
        $paper_14 = "";
        $paper_14_marks = 0;
    }

    // papers
    // papers
    if (isset($_POST['p15']) && !empty($_POST['p15'])) {
        $paper_15 = mysqli_real_escape_string($conn, $_POST['p15']);
        $paper_15_marks = mysqli_real_escape_string($conn, $_POST['p15_marks']);
    } else {
        $paper_15 = "";
        $paper_15_marks = 0;
    }

    // papers


    $t_marks = mysqli_real_escape_string($conn, $_POST['t_marks']);
    $prev_marks = mysqli_real_escape_string($conn, $_POST['prev_marks']);
    $g_t_marks = mysqli_real_escape_string($conn, $_POST['g_t_marks']);
    $result_pass = mysqli_real_escape_string($conn, $_POST['result_pass']);
    $result_division = mysqli_real_escape_string($conn, $_POST['result_divison']);





    $sql_insert = "INSERT INTO results (stu_img, examination_class, stu_name, stu_fname, stu_roll_num, stu_en_roll_num, college_center_name, p1, p1_marks, p2, p2_marks, p3, p3_marks, p4, p4_marks, p5, p5_marks, p6, p6_marks, p7, p7_marks, p8, p8_marks, p9, p9_marks, p10, p10_marks, p11, p11_marks, p12, p12_marks, p13, p13_marks, p14, p14_marks, p15, p15_marks, t_marks, prev_marks, g_t_marks, result_pass, result_divison, submit_stu_result, status) 
VALUES ('$new_file_name','$examination_class','$stu_name','$stu_fname','$stu_roll_num','$stu_en_roll_num','$college_center_name','$paper_1',$paper_1_marks,'$paper_2',$paper_2_marks,'$paper_3',$paper_3_marks,'$paper_4',$paper_4_marks,'$paper_5',$paper_5_marks,'$paper_6',$paper_6_marks,'$paper_7',$paper_7_marks,'$paper_8',$paper_8_marks,'$paper_9',$paper_9_marks,'$paper_10',$paper_10_marks,'$paper_11',$paper_11_marks,'$paper_12',$paper_12_marks,'$paper_13',$paper_13_marks,'$paper_14',$paper_14_marks,'$paper_15',$paper_15_marks,'$t_marks','$prev_marks','$g_t_marks','$result_pass','$result_division','YES','1')";



    $results = mysqli_query($conn, $sql_insert);
    if ($results) {
?>
<div class="alert alert-success" role="alert">
    Result is Inserted Successfully;
</div>
<?php  } else { ?>
<div class="alert alert-danger" role="alert">
    Something is Wrong. Please Check, Result is Not Inserted;
</div>
<?php }
}

?>







<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add New Result</h1>




    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleFormControlFile1">Student Image</label>
                    <input type="file" name="stu_img" class="form-control-file" onchange="readURL(this);">
                </div>
            </div>


            <div class="col-md-6">
                <img id="blah" src="#" alt="your image" style="height:100px; width:100px;">
            </div>


        </div>
        <div class="form-group">
            <label>Examination /Class Name</label>
            <input type="text" class="form-control" name="examination_class" placeholder="B.A. English (JUNE 2021)">
            <small class="form-text text-muted">Also Add Month and Year in a Small / Round () Brackets</small>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="stu_name" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" class="form-control" name="stu_fname" placeholder="Mr. Robin Doe">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Student Roll Number</label>
                    <input type="text" class="form-control" name="stu_roll_num" placeholder="10025142421">
                </div>
                <div class="form-group">
                    <label>Student Enrollment Number</label>
                    <input type="text" class="form-control" name="stu_en_roll_num" placeholder="M1021956">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>College / Center Name</label>
            <input type="text" class="form-control" name="college_center_name" placeholder="K.D. Inter College, Delhi">
        </div>
        <hr>




        <div class="row">
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper I</label>
                    <input type="text" class="form-control" name="p1" placeholder="Paper I">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper I Marks</label>
                    <input type="number" class="form-control" name="p1_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper II</label>
                    <input type="text" class="form-control" name="p2" placeholder="Paper II">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper II Marks</label>
                    <input type="number" class="form-control" name="p2_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper III</label>
                    <input type="text" class="form-control" name="p3" placeholder="Paper III">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper III Marks</label>
                    <input type="number" class="form-control" name="p3_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IV</label>
                    <input type="text" class="form-control" name="p4" placeholder="Paper IV">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IV Marks</label>
                    <input type="number" class="form-control" name="p4_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper V</label>
                    <input type="text" class="form-control" name="p5" placeholder="Paper V">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper V Marks</label>
                    <input type="number" class="form-control" name="p5_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VI</label>
                    <input type="text" class="form-control" name="p6" placeholder="Paper VI">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VI Marks</label>
                    <input type="number" class="form-control" name="p6_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VII</label>
                    <input type="text" class="form-control" name="p7" placeholder="Paper VII">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VII Marks</label>
                    <input type="number" class="form-control" name="p7_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VIII</label>
                    <input type="text" class="form-control" name="p8" placeholder="Paper VIII">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VIII Marks</label>
                    <input type="number" class="form-control" name="p8_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IX</label>
                    <input type="text" class="form-control" name="p9" placeholder="Paper IX">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IX Marks</label>
                    <input type="number" class="form-control" name="p9_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper X</label>
                    <input type="text" class="form-control" name="p10" placeholder="Paper X">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper X Marks</label>
                    <input type="number" class="form-control" name="p10_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XI</label>
                    <input type="text" class="form-control" name="p11" placeholder="Paper XI">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XI Marks</label>
                    <input type="number" class="form-control" name="p11_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XII</label>
                    <input type="text" class="form-control" name="p12" placeholder="Paper XII">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XII Marks</label>
                    <input type="number" class="form-control" name="p12_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIII</label>
                    <input type="text" class="form-control" name="p13" placeholder="Paper XIII">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIII Marks</label>
                    <input type="number" class="form-control" name="p13_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIV</label>
                    <input type="text" class="form-control" name="p14" placeholder="Paper XIV">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIV Marks</label>
                    <input type="number" class="form-control" name="p14_marks">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XV</label>
                    <input type="text" class="form-control" name="p15" placeholder="Paper XV">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XV Marks</label>
                    <input type="number" class="form-control" name="p15_marks">
                </div>
            </div>
            <!-- /paper line -->
        </div>

        <hr>
        <div class="form-group">
            <label>Total Marks</label>
            <input type="text" class="form-control" name="t_marks" placeholder="335/500">
        </div>
        <hr>
        <div class="form-group">
            <label>Previous Marks</label>
            <input type="text" class="form-control" name="prev_marks" placeholder="1335/1500">
        </div>
        <hr>
        <div class="form-group">
            <label>Grand Total Marks</label>
            <input type="text" class="form-control" name="g_t_marks" placeholder="1800/2400">
        </div>
        <hr>
        <div class="form-group">
            <label>Result</label>
            <input type="text" class="form-control" name="result_pass" placeholder="PASSED / FAILED">
        </div>
        <hr>
        <div class="form-group">
            <label>Division</label>
            <input type="text" class="form-control" name="result_divison" placeholder="FIRST / SECOND / THIRD">
        </div>

        <button type="submit" name="submit_stu_result" class="btn btn-primary btn-block">Submit</button>
    </form>




















</div>




<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<!-- /.container-fluid -->
<?php include('footer.php') ?>