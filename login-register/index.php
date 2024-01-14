<?php
session_start();

// Check if the user is not logged in
if (!isset($_COOKIE["any_user"]) || !isset($_COOKIE["any_user"])) {
  header("Location: login.php"); // Redirect to the login page
  exit();
}

// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "login_register";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// // Button Action Handler (executed only when triggered by AJAX request)
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   if (isset($_POST["create_table"]) && $_POST["create_table"] === "true") {
//     // Create the new table
//     $sql = "CREATE TABLE sched_updated12 LIKE sched";
//     if ($conn->query($sql) === TRUE) {
//       echo "Table created successfully";

//       // Insert data into the new table (replace "filteredvalue" with your actual filter logic)
//       $sql = "INSERT INTO sched_updated12 SELECT * FROM sched WHERE faculty_id = $selectedFacultyId";
//       if ($conn->query($sql) === TRUE) {
//         echo "Data inserted successfully";
//       } else {
//         echo "Error inserting data: " . $conn->error;
//       }
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
//   }
// }




$conn->close();

?>



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
    <?php include("components/faculty_schedule.php"); ?>

    

    <input type="radio" id="tabgold" name="mytabs">
    <label for="tabgold" id="print-btn"> Room Utilization</label>
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
              <p>ROOM UTILIZATION</p>
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
              <p>Room:</p>
            </td>
            <td class="ju" colspan="9">
              <select class="dropdown" id="user1nameDropdown">
                <option id="print-btn" value="" selected>Room</option>
                <?php
                $options_qry = "SELECT DISTINCT room_number FROM rooms";
                $options_res = mysqli_query($conn, $options_qry);
                while ($option_data = mysqli_fetch_assoc($options_res)) {
                  echo '<option value="' . $option_data['room_number'] . '">' . $option_data['room_number'] . '</option>';
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
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Tuesday</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Wednesday</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Thursday</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Friday</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Saturday</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Sunday</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
            </td>
            <td>
              <p><strong>Course Code</strong></p>
            </td>
            <td>
              <p><strong>Section</strong></p>
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
            <td> </td>
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


    </div>
    <button id="create-table-button" class="btnlogout"> Create Updated Table </button>
    <button accesskey="E" id="toggleButton" class="btnlogout"> Edit </button>
    <button id="print-btn" onclick="window.location.href='logout.php'" class="btnlogout"> Logout </button>
  </div>
  <script src="resources/js/toggle.js"> </script>

  <script>
    var getTime = document.getElementById('time')
    var getTime78 = document.getElementById('time78')
    var getTime89 = document.getElementById('time89')
    var getTime1011 = document.getElementById('time1011')
    var getTime910 = document.getElementById('time910')
    var getTime1112 = document.getElementById('time1112')
    var getTime1201 = document.getElementById('time1201')
    var getTime0102 = document.getElementById('time0102')
    var getTime0203 = document.getElementById('time0203') 
    var getTime0304 = document.getElementById('time0304')
    var getTime0405 = document.getElementById('time0405')
    var getTime0506 = document.getElementById('time0506')
    var getTime0607 = document.getElementById('time0607')
    var getTime0708 = document.getElementById('time0708')

    calculateSum()


    function calculateSum() {
      // Get the values from the input fields
      var nth_1_value = parseFloat(document.getElementById("nth_1").value) || 0;
      var nth_2_value = parseFloat(document.getElementById("nth_2").value) || 0;
      var nth_3_value = parseFloat(document.getElementById("nth_3").value) || 0;
      var nth_4_value = parseFloat(document.getElementById("nth_4").value) || 0;
      var nth_5_value = parseFloat(document.getElementById("nth_5").value) || 0;
      var nth_6_value = parseFloat(document.getElementById("nth_6").value) || 0;

      // Calculate the sum
      var sum = nth_1_value + nth_2_value + nth_3_value + nth_4_value + nth_5_value + nth_6_value;

      // Display the sum in the h6 element
      document.querySelector('td[colspan="2"] h6').innerHTML = sum;
      var total = document.getElementById("total")
      total.innerText = sum;
    }



    var edit_monday_78_1st_rw = document.getElementById('edit_monday_78_1st_rw')
    var edit_monday_78_2nd_rw = document.getElementById('edit_monday_78_2nd_rw')

    var edit_tuesday_78_1st_rw = document.getElementById('edit_tuesday_78_1st_rw')
    var edit_tuesday_78_2nd_rw = document.getElementById('edit_tuesday_78_2nd_rw')

    var edit_wednesday_78_1st_rw = document.getElementById('edit_wednesday_78_1st_rw')
    var edit_wednesday_78_2nd_rw = document.getElementById('edit_wednesday_78_2nd_rw')

    var edit_thursday_78_1st_rw = document.getElementById('edit_thursday_78_1st_rw')
    var edit_thursday_78_2nd_rw = document.getElementById('edit_thursday_78_2nd_rw')

    var edit_friday_78_1st_rw = document.getElementById('edit_friday_78_1st_rw')
    var edit_friday_78_2nd_rw = document.getElementById('edit_friday_78_2nd_rw')

    var edit_saturday_78_1st_rw = document.getElementById('edit_saturday_78_1st_rw')
    var edit_saturday_78_2nd_rw = document.getElementById('edit_saturday_78_2nd_rw')

    var edit_sunday_78_1st_rw = document.getElementById('edit_sunday_78_1st_rw')
    var edit_sunday_78_2nd_rw = document.getElementById('edit_sunday_78_2nd_rw')

    var edit_last_78_1strw = document.getElementById('edit_last_78_1st_rw')
    var edit_last_78_2ndrw = document.getElementById('edit_last_78_2nd_rw')

    // 6-7

    var edit_monday_67_1st_rw = document.getElementById('edit_monday_67_1st_rw')
    var edit_monday_67_2nd_rw = document.getElementById('edit_monday_67_2nd_rw')

    var edit_tuesday_67_1st_rw = document.getElementById('edit_tuesday_67_1st_rw')
    var edit_tuesday_67_2nd_rw = document.getElementById('edit_tuesday_67_2nd_rw')

    var edit_wednesday_67_1st_rw = document.getElementById('edit_wednesday_67_1st_rw')
    var edit_wednesday_67_2nd_rw = document.getElementById('edit_wednesday_67_2nd_rw')

    var edit_thursday_67_1st_rw = document.getElementById('edit_thursday_67_1st_rw')
    var edit_thursday_67_2nd_rw = document.getElementById('edit_thursday_67_2nd_rw')

    var edit_friday_67_1st_rw = document.getElementById('edit_friday_67_1st_rw')
    var edit_friday_67_2nd_rw = document.getElementById('edit_friday_67_2nd_rw')

    var edit_saturday_67_1st_rw = document.getElementById('edit_saturday_67_1st_rw')
    var edit_saturday_67_2nd_rw = document.getElementById('edit_saturday_67_2nd_rw')

    var edit_sunday_67_1st_rw = document.getElementById('edit_sunday_67_1st_rw')
    var edit_sunday_67_2nd_rw = document.getElementById('edit_sunday_67_2nd_rw')

    var edit_last_67_1strw = document.getElementById('edit_last_67_1st_rw')
    var edit_last_67_2ndrw = document.getElementById('edit_last_67_2nd_rw')

    var edit_room_1 = document.getElementById('edit_room_1_rw')
    var edit_room_2 = document.getElementById('edit_room_2_rw')
    var edit_room_3 = document.getElementById('edit_room_3_rw')
    var edit_room_4 = document.getElementById('edit_room_4_rw')
    var edit_room_5 = document.getElementById('edit_room_5_rw')
    var edit_room_6 = document.getElementById('edit_room_6_rw')
    var edit_room_7 = document.getElementById('edit_room_7_rw')



    document.getElementById('edit_monday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_monday_67_2nd_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_tuesday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_tuesday_67_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_wednesday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_wednesday_67_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_thursday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_thursday_67_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_friday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_friday_67_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_saturday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_saturday_67_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_sunday_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_sunday_67_2nd_rw').addEventListener('change', handleInputChange)

    // 7-8

    document.getElementById('edit_monday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_monday_78_2nd_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_tuesday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_tuesday_78_2nd_rw').addEventListener('change', handleInput78Change)

    document.getElementById('edit_wednesday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_wednesday_78_2nd_rw').addEventListener('change', handleInput78Change)

    document.getElementById('edit_thursday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_thursday_78_2nd_rw').addEventListener('change', handleInput78Change)

    document.getElementById('edit_friday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_friday_78_2nd_rw').addEventListener('change', handleInput78Change)

    document.getElementById('edit_saturday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_saturday_78_2nd_rw').addEventListener('change', handleInput78Change)

    document.getElementById('edit_sunday_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_sunday_78_2nd_rw').addEventListener('change', handleInput78Change)

    document.getElementById('edit_last_78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_last_78_2nd_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_cc78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_cc78_2nd_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_section78_1st_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_section78_2nd_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_1_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_2_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_3_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_4_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_5_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_6_rw').addEventListener('change', handleInput78Change)
    document.getElementById('edit_room78_7_rw').addEventListener('change', handleInput78Change)

    // 

    // 8-9
    document.getElementById('edit_monday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_monday_89_2nd_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_tuesday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_tuesday_89_2nd_rw').addEventListener('change', handleInput89Change)

    document.getElementById('edit_wednesday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_wednesday_89_2nd_rw').addEventListener('change', handleInput89Change)

    document.getElementById('edit_thursday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_thursday_89_2nd_rw').addEventListener('change', handleInput89Change)

    document.getElementById('edit_friday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_friday_89_2nd_rw').addEventListener('change', handleInput89Change)

    document.getElementById('edit_saturday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_saturday_89_2nd_rw').addEventListener('change', handleInput89Change)

    document.getElementById('edit_sunday_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_sunday_89_2nd_rw').addEventListener('change', handleInput89Change)

    document.getElementById('edit_last_89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_last_89_2nd_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_cc89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_cc89_2nd_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_section89_1st_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_section89_2nd_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_1_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_2_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_3_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_4_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_5_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_6_rw').addEventListener('change', handleInput89Change)
    document.getElementById('edit_room89_7_rw').addEventListener('change', handleInput89Change)
    // 

    // 9-10
    document.getElementById('edit_monday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_monday_910_2nd_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_tuesday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_tuesday_910_2nd_rw').addEventListener('change', handleInput910Change)

    document.getElementById('edit_wednesday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_wednesday_910_2nd_rw').addEventListener('change', handleInput910Change)

    document.getElementById('edit_thursday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_thursday_910_2nd_rw').addEventListener('change', handleInput910Change)

    document.getElementById('edit_friday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_friday_910_2nd_rw').addEventListener('change', handleInput910Change)

    document.getElementById('edit_saturday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_saturday_910_2nd_rw').addEventListener('change', handleInput910Change)

    document.getElementById('edit_sunday_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_sunday_910_2nd_rw').addEventListener('change', handleInput910Change)

    document.getElementById('edit_last_910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_last_910_2nd_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_cc910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_cc910_2nd_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_section910_1st_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_section910_2nd_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_1_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_2_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_3_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_4_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_5_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_6_rw').addEventListener('change', handleInput910Change)
    document.getElementById('edit_room910_7_rw').addEventListener('change', handleInput910Change)
    // 

    // 10-11
    document.getElementById('edit_monday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_monday_1011_2nd_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_tuesday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_tuesday_1011_2nd_rw').addEventListener('change', handleInput1011Change)

    document.getElementById('edit_wednesday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_wednesday_1011_2nd_rw').addEventListener('change', handleInput1011Change)

    document.getElementById('edit_thursday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_thursday_1011_2nd_rw').addEventListener('change', handleInput1011Change)

    document.getElementById('edit_friday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_friday_1011_2nd_rw').addEventListener('change', handleInput1011Change)

    document.getElementById('edit_saturday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_saturday_1011_2nd_rw').addEventListener('change', handleInput1011Change)

    document.getElementById('edit_sunday_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_sunday_1011_2nd_rw').addEventListener('change', handleInput1011Change)

    document.getElementById('edit_last_1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_last_1011_2nd_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_cc1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_cc1011_2nd_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_section1011_1st_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_section1011_2nd_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_1_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_2_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_3_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_4_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_5_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_6_rw').addEventListener('change', handleInput1011Change)
    document.getElementById('edit_room1011_7_rw').addEventListener('change', handleInput1011Change)
    // 

    // 11 - 12
    document.getElementById('edit_monday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_monday_1112_2nd_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_tuesday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_tuesday_1112_2nd_rw').addEventListener('change', handleInput1112Change)

    document.getElementById('edit_wednesday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_wednesday_1112_2nd_rw').addEventListener('change', handleInput1112Change)

    document.getElementById('edit_thursday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_thursday_1112_2nd_rw').addEventListener('change', handleInput1112Change)

    document.getElementById('edit_friday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_friday_1112_2nd_rw').addEventListener('change', handleInput1112Change)

    document.getElementById('edit_saturday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_saturday_1112_2nd_rw').addEventListener('change', handleInput1112Change)

    document.getElementById('edit_sunday_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_sunday_1112_2nd_rw').addEventListener('change', handleInput1112Change)

    document.getElementById('edit_last_1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_last_1112_2nd_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_cc1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_cc1112_2nd_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_section1112_1st_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_section1112_2nd_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_1_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_2_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_3_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_4_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_5_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_6_rw').addEventListener('change', handleInput1112Change)
    document.getElementById('edit_room1112_7_rw').addEventListener('change', handleInput1112Change)
    // 

    // 12 - 1
    document.getElementById('edit_monday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_monday_1201_2nd_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_tuesday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_tuesday_1201_2nd_rw').addEventListener('change', handleInput1201Change)

    document.getElementById('edit_wednesday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_wednesday_1201_2nd_rw').addEventListener('change', handleInput1201Change)

    document.getElementById('edit_thursday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_thursday_1201_2nd_rw').addEventListener('change', handleInput1201Change)

    document.getElementById('edit_friday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_friday_1201_2nd_rw').addEventListener('change', handleInput1201Change)

    document.getElementById('edit_saturday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_saturday_1201_2nd_rw').addEventListener('change', handleInput1201Change)

    document.getElementById('edit_sunday_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_sunday_1201_2nd_rw').addEventListener('change', handleInput1201Change)

    document.getElementById('edit_last_1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_last_1201_2nd_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_cc1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_cc1201_2nd_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_section1201_1st_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_section1201_2nd_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_1_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_2_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_3_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_4_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_5_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_6_rw').addEventListener('change', handleInput1201Change)
    document.getElementById('edit_room1201_7_rw').addEventListener('change', handleInput1201Change)
    // 

    // 1 - 2
    document.getElementById('edit_monday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_monday_0102_2nd_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_tuesday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_tuesday_0102_2nd_rw').addEventListener('change', handleInput0102Change)

    document.getElementById('edit_wednesday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_wednesday_0102_2nd_rw').addEventListener('change', handleInput0102Change)

    document.getElementById('edit_thursday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_thursday_0102_2nd_rw').addEventListener('change', handleInput0102Change)

    document.getElementById('edit_friday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_friday_0102_2nd_rw').addEventListener('change', handleInput0102Change)

    document.getElementById('edit_saturday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_saturday_0102_2nd_rw').addEventListener('change', handleInput0102Change)

    document.getElementById('edit_sunday_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_sunday_0102_2nd_rw').addEventListener('change', handleInput0102Change)

    document.getElementById('edit_last_0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_cc0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_section0102_1st_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_1_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_2_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_3_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_4_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_5_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_6_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_room0102_7_rw').addEventListener('change', handleInput0102Change)
    document.getElementById('edit_timeline0102_rw').addEventListener('change', handleInput0102Change)
    // 

    // 2 - 3

    document.getElementById('edit_monday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_monday_0203_2nd_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_tuesday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_tuesday_0203_2nd_rw').addEventListener('change', handleInput0203Change)

    document.getElementById('edit_wednesday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_wednesday_0203_2nd_rw').addEventListener('change', handleInput0203Change)

    document.getElementById('edit_thursday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_thursday_0203_2nd_rw').addEventListener('change', handleInput0203Change)

    document.getElementById('edit_friday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_friday_0203_2nd_rw').addEventListener('change', handleInput0203Change)

    document.getElementById('edit_saturday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_saturday_0203_2nd_rw').addEventListener('change', handleInput0203Change)

    document.getElementById('edit_sunday_0203_1st_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_sunday_0203_2nd_rw').addEventListener('change', handleInput0203Change)

    document.getElementById('edit_room0203_1_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_room0203_2_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_room0203_3_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_room0203_4_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_room0203_5_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_room0203_6_rw').addEventListener('change', handleInput0203Change)
    document.getElementById('edit_room0203_7_rw').addEventListener('change', handleInput0203Change)
    // 

    // 3 - 4
    document.getElementById('edit_monday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_monday_0304_2nd_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_tuesday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_tuesday_0304_2nd_rw').addEventListener('change', handleInput0304Change)

    document.getElementById('edit_wednesday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_wednesday_0304_2nd_rw').addEventListener('change', handleInput0304Change)

    document.getElementById('edit_thursday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_thursday_0304_2nd_rw').addEventListener('change', handleInput0304Change)

    document.getElementById('edit_friday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_friday_0304_2nd_rw').addEventListener('change', handleInput0304Change)

    document.getElementById('edit_saturday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_saturday_0304_2nd_rw').addEventListener('change', handleInput0304Change)

    document.getElementById('edit_sunday_0304_1st_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_sunday_0304_2nd_rw').addEventListener('change', handleInput0304Change)

    document.getElementById('edit_room0304_1_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_room0304_2_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_room0304_3_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_room0304_4_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_room0304_5_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_room0304_6_rw').addEventListener('change', handleInput0304Change)
    document.getElementById('edit_room0304_7_rw').addEventListener('change', handleInput0304Change)
    // 

    // 4 - 5
    document.getElementById('edit_monday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_monday_0405_2nd_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_tuesday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_tuesday_0405_2nd_rw').addEventListener('change', handleInput0405Change)

    document.getElementById('edit_wednesday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_wednesday_0405_2nd_rw').addEventListener('change', handleInput0405Change)

    document.getElementById('edit_thursday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_thursday_0405_2nd_rw').addEventListener('change', handleInput0405Change)

    document.getElementById('edit_friday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_friday_0405_2nd_rw').addEventListener('change', handleInput0405Change)

    document.getElementById('edit_saturday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_saturday_0405_2nd_rw').addEventListener('change', handleInput0405Change)

    document.getElementById('edit_sunday_0405_1st_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_sunday_0405_2nd_rw').addEventListener('change', handleInput0405Change)

    document.getElementById('edit_timeline0405_2_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_1_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_2_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_3_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_4_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_5_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_6_rw').addEventListener('change', handleInput0405Change)
    document.getElementById('edit_room0405_7_rw').addEventListener('change', handleInput0405Change)
    // 

    // 5 - 6
    document.getElementById('edit_monday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_monday_0506_2nd_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_tuesday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_tuesday_0506_2nd_rw').addEventListener('change', handleInput0506Change)

    document.getElementById('edit_wednesday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_wednesday_0506_2nd_rw').addEventListener('change', handleInput0506Change)

    document.getElementById('edit_thursday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_thursday_0506_2nd_rw').addEventListener('change', handleInput0506Change)

    document.getElementById('edit_friday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_friday_0506_2nd_rw').addEventListener('change', handleInput0506Change)

    document.getElementById('edit_saturday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_saturday_0506_2nd_rw').addEventListener('change', handleInput0506Change)

    document.getElementById('edit_sunday_0506_1st_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_sunday_0506_2nd_rw').addEventListener('change', handleInput0506Change)

    document.getElementById('edit_room0506_1_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_room0506_2_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_room0506_3_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_room0506_4_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_room0506_5_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_room0506_6_rw').addEventListener('change', handleInput0506Change)
    document.getElementById('edit_room0506_7_rw').addEventListener('change', handleInput0506Change)
    // 

    // 6 - 7
    document.getElementById('edit_monday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_monday_0607_2nd_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_tuesday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_tuesday_0607_2nd_rw').addEventListener('change', handleInput0607Change)

    document.getElementById('edit_wednesday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_wednesday_0607_2nd_rw').addEventListener('change', handleInput0607Change)

    document.getElementById('edit_thursday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_thursday_0607_2nd_rw').addEventListener('change', handleInput0607Change)

    document.getElementById('edit_friday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_friday_0607_2nd_rw').addEventListener('change', handleInput0607Change)

    document.getElementById('edit_saturday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_saturday_0607_2nd_rw').addEventListener('change', handleInput0607Change)

    document.getElementById('edit_sunday_0607_1st_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_sunday_0607_2nd_rw').addEventListener('change', handleInput0607Change)

    document.getElementById('edit_room0607_1_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_room0607_2_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_room0607_3_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_room0607_4_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_room0607_5_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_room0607_6_rw').addEventListener('change', handleInput0607Change)
    document.getElementById('edit_room0607_7_rw').addEventListener('change', handleInput0607Change)
    //

    // 7 - 8
    document.getElementById('edit_monday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_monday_0708_2nd_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_tuesday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_tuesday_0708_2nd_rw').addEventListener('change', handleInput0708Change)

    document.getElementById('edit_wednesday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_wednesday_0708_2nd_rw').addEventListener('change', handleInput0708Change)

    document.getElementById('edit_thursday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_thursday_0708_2nd_rw').addEventListener('change', handleInput0708Change)

    document.getElementById('edit_friday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_friday_0708_2nd_rw').addEventListener('change', handleInput0708Change)

    document.getElementById('edit_saturday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_saturday_0708_2nd_rw').addEventListener('change', handleInput0708Change)

    document.getElementById('edit_sunday_0708_1st_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_sunday_0708_2nd_rw').addEventListener('change', handleInput0708Change)

    document.getElementById('edit_room0708_1_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_room0708_2_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_room0708_3_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_room0708_4_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_room0708_5_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_room0708_6_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_room0708_7_rw').addEventListener('change', handleInput0708Change)
    document.getElementById('edit_timeline0708_3_rw').addEventListener('change', handleInput0708Change)
    //

    document.getElementById('edit_room_1_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_room_2_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_room_3_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_room_4_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_room_5_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_room_6_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_room_7_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_cc_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_cc_2nd_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_section_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_section_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('edit_last_67_1st_rw').addEventListener('change', handleInputChange)
    document.getElementById('edit_last_67_2nd_rw').addEventListener('change', handleInputChange)

    document.getElementById('off_time_1').addEventListener('change', handleInputChangeOfficialTimes)
    document.getElementById('off_time_2').addEventListener('change', handleInputChangeOfficialTimes)
    document.getElementById('off_time_3').addEventListener('change', handleInputChangeOfficialTimes)
    document.getElementById('off_time_4').addEventListener('change', handleInputChangeOfficialTimes)
    document.getElementById('off_time_5').addEventListener('change', handleInputChangeOfficialTimes)
    document.getElementById('off_time_6').addEventListener('change', handleInputChangeOfficialTimes)
    document.getElementById('off_time_7').addEventListener('change', handleInputChangeOfficialTimes)

    document.getElementById('nth_1').addEventListener('change', handleNumOfTeaching)
    document.getElementById('nth_2').addEventListener('change', handleNumOfTeaching)
    document.getElementById('nth_3').addEventListener('change', handleNumOfTeaching)
    document.getElementById('nth_4').addEventListener('change', handleNumOfTeaching)
    document.getElementById('nth_5').addEventListener('change', handleNumOfTeaching)
    document.getElementById('nth_6').addEventListener('change', handleNumOfTeaching)

    document.getElementById('ot_1').addEventListener('change', handleOT)
    document.getElementById('ot_2').addEventListener('change', handleOT)
    document.getElementById('ot_3').addEventListener('change', handleOT)
    document.getElementById('ot_4').addEventListener('change', handleOT)
    document.getElementById('ot_5').addEventListener('change', handleOT)
    document.getElementById('ot_6').addEventListener('change', handleOT)
    document.getElementById('ot_7').addEventListener('change', handleOT)

    document.getElementById('out1').addEventListener('change', handleOutside)
    document.getElementById('out2').addEventListener('change', handleOutside)
    document.getElementById('out3').addEventListener('change', handleOutside)
    document.getElementById('out4').addEventListener('change', handleOutside)
    document.getElementById('out5').addEventListener('change', handleOutside)
    document.getElementById('out6').addEventListener('change', handleOutside)
    document.getElementById('out7').addEventListener('change', handleOutside)


    document.getElementById('design').addEventListener('change', handleDesign)

    document.getElementById('prep').addEventListener('change', handleOutputs)
    document.getElementById('reg_load').addEventListener('change', handleOutputs)
    document.getElementById('acad_rank').addEventListener('change', handleOutputs)

    document.getElementById('hours_week').addEventListener('change', handleOutputs2)
    document.getElementById('Overload').addEventListener('change', handleOutputs2)
    document.getElementById('cons_hour').addEventListener('change', handleOutputs2)

    
    var getSelectedValue = "<?php echo $_POST['filteredValue']; ?>";

    const officialTimesObj = {
      offTimeTrigger: true,
      getSelectedValue: 0
    }

    const outputobg = {
      outputTrigger: true,
      getSelectedValue: 0
    }

    const output2obg = {
      output2Trigger: true,
      getSelectedValue: 0
    }

    const designobj = {
      desTrigger: true,
      getSelectedValue: 0
    }

    const outsideobj = {
      outTrigger: true,
      getSelectedValue: 0
    }

    const otobj = {
      otTrigger: true,
      getSelectedValue: 0
    }

    const numOfTeachingsObj = {
      numOfTeachTrigger: true,
      getSelectedValue: 0
    }

    const obj = {
      schedTrigger: true,
      time: getTime.value,
      getSelectedValue: 0
    }

    const obj78 = {
      schedTrigger78: true,
      time: getTime78.value,
      getSelectedValue: 0
    }

    const obj89 = {
      schedTrigger89: true,
      time: getTime89.value,
      getSelectedValue: 0
    }

    const obj1011 = {
      schedTrigger1011: true,
      time: getTime1011.value,
      getSelectedValue: 0
    }

    const obj910 = {
      schedTrigger910: true,
      time: getTime910.value,
      getSelectedValue: 0
    }

    const obj1112 = {
      schedTrigger1112: true,
      time: getTime1112.value,
      getSelectedValue: 0
    }

    const obj1201 = {
      schedTrigger1201: true,
      time: getTime1201.value,
      getSelectedValue: 0
    }

    const obj0102 = {
      schedTrigger0102: true,
      time: getTime0102.value,
      getSelectedValue: 0
    }

    const obj0203 = {
      schedTrigger0203: true,
      time: getTime0203.value,
      getSelectedValue: 0
    }

    const obj0304 = {
      schedTrigger0304: true,
      time: getTime0304.value,
      getSelectedValue: 0
    }

    const obj0405 = {
      schedTrigger0405: true,
      time: getTime0405.value,
      getSelectedValue: 0
    }

    const obj0506 = {
      schedTrigger0506: true,
      time: getTime0506.value,
      getSelectedValue: 0
    }

    const obj0607 = {
      schedTrigger0607: true,
      time: getTime0607.value,
      getSelectedValue: 0
    }

    const obj0708 = {
      schedTrigger0708: true,
      time: getTime0708.value,
      getSelectedValue: 0
    }

    const originalValues = {};

    function initializeOriginalValues() {
      const inputIds = [
        'edit_monday_67_1st_rw', 'edit_monday_67_2nd_rw', 'edit_tuesday_67_1st_rw',
        'edit_tuesday_67_2nd_rw', 'edit_wednesday_67_1st_rw', 'edit_wednesday_67_2nd_rw',
        'edit_thursday_67_1st_rw', 'edit_thursday_67_2nd_rw', 'edit_friday_67_1st_rw',
        'edit_friday_67_2nd_rw', 'edit_saturday_67_1st_rw', 'edit_saturday_67_2nd_rw',
        'edit_sunday_67_1st_rw', 'edit_sunday_67_2nd_rw', 'edit_room_1_rw', 'edit_room_2_rw',
        'edit_room_3_rw', 'edit_room_4_rw', 'edit_room_5_rw', 'edit_room_6_rw', 'edit_room_7_rw',
        'edit_last_67_1st_rw', 'edit_last_67_2nd_rw', 'edit_cc_1st_rw', 'edit_cc_2nd_rw',
        'edit_section_1st_rw', 'edit_section_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj.hasOwnProperty(propertyName)) {
            obj[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues78() {
      const inputIds = [
        'edit_monday_78_1st_rw', 'edit_monday_78_2nd_rw', 'edit_tuesday_78_1st_rw',
        'edit_tuesday_78_2nd_rw', 'edit_wednesday_78_1st_rw', 'edit_wednesday_78_2nd_rw',
        'edit_thursday_78_1st_rw', 'edit_thursday_78_2nd_rw', 'edit_friday_78_1st_rw',
        'edit_friday_78_2nd_rw', 'edit_saturday_78_1st_rw', 'edit_saturday_78_2nd_rw',
        'edit_sunday_78_1st_rw', 'edit_sunday_78_2nd_rw', 'edit_room78_1_rw', 'edit_room78_2_rw',
        'edit_room78_3_rw', 'edit_room78_4_rw', 'edit_room78_5_rw', 'edit_room78_6_rw', 'edit_room78_7_rw',
        'edit_last_78_1st_rw', 'edit_last_78_2nd_rw', 'edit_cc78_1st_rw', 'edit_cc78_2nd_rw',
        'edit_section78_1st_rw', 'edit_section78_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj78.hasOwnProperty(propertyName)) {
            obj78[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues89() {
      const inputIds = [
        'edit_monday_89_1st_rw', 'edit_monday_89_2nd_rw', 'edit_tuesday_89_1st_rw',
        'edit_tuesday_89_2nd_rw', 'edit_wednesday_89_1st_rw', 'edit_wednesday_89_2nd_rw',
        'edit_thursday_89_1st_rw', 'edit_thursday_89_2nd_rw', 'edit_friday_89_1st_rw',
        'edit_friday_89_2nd_rw', 'edit_saturday_89_1st_rw', 'edit_saturday_89_2nd_rw',
        'edit_sunday_89_1st_rw', 'edit_sunday_89_2nd_rw', 'edit_room89_1_rw', 'edit_room89_2_rw',
        'edit_room89_3_rw', 'edit_room89_4_rw', 'edit_room89_5_rw', 'edit_room89_6_rw', 'edit_room89_7_rw',
        'edit_last_89_1st_rw', 'edit_last_89_2nd_rw', 'edit_cc89_1st_rw', 'edit_cc89_2nd_rw',
        'edit_section89_1st_rw', 'edit_section89_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj89.hasOwnProperty(propertyName)) {
            obj89[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues1011() {
      const inputIds = [
        'edit_monday_1011_1st_rw', 'edit_monday_1011_2nd_rw', 'edit_tuesday_1011_1st_rw',
        'edit_tuesday_1011_2nd_rw', 'edit_wednesday_1011_1st_rw', 'edit_wednesday_1011_2nd_rw',
        'edit_thursday_1011_1st_rw', 'edit_thursday_1011_2nd_rw', 'edit_friday_1011_1st_rw',
        'edit_friday_1011_2nd_rw', 'edit_saturday_1011_1st_rw', 'edit_saturday_1011_2nd_rw',
        'edit_sunday_1011_1st_rw', 'edit_sunday_1011_2nd_rw', 'edit_room1011_1_rw', 'edit_room1011_2_rw',
        'edit_room1011_3_rw', 'edit_room1011_4_rw', 'edit_room1011_5_rw', 'edit_room1011_6_rw', 'edit_room1011_7_rw',
        'edit_last_1011_1st_rw', 'edit_last_1011_2nd_rw', 'edit_cc1011_1st_rw', 'edit_cc1011_2nd_rw',
        'edit_section1011_1st_rw', 'edit_section1011_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj1011.hasOwnProperty(propertyName)) {
            obj1011[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues910() {
      const inputIds = [
        'edit_monday_910_1st_rw', 'edit_monday_910_2nd_rw', 'edit_tuesday_910_1st_rw',
        'edit_tuesday_910_2nd_rw', 'edit_wednesday_910_1st_rw', 'edit_wednesday_910_2nd_rw',
        'edit_thursday_910_1st_rw', 'edit_thursday_910_2nd_rw', 'edit_friday_910_1st_rw',
        'edit_friday_910_2nd_rw', 'edit_saturday_910_1st_rw', 'edit_saturday_910_2nd_rw',
        'edit_sunday_910_1st_rw', 'edit_sunday_910_2nd_rw', 'edit_room910_1_rw', 'edit_room910_2_rw',
        'edit_room910_3_rw', 'edit_room910_4_rw', 'edit_room910_5_rw', 'edit_room910_6_rw', 'edit_room910_7_rw',
        'edit_last_910_1st_rw', 'edit_last_910_2nd_rw', 'edit_cc910_1st_rw', 'edit_cc910_2nd_rw',
        'edit_section910_1st_rw', 'edit_section910_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj910.hasOwnProperty(propertyName)) {
            obj910[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues1112() {
      const inputIds = [
        'edit_monday_1112_1st_rw', 'edit_monday_1112_2nd_rw', 'edit_tuesday_1112_1st_rw',
        'edit_tuesday_1112_2nd_rw', 'edit_wednesday_1112_1st_rw', 'edit_wednesday_1112_2nd_rw',
        'edit_thursday_1112_1st_rw', 'edit_thursday_1112_2nd_rw', 'edit_friday_1112_1st_rw',
        'edit_friday_1112_2nd_rw', 'edit_saturday_1112_1st_rw', 'edit_saturday_1112_2nd_rw',
        'edit_sunday_1112_1st_rw', 'edit_sunday_1112_2nd_rw', 'edit_room1112_1_rw', 'edit_room1112_2_rw',
        'edit_room1112_3_rw', 'edit_room1112_4_rw', 'edit_room1112_5_rw', 'edit_room1112_6_rw', 'edit_room1112_7_rw',
        'edit_last_1112_1st_rw', 'edit_last_1112_2nd_rw', 'edit_cc1112_1st_rw', 'edit_cc1112_2nd_rw',
        'edit_section1112_1st_rw', 'edit_section1112_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj1112.hasOwnProperty(propertyName)) {
            obj1112[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues1201() {
      const inputIds = [
        'edit_monday_1201_1st_rw', 'edit_monday_1201_2nd_rw', 'edit_tuesday_1201_1st_rw',
        'edit_tuesday_1201_2nd_rw', 'edit_wednesday_1201_1st_rw', 'edit_wednesday_1201_2nd_rw',
        'edit_thursday_1201_1st_rw', 'edit_thursday_1201_2nd_rw', 'edit_friday_1201_1st_rw',
        'edit_friday_1201_2nd_rw', 'edit_saturday_1201_1st_rw', 'edit_saturday_1201_2nd_rw',
        'edit_sunday_1201_1st_rw', 'edit_sunday_1201_2nd_rw', 'edit_room1201_1_rw', 'edit_room1201_2_rw',
        'edit_room1201_3_rw', 'edit_room1201_4_rw', 'edit_room1201_5_rw', 'edit_room1201_6_rw', 'edit_room1201_7_rw',
        'edit_last_1201_1st_rw', 'edit_last_1201_2nd_rw', 'edit_cc1201_1st_rw', 'edit_cc1201_2nd_rw',
        'edit_section1201_1st_rw', 'edit_section1201_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj1201.hasOwnProperty(propertyName)) {
            obj1201[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0102() {
      const inputIds = [
        'edit_monday_0102_1st_rw', 'edit_monday_0102_2nd_rw', 'edit_tuesday_0102_1st_rw',
        'edit_tuesday_0102_2nd_rw', 'edit_wednesday_0102_1st_rw', 'edit_wednesday_0102_2nd_rw',
        'edit_thursday_0102_1st_rw', 'edit_thursday_0102_2nd_rw', 'edit_friday_0102_1st_rw',
        'edit_friday_0102_2nd_rw', 'edit_saturday_0102_1st_rw', 'edit_saturday_0102_2nd_rw',
        'edit_sunday_0102_1st_rw', 'edit_sunday_0102_2nd_rw', 'edit_room0102_1_rw', 'edit_room0102_2_rw',
        'edit_room0102_3_rw', 'edit_room0102_4_rw', 'edit_room0102_5_rw', 'edit_room0102_6_rw', 'edit_room0102_7_rw',
        'edit_last_0102_1st_rw', 'edit_cc0102_1st_rw', 'edit_cc0102_2nd_rw',
        'edit_section0102_1st_rw', 'edit_section0102_2nd_rw', 'edit_timeline0102_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0102.hasOwnProperty(propertyName)) {
            obj0102[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0203() {
      const inputIds = [
        'edit_monday_0203_1st_rw', 'edit_monday_0203_2nd_rw', 'edit_tuesday_0203_1st_rw',
        'edit_tuesday_0203_2nd_rw', 'edit_wednesday_0203_1st_rw', 'edit_wednesday_0203_2nd_rw',
        'edit_thursday_0203_1st_rw', 'edit_thursday_0203_2nd_rw', 'edit_friday_0203_1st_rw',
        'edit_friday_0203_2nd_rw', 'edit_saturday_0203_1st_rw', 'edit_saturday_0203_2nd_rw',
        'edit_sunday_0203_1st_rw', 'edit_sunday_0203_2nd_rw', 'edit_room0203_1_rw', 'edit_room0203_2_rw',
        'edit_room0203_3_rw', 'edit_room0203_4_rw', 'edit_room0203_5_rw', 'edit_room0203_6_rw', 'edit_room0203_7_rw',
        'edit_last_0203_1st_rw', 'edit_last_0203_2nd_rw', 'edit_cc0203_1st_rw', 'edit_cc0203_2nd_rw',
        'edit_section0203_1st_rw', 'edit_section0203_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0203.hasOwnProperty(propertyName)) {
            obj0203[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0304() {
      const inputIds = [
        'edit_monday_0304_1st_rw', 'edit_monday_0304_2nd_rw', 'edit_tuesday_0304_1st_rw',
        'edit_tuesday_0304_2nd_rw', 'edit_wednesday_0304_1st_rw', 'edit_wednesday_0304_2nd_rw',
        'edit_thursday_0304_1st_rw', 'edit_thursday_0304_2nd_rw', 'edit_friday_0304_1st_rw',
        'edit_friday_0304_2nd_rw', 'edit_saturday_0304_1st_rw', 'edit_saturday_0304_2nd_rw',
        'edit_sunday_0304_1st_rw', 'edit_sunday_0304_2nd_rw', 'edit_room0304_1_rw', 'edit_room0304_2_rw',
        'edit_room0304_3_rw', 'edit_room0304_4_rw', 'edit_room0304_5_rw', 'edit_room0304_6_rw', 'edit_room0304_7_rw',
        'edit_last_0304_1st_rw', 'edit_last_0304_2nd_rw', 'edit_cc0304_1st_rw', 'edit_cc0304_2nd_rw',
        'edit_section0304_1st_rw', 'edit_section0304_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0304.hasOwnProperty(propertyName)) {
            obj0304[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0405() {
      const inputIds = [
        'edit_monday_0405_1st_rw', 'edit_monday_0405_2nd_rw', 'edit_tuesday_0405_1st_rw',
        'edit_tuesday_0405_2nd_rw', 'edit_wednesday_0405_1st_rw', 'edit_wednesday_0405_2nd_rw',
        'edit_thursday_0405_1st_rw', 'edit_thursday_0405_2nd_rw', 'edit_friday_0405_1st_rw',
        'edit_friday_0405_2nd_rw', 'edit_saturday_0405_1st_rw', 'edit_saturday_0405_2nd_rw',
        'edit_sunday_0405_1st_rw', 'edit_sunday_0405_2nd_rw', 'edit_room0405_1_rw', 'edit_room0405_2_rw',
        'edit_room0405_3_rw', 'edit_room0405_4_rw', 'edit_room0405_5_rw', 'edit_room0405_6_rw', 'edit_room0405_7_rw',
        'edit_last_0405_1st_rw', 'edit_last_0405_2nd_rw', 'edit_cc0405_1st_rw', 'edit_timeline0405_2_rw',
        'edit_section0405_1st_rw', 'edit_section0405_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0405.hasOwnProperty(propertyName)) {
            obj0405[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0506() {
      const inputIds = [
        'edit_monday_0506_1st_rw', 'edit_monday_0506_2nd_rw', 'edit_tuesday_0506_1st_rw',
        'edit_tuesday_0506_2nd_rw', 'edit_wednesday_0506_1st_rw', 'edit_wednesday_0506_2nd_rw',
        'edit_thursday_0506_1st_rw', 'edit_thursday_0506_2nd_rw', 'edit_friday_0506_1st_rw',
        'edit_friday_0506_2nd_rw', 'edit_saturday_0506_1st_rw', 'edit_saturday_0506_2nd_rw',
        'edit_sunday_0506_1st_rw', 'edit_sunday_0506_2nd_rw', 'edit_room0506_1_rw', 'edit_room0506_2_rw',
        'edit_room0506_3_rw', 'edit_room0506_4_rw', 'edit_room0506_5_rw', 'edit_room0506_6_rw', 'edit_room0506_7_rw',
        'edit_last_0506_1st_rw', 'edit_last_0506_2nd_rw', 'edit_cc0506_1st_rw', 'edit_cc0506_2nd_rw',
        'edit_section0506_1st_rw', 'edit_section0506_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0506.hasOwnProperty(propertyName)) {
            obj0506[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0607() {
      const inputIds = [
        'edit_monday_0607_1st_rw', 'edit_monday_0607_2nd_rw', 'edit_tuesday_0607_1st_rw',
        'edit_tuesday_0607_2nd_rw', 'edit_wednesday_0607_1st_rw', 'edit_wednesday_0607_2nd_rw',
        'edit_thursday_0607_1st_rw', 'edit_thursday_0607_2nd_rw', 'edit_friday_0607_1st_rw',
        'edit_friday_0607_2nd_rw', 'edit_saturday_0607_1st_rw', 'edit_saturday_0607_2nd_rw',
        'edit_sunday_0607_1st_rw', 'edit_sunday_0607_2nd_rw', 'edit_room0607_1_rw', 'edit_room0607_2_rw',
        'edit_room0607_3_rw', 'edit_room0607_4_rw', 'edit_room0607_5_rw', 'edit_room0607_6_rw', 'edit_room0607_7_rw',
        'edit_last_0607_1st_rw', 'edit_last_0607_2nd_rw', 'edit_cc0607_1st_rw', 'edit_cc0607_2nd_rw',
        'edit_section0607_1st_rw', 'edit_section0607_2nd_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0607.hasOwnProperty(propertyName)) {
            obj0607[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOriginalValues0708() {
      const inputIds = [
        'edit_monday_0708_1st_rw', 'edit_monday_0708_2nd_rw', 'edit_tuesday_0708_1st_rw',
        'edit_tuesday_0708_2nd_rw', 'edit_wednesday_0708_1st_rw', 'edit_wednesday_0708_2nd_rw',
        'edit_thursday_0708_1st_rw', 'edit_thursday_0708_2nd_rw', 'edit_friday_0708_1st_rw',
        'edit_friday_0708_2nd_rw', 'edit_saturday_0708_1st_rw', 'edit_saturday_0708_2nd_rw',
        'edit_sunday_0708_1st_rw', 'edit_sunday_0708_2nd_rw', 'edit_room0708_1_rw', 'edit_room0708_2_rw',
        'edit_room0708_3_rw', 'edit_room0708_4_rw', 'edit_room0708_5_rw', 'edit_room0708_6_rw', 'edit_room0708_7_rw',
        'edit_last_0708_1st_rw', 'edit_last_0708_2nd_rw', 'edit_cc0708_1st_rw', 'edit_cc0708_2nd_rw',
        'edit_section0708_1st_rw', 'edit_section0708_2nd_rw', 'edit_timeline0708_3_rw'
      ];

      inputIds.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
          const propertyName = id.replace('edit_', '').replace('_rw', '');

          if (!obj0708.hasOwnProperty(propertyName)) {
            obj0708[propertyName] = element.value;
          }
        }
      });
    }

    function initializeOfficialValues() {
      const inputIds = [
        'off_time_1', 'off_time_2', 'off_time_3', 'off_time_4',
        'off_time_5', 'off_time_6', 'off_time_7'
      ];
      inputIds.forEach(id => {
        const element = document.getElementById(id)
        if (element) {
          if (!officialTimesObj.hasOwnProperty(id)) {
            officialTimesObj[id] = element.value
          }
        }
      })
    }

    function initializeNumsOfTeach() {
      const inputIds = [
        'nth_1', 'nth_2', 'nth_3',
        'nth_4', 'nth_5', 'nth_6'
      ];
      inputIds.forEach(id => {
        const element = document.getElementById(id)
        if (element) {
          if (!numOfTeachingsObj.hasOwnProperty(id)) {
            numOfTeachingsObj[id] = element.value;
          }
        }
      })
    }

    function initializeOT() {
      const inputIds = [
        'ot_1', 'ot_2', 'ot_3',
        'ot_4', 'ot_5', 'ot_6', 'ot_7'
      ];
      inputIds.forEach(id => {
        const element = document.getElementById(id)
        if (element) {
          if (!otobj.hasOwnProperty(id)) {
            otobj[id] = element.value;
          }
        }
      })
    }

    initializeOT()
    initializeNumsOfTeach()
    initializeOfficialValues()
    initializeOriginalValues();
    initializeOriginalValues78();
    initializeOriginalValues89()
    initializeOriginalValues1011()
    initializeOriginalValues910()
    initializeOriginalValues1112()
    initializeOriginalValues1201()
    initializeOriginalValues0102()
    initializeOriginalValues0203()
    initializeOriginalValues0304()
    initializeOriginalValues0405()
    initializeOriginalValues0506()
    initializeOriginalValues0607()
    initializeOriginalValues0708()

    function handleInputChange(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput78Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj78[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj78.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj78,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInputChangeOfficialTimes(event) {
      officialTimesObj[event.target.id] = event.target.value;
      officialTimesObj.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: officialTimesObj,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleNumOfTeaching(event) {
      numOfTeachingsObj[event.target.id] = event.target.value;
      numOfTeachingsObj.getSelectedValue = getSelectedValue;
      $.ajax({
        method: 'post',
        data: numOfTeachingsObj,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
          calculateSum()
        }
      })
    }

    function handleOT(event) {
      otobj[event.target.id] = event.target.value;
      otobj.getSelectedValue = getSelectedValue;
      $.ajax({
        method: 'post',
        data: otobj,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleOutside(event) {
      outsideobj[event.target.id] = event.target.value;
      outsideobj.getSelectedValue = getSelectedValue;
      $.ajax({
        method: 'post',
        data: outsideobj,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleOutputs(event) {
      outputobg[event.target.id] = event.target.value;
      outputobg.getSelectedValue = getSelectedValue;
      $.ajax({
        method: 'post',
        data: outputobg,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleOutputs2(event) {
      output2obg[event.target.id] = event.target.value;
      output2obg.getSelectedValue = getSelectedValue;
      $.ajax({
        method: 'post',
        data: output2obg,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }




    function handleDesign(event) {
      designobj[event.target.id] = event.target.value;
      designobj.getSelectedValue = getSelectedValue;
      $.ajax({
        method: 'post',
        data: designobj,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }



    function handleInput89Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj89[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj89.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj89,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput1011Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj1011[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj1011.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj1011,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput910Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj910[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj910.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj910,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput1112Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj1112[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj1112.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj1112,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput1201Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj1201[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj1201.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj1201,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0102Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0102[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0102.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0102,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0203Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0203[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0203.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0203,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0304Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0304[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0304.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0304,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0405Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0405[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0405.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0405,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0506Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0506[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0506.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0506,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0607Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0607[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0607.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0607,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }

    function handleInput0708Change(event) {
      const propertyName = event.target.id.replace('edit_', '').replace('_rw', '');

      obj0708[propertyName] = (originalValues[propertyName] !== undefined &&
          event.target.value.trim() === '') ?
        originalValues[propertyName] : event.target.value;

      obj0708.getSelectedValue = getSelectedValue;

      $.ajax({
        method: 'post',
        data: obj0708,
        url: 'app/helper/scheduler_helper.php',
        success: function(response) {
          console.log(response)
        }
      })
    }
    
    // javascript for toggling from official time

    //---official time---
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime1");
      const tdsToToggle1 = document.getElementById("toggleofftime2");

      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";
        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";
        }
      });
    });
    //---No. of teaching hours----
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime3");
      const tdsToToggle1 = document.getElementById("toggleofftime4");


      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";

        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";

        }
      });
    });

    //---Overtime Within----
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime5");
      const tdsToToggle1 = document.getElementById("toggleofftime6");

      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";
        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";
        }
      });
    });

    //---Overtime Outside----
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime7");
      const tdsToToggle1 = document.getElementById("toggleofftime8");

      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";
        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";
        }
      });
    });

    //---Designation----
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime9");
      const tdsToToggle1 = document.getElementById("toggleofftime10");

      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";
        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";
        }
      });
    });

    //---No. of Preparations----
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime11");
      const tdsToToggle1 = document.getElementById("toggleofftime12");

      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";
        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";
        }
      });
    });

    //---NO. of hours Per Week----
    document.addEventListener("DOMContentLoaded", function() {
      // Hide the elements initially
      const tdsToToggle = document.getElementById("toggleofftime13");
      const tdsToToggle1 = document.getElementById("toggleofftime14");

      document.getElementById("toggleButton").addEventListener("click", function() {
        if (tdsToToggle.style.display === "none") {
          tdsToToggle.style.display = "table-row";
          tdsToToggle1.style.display = "none";
        } else {
          tdsToToggle.style.display = "none";
          tdsToToggle1.style.display = "table-row";
        }
      });
    });


    function createUpdatedTable() {
  const xhr = new XMLHttpRequest(); // Or use the Fetch API
  xhr.open("POST", "index.php"); // Replace with your PHP script's URL
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // Add this header for POST requests
  xhr.onload = function() {
    if (this.status === 200) {
      console.log("Table created successfully!");
      // Handle successful table creation (e.g., display a success message)
    } else {
      console.error("Error creating table:", this.responseText);
      // Handle errors (e.g., display an error message)
    }
  };
  xhr.send("create_table=true"); // Send a POST parameter to trigger the action in PHP
}

document.getElementById("create-table-button").addEventListener("click", createUpdatedTable);
    
  </script>
  <script>
       $(document).ready(function() {
        // Event handler for dropdown change
        $('#usernameDropdown').change(function() {
            // Get the selected ID
            var selectedId = $(this).val();
            
            // Log the selected ID to the console
            console.log(selectedId);

            // Build the SQL query with the selected faculty_id
            var sqlQuery = "INSERT INTO sched_updated1 SELECT * FROM sched WHERE faculty_id = " + selectedId;

            // Log the generated SQL query to the console
            console.log(sqlQuery);

            // Now you can use the sqlQuery variable to perform your database operation
            // For example, you can make an AJAX request to a server-side script to execute the query
            // Note: Ensure proper security measures to prevent SQL injection in a real-world scenario
        });
    });
    </script>

</body>

</html>