<?php
include('config.php');

include('header.php');

if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('location: ' . $site_Name . '/login.php');
}


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
}


$sql_s_select = "select * from results where id = '$id'";

$select_s_query = mysqli_query($conn, $sql_s_select);
$data =  mysqli_fetch_assoc($select_s_query);

//print_r($data);

$error = "";


if (isset($_POST['update_stu_result']) && !empty($_POST['stu_roll_num']) && !empty($_POST['stu_en_roll_num'])) {


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

    $stu_id = mysqli_real_escape_string($conn, $_POST['stu_id']);
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


    $update_sql = "UPDATE results SET id=$id, stu_img ='$new_file_name',examination_class='$examination_class',stu_name='$stu_name',stu_fname='$stu_fname',stu_roll_num='$stu_roll_num',stu_en_roll_num='$stu_en_roll_num',college_center_name='$college_center_name',p1='$paper_1',p1_marks='$paper_1_marks',p2='$paper_2',p2_marks='$paper_2_marks',p3='$paper_3',p3_marks='$paper_3_marks',p4='$paper_4',p4_marks='$paper_4_marks',p5='$paper_5',p5_marks='$paper_5_marks',p6='$paper_6',p6_marks='$paper_6_marks',p7='$paper_7',p7_marks='$paper_7_marks',p8='$paper_8',p8_marks='$paper_8_marks',p9='$paper_9',p9_marks='$paper_9_marks',p10='$paper_10',p10_marks='$paper_10_marks',p11='$paper_11',p11_marks='$paper_11_marks',p12='$paper_12',p12_marks='$paper_12_marks',p13='$paper_13',p13_marks='$paper_13_marks',p14='$paper_14',p14_marks='$paper_14_marks',p15='$paper_15',p15_marks='$paper_15_marks',t_marks='$t_marks',prev_marks='$prev_marks',g_t_marks='$g_t_marks',result_pass='$result_pass',result_divison='$result_division',submit_stu_result='YES',status='1' WHERE id = '$id'";

    $results = mysqli_query($conn, $update_sql);
    if ($results) {
?>
<div class="alert alert-success" role="alert">
    Result is Updated Successfully;
</div>
<?php  } else { ?>
<div class="alert alert-danger" role="alert">
    Something is Wrong. Please Check, Result is Not Updated;
</div>
<?php }
}

?>







<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Result</h1>




    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">

            <input type="hidden" name="stu_id" value="<?php echo $data['id']; ?>">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleFormControlFile1">Student Image</label>
                    <input type="file" name="stu_img" class="form-control-file" onchange="readURL(this);">
                </div>
            </div>


            <div class="col-md-6">
                <img id="blah" src="<?php echo $site_Name;  ?>/stuimages/<?php echo $data['stu_img'] ?>"
                    alt="your image" style="height:100px; width:100px;">
            </div>


        </div>
        <div class="form-group">
            <label>Examination /Class Name</label>
            <input type="text" class="form-control" name="examination_class"
                value="<?php echo $data['examination_class'] ?>">
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" class="form-control" name="stu_name" value="<?php echo $data['stu_name'] ?>">
                </div>
                <div class="form-group">
                    <label>Father's Name</label>
                    <input type="text" class="form-control" name="stu_fname" value="<?php echo $data['stu_fname'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Student Roll Number</label>
                    <input type="text" class="form-control" name="stu_roll_num"
                        value="<?php echo $data['stu_roll_num'] ?>">
                </div>
                <div class="form-group">
                    <label>Student Enrollment Number</label>
                    <input type="text" class="form-control" name="stu_en_roll_num"
                        value="<?php echo $data['stu_en_roll_num'] ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>College / Center Name</label>
            <input type="text" class="form-control" name="college_center_name"
                value="<?php echo $data['college_center_name'] ?>">
        </div>
        <hr>




        <div class="row">
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper I</label>
                    <input type="text" class="form-control" name="p1" value="<?php echo $data['p1'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper I Marks</label>
                    <input type="number" class="form-control" name="p1_marks" value="<?php echo $data['p1_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper II</label>
                    <input type="text" class="form-control" name="p2" value="<?php echo $data['p2'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper II Marks</label>
                    <input type="number" class="form-control" name="p2_marks" value="<?php echo $data['p2_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper III</label>
                    <input type="text" class="form-control" name="p3" value="<?php echo $data['p3'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper III Marks</label>
                    <input type="number" class="form-control" name="p3_marks" value="<?php echo $data['p3_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IV</label>
                    <input type="text" class="form-control" name="p4" value="<?php echo $data['p4'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IV Marks</label>
                    <input type="number" class="form-control" name="p4_marks" value="<?php echo $data['p4_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper V</label>
                    <input type="text" class="form-control" name="p5" value="<?php echo $data['p5'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper V Marks</label>
                    <input type="number" class="form-control" name="p5_marks" value="<?php echo $data['p5_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VI</label>
                    <input type="text" class="form-control" name="p6" value="<?php echo $data['p6'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VI Marks</label>
                    <input type="number" class="form-control" name="p6_marks" value="<?php echo $data['p6_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VII</label>
                    <input type="text" class="form-control" name="p7" value="<?php echo $data['p7'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VII Marks</label>
                    <input type="number" class="form-control" name="p7_marks" value="<?php echo $data['p7_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VIII</label>
                    <input type="text" class="form-control" name="p8" value="<?php echo $data['p8'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper VIII Marks</label>
                    <input type="number" class="form-control" name="p8_marks" value="<?php echo $data['p8_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IX</label>
                    <input type="text" class="form-control" name="p9" value="<?php echo $data['p9'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper IX Marks</label>
                    <input type="number" class="form-control" name="p9_marks" value="<?php echo $data['p9_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper X</label>
                    <input type="text" class="form-control" name="p10" value="<?php echo $data['p10'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper X Marks</label>
                    <input type="number" class="form-control" name="p10_marks" value="<?php echo $data['p10_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XI</label>
                    <input type="text" class="form-control" name="p11" value="<?php echo $data['p11'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XI Marks</label>
                    <input type="number" class="form-control" name="p11_marks" value="<?php echo $data['p11_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XII</label>
                    <input type="text" class="form-control" name="p12" value="<?php echo $data['p12'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XII Marks</label>
                    <input type="number" class="form-control" name="p12_marks" value="<?php echo $data['p12_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIII</label>
                    <input type="text" class="form-control" name="p13" value="<?php echo $data['p13'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIII Marks</label>
                    <input type="number" class="form-control" name="p13_marks" value="<?php echo $data['p13_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIV</label>
                    <input type="text" class="form-control" name="p14" value="<?php echo $data['p14'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XIV Marks</label>
                    <input type="number" class="form-control" name="p14_marks" value="<?php echo $data['p14_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
            <!-- paper line -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XV</label>
                    <input type="text" class="form-control" name="p15" value="<?php echo $data['p15'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Paper XV Marks</label>
                    <input type="number" class="form-control" name="p15_marks" value="<?php echo $data['p15_marks'] ?>">
                </div>
            </div>
            <!-- /paper line -->
        </div>

        <hr>
        <div class="form-group">
            <label>Total Marks</label>
            <input type="text" class="form-control" name="t_marks" value="<?php echo $data['t_marks'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label>Previous Marks</label>
            <input type="text" class="form-control" name="prev_marks" value="<?php echo $data['prev_marks'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label>Grand Total Marks</label>
            <input type="text" class="form-control" name="g_t_marks" value="<?php echo $data['g_t_marks'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label>Result</label>
            <input type="text" class="form-control" name="result_pass" value="<?php echo $data['result_pass'] ?>">
        </div>
        <hr>
        <div class="form-group">
            <label>Division</label>
            <input type="text" class="form-control" name="result_divison" value="<?php echo $data['result_divison'] ?>">
        </div>

        <button type="submit" name="update_stu_result" class="btn btn-primary btn-block">Update Result</button>
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