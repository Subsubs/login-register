<!DOCTYPE html>
<html>
<head>
  <title>GUIDE TO CREATE SCHEDULE</title>
  <link rel="stylesheet" href="css/pop.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h2 class="logo"></h2>
        <h3 class="Dash">DASH</h3>
        <nav class="navigation">
        <button class="btnLogin-popup" onclick="window.location.href='login.php'">Login</button>
            <a href="loginpage.php">Admin Panel</a>
        </nav>
    </header>

  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="window.location.href='logout.php'">x</span>
        <h2> GUIDE TO CREATE SCHEDULE</h2>
      </div>
      <p data-content="Create Faculty Schedule:"><span class="step">Step 1 :</span></p>
      <div class="text-container">
        <p>a. Select a specific schedule for a faculty using the dropdown menus provided.</p>
        <p>b. In the 'room' column, please input the room number, section, and course that corresponds to the faculty member you have selected.</p>
        <p>c. Click the ‘Update Data’ button to ensure that the data you entered will reflect in the 'Course' and 'Room' tabs.</p>
      </div>
      <!-- Additional text containers under Step 1 -->
      <div class="additional-text-container">
        <p> Notes</p>
        <p>* If you’re creating your schedule, follow the same process.</p>
        <p>* In case an error arises while selecting instructors or filling out rooms, it may indicate that the specific schedule or room is already in use. Please select an alternative schedule or room to proceed.</p>
      </div>
      <!-- Steps 2 and 3 -->
      <p data-content="Check the 'Course' and 'Room' tabs. Review to ensure that the data you entered in the 'Faculty Course' tab has been accurately reflected in both tabs.
      "><span class="step">Step 2 :</span></p>
      <p data-content="Printing of schedule. After reviewing the 'Course' and 'Room' tabs, You can print your created schedule. 
      "><span class="step">Step 3 :</span></p>
    </div>
  </div>

  <script>
    // JavaScript
    function openModal() {
      document.getElementById('modal').style.display = 'block';
    }

    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }

    window.onload = function() {
      openModal();
    };
  </script>
</body>
</html>
