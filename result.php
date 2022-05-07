<?php
include('config.php');

if (!isset($_SESSION['ROLL_NO']) && !isset($_SESSION['ENR_NO'])) {
    echo "<h1 style='text-align:center'>No Result Found</h1>";
}

$roll_no = $_SESSION['ROLL_NO'];
$en_roll_no = $_SESSION['ENR_NO'];

//unset($_SESSION['ROLL_NO']);
//unset($_SESSION['ENR_NO']);

$query = mysqli_query($conn, "select * from settings");
$site_data = mysqli_fetch_assoc($query);

$logo_img =  $site_Name . "/stuimages/" . $site_data['logo_img'];



$sql_s_select = "select * from results where stu_en_roll_num = '$en_roll_no' and stu_roll_num = '$roll_no'";

$select_s_query = mysqli_query($conn, $sql_s_select);
$data =  mysqli_fetch_assoc($select_s_query);

//print_r($data);
?>
<html>
<script id="allow-copy_script">
(function agent() {
    let unlock = false
    document.addEventListener('allow_copy', (event) => {
        unlock = event.detail.unlock
    })

    const copyEvents = [
        'copy',
        'cut',
        'contextmenu',
        'selectstart',
        'mousedown',
        'mouseup',
        'mousemove',
        'keydown',
        'keypress',
        'keyup',
    ]
    const rejectOtherHandlers = (e) => {
        if (unlock) {
            e.stopPropagation()
            if (e.stopImmediatePropagation) e.stopImmediatePropagation()
        }
    }
    copyEvents.forEach((evt) => {
        document.documentElement.addEventListener(evt, rejectOtherHandlers, {
            capture: true,
        })
    })
})()
</script>

<head>
    <title><?= $site_data['college_name']; ?></title>
</head>

<body topmargin="20px" leftmargin="0" style="background-image:url('img/logo1.gif');"
    data-new-gr-c-s-check-loaded="14.1043.0" data-gr-ext-installed="">
    <style>
    .td1 {
        border-bottom: 1px solid #D8D8D8
    }
    </style>



    <div>
        <table border="0" align="center" cellpadding="0" cellspacing="0" class="k-tbl">
            <tbody>
                <tr>
                    <td valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="15%" rowspan="2" align="right" class="logo">
                                        <img id="Image1" src="<?php echo $logo_img; ?>"
                                            style="width:100px;border-width:0px;">
                                    </td>
                                    <td width="100%" class="site-heading" align="center">
                                        <h4 style="text-align:center; font-family: verdana, sans-serif;">
                                            <?= $site_data['college_name']; ?> </h4>


                                    </td>
                                </tr>
                                <tr>
                                    <td class="site-sub-heading" align="center">
                                        * Statement of Marks *
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="right" class="style9" style="padding-right: 10px;position:relative">
                        &nbsp;
                        <img src="<?php echo $site_Name;  ?>/stuimages/<?php echo $data['stu_img'] ?>" width="75px"
                            style="margin-left: -119px;position: absolute;margin-top: -61px;border: 4px solid #000;">
                    </td>
                </tr>

                <tr>

                </tr>
                <tr>
                    <td width="100%">

                        <p align="center"><b>
                                <font face="Arial Narrow" color="#00407b">
                                    Examination</font>
                                <font face="Arial Narrow" color="#00407b" size="4">
                                    : </font>
                                <font size="2"><?php echo $data['examination_class'] ?></font>
                            </b><br></p>
                    </td>
                </tr>
                <tr>
                    <td width="100%">
                        <p align="center"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <table style="FONT-SIZE: 11px; FONT-FAMILY: verdana;" cellspacing="0" cellpadding="2"
                                border="0" width="656" height="290">

                                <tbody>
                                    <tr>
                                        <td width="245">&nbsp;</td>
                                        <td width="403">&nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td class="td1" width="241">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color="#00407b" size="2">Name :</font>
                                                </b></p>
                                        </td>
                                        <td class="td1" width="202"><b><?php echo $data['stu_name'] ?> </b></td>
                                        <td class="td1" width="100"><b>
                                                <font face="Arial Narrow" color="#00407b" size="2">
                                                    Roll No:</font>
                                                <font face="Arial Narrow" size="3" color="#00407b">&nbsp; </font>
                                            </b></td>
                                        <td class="td1" width="123"><b><?php echo $data['stu_roll_num'] ?></b></td>
                                    </tr>



                                    <tr>
                                        <td class="td1" width="241">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color="#00407b" size="2">Father's Name :
                                                    </font>
                                                    <font face="Arial Narrow" color="#660000" size="3">
                                                    </font>
                                                </b></p>
                                        </td>
                                        <td class="td1" width="202"><b><?php echo $data['stu_fname'] ?>R</b></td>
                                        <td class="td1" width="100"><b>
                                                <font face="Arial Narrow" color="#00407b" size="2">
                                                    Enroll No:</font>
                                                <font face="Arial Narrow" size="3" color="#00407b">&nbsp; </font>
                                            </b></td>
                                        <td class="td1" width="123"><b><?php echo $data['stu_en_roll_num'] ?></b></td>
                                    </tr>



                                    <tr>
                                        <td class="td1" width="241">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color="#00407b" size="2">College / Centre:
                                                    </font>
                                                    <font face="Arial Narrow" color="#00407b" size="3">
                                                    </font>
                                                </b></p>
                                        </td>

                                        <td class="td1" width="407" colspan="3">
                                            <b><?php echo $data['college_center_name'] ?></b>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="td1" width="241" height="14">
                                            <p align="left"></p>
                                        </td>
                                        <td class="td1" width="407" colspan="3" height="14"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="td1" width="652" style="border-color: #008000"
                                            height="14"></td>
                                    </tr>

                                    <tr style="FONT-WEIGHT: bold">

                                        <td class="td1" width="163" bordercolorlight="#00407b" bordercolordark="#00407b"
                                            style="border-bottom-color: #00407b" height="17" colspan="3">
                                            <p align="left">

                                                <b>
                                                    <font face="Arial Narrow" color="#00407b" size="2">Papers </font>
                                                </b>
                                            </p>
                                        </td>

                                        <td class="td1" width="163" bordercolorlight="#00407b" bordercolordark="#00407b"
                                            style="border-bottom-color: #00407b" height="17">
                                            <p align="left">
                                                <b>
                                                    <font face="Arial Narrow" color="#00407b" size="2">MARKS OBTAINED
                                                    </font>
                                                </b>
                                            </p>
                                        </td>
                                    </tr>

                                    <!-- papers -->

                                    <?php
                                    if ($data['p1'] != "" && $data['p1_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p1'] . "</td>
                                    <td class='td1'>" . $data['p1_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p2'] != "" && $data['p2_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p2'] . "</td>
                                    <td class='td1'>" . $data['p2_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p3'] != "" && $data['p3_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p3'] . "</td>
                                    <td class='td1'>" . $data['p3_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p4'] != "" && $data['p4_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p4'] . "</td>
                                    <td class='td1'>" . $data['p4_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p5'] != "" && $data['p5_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p5'] . "</td>
                                    <td class='td1'>" . $data['p5_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p6'] != "" && $data['p6_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p6'] . "</td>
                                    <td class='td1'>" . $data['p6_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p7'] != "" && $data['p7_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p7'] . "</td>
                                    <td class='td1'>" . $data['p7_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p8'] != "" && $data['p8_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p8'] . "</td>
                                    <td class='td1'>" . $data['p8_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p9'] != "" && $data['p9_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p9'] . "</td>
                                    <td class='td1'>" . $data['p9_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p10'] != "" && $data['p10_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p10'] . "</td>
                                    <td class='td1'>" . $data['p10_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p11'] != "" && $data['p11_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p11'] . "</td>
                                    <td class='td1'>" . $data['p11_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p12'] != "" && $data['p12_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p12'] . "</td>
                                    <td class='td1'>" . $data['p12_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p13'] != "" && $data['p13_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p13'] . "</td>
                                    <td class='td1'>" . $data['p13_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p14'] != "" && $data['p14_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p14'] . "</td>
                                    <td class='td1'>" . $data['p14_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->
                                    <!-- papers -->

                                    <?php
                                    if ($data['p15'] != "" && $data['p15_marks'] != 0) {

                                        echo "  <tr>
                                    <td class='d1' colspan='3'>" .  $data['p15'] . "</td>
                                    <td class='td1'>" . $data['p15_marks'] . " / 100</td>
                                </tr>";
                                    }

                                    ?>


                                    <!-- /papers -->














                                    <tr>
                                        <td class="td1" colspan="3" width="241" height="17">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color="#005300" size="2">Result :</font>
                                                    <?php echo $data['result_pass'] ?>
                                                </b></p>
                                        </td>
                                        <td class="td1" colspan="7" height="17">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color="#005300" size="2"> TOTAL:</font>
                                                    <?php echo $data['t_marks'] ?>
                                                </b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td1" colspan="3" width="509" height="19">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color="#005300" size="2"> Division :
                                                    </font><?php echo $data['result_divison'] ?>
                                                </b></p>
                                        </td>
                                        <td class="td1" height="19" width="139">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color=" #005300" size="2">Prev. Marks :
                                                    </font> <?php echo $data['prev_marks'] ?>
                                                </b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="td1" colspan="3" width="241" height="17">
                                            <p align="left"></p>
                                        </td>
                                        <td class="td1" colspan="7" height="17">
                                            <p align="left"><b>
                                                    <font face="Arial Narrow" color=" #005300" size="2">Grand Total :
                                                    </font> <?php echo $data['g_t_marks'] ?>
                                                </b></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td align="center">
                        <?= $site_data['footer_info']; ?>
                    </td>
                </tr>
            </tbody>
        </table>





    </div>
    <style>
    .tb_button {
        padding: 1px;
        cursor: pointer;
        border-right: 1px solid #8b8b8b;
        border-left: 1px solid #FFF;
        border-bottom: 1px solid #fff;
    }

    .tb_button.hover {
        borer: 2px outset #def;
        background-color: #f8f8f8 !important;
    }

    .ws_toolbar {
        z-index: 100000
    }

    .ws_toolbar .ws_tb_btn {
        cursor: pointer;
        border: 1px solid #555;
        padding: 3px
    }

    .tb_highlight {
        background-color: yellow
    }

    .tb_hide {
        visibility: hidden
    }

    .ws_toolbar img {
        padding: 2px;
        margin: 0px
    }
    </style>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>