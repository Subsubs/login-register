

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
<div class="mytabs">
    <input type="radio" id="tabfree" name="mytabs" checked="checked">
    <label for="tabfree" id="print-btn">Faculty Schedule</label>
    <div class="tab">
      <table class="table table-bordered print">
      
      <thead>
          <tr>
            <td colspan="1"> <img src="img/BSU LOGO.png" height="100" width="100"></td>
            <td colspan="7"> Reference No.: BatStateU-REC-COL-01</td>
            <td colspan="7"> Effectivity Date: January 3, 2017</td>
            <td colspan="4"> Revision No.: 00</td>
          </tr>
        </thead>
        <thead>
          <tr>
            <th colspan="18"> FACULTY SCHEDULE</th>
            
          </tr>
        </thead>
        <thead>
          <tr>
            <td colspan="1"> College:</td>
            <td class= "ju" colspan="9"> College of Engineering</td>
            <td colspan="1"> Campus:</td>
            <td class= "ju" colspan="7"> BatStateU - Alangilan</td>
          </tr>
        </thead>
        <thead>
          <tr>
            <td colspan="1"> Name of Faculty:</td>
            <td class= "ju" colspan="9"> <select  class="dropdown" id="usernameDropdown">
                                          <option id="print-btn" value="" selected>Instructor</option>
                                          <?php
                                          $options_qry = "SELECT DISTINCT NameofFaculty FROM faculty";
                                          $options_res = mysqli_query($conn, $options_qry);
                                          while ($option_data = mysqli_fetch_assoc($options_res)) {
                                              echo '<option value="' . $option_data['NameofFaculty'] . '">' . $option_data['NameofFaculty'] . '</option>';
                                          }
                                          ?>
                                      </select></td>
            <td colspan="1"> Semester:</td>
            <td class= "ju" colspan="2"> Second</td>
            <td colspan="2"> Academic Year:</td>
            <td class= "ju" colspan="3"> 2023-2024</td>
          </tr>
        </thead>
        <thead>
<tr>
<td><strong>Time</strong></td>
<td><strong>Monday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Tuesday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Wednesday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Thursday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Friday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Saturday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Sunday</strong></td>
<td><strong>Room</strong></td>
<td><strong>Course Code</strong></td>
<td><strong>Section</strong></td>
<td><strong>No. Of Students</strong></td>
</tr>
</thead>

<tbody id="classScheduleTableBody">

<tr>
<td rowspan="2">6:00 - 7:00</td>
<td>  <input id="edit_monday_67_1st_rw" class="form-control" /></td>
<td rowspan="2"> <input id="edit_room_1" class="form-control" /></td>
<td>  <input id="edit_tuesday_67_1st_rw" class="form-control" /></td>
<td rowspan="2">  <input id="edit_room_2" class="form-control" /></td>
<td>  <input id="edit_wednesday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_3" class="form-control" /> </td>
<td>  <input id="edit_thursday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_4" class="form-control" /> </td>
<td>  <input id="edit_friday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_5" class="form-control" /> </td>
<td>  <input id="edit_saturday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_6" class="form-control" /> </td>
<td>  <input id="edit_sunday_67_1st_rw" class="form-control" /> </td>
<td rowspan="2">  <input id="edit_room_7" class="form-control" /> </td>
<td></td>
<td></td>
<td> <input id="edit_last_67_1strw" class="form-control" /></td>
</tr>
<tr>
<td> <input id="edit_monday_67_2nd_rw" class="form-control" /> </td>
<td > <input id="edit_tuesday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_wednesday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_thursday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_friday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_saturday_67_2nd_rw" class="form-control" /></td>
<td> <input id="edit_sunday_67_2nd_rw" class="form-control" /></td>
<td></td>
<td></td>
<td> <input id="edit_last_67_2ndrw" class="form-control" /></td>
</tr>
<tr>
<td rowspan="2">7:00 - 8:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">8:00 - 9:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">9:00 - 10:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">10:00 - 11:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">11:00 - 12:00</td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td rowspan="2">12:00 - 1:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">1:00 - 2:00</td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td colspan="3" rowspan="6">
<p> <br /><br /><br /><strong>Timeline</strong><br /> Timeline</p>
</td>
</tr>
<tr>
<td rowspan="2">2:00 - 3:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">3:00 - 4:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">4:00 - 5:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td colspan="3" rowspan="6">
<p> <br /><br /><br /><strong>PROF. PAULINA M. MACATANGAY</strong><br />Dean, COE</p>
</td>
</tr>
<tr>
<td rowspan="2">5:00 - 6:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">6:00 - 7:00</td>
<td></td>
<td rowspan="2"></td>
<td></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
</tr>
<tr>
<td rowspan="2">7:00 - 8:00</td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
<td ></td>
<td rowspan="2"></td>
</tr>
<tr >
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td ></td>
<td colspan="3" rowspan="8">
<p><br /><br /><br /><br /><br /><br /><strong>PROF. PAULINA M. MACATANGAY</strong><br />Vice Chancellor for Academic Affairs</p>
</td>
</tr>
<tr>
<td >Official time</td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
<td colspan="2" ></td>
</tr>
<tr>
<td >No. of Teaching Hours</td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
</tr>
<tr >
<td >Overtime Within</td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
</tr>
<tr>
<td>Overtime Outside</td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
<td colspan="2"></td>
</tr>
<tr>
<td >DESIGNATION:&nbsp;</td>
<td colspan="14"></td>
</tr>
<tr>
<td colspan="2">NO. OF PREPARATIONS:</td>
<td colspan="3"></td>
<td colspan="2">REGULAR LOAD:</td>
<td colspan="3"></td>
<td colspan="2">ACADEMIC RANK:</td>
<td colspan="3"></td>
</tr>
<tr>
<td colspan="2">NO. OF HOURS PER WEEK</td>
<td colspan="3"></td>
<td colspan="2">OVERLOAD:</td>
<td colspan="3"></td>
<td colspan="2">CONSULTATION HOURS:</td>
<td colspan="3"></td>
</tr>
</tbody>
      </table>
      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
        <button onclick= "onSave()" class="btn btn-primary" >Save</button>
      </div>
    </div>