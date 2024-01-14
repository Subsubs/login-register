<?php

spl_autoload_register('route_into_controller');

if (isset($_POST['schedTrigger']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_67_1st']) ? $_POST['monday_67_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_67_2nd']) ? $_POST['monday_67_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_67_1st']) ? $_POST['tuesday_67_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_67_2nd']) ? $_POST['tuesday_67_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_67_1st']) ? $_POST['wednesday_67_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_67_2nd']) ? $_POST['wednesday_67_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_67_1st']) ? $_POST['thursday_67_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_67_2nd']) ? $_POST['thursday_67_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_67_1st']) ? $_POST['friday_67_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_67_2nd']) ? $_POST['friday_67_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_67_1st']) ? $_POST['saturday_67_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_67_2nd']) ? $_POST['saturday_67_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_67_1st']) ? $_POST['sunday_67_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_67_2nd']) ? $_POST['sunday_67_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room_1']) ? $_POST['room_1'] : null,
        "room_2" => isset($_POST['room_2']) ? $_POST['room_2'] : null,
        "room_3" => isset($_POST['room_3']) ? $_POST['room_3'] : null,
        "room_4" => isset($_POST['room_4']) ? $_POST['room_4'] : null,
        "room_5" => isset($_POST['room_5']) ? $_POST['room_5'] : null,
        "room_6" => isset($_POST['room_6']) ? $_POST['room_6'] : null,
        "room_7" => isset($_POST['room_7']) ? $_POST['room_7'] : null,
        "cc_1st_rw" => isset($_POST['cc_1st']) ? $_POST['cc_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc_2nd']) ? $_POST['cc_2nd'] : null,
        "section_1st_rw" => isset($_POST['section_1st']) ? $_POST['section_1st'] : null,
        "section_2nd_rw" => isset($_POST['section_2nd']) ? $_POST['section_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_67_1st']) ? $_POST['last_67_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_67_2nd']) ? $_POST['last_67_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger78']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_78_1st']) ? $_POST['monday_78_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_78_2nd']) ? $_POST['monday_78_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_78_1st']) ? $_POST['tuesday_78_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_78_2nd']) ? $_POST['tuesday_78_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_78_1st']) ? $_POST['wednesday_78_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_78_2nd']) ? $_POST['wednesday_78_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_78_1st']) ? $_POST['thursday_78_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_78_2nd']) ? $_POST['thursday_78_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_78_1st']) ? $_POST['friday_78_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_78_2nd']) ? $_POST['friday_78_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_78_1st']) ? $_POST['saturday_78_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_78_2nd']) ? $_POST['saturday_78_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_78_1st']) ? $_POST['sunday_78_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_78_2nd']) ? $_POST['sunday_78_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room78_1']) ? $_POST['room78_1'] : null,
        "room_2" => isset($_POST['room78_2']) ? $_POST['room78_2'] : null,
        "room_3" => isset($_POST['room78_3']) ? $_POST['room78_3'] : null,
        "room_4" => isset($_POST['room78_4']) ? $_POST['room78_4'] : null,
        "room_5" => isset($_POST['room78_5']) ? $_POST['room78_5'] : null,
        "room_6" => isset($_POST['room78_6']) ? $_POST['room78_6'] : null,
        "room_7" => isset($_POST['room78_7']) ? $_POST['room78_7'] : null,
        "cc_1st_rw" => isset($_POST['cc78_1st']) ? $_POST['cc78_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc78_2nd']) ? $_POST['cc78_2nd'] : null,
        "section_1st_rw" => isset($_POST['section78_1st']) ? $_POST['section78_1st'] : null,
        "section_2nd_rw" => isset($_POST['section78_2nd']) ? $_POST['section78_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_78_1st']) ? $_POST['last_78_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_78_2nd']) ? $_POST['last_78_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger89']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_89_1st']) ? $_POST['monday_89_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_89_2nd']) ? $_POST['monday_89_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_89_1st']) ? $_POST['tuesday_89_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_89_2nd']) ? $_POST['tuesday_89_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_89_1st']) ? $_POST['wednesday_89_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_89_2nd']) ? $_POST['wednesday_89_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_89_1st']) ? $_POST['thursday_89_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_89_2nd']) ? $_POST['thursday_89_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_89_1st']) ? $_POST['friday_89_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_89_2nd']) ? $_POST['friday_89_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_89_1st']) ? $_POST['saturday_89_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_89_2nd']) ? $_POST['saturday_89_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_89_1st']) ? $_POST['sunday_89_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_89_2nd']) ? $_POST['sunday_89_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room89_1']) ? $_POST['room89_1'] : null,
        "room_2" => isset($_POST['room89_2']) ? $_POST['room89_2'] : null,
        "room_3" => isset($_POST['room89_3']) ? $_POST['room89_3'] : null,
        "room_4" => isset($_POST['room89_4']) ? $_POST['room89_4'] : null,
        "room_5" => isset($_POST['room89_5']) ? $_POST['room89_5'] : null,
        "room_6" => isset($_POST['room89_6']) ? $_POST['room89_6'] : null,
        "room_7" => isset($_POST['room89_7']) ? $_POST['room89_7'] : null,
        "cc_1st_rw" => isset($_POST['cc89_1st']) ? $_POST['cc89_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc89_2nd']) ? $_POST['cc89_2nd'] : null,
        "section_1st_rw" => isset($_POST['section89_1st']) ? $_POST['section89_1st'] : null,
        "section_2nd_rw" => isset($_POST['section89_2nd']) ? $_POST['section89_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_89_1st']) ? $_POST['last_89_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_89_2nd']) ? $_POST['last_89_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger1011']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_1011_1st']) ? $_POST['monday_1011_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_1011_2nd']) ? $_POST['monday_1011_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_1011_1st']) ? $_POST['tuesday_1011_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_1011_2nd']) ? $_POST['tuesday_1011_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_1011_1st']) ? $_POST['wednesday_1011_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_1011_2nd']) ? $_POST['wednesday_1011_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_1011_1st']) ? $_POST['thursday_1011_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_1011_2nd']) ? $_POST['thursday_1011_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_1011_1st']) ? $_POST['friday_1011_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_1011_2nd']) ? $_POST['friday_1011_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_1011_1st']) ? $_POST['saturday_1011_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_1011_2nd']) ? $_POST['saturday_1011_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_1011_1st']) ? $_POST['sunday_1011_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_1011_2nd']) ? $_POST['sunday_1011_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room1011_1']) ? $_POST['room1011_1'] : null,
        "room_2" => isset($_POST['room1011_2']) ? $_POST['room1011_2'] : null,
        "room_3" => isset($_POST['room1011_3']) ? $_POST['room1011_3'] : null,
        "room_4" => isset($_POST['room1011_4']) ? $_POST['room1011_4'] : null,
        "room_5" => isset($_POST['room1011_5']) ? $_POST['room1011_5'] : null,
        "room_6" => isset($_POST['room1011_6']) ? $_POST['room1011_6'] : null,
        "room_7" => isset($_POST['room1011_7']) ? $_POST['room1011_7'] : null,
        "cc_1st_rw" => isset($_POST['cc1011_1st']) ? $_POST['cc1011_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc1011_2nd']) ? $_POST['cc1011_2nd'] : null,
        "section_1st_rw" => isset($_POST['section1011_1st']) ? $_POST['section1011_1st'] : null,
        "section_2nd_rw" => isset($_POST['section1011_2nd']) ? $_POST['section1011_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_1011_1st']) ? $_POST['last_1011_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_1011_2nd']) ? $_POST['last_1011_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger910']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_910_1st']) ? $_POST['monday_910_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_910_2nd']) ? $_POST['monday_910_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_910_1st']) ? $_POST['tuesday_910_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_910_2nd']) ? $_POST['tuesday_910_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_910_1st']) ? $_POST['wednesday_910_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_910_2nd']) ? $_POST['wednesday_910_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_910_1st']) ? $_POST['thursday_910_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_910_2nd']) ? $_POST['thursday_910_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_910_1st']) ? $_POST['friday_910_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_910_2nd']) ? $_POST['friday_910_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_910_1st']) ? $_POST['saturday_910_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_910_2nd']) ? $_POST['saturday_910_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_910_1st']) ? $_POST['sunday_910_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_910_2nd']) ? $_POST['sunday_910_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room910_1']) ? $_POST['room910_1'] : null,
        "room_2" => isset($_POST['room910_2']) ? $_POST['room910_2'] : null,
        "room_3" => isset($_POST['room910_3']) ? $_POST['room910_3'] : null,
        "room_4" => isset($_POST['room910_4']) ? $_POST['room910_4'] : null,
        "room_5" => isset($_POST['room910_5']) ? $_POST['room910_5'] : null,
        "room_6" => isset($_POST['room910_6']) ? $_POST['room910_6'] : null,
        "room_7" => isset($_POST['room910_7']) ? $_POST['room910_7'] : null,
        "cc_1st_rw" => isset($_POST['cc910_1st']) ? $_POST['cc910_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc910_2nd']) ? $_POST['cc910_2nd'] : null,
        "section_1st_rw" => isset($_POST['section910_1st']) ? $_POST['section910_1st'] : null,
        "section_2nd_rw" => isset($_POST['section910_2nd']) ? $_POST['section910_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_910_1st']) ? $_POST['last_910_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_910_2nd']) ? $_POST['last_910_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger1112']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_1112_1st']) ? $_POST['monday_1112_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_1112_2nd']) ? $_POST['monday_1112_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_1112_1st']) ? $_POST['tuesday_1112_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_1112_2nd']) ? $_POST['tuesday_1112_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_1112_1st']) ? $_POST['wednesday_1112_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_1112_2nd']) ? $_POST['wednesday_1112_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_1112_1st']) ? $_POST['thursday_1112_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_1112_2nd']) ? $_POST['thursday_1112_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_1112_1st']) ? $_POST['friday_1112_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_1112_2nd']) ? $_POST['friday_1112_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_1112_1st']) ? $_POST['saturday_1112_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_1112_2nd']) ? $_POST['saturday_1112_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_1112_1st']) ? $_POST['sunday_1112_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_1112_2nd']) ? $_POST['sunday_1112_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room1112_1']) ? $_POST['room1112_1'] : null,
        "room_2" => isset($_POST['room1112_2']) ? $_POST['room1112_2'] : null,
        "room_3" => isset($_POST['room1112_3']) ? $_POST['room1112_3'] : null,
        "room_4" => isset($_POST['room1112_4']) ? $_POST['room1112_4'] : null,
        "room_5" => isset($_POST['room1112_5']) ? $_POST['room1112_5'] : null,
        "room_6" => isset($_POST['room1112_6']) ? $_POST['room1112_6'] : null,
        "room_7" => isset($_POST['room1112_7']) ? $_POST['room1112_7'] : null,
        "cc_1st_rw" => isset($_POST['cc1112_1st']) ? $_POST['cc1112_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc1112_2nd']) ? $_POST['cc1112_2nd'] : null,
        "section_1st_rw" => isset($_POST['section1112_1st']) ? $_POST['section1112_1st'] : null,
        "section_2nd_rw" => isset($_POST['section1112_2nd']) ? $_POST['section1112_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_1112_1st']) ? $_POST['last_1112_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_1112_2nd']) ? $_POST['last_1112_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger1201']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_1201_1st']) ? $_POST['monday_1201_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_1201_2nd']) ? $_POST['monday_1201_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_1201_1st']) ? $_POST['tuesday_1201_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_1201_2nd']) ? $_POST['tuesday_1201_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_1201_1st']) ? $_POST['wednesday_1201_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_1201_2nd']) ? $_POST['wednesday_1201_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_1201_1st']) ? $_POST['thursday_1201_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_1201_2nd']) ? $_POST['thursday_1201_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_1201_1st']) ? $_POST['friday_1201_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_1201_2nd']) ? $_POST['friday_1201_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_1201_1st']) ? $_POST['saturday_1201_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_1201_2nd']) ? $_POST['saturday_1201_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_1201_1st']) ? $_POST['sunday_1201_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_1201_2nd']) ? $_POST['sunday_1201_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room1201_1']) ? $_POST['room1201_1'] : null,
        "room_2" => isset($_POST['room1201_2']) ? $_POST['room1201_2'] : null,
        "room_3" => isset($_POST['room1201_3']) ? $_POST['room1201_3'] : null,
        "room_4" => isset($_POST['room1201_4']) ? $_POST['room1201_4'] : null,
        "room_5" => isset($_POST['room1201_5']) ? $_POST['room1201_5'] : null,
        "room_6" => isset($_POST['room1201_6']) ? $_POST['room1201_6'] : null,
        "room_7" => isset($_POST['room1201_7']) ? $_POST['room1201_7'] : null,
        "cc_1st_rw" => isset($_POST['cc1201_1st']) ? $_POST['cc1201_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc1201_2nd']) ? $_POST['cc1201_2nd'] : null,
        "section_1st_rw" => isset($_POST['section1201_1st']) ? $_POST['section1201_1st'] : null,
        "section_2nd_rw" => isset($_POST['section1201_2nd']) ? $_POST['section1201_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_1201_1st']) ? $_POST['last_1201_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_1201_2nd']) ? $_POST['last_1201_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0102']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0102_1st']) ? $_POST['monday_0102_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0102_2nd']) ? $_POST['monday_0102_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0102_1st']) ? $_POST['tuesday_0102_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0102_2nd']) ? $_POST['tuesday_0102_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0102_1st']) ? $_POST['wednesday_0102_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0102_2nd']) ? $_POST['wednesday_0102_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0102_1st']) ? $_POST['thursday_0102_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0102_2nd']) ? $_POST['thursday_0102_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0102_1st']) ? $_POST['friday_0102_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0102_2nd']) ? $_POST['friday_0102_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0102_1st']) ? $_POST['saturday_0102_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0102_2nd']) ? $_POST['saturday_0102_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0102_1st']) ? $_POST['sunday_0102_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0102_2nd']) ? $_POST['sunday_0102_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0102_1']) ? $_POST['room0102_1'] : null,
        "room_2" => isset($_POST['room0102_2']) ? $_POST['room0102_2'] : null,
        "room_3" => isset($_POST['room0102_3']) ? $_POST['room0102_3'] : null,
        "room_4" => isset($_POST['room0102_4']) ? $_POST['room0102_4'] : null,
        "room_5" => isset($_POST['room0102_5']) ? $_POST['room0102_5'] : null,
        "room_6" => isset($_POST['room0102_6']) ? $_POST['room0102_6'] : null,
        "room_7" => isset($_POST['room0102_7']) ? $_POST['room0102_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0102_1st']) ? $_POST['cc0102_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc0102_2nd']) ? $_POST['cc0102_2nd'] : null,
        "section_1st_rw" => isset($_POST['section0102_1st']) ? $_POST['section0102_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0102_2nd']) ? $_POST['section0102_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0102_1st']) ? $_POST['last_0102_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0102_2nd']) ? $_POST['last_0102_2nd'] : null,
        "timeline" => isset($_POST['timeline0102']) ? $_POST['timeline0102'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0203']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0203_1st']) ? $_POST['monday_0203_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0203_2nd']) ? $_POST['monday_0203_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0203_1st']) ? $_POST['tuesday_0203_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0203_2nd']) ? $_POST['tuesday_0203_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0203_1st']) ? $_POST['wednesday_0203_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0203_2nd']) ? $_POST['wednesday_0203_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0203_1st']) ? $_POST['thursday_0203_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0203_2nd']) ? $_POST['thursday_0203_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0203_1st']) ? $_POST['friday_0203_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0203_2nd']) ? $_POST['friday_0203_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0203_1st']) ? $_POST['saturday_0203_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0203_2nd']) ? $_POST['saturday_0203_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0203_1st']) ? $_POST['sunday_0203_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0203_2nd']) ? $_POST['sunday_0203_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0203_1']) ? $_POST['room0203_1'] : null,
        "room_2" => isset($_POST['room0203_2']) ? $_POST['room0203_2'] : null,
        "room_3" => isset($_POST['room0203_3']) ? $_POST['room0203_3'] : null,
        "room_4" => isset($_POST['room0203_4']) ? $_POST['room0203_4'] : null,
        "room_5" => isset($_POST['room0203_5']) ? $_POST['room0203_5'] : null,
        "room_6" => isset($_POST['room0203_6']) ? $_POST['room0203_6'] : null,
        "room_7" => isset($_POST['room0203_7']) ? $_POST['room0203_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0203_1st']) ? $_POST['cc0203_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc0203_2nd']) ? $_POST['cc0203_2nd'] : null,
        "section_1st_rw" => isset($_POST['section0203_1st']) ? $_POST['section0203_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0203_2nd']) ? $_POST['section0203_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0203_1st']) ? $_POST['last_0203_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0203_2nd']) ? $_POST['last_0203_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0304']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0304_1st']) ? $_POST['monday_0304_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0304_2nd']) ? $_POST['monday_0304_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0304_1st']) ? $_POST['tuesday_0304_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0304_2nd']) ? $_POST['tuesday_0304_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0304_1st']) ? $_POST['wednesday_0304_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0304_2nd']) ? $_POST['wednesday_0304_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0304_1st']) ? $_POST['thursday_0304_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0304_2nd']) ? $_POST['thursday_0304_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0304_1st']) ? $_POST['friday_0304_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0304_2nd']) ? $_POST['friday_0304_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0304_1st']) ? $_POST['saturday_0304_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0304_2nd']) ? $_POST['saturday_0304_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0304_1st']) ? $_POST['sunday_0304_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0304_2nd']) ? $_POST['sunday_0304_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0304_1']) ? $_POST['room0304_1'] : null,
        "room_2" => isset($_POST['room0304_2']) ? $_POST['room0304_2'] : null,
        "room_3" => isset($_POST['room0304_3']) ? $_POST['room0304_3'] : null,
        "room_4" => isset($_POST['room0304_4']) ? $_POST['room0304_4'] : null,
        "room_5" => isset($_POST['room0304_5']) ? $_POST['room0304_5'] : null,
        "room_6" => isset($_POST['room0304_6']) ? $_POST['room0304_6'] : null,
        "room_7" => isset($_POST['room0304_7']) ? $_POST['room0304_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0304_1st']) ? $_POST['cc0304_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc0304_2nd']) ? $_POST['cc0304_2nd'] : null,
        "section_1st_rw" => isset($_POST['section0304_1st']) ? $_POST['section0304_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0304_2nd']) ? $_POST['section0304_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0304_1st']) ? $_POST['last_0304_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0304_2nd']) ? $_POST['last_0304_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0405']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0405_1st']) ? $_POST['monday_0405_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0405_2nd']) ? $_POST['monday_0405_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0405_1st']) ? $_POST['tuesday_0405_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0405_2nd']) ? $_POST['tuesday_0405_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0405_1st']) ? $_POST['wednesday_0405_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0405_2nd']) ? $_POST['wednesday_0405_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0405_1st']) ? $_POST['thursday_0405_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0405_2nd']) ? $_POST['thursday_0405_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0405_1st']) ? $_POST['friday_0405_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0405_2nd']) ? $_POST['friday_0405_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0405_1st']) ? $_POST['saturday_0405_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0405_2nd']) ? $_POST['saturday_0405_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0405_1st']) ? $_POST['sunday_0405_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0405_2nd']) ? $_POST['sunday_0405_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0405_1']) ? $_POST['room0405_1'] : null,
        "room_2" => isset($_POST['room0405_2']) ? $_POST['room0405_2'] : null,
        "room_3" => isset($_POST['room0405_3']) ? $_POST['room0405_3'] : null,
        "room_4" => isset($_POST['room0405_4']) ? $_POST['room0405_4'] : null,
        "room_5" => isset($_POST['room0405_5']) ? $_POST['room0405_5'] : null,
        "room_6" => isset($_POST['room0405_6']) ? $_POST['room0405_6'] : null,
        "room_7" => isset($_POST['room0405_7']) ? $_POST['room0405_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0405_1st']) ? $_POST['cc0405_1st'] : null,
        "timeline2" => isset($_POST['timeline0405_2']) ? $_POST['timeline0405_2'] : null,
        "section_1st_rw" => isset($_POST['section0405_1st']) ? $_POST['section0405_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0405_2nd']) ? $_POST['section0405_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0405_1st']) ? $_POST['last_0405_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0405_2nd']) ? $_POST['last_0405_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0506']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0506_1st']) ? $_POST['monday_0506_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0506_2nd']) ? $_POST['monday_0506_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0506_1st']) ? $_POST['tuesday_0506_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0506_2nd']) ? $_POST['tuesday_0506_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0506_1st']) ? $_POST['wednesday_0506_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0506_2nd']) ? $_POST['wednesday_0506_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0506_1st']) ? $_POST['thursday_0506_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0506_2nd']) ? $_POST['thursday_0506_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0506_1st']) ? $_POST['friday_0506_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0506_2nd']) ? $_POST['friday_0506_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0506_1st']) ? $_POST['saturday_0506_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0506_2nd']) ? $_POST['saturday_0506_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0506_1st']) ? $_POST['sunday_0506_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0506_2nd']) ? $_POST['sunday_0506_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0506_1']) ? $_POST['room0506_1'] : null,
        "room_2" => isset($_POST['room0506_2']) ? $_POST['room0506_2'] : null,
        "room_3" => isset($_POST['room0506_3']) ? $_POST['room0506_3'] : null,
        "room_4" => isset($_POST['room0506_4']) ? $_POST['room0506_4'] : null,
        "room_5" => isset($_POST['room0506_5']) ? $_POST['room0506_5'] : null,
        "room_6" => isset($_POST['room0506_6']) ? $_POST['room0506_6'] : null,
        "room_7" => isset($_POST['room0506_7']) ? $_POST['room0506_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0506_1st']) ? $_POST['cc0506_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc0506_2nd']) ? $_POST['cc0506_2nd'] : null,
        "section_1st_rw" => isset($_POST['section0506_1st']) ? $_POST['section0506_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0506_2nd']) ? $_POST['section0506_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0506_1st']) ? $_POST['last_0506_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0506_2nd']) ? $_POST['last_0506_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0607']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0607_1st']) ? $_POST['monday_0607_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0607_2nd']) ? $_POST['monday_0607_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0607_1st']) ? $_POST['tuesday_0607_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0607_2nd']) ? $_POST['tuesday_0607_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0607_1st']) ? $_POST['wednesday_0607_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0607_2nd']) ? $_POST['wednesday_0607_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0607_1st']) ? $_POST['thursday_0607_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0607_2nd']) ? $_POST['thursday_0607_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0607_1st']) ? $_POST['friday_0607_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0607_2nd']) ? $_POST['friday_0607_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0607_1st']) ? $_POST['saturday_0607_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0607_2nd']) ? $_POST['saturday_0607_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0607_1st']) ? $_POST['sunday_0607_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0607_2nd']) ? $_POST['sunday_0607_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0607_1']) ? $_POST['room0607_1'] : null,
        "room_2" => isset($_POST['room0607_2']) ? $_POST['room0607_2'] : null,
        "room_3" => isset($_POST['room0607_3']) ? $_POST['room0607_3'] : null,
        "room_4" => isset($_POST['room0607_4']) ? $_POST['room0607_4'] : null,
        "room_5" => isset($_POST['room0607_5']) ? $_POST['room0607_5'] : null,
        "room_6" => isset($_POST['room0607_6']) ? $_POST['room0607_6'] : null,
        "room_7" => isset($_POST['room0607_7']) ? $_POST['room0607_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0607_1st']) ? $_POST['cc0607_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc0607_2nd']) ? $_POST['cc0607_2nd'] : null,
        "section_1st_rw" => isset($_POST['section0607_1st']) ? $_POST['section0607_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0607_2nd']) ? $_POST['section0607_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0607_1st']) ? $_POST['last_0607_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0607_2nd']) ? $_POST['last_0607_2nd'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['schedTrigger0708']) === true) {
    $data = [
        "monday_1st_rw" => isset($_POST['monday_0708_1st']) ? $_POST['monday_0708_1st'] : null,
        "monday_2nd_rw" => isset($_POST['monday_0708_2nd']) ? $_POST['monday_0708_2nd'] : null,
        "tuesday_1st_rw" => isset($_POST['tuesday_0708_1st']) ? $_POST['tuesday_0708_1st'] : null,
        "tuesday_2nd_rw" => isset($_POST['tuesday_0708_2nd']) ? $_POST['tuesday_0708_2nd'] : null,
        "wednesday_1st_rw" => isset($_POST['wednesday_0708_1st']) ? $_POST['wednesday_0708_1st'] : null,
        "wednesday_2nd_rw" => isset($_POST['wednesday_0708_2nd']) ? $_POST['wednesday_0708_2nd'] : null,
        "thursday_1st_rw" => isset($_POST['thursday_0708_1st']) ? $_POST['thursday_0708_1st'] : null,
        "thursday_2nd_rw" => isset($_POST['thursday_0708_2nd']) ? $_POST['thursday_0708_2nd'] : null,
        "friday_1st_rw" => isset($_POST['friday_0708_1st']) ? $_POST['friday_0708_1st'] : null,
        "friday_2nd_rw" => isset($_POST['friday_0708_2nd']) ? $_POST['friday_0708_2nd'] : null,
        "saturday_1st_rw" => isset($_POST['saturday_0708_1st']) ? $_POST['saturday_0708_1st'] : null,
        "saturday_2nd_rw" => isset($_POST['saturday_0708_2nd']) ? $_POST['saturday_0708_2nd'] : null,
        "sunday_1st_rw" => isset($_POST['sunday_0708_1st']) ? $_POST['sunday_0708_1st'] : null,
        "sunday_2nd_rw" => isset($_POST['sunday_0708_2nd']) ? $_POST['sunday_0708_2nd'] : null,
        "time" => isset($_POST['time']) ? $_POST['time'] : null,
        "room_1" => isset($_POST['room0708_1']) ? $_POST['room0708_1'] : null,
        "room_2" => isset($_POST['room0708_2']) ? $_POST['room0708_2'] : null,
        "room_3" => isset($_POST['room0708_3']) ? $_POST['room0708_3'] : null,
        "room_4" => isset($_POST['room0708_4']) ? $_POST['room0708_4'] : null,
        "room_5" => isset($_POST['room0708_5']) ? $_POST['room0708_5'] : null,
        "room_6" => isset($_POST['room0708_6']) ? $_POST['room0708_6'] : null,
        "room_7" => isset($_POST['room0708_7']) ? $_POST['room0708_7'] : null,
        "cc_1st_rw" => isset($_POST['cc0708_1st']) ? $_POST['cc0708_1st'] : null,
        "cc_2nd_rw" => isset($_POST['cc0708_2nd']) ? $_POST['cc0708_2nd'] : null,
        "section_1st_rw" => isset($_POST['section0708_1st']) ? $_POST['section0708_1st'] : null,
        "section_2nd_rw" => isset($_POST['section0708_2nd']) ? $_POST['section0708_2nd'] : null,
        "nos_1st_rw" => isset($_POST['last_0708_1st']) ? $_POST['last_0708_1st'] : null,
        "nos_2nd_rw" => isset($_POST['last_0708_2nd']) ? $_POST['last_0708_2nd'] : null,
        "timeline3" => isset($_POST['timeline0708_3']) ? $_POST['timeline0708_3'] : null,
        "faculty_id" => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->Insertion67($data);
}

if (isset($_POST['offTimeTrigger']) == true) {
    $data = [
        'official_time_1st_col' => isset($_POST['off_time_1']) ? $_POST['off_time_1'] : null,
        'official_time_2nd_col' => isset($_POST['off_time_2']) ? $_POST['off_time_2'] : null,
        'official_time_3rd_col' => isset($_POST['off_time_3']) ? $_POST['off_time_3'] : null,
        'official_time_4th_col' => isset($_POST['off_time_4']) ? $_POST['off_time_4'] : null,
        'official_time_5th_col' => isset($_POST['off_time_5']) ? $_POST['off_time_5'] : null,
        'official_time_6th_col' => isset($_POST['off_time_6']) ? $_POST['off_time_6'] : null,
        'official_time_7th_col' => isset($_POST['off_time_7']) ? $_POST['off_time_7'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}

if (isset($_POST['numOfTeachTrigger']) == true) {
    $data = [
        'no_teaching_hours_1st_col' => isset($_POST['nth_1']) ? $_POST['nth_1'] : null,
        'no_teaching_hours_2nd_col' => isset($_POST['nth_2']) ? $_POST['nth_2'] : null,
        'no_teaching_hours_3rd_col' => isset($_POST['nth_3']) ? $_POST['nth_3'] : null,
        'no_teaching_hours_4th_col' => isset($_POST['nth_4']) ? $_POST['nth_4'] : null,
        'no_teaching_hours_5th_col' => isset($_POST['nth_5']) ? $_POST['nth_5'] : null,
        'no_teaching_hours_6th_col' => isset($_POST['nth_6']) ? $_POST['nth_6'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}

if (isset($_POST['otTrigger']) == true) {
    $data = [
        'no_overtime_1st_col' => isset($_POST['ot_1']) ? $_POST['ot_1'] : null,
        'no_overtime_2nd_col' => isset($_POST['ot_2']) ? $_POST['ot_2'] : null,
        'no_overtime_3rd_col' => isset($_POST['ot_3']) ? $_POST['ot_3'] : null,
        'no_overtime_4th_col' => isset($_POST['ot_4']) ? $_POST['ot_4'] : null,
        'no_overtime_5th_col' => isset($_POST['ot_5']) ? $_POST['ot_5'] : null,
        'no_overtime_6th_col' => isset($_POST['ot_6']) ? $_POST['ot_6'] : null,
        'no_overtime_7th_col' => isset($_POST['ot_7']) ? $_POST['ot_7'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}

if (isset($_POST['outTrigger']) == true) {
    $data = [
        'overtime_outside_1st_col' => isset($_POST['out1']) ? $_POST['out1'] : null,
        'overtime_outside_2nd_col' => isset($_POST['out2']) ? $_POST['out2'] : null,
        'overtime_outside_3rd_col' => isset($_POST['out3']) ? $_POST['out3'] : null,
        'overtime_outside_4th_col' => isset($_POST['out4']) ? $_POST['out4'] : null,
        'overtime_outside_5th' => isset($_POST['out5']) ? $_POST['out5'] : null,
        'overtime_outside_6th_col' => isset($_POST['out6']) ? $_POST['out6'] : null,
        'overtime_outside_7th_col' => isset($_POST['out7']) ? $_POST['out7'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];
    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}


if (isset($_POST['desTrigger']) == true) {
    $data = [
        'Designation' => isset($_POST['design']) ? $_POST['design'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];

    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}

if (isset($_POST['outputTrigger']) == true) {
    $data = [
        'no_preparation' => isset($_POST['prep']) ? $_POST['prep'] : null,
        'regular_load' => isset($_POST['reg_load']) ? $_POST['reg_load'] : null,
        'academic_rank' => isset($_POST['acad_rank']) ? $_POST['acad_rank'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];

    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}

if (isset($_POST['output2Trigger']) == true) {
    $data = [
        'no_hours_week' => isset($_POST['hours_week']) ? $_POST['hours_week'] : null,
        'overload' => isset($_POST['Overload']) ? $_POST['Overload'] : null,
        'consult_hour' => isset($_POST['cons_hour']) ? $_POST['cons_hour'] : null,
        'faculty_id' => isset($_POST['getSelectedValue']) ? $_POST['getSelectedValue'] : null
    ];

    $callback = new Scheduler();
    $callback->AdditionalInfoUpdate($data);
}


function route_into_controller()
{
    include_once "../controller/func_scheduler.php";
}
