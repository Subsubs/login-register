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
                <td class="ju" colspan="9"> College of Engineering</td>
                <td colspan="1"> Campus:</td>
                <td class="ju" colspan="7"> BatStateU - Alangilan</td>
            </tr>
        </thead>
        <thead>
            <tr>
                <td colspan="1"> Name of Faculty:</td>
                <td class="ju" colspan="9">
                    <form method='post' action="index.php">
                        <select class="dropdown" name="filteredValue" id="usernameDropdown">
                            <option value="" selected>Select Faculty</option>
                            <?php
                            $options_qry = "SELECT DISTINCT id, NameofFaculty FROM faculty";
                            $options_res = mysqli_query($conn, $options_qry);
                            while ($option_data = mysqli_fetch_assoc($options_res)) {
                                echo '<option value="' . $option_data['id'] . '">' . $option_data['NameofFaculty'] . '</option>';
                            }
                            
                            ?>
                        </select>
                        <input type="submit" value="filter" />
                        <button type="submit" name="create_table" value="true">Create Table and Insert Data</button>
                    </form>
                </td>
                <td colspan="1"> Semester:</td>
                <td class="ju" colspan="2"> Second</td>
                <td colspan="2"> Academic Year:</td>
                <td class="ju" colspan="3"> 2023-2024</td>
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
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='6:00 - 7:00 AM' AND faculty_id='$selected'";
                $res_67 = mysqli_query($conn, $qry);

                if ($res_67 && mysqli_num_rows($res_67) > 0) {
                    $trRendered = false;
                    while ($data_67 = mysqli_fetch_assoc($res_67)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr">
                                <td rowspan="2">6:00 - 7:00 <input id="time" hidden value="6:00 - 7:00 AM" /> </td>
                                <td> <input id="edit_monday_67_1st_rw" value="<?php echo $data_67['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room_1_rw" value="<?php echo $data_67['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_67_1st_rw" value="<?php echo $data_67['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room_2_rw" value="<?php echo $data_67['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_67_1st_rw" value="<?php echo $data_67['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room_3_rw" value="<?php echo $data_67['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_67_1st_rw" value="<?php echo $data_67['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room_4_rw" value="<?php echo $data_67['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_67_1st_rw" value="<?php echo $data_67['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room_5_rw" value="<?php echo $data_67['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_67_1st_rw" value="<?php echo $data_67['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room_6_rw" value="<?php echo $data_67['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_67_1st_rw" value="<?php echo $data_67['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room_7_rw" value="<?php echo $data_67['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc_1st_rw" value="<?php echo $data_67['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section_1st_rw" value="<?php echo $data_67['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_67_1st_rw" value="<?php echo $data_67['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr2">
                                <td> <input id="edit_monday_67_2nd_rw" class="form-control" value="<?php echo $data_67['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_67_2nd_rw" class="form-control" value="<?php echo $data_67['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_67_2nd_rw" class="form-control" value="<?php echo $data_67['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_67_2nd_rw" class="form-control" value="<?php echo $data_67['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_67_2nd_rw" class="form-control" value="<?php echo $data_67['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_67_2nd_rw" class="form-control" value="<?php echo $data_67['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_67_2nd_rw" class="form-control" value="<?php echo $data_67['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc_2nd_rw" value="<?php echo $data_67['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section_2nd_rw" value="<?php echo $data_67['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_67_2nd_rw" value="<?php echo $data_67['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>

                            <tr id="toggletr1">
                                <td rowspan="2">6:00 - 7:00 <input id="time" hidden value="6:00 - 7:00 AM" /> </td>
                                <td> <?php echo $data_67['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_1']; ?> </td>
                                <td> <?php echo $data_67['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_2']; ?> </td>
                                <td> <?php echo $data_67['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_3']; ?> </td>
                                <td> <?php echo $data_67['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_4']; ?> </td>
                                <td> <?php echo $data_67['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_5']; ?> </td>
                                <td> <?php echo $data_67['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_6']; ?> </td>
                                <td> <?php echo $data_67['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_67['room_7']; ?> </td>
                                <td> <?php echo $data_67['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_67['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_67['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr3">
                                <td> <?php echo $data_67['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_67['nos_2nd_rw']; ?> </td>
                            </tr>
                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">6:00 - 7:00 <input id="time" hidden value="6:00 - 7:00 AM" /> </td>
                        <td> <input id="edit_monday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_67_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room_7_rw" hidden /> </td>
                        <td> <input id="edit_cc_1st_rw" hidden /> </td>
                        <td> <input id="edit_section_1st_rw" hidden /> </td>
                        <td> <input id="edit_last_67_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_67_2nd_rw" hidden /> </td>
                        <td> <input id="edit_cc_2nd_rw" hidden /> </td>
                        <td> <input id="edit_section_2nd_rw" hidden /> </td>
                        <td> <input id="edit_last_67_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">6:00 - 7:00 <input id="time" hidden value="6:00 - 7:00 AM" /> </td>
                    <td> <input id="edit_monday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_67_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room_7_rw" hidden /> </td>
                    <td> <input id="edit_cc_1st_rw" hidden /> </td>
                    <td> <input id="edit_section_1st_rw" hidden /> </td>
                    <td> <input id="edit_last_67_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_67_2nd_rw" hidden /> </td>
                    <td> <input id="edit_cc_2nd_rw" hidden /> </td>
                    <td> <input id="edit_section_2nd_rw" hidden /> </td>
                    <td> <input id="edit_last_67_2nd_rw" hidden /> </td>
                </tr>

            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='7:00 - 8:00 AM' AND faculty_id='$selected'";
                $res_78 = mysqli_query($conn, $qry);

                if ($res_78 && mysqli_num_rows($res_78) > 0) {
                    $trRendered = false;
                    while ($data_78 = mysqli_fetch_assoc($res_78)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr4">
                                <td rowspan="2">7:00 - 8:00 <input id="time78" hidden value="7:00 - 8:00 AM" /> </td>
                                <td> <input id="edit_monday_78_1st_rw" value="<?php echo $data_78['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room78_1_rw" value="<?php echo $data_78['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_78_1st_rw" value="<?php echo $data_78['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room78_2_rw" value="<?php echo $data_78['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_78_1st_rw" value="<?php echo $data_78['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room78_3_rw" value="<?php echo $data_78['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_78_1st_rw" value="<?php echo $data_78['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room78_4_rw" value="<?php echo $data_78['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_78_1st_rw" value="<?php echo $data_78['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room78_5_rw" value="<?php echo $data_78['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_78_1st_rw" value="<?php echo $data_78['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room78_6_rw" value="<?php echo $data_78['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_78_1st_rw" value="<?php echo $data_78['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room78_7_rw" value="<?php echo $data_78['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc78_1st_rw" value="<?php echo $data_78['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section78_1st_rw" value="<?php echo $data_78['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_78_1st_rw" value="<?php echo $data_78['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr6">
                                <td> <input id="edit_monday_78_2nd_rw" class="form-control" value="<?php echo $data_78['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_78_2nd_rw" class="form-control" value="<?php echo $data_78['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_78_2nd_rw" class="form-control" value="<?php echo $data_78['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_78_2nd_rw" class="form-control" value="<?php echo $data_78['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_78_2nd_rw" class="form-control" value="<?php echo $data_78['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_78_2nd_rw" class="form-control" value="<?php echo $data_78['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_78_2nd_rw" class="form-control" value="<?php echo $data_78['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc78_2nd_rw" value="<?php echo $data_78['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section78_2nd_rw" value="<?php echo $data_78['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_78_2nd_rw" value="<?php echo $data_78['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>

                            <tr id="toggletr5">
                                <td rowspan="2">7:00 - 8:00 <input id="time78" hidden value="7:00 - 8:00 AM" /> </td>
                                <td> <?php echo $data_78['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_1']; ?> </td>
                                <td> <?php echo $data_78['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_2']; ?> </td>
                                <td> <?php echo $data_78['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_3']; ?> </td>
                                <td> <?php echo $data_78['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_4']; ?> </td>
                                <td> <?php echo $data_78['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_5']; ?> </td>
                                <td> <?php echo $data_78['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_6']; ?> </td>
                                <td> <?php echo $data_78['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_78['room_7']; ?> </td>
                                <td> <?php echo $data_78['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_78['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_78['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr7">
                                <td> <?php echo $data_78['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_78['nos_2nd_rw']; ?> </td>
                            </tr>


                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">7:00 - 8:00 <input id="time78" hidden value="7:00 - 8:00 AM" /> </td>
                        <td> <input id="edit_monday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_78_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room78_7_rw" hidden /> </td>
                        <td> <input id="edit_cc78_1st_rw" hidden /> </td>
                        <td> <input id="edit_section78_1st_rw" hidden /> </td>
                        <td> <input id="edit_last_78_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_cc78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_section78_2nd_rw" hidden /> </td>
                        <td> <input id="edit_last_78_2nd_rw" hidden /> </td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">7:00 - 8:00 <input id="time78" hidden value="7:00 - 8:00 AM" /> </td>
                    <td> <input id="edit_monday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_78_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room78_7_rw" hidden /> </td>
                    <td> <input id="edit_cc78_1st_rw" hidden /> </td>
                    <td> <input id="edit_section78_1st_rw" hidden /> </td>
                    <td> <input id="edit_last_78_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_cc78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_section78_2nd_rw" hidden /> </td>
                    <td> <input id="edit_last_78_2nd_rw" hidden /> </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='8:00 - 9:00 AM' AND faculty_id='$selected'";
                $res_89 = mysqli_query($conn, $qry);

                if ($res_89 && mysqli_num_rows($res_89) > 0) {
                    $trRendered = false;
                    while ($data_89 = mysqli_fetch_assoc($res_89)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr8">
                                <td rowspan="2">8:00 - 9:00 <input id="time89" hidden value="8:00 - 9:00 AM" /> </td>
                                <td> <input id="edit_monday_89_1st_rw" value="<?php echo $data_89['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room89_1_rw" value="<?php echo $data_89['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_89_1st_rw" value="<?php echo $data_89['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room89_2_rw" value="<?php echo $data_89['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_89_1st_rw" value="<?php echo $data_89['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room89_3_rw" value="<?php echo $data_89['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_89_1st_rw" value="<?php echo $data_89['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room89_4_rw" value="<?php echo $data_89['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_89_1st_rw" value="<?php echo $data_89['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room89_5_rw" value="<?php echo $data_89['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_89_1st_rw" value="<?php echo $data_89['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room89_6_rw" value="<?php echo $data_89['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_89_1st_rw" value="<?php echo $data_89['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room89_7_rw" value="<?php echo $data_89['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc89_1st_rw" value="<?php echo $data_89['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section89_1st_rw" value="<?php echo $data_89['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_89_1st_rw" value="<?php echo $data_89['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr10">
                                <td> <input id="edit_monday_89_2nd_rw" class="form-control" value="<?php echo $data_89['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_89_2nd_rw" class="form-control" value="<?php echo $data_89['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_89_2nd_rw" class="form-control" value="<?php echo $data_89['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_89_2nd_rw" class="form-control" value="<?php echo $data_89['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_89_2nd_rw" class="form-control" value="<?php echo $data_89['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_89_2nd_rw" class="form-control" value="<?php echo $data_89['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_89_2nd_rw" class="form-control" value="<?php echo $data_89['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc89_2nd_rw" value="<?php echo $data_89['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section89_2nd_rw" value="<?php echo $data_89['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_89_2nd_rw" value="<?php echo $data_89['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>

                            <tr id="toggletr9">
                                <td rowspan="2">8:00 - 9:00 <input id="time89" hidden value="8:00 - 9:00 AM" /> </td>
                                <td> <?php echo $data_89['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_1']; ?> </td>
                                <td> <?php echo $data_89['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_2']; ?> </td>
                                <td> <?php echo $data_89['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_3']; ?> </td>
                                <td> <?php echo $data_89['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_4']; ?> </td>
                                <td> <?php echo $data_89['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_5']; ?> </td>
                                <td> <?php echo $data_89['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_6']; ?> </td>
                                <td> <?php echo $data_89['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_89['room_7']; ?> </td>
                                <td> <?php echo $data_89['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_89['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_89['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr11">
                                <td> <?php echo $data_89['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_89['nos_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">8:00 - 9:00 <input id="time89" hidden value="8:00 - 9:00 AM" /> </td>
                        <td> <input id="edit_monday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_89_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room89_7_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc89_1st_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section89_1st_rw" hidden />
                        </td>
                        <!-- will add another col for this field on db -->
                        <td> <input id="edit_last_89_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_89_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_89_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_89_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_89_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_89_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_89_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_89_2nd_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc89_2nd_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section89_2nd_rw" hidden />
                        </td>
                        <td> <input id="edit_last_89_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">8:00 - 9:00 <input id="time89" hidden value="8:00 - 9:00 AM" /> </td>
                    <td> <input id="edit_monday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_89_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room89_7_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc89_1st_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section89_1st_rw" hidden />
                    </td>
                    <!-- will add another col for this field on db -->
                    <td> <input id="edit_last_89_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_89_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_89_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_89_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_89_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_89_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_89_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_89_2nd_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc89_2nd_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section89_2nd_rw" hidden />
                    </td>
                    <td> <input id="edit_last_89_2nd_rw" hidden /> </td>
                </tr>

            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='9:00 - 10:00 AM' AND faculty_id='$selected'";
                $res_910 = mysqli_query($conn, $qry);

                if ($res_910 && mysqli_num_rows($res_910) > 0) {
                    $trRendered = false;
                    while ($data_910 = mysqli_fetch_assoc($res_910)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr12">
                                <td rowspan="2">9:00 - 10:00 <input id="time910" hidden value="9:00 - 10:00 AM" /> </td>
                                <td> <input id="edit_monday_910_1st_rw" value="<?php echo $data_910['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room910_1_rw" value="<?php echo $data_910['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_910_1st_rw" value="<?php echo $data_910['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room910_2_rw" value="<?php echo $data_910['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_910_1st_rw" value="<?php echo $data_910['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room910_3_rw" value="<?php echo $data_910['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_910_1st_rw" value="<?php echo $data_910['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room910_4_rw" value="<?php echo $data_910['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_910_1st_rw" value="<?php echo $data_910['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room910_5_rw" value="<?php echo $data_910['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_910_1st_rw" value="<?php echo $data_910['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room910_6_rw" value="<?php echo $data_910['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_910_1st_rw" value="<?php echo $data_910['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room910_7_rw" value="<?php echo $data_910['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc910_1st_rw" value="<?php echo $data_910['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section910_1st_rw" value="<?php echo $data_910['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_910_1st_rw" value="<?php echo $data_910['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr14">
                                <td> <input id="edit_monday_910_2nd_rw" class="form-control" value="<?php echo $data_910['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_910_2nd_rw" class="form-control" value="<?php echo $data_910['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_910_2nd_rw" class="form-control" value="<?php echo $data_910['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_910_2nd_rw" class="form-control" value="<?php echo $data_910['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_910_2nd_rw" class="form-control" value="<?php echo $data_910['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_910_2nd_rw" class="form-control" value="<?php echo $data_910['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_910_2nd_rw" class="form-control" value="<?php echo $data_910['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc910_2nd_rw" value="<?php echo $data_910['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section910_2nd_rw" value="<?php echo $data_910['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_910_2nd_rw" value="<?php echo $data_910['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>


                            <tr id="toggletr13">
                                <td rowspan="2">9:00 - 10:00 <input id="time910" hidden value="9:00 - 10:00 AM" /> </td>
                                <td> <?php echo $data_910['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_1']; ?> </td>
                                <td> <?php echo $data_910['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_2']; ?> </td>
                                <td> <?php echo $data_910['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_3']; ?> </td>
                                <td> <?php echo $data_910['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_4']; ?> </td>
                                <td> <?php echo $data_910['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_5']; ?> </td>
                                <td> <?php echo $data_910['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_6']; ?> </td>
                                <td> <?php echo $data_910['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_910['room_7']; ?> </td>
                                <td> <?php echo $data_910['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_910['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_910['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr15">
                                <td> <?php echo $data_910['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_910['nos_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">9:00 - 10:00 <input id="time910" hidden value="9:00 - 10:00 AM" /> </td>
                        <td> <input id="edit_monday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_910_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room910_7_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc910_1st_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section910_1st_rw" hidden />
                        </td>
                        <!-- will add another col for this field on db -->
                        <td> <input id="edit_last_910_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_910_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_910_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_910_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_910_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_910_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_910_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_910_2nd_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc910_2nd_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section910_2nd_rw" hidden />
                        </td>
                        <td> <input id="edit_last_910_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">9:00 - 10:00 <input id="time910" hidden value="9:00 - 10:00 AM" /> </td>
                    <td> <input id="edit_monday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_910_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room910_7_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc910_1st_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section910_1st_rw" hidden />
                    </td>
                    <!-- will add another col for this field on db -->
                    <td> <input id="edit_last_910_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_910_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_910_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_910_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_910_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_910_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_910_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_910_2nd_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc910_2nd_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section910_2nd_rw" hidden />
                    </td>
                    <td> <input id="edit_last_910_2nd_rw" hidden /> </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='10:00 - 11:00 AM' AND faculty_id='$selected'";
                $res_1011 = mysqli_query($conn, $qry);

                if ($res_1011 && mysqli_num_rows($res_1011) > 0) {
                    $trRendered = false;
                    while ($data_1011 = mysqli_fetch_assoc($res_1011)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr16">
                                <td rowspan="2">10:00 - 11:00 <input id="time1011" hidden value="10:00 - 11:00 AM" /> </td>
                                <td> <input id="edit_monday_1011_1st_rw" value="<?php echo $data_1011['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room1011_1_rw" value="<?php echo $data_1011['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_1011_1st_rw" value="<?php echo $data_1011['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room1011_2_rw" value="<?php echo $data_1011['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_1011_1st_rw" value="<?php echo $data_1011['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1011_3_rw" value="<?php echo $data_1011['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_1011_1st_rw" value="<?php echo $data_1011['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1011_4_rw" value="<?php echo $data_1011['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_1011_1st_rw" value="<?php echo $data_1011['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1011_5_rw" value="<?php echo $data_1011['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_1011_1st_rw" value="<?php echo $data_1011['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1011_6_rw" value="<?php echo $data_1011['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_1011_1st_rw" value="<?php echo $data_1011['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1011_7_rw" value="<?php echo $data_1011['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc1011_1st_rw" value="<?php echo $data_1011['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section1011_1st_rw" value="<?php echo $data_1011['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_1011_1st_rw" value="<?php echo $data_1011['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr18">
                                <td> <input id="edit_monday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_1011_2nd_rw" class="form-control" value="<?php echo $data_1011['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc1011_2nd_rw" value="<?php echo $data_1011['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section1011_2nd_rw" value="<?php echo $data_1011['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_1011_2nd_rw" value="<?php echo $data_1011['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>

                            <tr id="toggletr17">
                                <td rowspan="2">10:00 - 11:00 <input id="time1011" hidden value="10:00 - 11:00 AM" /> </td>
                                <td> <?php echo $data_1011['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_1']; ?> </td>
                                <td> <?php echo $data_1011['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_2']; ?> </td>
                                <td> <?php echo $data_1011['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_3']; ?> </td>
                                <td> <?php echo $data_1011['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_4']; ?> </td>
                                <td> <?php echo $data_1011['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_5']; ?> </td>
                                <td> <?php echo $data_1011['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_6']; ?> </td>
                                <td> <?php echo $data_1011['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1011['room_7']; ?> </td>
                                <td> <?php echo $data_1011['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_1011['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_1011['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr19">
                                <td> <?php echo $data_1011['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1011['nos_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">10:00 - 11:00 <input id="time1011" hidden value="10:00 - 11:00 AM" /> </td>
                        <td> <input id="edit_monday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_1011_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1011_7_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc1011_1st_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section1011_1st_rw" hidden />
                        </td>
                        <!-- will add another col for this field on db -->
                        <td> <input id="edit_last_1011_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_1011_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_1011_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_1011_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_1011_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_1011_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_1011_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_1011_2nd_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc1011_2nd_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section1011_2nd_rw" hidden />
                        </td>
                        <td> <input id="edit_last_1011_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">10:00 - 11:00 <input id="time1011" hidden value="10:00 - 11:00 AM" /> </td>
                    <td> <input id="edit_monday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_1011_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1011_7_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc1011_1st_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section1011_1st_rw" hidden />
                    </td>
                    <!-- will add another col for this field on db -->
                    <td> <input id="edit_last_1011_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_1011_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_1011_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_1011_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_1011_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_1011_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_1011_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_1011_2nd_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc1011_2nd_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section1011_2nd_rw" hidden />
                    </td>
                    <td> <input id="edit_last_1011_2nd_rw" hidden /> </td>
                </tr>

            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='11:00 - 12:00 PM' AND faculty_id='$selected'";
                $res_1112 = mysqli_query($conn, $qry);

                if ($res_1112 && mysqli_num_rows($res_1112) > 0) {
                    $trRendered = false;
                    while ($data_1112 = mysqli_fetch_assoc($res_1112)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr20">
                                <td rowspan="2">11:00 - 12:00 <input id="time1112" hidden value="11:00 - 12:00 PM" /> </td>
                                <td> <input id="edit_monday_1112_1st_rw" value="<?php echo $data_1112['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room1112_1_rw" value="<?php echo $data_1112['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_1112_1st_rw" value="<?php echo $data_1112['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room1112_2_rw" value="<?php echo $data_1112['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_1112_1st_rw" value="<?php echo $data_1112['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1112_3_rw" value="<?php echo $data_1112['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_1112_1st_rw" value="<?php echo $data_1112['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1112_4_rw" value="<?php echo $data_1112['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_1112_1st_rw" value="<?php echo $data_1112['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1112_5_rw" value="<?php echo $data_1112['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_1112_1st_rw" value="<?php echo $data_1112['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1112_6_rw" value="<?php echo $data_1112['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_1112_1st_rw" value="<?php echo $data_1112['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1112_7_rw" value="<?php echo $data_1112['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc1112_1st_rw" value="<?php echo $data_1112['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section1112_1st_rw" value="<?php echo $data_1112['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_1112_1st_rw" value="<?php echo $data_1112['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr22">
                                <td> <input id="edit_monday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_1112_2nd_rw" class="form-control" value="<?php echo $data_1112['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc1112_2nd_rw" value="<?php echo $data_1112['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section1112_2nd_rw" value="<?php echo $data_1112['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_1112_2nd_rw" value="<?php echo $data_1112['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>

                            <tr id="toggletr21">
                                <td rowspan="2">11:00 - 12:00 <input id="time1112" hidden value="11:00 - 12:00 PM" /> </td>
                                <td> <?php echo $data_1112['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_1']; ?> </td>
                                <td> <?php echo $data_1112['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_2']; ?> </td>
                                <td> <?php echo $data_1112['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_3']; ?> </td>
                                <td> <?php echo $data_1112['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_4']; ?> </td>
                                <td> <?php echo $data_1112['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_5']; ?> </td>
                                <td> <?php echo $data_1112['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_6']; ?> </td>
                                <td> <?php echo $data_1112['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1112['room_7']; ?> </td>
                                <td> <?php echo $data_1112['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_1112['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_1112['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr23">
                                <td> <?php echo $data_1112['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1112['nos_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">11:00 - 12:00 <input id="time1112" hidden value="11:00 - 12:00 PM" /> </td>
                        <td> <input id="edit_monday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_1112_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1112_7_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc1112_1st_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section1112_1st_rw" hidden />
                        </td>
                        <!-- will add another col for this field on db -->
                        <td> <input id="edit_last_1112_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_1112_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_1112_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_1112_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_1112_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_1112_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_1112_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_1112_2nd_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc1112_2nd_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section1112_2nd_rw" hidden />
                        </td>
                        <td> <input id="edit_last_1112_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">11:00 - 12:00 <input id="time1112" hidden value="11:00 - 12:00 PM" /> </td>
                    <td> <input id="edit_monday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_1112_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1112_7_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc1112_1st_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section1112_1st_rw" hidden />
                    </td>
                    <!-- will add another col for this field on db -->
                    <td> <input id="edit_last_1112_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_1112_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_1112_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_1112_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_1112_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_1112_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_1112_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_1112_2nd_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc1112_2nd_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section1112_2nd_rw" hidden />
                    </td>
                    <td> <input id="edit_last_1112_2nd_rw" hidden /> </td>
                </tr>

            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='12:00 - 1:00 PM' AND faculty_id='$selected'";
                $res_1201 = mysqli_query($conn, $qry);

                if ($res_1201 && mysqli_num_rows($res_1201) > 0) {
                    $trRendered = false;
                    while ($data_1201 = mysqli_fetch_assoc($res_1201)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr24">
                                <td rowspan="2">12:00 - 1:00 <input id="time1201" hidden value="12:00 - 1:00 PM" /> </td>
                                <td> <input id="edit_monday_1201_1st_rw" value="<?php echo $data_1201['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room1201_1_rw" value="<?php echo $data_1201['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_1201_1st_rw" value="<?php echo $data_1201['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room1201_2_rw" value="<?php echo $data_1201['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_1201_1st_rw" value="<?php echo $data_1201['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1201_3_rw" value="<?php echo $data_1201['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_1201_1st_rw" value="<?php echo $data_1201['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1201_4_rw" value="<?php echo $data_1201['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_1201_1st_rw" value="<?php echo $data_1201['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1201_5_rw" value="<?php echo $data_1201['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_1201_1st_rw" value="<?php echo $data_1201['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1201_6_rw" value="<?php echo $data_1201['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_1201_1st_rw" value="<?php echo $data_1201['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room1201_7_rw" value="<?php echo $data_1201['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc1201_1st_rw" value="<?php echo $data_1201['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section1201_1st_rw" value="<?php echo $data_1201['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_1201_1st_rw" value="<?php echo $data_1201['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr26">
                                <td> <input id="edit_monday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_1201_2nd_rw" class="form-control" value="<?php echo $data_1201['sunday_2nd_rw']; ?>" /></td>
                                <td>
                                    <input id="edit_cc1201_2nd_rw" value="<?php echo $data_1201['cc_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section1201_2nd_rw" value="<?php echo $data_1201['section_2nd_rw']; ?>" class="form-control" />
                                </td>
                                <td> <input id="edit_last_1201_2nd_rw" value="<?php echo $data_1201['nos_2nd_rw']; ?>" class="form-control" /></td>
                            </tr>

                            <tr id="toggletr25">
                                <td rowspan="2">12:00 - 1:00 <input id="time1201" hidden value="12:00 - 1:00 PM" /> </td>
                                <td> <?php echo $data_1201['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_1']; ?> </td>
                                <td> <?php echo $data_1201['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_2']; ?> </td>
                                <td> <?php echo $data_1201['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_3']; ?> </td>
                                <td> <?php echo $data_1201['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_4']; ?> </td>
                                <td> <?php echo $data_1201['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_5']; ?> </td>
                                <td> <?php echo $data_1201['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_6']; ?> </td>
                                <td> <?php echo $data_1201['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_1201['room_7']; ?> </td>
                                <td> <?php echo $data_1201['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_1201['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_1201['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr27">
                                <td> <?php echo $data_1201['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['sunday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['cc_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['section_2nd_rw']; ?> </td>
                                <td> <?php echo $data_1201['nos_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">12:00 - 1:00 <input id="time1201" hidden value="12:00 - 1:00 PM" /> </td>
                        <td> <input id="edit_monday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_1201_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room1201_7_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc1201_1st_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section1201_1st_rw" hidden />
                        </td>
                        <!-- will add another col for this field on db -->
                        <td> <input id="edit_last_1201_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_1201_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_1201_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_1201_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_1201_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_1201_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_1201_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_1201_2nd_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc1201_2nd_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section1201_2nd_rw" hidden />
                        </td>
                        <td> <input id="edit_last_1201_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">12:00 - 1:00 <input id="time1201" hidden value="12:00 - 1:00 PM" /> </td>
                    <td> <input id="edit_monday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_1201_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room1201_7_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc1201_1st_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section1201_1st_rw" hidden />
                    </td>
                    <!-- will add another col for this field on db -->
                    <td> <input id="edit_last_1201_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_1201_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_1201_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_1201_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_1201_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_1201_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_1201_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_1201_2nd_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc1201_2nd_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section1201_2nd_rw" hidden />
                    </td>
                    <td> <input id="edit_last_1201_2nd_rw" hidden /> </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='1:00 - 2:00 PM' AND faculty_id='$selected'";
                $res_0102 = mysqli_query($conn, $qry);

                if ($res_0102 && mysqli_num_rows($res_0102) > 0) {
                    $trRendered = false;
                    while ($data_0102 = mysqli_fetch_assoc($res_0102)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr28">
                                <td rowspan="2">1:00 - 2:00 <input id="time0102" hidden value="1:00 - 2:00 PM" /> </td>
                                <td> <input id="edit_monday_0102_1st_rw" value="<?php echo $data_0102['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0102_1_rw" value="<?php echo $data_0102['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0102_1st_rw" value="<?php echo $data_0102['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0102_2_rw" value="<?php echo $data_0102['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0102_1st_rw" value="<?php echo $data_0102['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0102_3_rw" value="<?php echo $data_0102['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0102_1st_rw" value="<?php echo $data_0102['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0102_4_rw" value="<?php echo $data_0102['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0102_1st_rw" value="<?php echo $data_0102['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0102_5_rw" value="<?php echo $data_0102['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0102_1st_rw" value="<?php echo $data_0102['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0102_6_rw" value="<?php echo $data_0102['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0102_1st_rw" value="<?php echo $data_0102['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0102_7_rw" value="<?php echo $data_0102['room_7']; ?>" class="form-control" /> </td>
                                <td>
                                    <input id="edit_cc0102_1st_rw" value="<?php echo $data_0102['cc_1st_rw']; ?>" class="form-control" />
                                </td>
                                <td>
                                    <input id="edit_section0102_1st_rw" value="<?php echo $data_0102['section_1st_rw']; ?>" class="form-control" />
                                </td>
                                <!-- will add another col for this field on db -->
                                <td> <input id="edit_last_0102_1st_rw" value="<?php echo $data_0102['nos_1st_rw']; ?>" class="form-control" /></td>
                            </tr>
                            <tr id="toggletr30">
                                <td> <input id="edit_monday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0102_2nd_rw" class="form-control" value="<?php echo $data_0102['sunday_2nd_rw']; ?>" /></td>
                                <td colspan="3" rowspan="6">
                                    <input id="edit_timeline0102_rw" value="<?php echo $data_0102['timeline']; ?>" class="form-control" />
                                </td>
                            </tr>

                            <tr id="toggletr29">
                                <td rowspan="2">1:00 - 2:00 <input id="time0102" hidden value="1:00 - 2:00 PM" /> </td>
                                <td> <?php echo $data_0102['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_1']; ?> </td>
                                <td> <?php echo $data_0102['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_2']; ?> </td>
                                <td> <?php echo $data_0102['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_3']; ?> </td>
                                <td> <?php echo $data_0102['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_4']; ?> </td>
                                <td> <?php echo $data_0102['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_5']; ?> </td>
                                <td> <?php echo $data_0102['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_6']; ?> </td>
                                <td> <?php echo $data_0102['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0102['room_7']; ?> </td>
                                <td> <?php echo $data_0102['cc_1st_rw']; ?> </td>
                                <td> <?php echo $data_0102['section_1st_rw']; ?> </td>
                                <!-- will add another col for this field on db -->
                                <td> <?php echo $data_0102['nos_1st_rw']; ?> </td>
                            </tr>
                            <tr id="toggletr31">
                                <td> <?php echo $data_0102['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0102['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0102['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0102['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0102['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0102['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0102['sunday_2nd_rw']; ?> </td>
                                <td colspan="3" rowspan="6"> <?php echo $data_0102['timeline']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">1:00 - 2:00 <input id="time0102" hidden value="1:00 - 2:00 PM" /> </td>
                        <td> <input id="edit_monday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0102_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0102_7_rw" hidden /> </td>
                        <td>
                            <input id="edit_cc0102_1st_rw" hidden />
                        </td>
                        <td>
                            <input id="edit_section0102_1st_rw" hidden />
                        </td>
                        <!-- will add another col for this field on db -->
                        <td> <input id="edit_last_0102_1st_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0102_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0102_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0102_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0102_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0102_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0102_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0102_2nd_rw" hidden /> </td>
                        <td colspan="3" rowspan="6">
                            <input id="edit_timeline0102_rw" hidden />
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">1:00 - 2:00 <input id="time0102" hidden value="1:00 - 2:00 PM" /> </td>
                    <td> <input id="edit_monday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0102_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0102_7_rw" hidden /> </td>
                    <td>
                        <input id="edit_cc0102_1st_rw" hidden />
                    </td>
                    <td>
                        <input id="edit_section0102_1st_rw" hidden />
                    </td>
                    <!-- will add another col for this field on db -->
                    <td> <input id="edit_last_0102_1st_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0102_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0102_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0102_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0102_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0102_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0102_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0102_2nd_rw" hidden /> </td>
                    <td colspan="3" rowspan="6">
                        <input id="edit_timeline0102_rw" hidden />
                    </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='2:00 - 3:00 PM' AND faculty_id='$selected'";
                $res_0203 = mysqli_query($conn, $qry);

                if ($res_0203 && mysqli_num_rows($res_0203) > 0) {
                    $trRendered = false;
                    while ($data_0203 = mysqli_fetch_assoc($res_0203)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr32">
                                <td rowspan="2">2:00 - 3:00 <input id="time0203" hidden value="2:00 - 3:00 PM" /> </td>
                                <td> <input id="edit_monday_0203_1st_rw" value="<?php echo $data_0203['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0203_1_rw" value="<?php echo $data_0203['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0203_1st_rw" value="<?php echo $data_0203['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0203_2_rw" value="<?php echo $data_0203['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0203_1st_rw" value="<?php echo $data_0203['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0203_3_rw" value="<?php echo $data_0203['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0203_1st_rw" value="<?php echo $data_0203['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0203_4_rw" value="<?php echo $data_0203['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0203_1st_rw" value="<?php echo $data_0203['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0203_5_rw" value="<?php echo $data_0203['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0203_1st_rw" value="<?php echo $data_0203['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0203_6_rw" value="<?php echo $data_0203['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0203_1st_rw" value="<?php echo $data_0203['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0203_7_rw" value="<?php echo $data_0203['room_7']; ?>" class="form-control" /> </td>

                            </tr>
                            <tr id="toggletr34">
                                <td> <input id="edit_monday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0203_2nd_rw" class="form-control" value="<?php echo $data_0203['sunday_2nd_rw']; ?>" /></td>

                            </tr>

                            <tr id="toggletr33">
                                <td rowspan="2">2:00 - 3:00 <input id="time0203" hidden value="2:00 - 3:00 PM" /> </td>
                                <td> <?php echo $data_0203['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_1']; ?> </td>
                                <td> <?php echo $data_0203['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_2']; ?> </td>
                                <td> <?php echo $data_0203['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_3']; ?> </td>
                                <td> <?php echo $data_0203['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_4']; ?> </td>
                                <td> <?php echo $data_0203['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_5']; ?> </td>
                                <td> <?php echo $data_0203['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_6']; ?> </td>
                                <td> <?php echo $data_0203['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0203['room_7']; ?> </td>
                            </tr>
                            <tr id="toggletr35">
                                <td> <?php echo $data_0203['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0203['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0203['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0203['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0203['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0203['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0203['sunday_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">2:00 - 3:00 <input id="time0203" hidden value="2:00 - 3:00 PM" /> </td>
                        <td> <input id="edit_monday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0203_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0203_7_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0203_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0203_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0203_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0203_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0203_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0203_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0203_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">2:00 - 3:00 <input id="time0203" hidden value="2:00 - 3:00 PM" /> </td>
                    <td> <input id="edit_monday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0203_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0203_7_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0203_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0203_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0203_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0203_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0203_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0203_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0203_2nd_rw" hidden /> </td>
                </tr>

            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='3:00 - 4:00 PM' AND faculty_id='$selected'";
                $res_0304 = mysqli_query($conn, $qry);

                if ($res_0304 && mysqli_num_rows($res_0304) > 0) {
                    $trRendered = false;
                    while ($data_0304 = mysqli_fetch_assoc($res_0304)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr36">
                                <td rowspan="2">3:00 - 4:00 <input id="time0304" hidden value="3:00 - 4:00 PM" /> </td>
                                <td> <input id="edit_monday_0304_1st_rw" value="<?php echo $data_0304['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0304_1_rw" value="<?php echo $data_0304['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0304_1st_rw" value="<?php echo $data_0304['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0304_2_rw" value="<?php echo $data_0304['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0304_1st_rw" value="<?php echo $data_0304['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0304_3_rw" value="<?php echo $data_0304['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0304_1st_rw" value="<?php echo $data_0304['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0304_4_rw" value="<?php echo $data_0304['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0304_1st_rw" value="<?php echo $data_0304['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0304_5_rw" value="<?php echo $data_0304['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0304_1st_rw" value="<?php echo $data_0304['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0304_6_rw" value="<?php echo $data_0304['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0304_1st_rw" value="<?php echo $data_0304['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0304_7_rw" value="<?php echo $data_0304['room_7']; ?>" class="form-control" /> </td>

                            </tr>
                            <tr id="toggletr38">
                                <td> <input id="edit_monday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0304_2nd_rw" class="form-control" value="<?php echo $data_0304['sunday_2nd_rw']; ?>" /></td>

                            </tr>

                            <tr id="toggletr37">
                                <td rowspan="2">3:00 - 4:00 <input id="time0304" hidden value="3:00 - 4:00 PM" /> </td>
                                <td> <?php echo $data_0304['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_1']; ?> </td>
                                <td> <?php echo $data_0304['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_2']; ?> </td>
                                <td> <?php echo $data_0304['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_3']; ?> </td>
                                <td> <?php echo $data_0304['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_4']; ?> </td>
                                <td> <?php echo $data_0304['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_5']; ?> </td>
                                <td> <?php echo $data_0304['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_6']; ?> </td>
                                <td> <?php echo $data_0304['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0304['room_7']; ?> </td>
                            </tr>
                            <tr id="toggletr39">
                                <td> <?php echo $data_0304['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0304['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0304['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0304['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0304['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0304['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0304['sunday_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">3:00 - 4:00 <input id="time0304" hidden /> </td>
                        <td> <input id="edit_monday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0304_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0304_7_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0304_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0304_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0304_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0304_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0304_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0304_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0304_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">3:00 - 4:00 <input id="time0304" hidden /> </td>
                    <td> <input id="edit_monday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0304_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0304_7_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0304_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0304_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0304_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0304_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0304_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0304_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0304_2nd_rw" hidden /> </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='4:00 - 5:00 PM' AND faculty_id='$selected'";
                $res_0405 = mysqli_query($conn, $qry);

                if ($res_0405 && mysqli_num_rows($res_0405) > 0) {
                    $trRendered = false;
                    while ($data_0405 = mysqli_fetch_assoc($res_0405)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr40">
                                <td rowspan="2">4:00 - 5:00 <input id="time0405" hidden value="4:00 - 5:00 PM" /> </td>
                                <td> <input id="edit_monday_0405_1st_rw" value="<?php echo $data_0405['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0405_1_rw" value="<?php echo $data_0405['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0405_1st_rw" value="<?php echo $data_0405['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0405_2_rw" value="<?php echo $data_0405['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0405_1st_rw" value="<?php echo $data_0405['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0405_3_rw" value="<?php echo $data_0405['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0405_1st_rw" value="<?php echo $data_0405['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0405_4_rw" value="<?php echo $data_0405['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0405_1st_rw" value="<?php echo $data_0405['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0405_5_rw" value="<?php echo $data_0405['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0405_1st_rw" value="<?php echo $data_0405['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0405_6_rw" value="<?php echo $data_0405['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0405_1st_rw" value="<?php echo $data_0405['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0405_7_rw" value="<?php echo $data_0405['room_7']; ?>" class="form-control" /> </td>
                            </tr>
                            <tr id="toggletr42">
                                <td> <input id="edit_monday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0405_2nd_rw" class="form-control" value="<?php echo $data_0405['sunday_2nd_rw']; ?>" /></td>
                                <td colspan="3" rowspan="6">
                                    <input id="edit_timeline0405_2_rw" value="<?php echo $data_0405['timeline2']; ?>" class="form-control" />
                                </td>
                            </tr>
                            <tr id="toggletr41">
                                <td rowspan="2">4:00 - 5:00 <input id="time0405" hidden value="4:00 - 5:00 PM" /> </td>
                                <td> <?php echo $data_0405['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_1']; ?> </td>
                                <td> <?php echo $data_0405['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_2']; ?> </td>
                                <td> <?php echo $data_0405['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_3']; ?> </td>
                                <td> <?php echo $data_0405['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_4']; ?> </td>
                                <td> <?php echo $data_0405['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_5']; ?> </td>
                                <td> <?php echo $data_0405['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_6']; ?> </td>
                                <td> <?php echo $data_0405['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0405['room_7']; ?> </td>
                            </tr>
                            <tr id="toggletr43">
                                <td> <?php echo $data_0405['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0405['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0405['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0405['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0405['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0405['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0405['sunday_2nd_rw']; ?> </td>
                                <td colspan="3" rowspan="6">
                                    <?php echo $data_0405['timeline2']; ?>
                                </td>
                            </tr>


                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">4:00 - 5:00 <input id="time0405" hidden value="4:00 - 5:00 PM" /> </td>
                        <td> <input id="edit_monday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0405_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0405_7_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0405_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0405_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0405_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0405_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0405_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0405_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0405_2nd_rw" hidden /> </td>
                        <td colspan="3" rowspan="6">
                            <input id="edit_timeline0405_2_rw" hidden />
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">4:00 - 5:00 <input id="time0405" hidden value="4:00 - 5:00 PM" /> </td>
                    <td> <input id="edit_monday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0405_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0405_7_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0405_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0405_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0405_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0405_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0405_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0405_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0405_2nd_rw" hidden /> </td>
                    <td colspan="3" rowspan="6">
                        <input id="edit_timeline0405_2_rw" hidden />
                    </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='5:00 - 6:00 PM' AND faculty_id='$selected'";
                $res_0506 = mysqli_query($conn, $qry);

                if ($res_0506 && mysqli_num_rows($res_0506) > 0) {
                    $trRendered = false;
                    while ($data_0506 = mysqli_fetch_assoc($res_0506)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr44">
                                <td rowspan="2">5:00 - 6:00 <input id="time0506" hidden value="5:00 - 6:00 PM" /> </td>
                                <td> <input id="edit_monday_0506_1st_rw" value="<?php echo $data_0506['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0506_1_rw" value="<?php echo $data_0506['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0506_1st_rw" value="<?php echo $data_0506['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0506_2_rw" value="<?php echo $data_0506['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0506_1st_rw" value="<?php echo $data_0506['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0506_3_rw" value="<?php echo $data_0506['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0506_1st_rw" value="<?php echo $data_0506['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0506_4_rw" value="<?php echo $data_0506['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0506_1st_rw" value="<?php echo $data_0506['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0506_5_rw" value="<?php echo $data_0506['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0506_1st_rw" value="<?php echo $data_0506['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0506_6_rw" value="<?php echo $data_0506['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0506_1st_rw" value="<?php echo $data_0506['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0506_7_rw" value="<?php echo $data_0506['room_7']; ?>" class="form-control" /> </td>
                            </tr>
                            <tr id="toggletr46">
                                <td> <input id="edit_monday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0506_2nd_rw" class="form-control" value="<?php echo $data_0506['sunday_2nd_rw']; ?>" /></td>

                            </tr>

                            <tr id="toggletr45">
                                <td rowspan="2">5:00 - 6:00 <input id="time0506" hidden value="5:00 - 6:00 PM" /> </td>
                                <td> <?php echo $data_0506['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_1']; ?> </td>
                                <td> <?php echo $data_0506['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_2']; ?> </td>
                                <td> <?php echo $data_0506['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_3']; ?> </td>
                                <td> <?php echo $data_0506['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_4']; ?> </td>
                                <td> <?php echo $data_0506['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_5']; ?> </td>
                                <td> <?php echo $data_0506['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_6']; ?> </td>
                                <td> <?php echo $data_0506['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0506['room_7']; ?> </td>
                            </tr>
                            <tr id="toggletr47">
                                <td> <?php echo $data_0506['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0506['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0506['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0506['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0506['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0506['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0506['sunday_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">5:00 - 6:00 <input id="time0506" hidden value="5:00 - 6:00 PM" /> </td>
                        <td> <input id="edit_monday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0506_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0506_7_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0506_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0506_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0506_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0506_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0506_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0506_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0506_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">5:00 - 6:00 <input id="time0506" hidden value="5:00 - 6:00 PM" /> </td>
                    <td> <input id="edit_monday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0506_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0506_7_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0506_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0506_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0506_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0506_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0506_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0506_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0506_2nd_rw" hidden /> </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='6:00 - 7:00 PM' AND faculty_id='$selected'";
                $res_0607 = mysqli_query($conn, $qry);

                if ($res_0607 && mysqli_num_rows($res_0607) > 0) {
                    $trRendered = false;
                    while ($data_0607 = mysqli_fetch_assoc($res_0607)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr48">
                                <td rowspan="2">6:00 - 7:00 <input id="time0607" hidden value="6:00 - 7:00 PM" /> </td>
                                <td> <input id="edit_monday_0607_1st_rw" value="<?php echo $data_0607['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0607_1_rw" value="<?php echo $data_0607['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0607_1st_rw" value="<?php echo $data_0607['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0607_2_rw" value="<?php echo $data_0607['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0607_1st_rw" value="<?php echo $data_0607['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0607_3_rw" value="<?php echo $data_0607['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0607_1st_rw" value="<?php echo $data_0607['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0607_4_rw" value="<?php echo $data_0607['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0607_1st_rw" value="<?php echo $data_0607['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0607_5_rw" value="<?php echo $data_0607['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0607_1st_rw" value="<?php echo $data_0607['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0607_6_rw" value="<?php echo $data_0607['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0607_1st_rw" value="<?php echo $data_0607['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0607_7_rw" value="<?php echo $data_0607['room_7']; ?>" class="form-control" /> </td>
                            </tr>
                            <tr id="toggletr50">
                                <td> <input id="edit_monday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0607_2nd_rw" class="form-control" value="<?php echo $data_0607['sunday_2nd_rw']; ?>" /></td>

                            </tr>

                            <tr id="toggletr49">
                                <td rowspan="2">6:00 - 7:00 <input id="time0607" hidden value="6:00 - 7:00 PM" /> </td>
                                <td> <?php echo $data_0607['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_1']; ?> </td>
                                <td> <?php echo $data_0607['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_2']; ?> </td>
                                <td> <?php echo $data_0607['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_3']; ?> </td>
                                <td> <?php echo $data_0607['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_4']; ?> </td>
                                <td> <?php echo $data_0607['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_5']; ?> </td>
                                <td> <?php echo $data_0607['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_6']; ?> </td>
                                <td> <?php echo $data_0607['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0607['room_7']; ?> </td>
                            </tr>
                            <tr id="toggletr51">
                                <td> <?php echo $data_0607['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0607['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0607['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0607['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0607['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0607['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0607['sunday_2nd_rw']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">6:00 - 7:00 <input id="time0607" hidden value="6:00 - 7:00 PM" /> </td>
                        <td> <input id="edit_monday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0607_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0607_7_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0607_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0607_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0607_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0607_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0607_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0607_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0607_2nd_rw" hidden /> </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">6:00 - 7:00 <input id="time0607" hidden value="6:00 - 7:00 PM" /> </td>
                    <td> <input id="edit_monday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0607_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0607_7_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0607_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0607_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0607_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0607_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0607_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0607_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0607_2nd_rw" hidden /> </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE time='7:00 - 8:00 PM' AND faculty_id='$selected'";
                $res_0708 = mysqli_query($conn, $qry);

                if ($res_0708 && mysqli_num_rows($res_0708) > 0) {
                    $trRendered = false;
                    while ($data_0708 = mysqli_fetch_assoc($res_0708)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggletr52">
                                <td rowspan="2">7:00 - 8:00 <input id="time0708" hidden value="7:00 - 8:00 PM" /> </td>
                                <td> <input id="edit_monday_0708_1st_rw" value="<?php echo $data_0708['monday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0708_1_rw" value="<?php echo $data_0708['room_1']; ?>" class="form-control" /></td>
                                <td> <input id="edit_tuesday_0708_1st_rw" value="<?php echo $data_0708['tuesday_1st_rw']; ?>" class="form-control" /></td>
                                <td rowspan="2"> <input id="edit_room0708_2_rw" value="<?php echo $data_0708['room_2']; ?>" class="form-control" /></td>
                                <td> <input id="edit_wednesday_0708_1st_rw" value="<?php echo $data_0708['wednesday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0708_3_rw" value="<?php echo $data_0708['room_3']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_thursday_0708_1st_rw" value="<?php echo $data_0708['thursday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0708_4_rw" value="<?php echo $data_0708['room_4']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_friday_0708_1st_rw" value="<?php echo $data_0708['friday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0708_5_rw" value="<?php echo $data_0708['room_5']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_saturday_0708_1st_rw" value="<?php echo $data_0708['saturday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0708_6_rw" value="<?php echo $data_0708['room_6']; ?>" class="form-control" /> </td>
                                <td> <input id="edit_sunday_0708_1st_rw" value="<?php echo $data_0708['sunday_1st_rw']; ?>" class="form-control" /> </td>
                                <td rowspan="2"> <input id="edit_room0708_7_rw" value="<?php echo $data_0708['room_7']; ?>" class="form-control" /> </td>
                            </tr>
                            <tr id="toggletr54">
                                <td> <input id="edit_monday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['monday_2nd_rw']; ?>" /> </td>
                                <td> <input id="edit_tuesday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['tuesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_wednesday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['wednesday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_thursday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['thursday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_friday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['friday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_saturday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['saturday_2nd_rw']; ?>" /></td>
                                <td> <input id="edit_sunday_0708_2nd_rw" class="form-control" value="<?php echo $data_0708['sunday_2nd_rw']; ?>" /></td>
                                <td colspan="3" rowspan="8"><input id="edit_timeline0708_3_rw" class="form-control" value="<?php echo $data_0708['timeline3']; ?>" /></td>
                            </tr>

                            <tr id="toggletr53">
                                <td rowspan="2">7:00 - 8:00 <input id="time0708" hidden value="7:00 - 8:00 PM" /> </td>
                                <td> <?php echo $data_0708['monday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_1']; ?> </td>
                                <td> <?php echo $data_0708['tuesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_2']; ?> </td>
                                <td> <?php echo $data_0708['wednesday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_3']; ?> </td>
                                <td> <?php echo $data_0708['thursday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_4']; ?> </td>
                                <td> <?php echo $data_0708['friday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_5']; ?> </td>
                                <td> <?php echo $data_0708['saturday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_6']; ?> </td>
                                <td> <?php echo $data_0708['sunday_1st_rw']; ?> </td>
                                <td rowspan="2"> <?php echo $data_0708['room_7']; ?> </td>
                            </tr>
                            <tr id="toggletr55">
                                <td> <?php echo $data_0708['monday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0708['tuesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0708['wednesday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0708['thursday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0708['friday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0708['saturday_2nd_rw']; ?> </td>
                                <td> <?php echo $data_0708['sunday_2nd_rw']; ?> </td>
                                <td colspan="3" rowspan="8">
                                    <?php echo $data_0708['timeline3']; ?></td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td rowspan="2">7:00 - 8:00 <input id="time0708" hidden value="7:00 - 8:00 PM" /> </td>
                        <td> <input id="edit_monday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_1_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_2_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_3_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_4_rw" hidden /> </td>
                        <td> <input id="edit_friday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_5_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_6_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0708_1st_rw" hidden /> </td>
                        <td rowspan="2"> <input id="edit_room0708_7_rw" hidden /> </td>
                    </tr>
                    <tr>
                        <td> <input id="edit_monday_0708_2nd_rw" hidden /> </td>
                        <td> <input id="edit_tuesday_0708_2nd_rw" hidden /> </td>
                        <td> <input id="edit_wednesday_0708_2nd_rw" hidden /> </td>
                        <td> <input id="edit_thursday_0708_2nd_rw" hidden /> </td>
                        <td> <input id="edit_friday_0708_2nd_rw" hidden /> </td>
                        <td> <input id="edit_saturday_0708_2nd_rw" hidden /> </td>
                        <td> <input id="edit_sunday_0708_2nd_rw" hidden /> </td>
                        <td colspan="3" rowspan="8">
                            <input id="edit_timeline0708_3_rw" hidden />
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td rowspan="2">7:00 - 8:00 <input id="time0708" hidden value="7:00 - 8:00 PM" /> </td>
                    <td> <input id="edit_monday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_1_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_2_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_3_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_4_rw" hidden /> </td>
                    <td> <input id="edit_friday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_5_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_6_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0708_1st_rw" hidden /> </td>
                    <td rowspan="2"> <input id="edit_room0708_7_rw" hidden /> </td>
                </tr>
                <tr>
                    <td> <input id="edit_monday_0708_2nd_rw" hidden /> </td>
                    <td> <input id="edit_tuesday_0708_2nd_rw" hidden /> </td>
                    <td> <input id="edit_wednesday_0708_2nd_rw" hidden /> </td>
                    <td> <input id="edit_thursday_0708_2nd_rw" hidden /> </td>
                    <td> <input id="edit_friday_0708_2nd_rw" hidden /> </td>
                    <td> <input id="edit_saturday_0708_2nd_rw" hidden /> </td>
                    <td> <input id="edit_sunday_0708_2nd_rw" hidden /> </td>
                    <td colspan="3" rowspan="8"><input id="edit_timeline0708_3_rw" hidden /></td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);

                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime1" style="display: none;">
                                <td>Official time</td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_1st_col']; ?>" id="off_time_1" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_2nd_col']; ?>" id="off_time_2" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_3rd_col']; ?>" id="off_time_3" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_4th_col']; ?>" id="off_time_4" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_5th_col']; ?>" id="off_time_5" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_6th_col']; ?>" id="off_time_6" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['official_time_7th_col']; ?>" id="off_time_7" /></td>
                            </tr>

                            <tr id="toggleofftime2" style="display: table-row;">
                                <td>Official time</td>
                                <td colspan="2"> <?php echo $res_get['official_time_1st_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['official_time_2nd_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['official_time_3rd_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['official_time_4th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['official_time_5th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['official_time_6th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['official_time_7th_col']; ?> </td>
                            </tr>
                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td>Official time</td>
                        <td colspan="2"><input id="off_time_1" hidden /></td>
                        <td colspan="2"><input id="off_time_2" hidden /></td>
                        <td colspan="2"><input id="off_time_3" hidden /></td>
                        <td colspan="2"><input id="off_time_4" hidden /></td>
                        <td colspan="2"><input id="off_time_5" hidden /></td>
                        <td colspan="2"><input id="off_time_6" hidden /></td>
                        <td colspan="2"><input id="off_time_7" hidden /></td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td>Official time</td>
                    <td colspan="2"><input id="off_time_1" hidden /></td>
                    <td colspan="2"><input id="off_time_2" hidden /></td>
                    <td colspan="2"><input id="off_time_3" hidden /></td>
                    <td colspan="2"><input id="off_time_4" hidden /></td>
                    <td colspan="2"><input id="off_time_5" hidden /></td>
                    <td colspan="2"><input id="off_time_6" hidden /></td>
                    <td colspan="2"><input id="off_time_7" hidden /></td>
                </tr>

            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);
                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime3" style="display: none;">
                                <td>No. of Teaching Hours</td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_1st_col']; ?>" id="nth_1" /></td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_2nd_col']; ?>" id="nth_2" /></td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_3rd_col']; ?>" id="nth_3" /></td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_4th_col']; ?>" id="nth_4" /></td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_5th_col']; ?>" id="nth_5" /></td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_6th_col']; ?>" id="nth_6" /></td>
                                <td colspan="2">
                                    <h6></h6>
                                </td>
                            </tr>

                            <tr id="toggleofftime4" style="display: table-row;">
                                <td>No. of Teaching Hours</td>
                                <td colspan="2"> <input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_1st_col']; ?>" id="nth_1" hidden /><?php echo $res_get['no_teaching_hours_1st_col']; ?> </td>
                                <td colspan="2"> <input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_2nd_col']; ?>" id="nth_2" hidden /> <?php echo $res_get['no_teaching_hours_2nd_col']; ?> </td>
                                <td colspan="2"> <input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_3rd_col']; ?>" id="nth_3" hidden /> <?php echo $res_get['no_teaching_hours_3rd_col']; ?> </td>
                                <td colspan="2"> <input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_4th_col']; ?>" id="nth_4" hidden /> <?php echo $res_get['no_teaching_hours_4th_col']; ?> </td>
                                <td colspan="2"> <input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_5th_col']; ?>" id="nth_5" hidden /> <?php echo $res_get['no_teaching_hours_5th_col']; ?> </td>
                                <td colspan="2"> <input class="form-control nth-input" value="<?php echo $res_get['no_teaching_hours_6th_col']; ?>" id="nth_6" hidden /><?php echo $res_get['no_teaching_hours_6th_col']; ?> </td>
                                <td colspan="2">
                                    <h6 id="total"></h6>
                                </td>
                            </tr>


                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td>No. of Teaching Hours</td>
                        <td colspan="2"><input id="nth_1" hidden /></td>
                        <td colspan="2"><input id="nth_2" hidden /></td>
                        <td colspan="2"><input id="nth_3" hidden /></td>
                        <td colspan="2"><input id="nth_4" hidden /></td>
                        <td colspan="2"><input id="nth_5" hidden /></td>
                        <td colspan="2"><input id="nth_6" hidden /></td>
                        <td colspan="2">
                            <h6 id="total"></h6>
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td>No. of Teaching Hours</td>
                    <td colspan="2"><input id="nth_1" hidden /></td>
                    <td colspan="2"><input id="nth_2" hidden /></td>
                    <td colspan="2"><input id="nth_3" hidden /></td>
                    <td colspan="2"><input id="nth_4" hidden /></td>
                    <td colspan="2"><input id="nth_5" hidden /></td>
                    <td colspan="2"><input id="nth_6" hidden /></td>
                    <td colspan="2">
                        <h6 id="total"></h6>
                    </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);
                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime5" style="display: none;">
                                <td>Overtime Within</td>
                                <td colspan="2"><input class="form-control nth-input" value="<?php echo $res_get['no_overtime_1st_col']; ?>" id="ot_1" /></td>
                                <td colspan="2"><input class="form-control ot-input" value="<?php echo $res_get['no_overtime_2nd_col']; ?>" id="ot_2" /></td>
                                <td colspan="2"><input class="form-control ot-input" value="<?php echo $res_get['no_overtime_3rd_col']; ?>" id="ot_3" /></td>
                                <td colspan="2"><input class="form-control ot-input" value="<?php echo $res_get['no_overtime_4th_col']; ?>" id="ot_4" /></td>
                                <td colspan="2"><input class="form-control ot-input" value="<?php echo $res_get['no_overtime_5th_col']; ?>" id="ot_5" /></td>
                                <td colspan="2"><input class="form-control ot-input" value="<?php echo $res_get['no_overtime_6th_col']; ?>" id="ot_6" /></td>
                                <td colspan="2"><input class="form-control ot-input" value="<?php echo $res_get['no_overtime_7th_col']; ?>" id="ot_7" /></td>
                            </tr>


                            <tr id="toggleofftime6" style="display: table-row;">
                                <td>Overtime Within</td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_1st_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_2nd_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_3rd_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_4th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_5th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_6th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['no_overtime_7th_col']; ?> </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td>Overtime Within</td>
                        <td colspan="2"><input id="ot_1" hidden /></td>
                        <td colspan="2"><input id="ot_2" hidden /></td>
                        <td colspan="2"><input id="ot_3" hidden /></td>
                        <td colspan="2"><input id="ot_4" hidden /></td>
                        <td colspan="2"><input id="ot_5" hidden /></td>
                        <td colspan="2"><input id="ot_6" hidden /></td>
                        <td colspan="2"><input id="ot_7" hidden /></td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td>Overtime Within</td>
                    <td colspan="2"><input id="ot_1" hidden /></td>
                    <td colspan="2"><input id="ot_2" hidden /></td>
                    <td colspan="2"><input id="ot_3" hidden /></td>
                    <td colspan="2"><input id="ot_4" hidden /></td>
                    <td colspan="2"><input id="ot_5" hidden /></td>
                    <td colspan="2"><input id="ot_6" hidden /></td>
                    <td colspan="2"><input id="ot_7" hidden /></td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);
                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime7" style="display: none;">
                                <td>Overtime Outside</td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_1st_col']; ?>" id="out1" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_2nd_col']; ?>" id="out2" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_3rd_col']; ?>" id="out3" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_4th_col']; ?>" id="out4" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_5th']; ?>" id="out5" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_6th_col']; ?>" id="out6" /></td>
                                <td colspan="2"><input class="form-control" value="<?php echo $res_get['overtime_outside_7th_col']; ?>" id="out7" /></td>
                            </tr>

                            <tr id="toggleofftime8" style="display: table-row;">
                                <td>Overtime Outside</td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_1st_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_2nd_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_3rd_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_4th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_5th']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_6th_col']; ?> </td>
                                <td colspan="2"> <?php echo $res_get['overtime_outside_7th_col']; ?> </td>
                            </tr>


                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td>Overtime Outside</td>
                        <td colspan="2"><input id="out1" hidden /></td>
                        <td colspan="2"><input id="out2" hidden /></td>
                        <td colspan="2"><input id="out3" hidden /></td>
                        <td colspan="2"><input id="out4" hidden /></td>
                        <td colspan="2"><input id="out5" hidden /></td>
                        <td colspan="2"><input id="out6" hidden /></td>
                        <td colspan="2"><input id="out7" hidden /></td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td>Overtime Outside</td>
                    <td colspan="2"><input id="out1" hidden /></td>
                    <td colspan="2"><input id="out2" hidden /></td>
                    <td colspan="2"><input id="out3" hidden /></td>
                    <td colspan="2"><input id="out4" hidden /></td>
                    <td colspan="2"><input id="out5" hidden /></td>
                    <td colspan="2"><input id="out6" hidden /></td>
                    <td colspan="2"><input id="out7" hidden /></td>
                </tr>
            <?php
            }
            ?>

            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);
                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime9" style="display: none;">
                                <td>DESIGNATION</td>
                                <td colspan="14">
                                    <input class="form-control" value="<?php echo $res_get['Designation']; ?>" id="design" />
                                </td>
                            </tr>

                            <tr id="toggleofftime10" style="display: table-row;">
                                <td>DESIGNATION</td>
                                <td colspan="14">
                                    <?php echo $res_get['Designation']; ?>
                                </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td>DESIGNATION</td>
                        <td colspan="14">
                            <input id="design" hidden />
                        </td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td>DESIGNATION</td>
                    <td colspan="14">
                        <input id="design" hidden />
                    </td>
                </tr>
            <?php
            }
            ?>
            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);
                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime11" style="display: none;">
                                <td colspan="2">NO. OF PREPARATIONS:</td>
                                <td colspan="3">
                                    <input class="form-control" value="<?php echo $res_get['no_preparation']; ?>" id="prep" />
                                </td>
                                <td colspan="2">REGULAR LOAD:</td>
                                <td colspan="3">
                                    <input class="form-control" value="<?php echo $res_get['regular_load']; ?>" id="reg_load" />
                                </td>
                                <td colspan="2">ACADEMIC RANK:</td>
                                <td colspan="3">
                                    <input class="form-control" value="<?php echo $res_get['academic_rank']; ?>" id="acad_rank" />
                                </td>

                            </tr>

                            <tr id="toggleofftime12" style="display: table-row;">
                                <td colspan="2">NO. OF PREPARATIONS:</td>
                                <td colspan="3">
                                    <?php echo $res_get['no_preparation']; ?>
                                </td>
                                <td colspan="2">REGULAR LOAD:</td>
                                <td colspan="3">
                                    <?php echo $res_get['regular_load']; ?>
                                </td>
                                <td colspan="2">ACADEMIC RANK:</td>
                                <td colspan="3">
                                    <?php echo $res_get['academic_rank']; ?>
                                </td>
                            </tr>


                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="2">NO. OF PREPARATIONS:</td>
                        <td colspan="3">
                            <input id="prep" hidden />
                        </td>
                        <td colspan="2">REGULAR LOAD:</td>
                        <td colspan="3">
                            <input id="reg_load" hidden />
                        </td>
                        <td colspan="2">ACADEMIC RANK:</td>
                        <td colspan="3">
                            <input id="acad_rank" hidden />
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="2">NO. OF PREPARATIONS:</td>
                    <td colspan="3">
                        <input id="prep" hidden />
                    </td>
                    <td colspan="2">REGULAR LOAD:</td>
                    <td colspan="3">
                        <input id="reg_load" hidden />
                    </td>
                    <td colspan="2">ACADEMIC RANK:</td>
                    <td colspan="3">
                        <input id="acad_rank" hidden />
                    </td>
                </tr>

            <?php
            }
            ?>

            <?php
            if (isset($_POST['filteredValue'])) {
                $selected = $_POST['filteredValue'];
                $qry = "SELECT * FROM sched WHERE faculty_id='$selected'";
                $res_offtime = mysqli_query($conn, $qry);
                if ($res_offtime && mysqli_num_rows($res_offtime) > 0) {
                    $trRendered = false;
                    while ($res_get = mysqli_fetch_assoc($res_offtime)) {
                        if (!$trRendered) {
            ?>
                            <tr id="toggleofftime13" style="display: none;">
                                <td colspan="2">NO. OF HOURS PER WEEK:</td>
                                <td colspan="3">
                                    <input class="form-control" value="<?php echo $res_get['no_hours_week']; ?>" id="hours_week" />
                                </td>
                                <td colspan="2">OVERLOAD:</td>
                                <td colspan="3">
                                    <input class="form-control" value="<?php echo $res_get['overload']; ?>" id="Overload" />
                                </td>
                                <td colspan="2">CONSULTATION HOURS:</td>
                                <td colspan="3">
                                    <input class="form-control" value="<?php echo $res_get['consult_hour']; ?>" id="cons_hour" />
                                </td>

                            </tr>

                            <tr id="toggleofftime14" style="display: table-row;">
                                <td colspan="2">NO. OF HOURS PER WEEK:</td>
                                <td colspan="3">
                                    <?php echo $res_get['no_hours_week']; ?>
                                </td>
                                <td colspan="2">OVERLOAD:</td>
                                <td colspan="3">
                                    <?php echo $res_get['overload']; ?>
                                </td>
                                <td colspan="2">CONSULTATION HOURS:</td>
                                <td colspan="3">
                                    <?php echo $res_get['consult_hour']; ?>
                                </td>
                            </tr>

                    <?php
                            $trRendered = true;
                        }
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="2">NO. OF HOURS PER WEEK:</td>
                        <td colspan="3">
                            <input id="hours_week" hidden />
                        </td>
                        <td colspan="2">OVERLOAD:</td>
                        <td colspan="3">
                            <input id="Overload" hidden />
                        </td>
                        <td colspan="2">CONSULTATION HOURS:</td>
                        <td colspan="3">
                            <input id="cons_hour" hidden />
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="2">NO. OF HOURS PER WEEK:</td>
                    <td colspan="3">
                        <input id="hours_week" hidden />
                    </td>
                    <td colspan="2">OVERLOAD:</td>
                    <td colspan="3">
                        <input id="Overload" hidden />
                    </td>
                    <td colspan="2">CONSULTATION HOURS:</td>
                    <td colspan="3">
                        <input id="cons_hour" hidden />
                    </td>
                </tr>

            <?php
            }
            ?>




        </tbody>
    </table>
    <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
        <button onclick="onSave()" class="btn btn-primary">Save</button>
    </div>
</div>

