<input type="radio" id="tabsilver" name="mytabs" style="display: flex;
        flex-wrap: wrap;
        max-width: 100%;
        padding: 2px;
        margin: 0;  width: 100%;
        min-width: 1300px;
        padding: 0px;
        background: #ffffff;
        order: 1;
        display: none;" />
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
            <?php

            $selected = $_POST['filteredValue'];
            $qry = "SELECT * FROM sched WHERE id=1";
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

            ?>
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