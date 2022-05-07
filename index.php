<?php

include('config.php');

if (!isset($_SESSION['email']) && empty($_SESSION['email'])) {
    header('location: ' . $site_Name . '/login.php');
}


include('header.php');


$sql_select = "select * from results";
$select_query = mysqli_query($conn, $sql_select);






?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">All Results</h1>



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Class</th>
                            <th>Roll No</th>
                            <th>Enrollment No</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (mysqli_num_rows($select_query) > 0) {
                            // output data of each row
                            while ($data = mysqli_fetch_assoc($select_query)) { ?>

                        <tr>
                            <td>
                                <img src="<?php echo $site_Name;  ?>/stuimages/<?php echo $data['stu_img'] ?>"
                                    style="height:50px; width:50px; border-radius:50%">
                            </td>
                            <td><?php echo $data['stu_name'] ?></td>
                            <td><?php echo $data['stu_fname'] ?></td>
                            <td><?php echo $data['examination_class'] ?></td>
                            <td><?php echo $data['stu_roll_num'] ?></td>
                            <td><?php echo $data['stu_en_roll_num'] ?></td>
                            <td>
                                <a class="btn btn-info"
                                    href="<?php echo $site_Name;  ?>/edit.php?id=<?php echo $data['id'];  ?>"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-success"
                                    href="<?php echo $site_Name;  ?>/admin-single-student.php?id=<?php echo $data['id'];  ?>"><i
                                        class="fas fa-eye"></i></a>
                                <a class="btn btn-danger"
                                    href="<?php echo $site_Name;  ?>/delete.php?id=<?php echo $data['id'];  ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                        <?php     }
                        } else {
                            echo "0 results";
                        }

                        ?>




                    </tbody>
                </table>
            </div>
        </div>
    </div>












</div>
<!-- /.container-fluid -->
<?php include('footer.php') ?>