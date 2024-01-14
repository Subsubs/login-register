
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="icon" href="img/Dash1.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASH Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css3/style.css">
  <link rel="stylesheet" type="text/css" href="css3/print.css" media="print">
</head>

<body>
<div class="mytabs">
 <input type="radio" id="tabsilver" name="mytabs">
<label for="tabsilver" id="print-btn">Class Schedule</label>
<div class="tab">
    <table class="table table-bordered print">
<thead>
<tr>
<td><img src="img/BSU LOGO.png" height="100" width="100" /></td>
<td colspan="7">
<p>Reference No.: BatStateU-REC-COL-01</p>
</td>
<td colspan="7">
<p>Effectivity Date: January 3, 2017</p>
</td>
<td colspan="3">
<p>Revision No.: 00</p>
</td>
</tr>
<tr>
<th colspan="18">
<p>CLASS SCHEDULE</p>
</th>
</tr>
<tr>
<td style="width: 117.067px; height: 37px;">
<p>College:</p>
</td>
<td class="ju" colspan="9">
<p>College of Engineering</p>
</td>
<td>
<p>Campus:</p>
</td>
<td class="ju" colspan="7">
<p>BatStateU - Alangilan</p>
</td>
</tr>
<tr>
<td>
<p>Section:</p>
</td>
<td class="ju" colspan="9">
<select class="dropdown" id="user1nameDropdown">
                                            <option id="print-btn" value="" selected>Section</option>
                                            <?php
                                            $options_qry = "SELECT DISTINCT Department_code FROM sections";
                                            $options_res = mysqli_query($conn, $options_qry);
                                            while ($option_data = mysqli_fetch_assoc($options_res)) {
                                                echo '<option value="' . $option_data['Department_code'] . '">' . $option_data['Department_code'] . '</option>';
                                            }
                                            ?>
                                        </select>
</td>
<td>
<p>Semester:</p>
</td>
<td class="ju" colspan="2">
<p>Second</p>
</td>
<td colspan="2">
<p>Academic Year:</p>
</td>
<td class="ju" colspan="3">
<p>2023-2024</p>
</td>
</tr>
<tr>
<td>
<p><strong>Time</strong></p>
</td>
<td>
<p><strong>Monday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Tuesday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Wednesday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Thursday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Friday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Saturday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Sunday</strong></p>
</td>
<td>
<p><strong>Room</strong></p>
</td>
<td>
<p><strong>Course Code</strong></p>
</td>
<td>
<p><strong>Instructor</strong></p>
</td>
<td>
<p><strong>No. Of Students</strong></p>
</td>
</tr>
</thead>
<thead></thead>
<thead></thead>
<thead></thead>
<thead></thead>
<tbody id="classScheduleTableBody">
<tr>
<td rowspan="2">
<p>6:00 - 7:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>7:00 - 8:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>8:00 - 9:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>9:00 - 10:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>10:00 - 11:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>11:00 - 12:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="4">Timeline</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>12:00 - 1:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>1:00 - 2:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="4">
<p><br />Dean, COE<br /><br /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>2:00 - 3:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>3:00 - 4:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td colspan="3" rowspan="10">
<p>VCAA</p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p><br /><br /><br /><br /></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>4:00 - 5:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>5:00 - 6:00</p>
</td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2" ></td>
<td></td>
<td rowspan="2" ></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>6:00 - 7:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">
<p>7:00 - 8:00</p>
</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
</div></div>

                                        </body>

<html>
