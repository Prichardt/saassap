<?php
error_reporting(0);
include '../../library/Mover.php';

// $mover = new Mover ();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$tel_phone = $_POST['tel_phone'];
$email = $_POST['email'];






$total_volume = 0;
$content .= "<h2>The Inventory List For The Client:</h2><br/>";
$content .= "First Name: " . $fname . "<br/>";
$content .= "Last Name: " . $lname . "<br/>";
$content .= "Phone Number: " . $phone . "<br/>";
$content .= "Tel Phone Number: " . $tel_phone . "<br/>";
$content .= "Email Address: " . $email . "<br/>";


$content .= '<div style="width: 90%; padding: 10px;">';
$content .= '<table border="1">';
$content .= '<tr>
<td>
<h4>Name</h4>
</td>
<td>
<h4>Quantity</h4>
</td>
<td>
<h4>Total Volume</h4>
</td>
</tr>';


$selectgoods = array(
    "entranceHall" => array(
        "ent_chair" => $_POST["ent_chair"],
        "clock_grand" => $_POST["clock_grand"],
        "ent_hall_table" => $_POST["ent_hall_table"],
        "half_moon_table" => $_POST["half_moon_table"],
        "hat_stand" => $_POST["hat_stand"],
        "tel_table" => $_POST["tel_table"],
        "wash_stand" => $_POST["wash_stand"]
    ),

    "lounge" => array(
        "one_seater" => $_POST["one_seater"],
        "two_seater" => $_POST["two_seater"],
        "three_seater" => $_POST["three_seater"],
        "four_seater" => $_POST["four_seater"],
        "cd_stand" => $_POST["cd_stand"],
        "lounge_chair" => $_POST["lounge_chair"],
        "dstv_dish" => $_POST["dstv_dish"],
        "dstv_dvd_vcr" => $_POST["dstv_dvd_vcr"],
        "hi_fi_speakers_large" => $_POST["hi_fi_speakers_large"],
        "hi_fi_speakers_small" => $_POST["hi_fi_speakers_small"],
        "hi_fi_stand" => $_POST["hi_fi_stand"],
        "lamp_large" => $_POST["lamp_large"],
        "lamp_small" => $_POST["lamp_small"],
        "organ" => $_POST["organ"],
        "ottoman" => $_POST["ottoman"],
        "piano_grand" => $_POST["piano_grand"],
        "piano_upright" => $_POST["piano_upright"],
        "show_case" => $_POST["show_case"],
        "tv" => $_POST["tv"],
        "tv_big_screen"  => $_POST["tv_big_screen"],
        "tv_plasma"  => $_POST["tv_plasma"],
        "table_coffee"  => $_POST["table_coffee"],
        "table_side"  => $_POST["table_side"],
        "tv_UnitM"  => $_POST["tv_UnitM"],
        "wall_unit_1pc"  => $_POST["wall_unit_1pc"],
        "wall_unit_2pc" => $_POST["wall_unit_2pc"],
        "wall_unit_3pc"  => $_POST["wall_unit_3pc"]
    ),

    "dining" => array(
        "cabinet_large"  => $_POST["cabinet_large"],
        "cabinet_medium"  => $_POST["cabinet_medium"],
        "dining_room_chair"  => $_POST["dining_room_chair"],
        "dining_table_10_seater"  => $_POST["dining_table_10_seater"],
        "dining_table_4_seater" => $_POST["dining_table_4_seater"],
        "dining_table_6_seater"  => $_POST["dining_table_6_seater"],
        "dining_table_8_seater"  => $_POST["dining_table_8_seater"],
        "hostess"  => $_POST["hostess"],
        "server" => $_POST["server"],
        "side_board"  => $_POST["side_board"],
        "tea_trolley"  => $_POST["tea_trolley"],
        "welsh_dresser"  => $_POST["welsh_dresser"]
    ),

    "family" => array(
        "bar_counter" => $_POST["bar_counter"],
        "bar_stool"  => $_POST["bar_stool"],
        "bar_unit_l"  => $_POST["bar_unit_l"],
        "bookcase_l"  => $_POST["bookcase_l"],
        "bookcase_m"  => $_POST["bookcase_m"],
        "bookcase_s" => $_POST["bookcase_s"],
        "cabinet_s"  => $_POST["cabinet_s"],
        "coffee_table" => $_POST["coffee_table"],
        "side_tables"  => $_POST["side_tables"]
    ),

    "study" => array(
        "cabinet_2_draw"  => $_POST["cabinet_2_draw"],
        "cabinet_4_draw"  => $_POST["cabinet_4_draw"],
        "carpets"  => $_POST["carpets"],
        "computers"  => $_POST["computers"],
        "credenza"  => $_POST["credenza"],
        "desk_l"  => $_POST["desk_l"],
        "desk_m"  => $_POST["desk_m"],
        "desk_s"  => $_POST["desk_s"],
        "drawing_board"  => $_POST["drawing_board"],
        "office_chair " => $_POST["office_chair"],
        "pillars"  => $_POST["pillars"]
    ),

    "bedroom" => array(
        "bed_double"  => $_POST["bed_double"],
        "bed_queen"  => $_POST["bed_queen"],
        "bed_single"  => $_POST["bed_single"],
        "bed_sleeper_couch"  => $_POST["bed_sleeper_couch"],
        "chaise_lounge" => $_POST["chaise_lounge"],
        "chest_of_drawers" => $_POST["chest_of_drawers"],
        "cheval_mirror" => $_POST["cheval_mirror"],
        "clothes_basket" => $_POST["clothes_basket"],
        "cot_or_compactum" => $_POST["cot_or_compactum"],
        "dres_table_l" => $_POST["dres_table_l"],
        "dres_table_m" => $_POST["dres_table_m"],
        "dumb_valet" => $_POST["dumb_valet"],
        "exercise_bicycle" => $_POST["exercise_bicycle"],
        "futon_double" => $_POST["futon_double"],
        "futon_single" => $_POST["futon_single"],
        "gym_all_in_one" => $_POST["gym_all_in_one"],
        "headboard" => $_POST["headboard"],
        "health_walker" => $_POST["health_walker"],
        "kist" => $_POST["kist"],
        "pedestals" => $_POST['pedestals'],
        "bedroom_tv" => $_POST["bedroom_tv"],
        "treadmil" => $_POST["treadmil"],
        "wardrobe_2_door" => $_POST["wardrobe_2_door"],
        "wardrobe_3_door" => $_POST["wardrobe_3_door"]
    ),

    "bedroom" => array(
        "chaise_lounge" => $_POST["chaise_lounge"],
        "chest_of_drawers" => $_POST["chest_of_drawers"],
        "cheval_mirror" => $_POST["cheval_mirror"],
        "clothes_basket" => $_POST["clothes_basket"],
        "cot_or_compactum" => $_POST["cot_or_compactum"],
        "dres_table_l" => $_POST["dres_table_l"],
        "dres_table_m" => $_POST["dres_table_m"],
        "dumb_valet" => $_POST["dumb_valet"],
        "exercise_bicycle" => $_POST["exercise_bicycle"],
        "futon_double" => $_POST["futon_double"],
        "futon_single" => $_POST["futon_single"],
        "gym_all_in_one" => $_POST["gym_all_in_one"],
        "headboard" => $_POST["headboard"],
        "health_walker" => $_POST["health_walker"],
        "kist" => $_POST["kist"],
        "pedestals" => $_POST['pedestals'],
        "bedroom_tv" => $_POST["bedroom_tv"],
        "treadmil" => $_POST["treadmil"],
        "wardrobe_2_door" => $_POST["wardrobe_2_door"],
        "wardrobe_3_door" => $_POST["wardrobe_3_door"]
    ),

    "kitchen" => array(
        "bar_fridge" => $_POST["bar_fridge"],
        "cabinet_s" => $_POST["cabinet_s"],
        "chair" => $_POST["chair"],
        "clothes_airer" => $_POST["clothes_airer"],
        "dishwasher" => $_POST["dishwasher"],
        "fans" => $_POST["fans"],
        "freezer" => $_POST["freezer"],
        "fridge" => $_POST["fridge"],
        "heaters" => $_POST['heaters'],
        "ironing_board" => $_POST["ironing_board"],
        "knitting_machine" => $_POST["knitting_machine"],
        "microwave_oven" => $_POST["microwave_oven"],
        "polisher" => $_POST["polisher"],
        "sewing_machine" => $_POST["sewing_machine"],
        "stove_l" => $_POST["stove_l"],
        "table" => $_POST["table"],
        "tumble_drier" => $_POST["tumble_drier"],
        "v_cleaner" => $_POST["v_cleaner"],
        "veggie_rack" => $_POST["veggie_rack"],
        "washing_machine" => $_POST["washing_machine"]
    ),
    "garage" => array(
        "bicycle" => $_POST["bicycle"],
        "bin" => $_POST["bin"],
        "bird_cage" => $_POST["bird_cage"],
        "birdbath" => $_POST["birdbath"],
        "braai–gas" => $_POST["braai–gas"],
        "braai–webber" => $_POST["braai–webber"],
        "chair_stack" => $_POST["chair_stack"],
        "concrete_bench" => $_POST["concrete_bench"],
        "cooler_box" => $_POST["cooler_box"],
        "fishing_rods" => $_POST["fishing_rods"],
        "garden_bench" => $_POST["garden_bench"],
        "garden_ornaments" => $_POST["garden_ornaments"],
        "garden_statues" => $_POST["garden_statues"],
        "garden_table_wood" => $_POST["garden_table_wood"],
        "garden_tools" => $_POST["garden_tools"],
        "golf_bag_or_cart" => $_POST["golf_bag_or_cart"],
        "hose_pipe" => $_POST["hose_pipe"],
        "kennel_l" => $_POST["kennel_l"],
        "kennel_m" => $_POST["kennel_m"],
        "ladder" => $_POST["ladder"],
        "lathe_or_saw_bench" => $_POST["lathe_or_saw_bench"],
        "lawn_mower" => $_POST["lawn_mower"],
        "lounger" => $_POST["lounger"],
        "steel_shelves" => $_POST["steel_shelves"],
        "suitcase" => $_POST["suitcase"],
        "table_plastic" => $_POST["table_plastic"],
        "toolbox" => $_POST["toolbox"],
        "trunks" => $_POST["trunks"],
        "umbrella" => $_POST["umbrella"]
    ),
    "miscelleneous" => array(
        "bean_bag" => $_POST["bean_bag"],
        "canoe" => $_POST["canoe"],
        "children_chair" => $_POST["children_chair"],
        "children_table" => $_POST["children_table"],
        "fish_tank" => $_POST["fish_tank"],
        "jungle_gym" => $_POST["jungle_gym"],
        "motor_bike" => $_POST["motor_bike"],
        "prams" => $_POST["prams"],
        "safes" => $_POST["safes"],
        "sandpit" => $_POST["sandpit"],
        "snooker_table_half" => $_POST["snooker_table_half"],
        "snooker_table_quarter" => $_POST["snooker_table_quarter"],
        "snooker_table" => $_POST["snooker_table"],
        "wendy_house" => $_POST["wendy_house"],
        "carpets" => $_POST["carpets"],
        "mirrors" => $_POST["mirrors"],
        "ornaments" => $_POST["ornaments"],
        "paintings" => $_POST["paintings"],
        "pictures" => $_POST["pictures"],
        "pot_plant_stands" => $_POST["pot_plant_stands"],
        "pot_plants_l" => $_POST["pot_plants_l"],
        "pot_plants_m" => $_POST["pot_plants_m"],
        "pot_plants_s" => $_POST["pot_plants_s"],
        "crockery_boxes" => $_POST["crockery_boxes"],
        "general_boxes" => $_POST["general_boxes"],
        "linen_boxes" => $_POST["linen_boxes"],
        "drobe_boxes" => $_POST["drobe_boxes"]
    )
);



foreach ($selectgoods["entranceHall"] as $x => $x_value) {
    if ($x_value != 0) {

        $content .= '<tr width="100%">
    <td>
    ' . $mover->convertToStudlyCaps($x) . '
    </td>  
    <td>
    ' . $x_value . '    
    </td>  
    <td>
    ' . ($mover->getValue("entranceHall", $x) * $x_value) . '
    </td>
    </tr>';
        $total_volume += $mover->getValue("entranceHall", $x) * $x_value;
    }
}

foreach ($selectgoods["lounge"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
    <td>
    ' . $mover->convertToStudlyCaps($x) . '
    </td>  
    <td>
    ' . $x_value . '    
    </td>  
    <td>
    ' . ($mover->getValue("lounge", $x) * $x_value) . '
    </td>
    </tr>';
        $total_volume += $mover->getValue("lounge", $x) * $x_value;
    }
}

foreach ($selectgoods["dining"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("dining", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("dining", $x) * $x_value;
    }
}

foreach ($selectgoods["family"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("family", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("family", $x) * $x_value;
    }
}

foreach ($selectgoods["study"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("study", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("study", $x) * $x_value;
    }
}

foreach ($selectgoods["bedroom"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("bedroom", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("bedroom", $x) * $x_value;
    }
}

foreach ($selectgoods["kitchen"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("kitchen", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("kitchen", $x) * $x_value;
    }
}

foreach ($selectgoods["garage"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("garage", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("garage", $x) * $x_value;
    }
}

foreach ($selectgoods["miscelleneous"] as $x => $x_value) {
    if ($x_value != 0) {
        $content .= '<tr width="100%">
        <td>
        ' . $mover->convertToStudlyCaps($x) . '
        </td>  
        <td>
        ' . $x_value . '    
        </td>  
        <td>
        ' . ($mover->getValue("miscelleneous", $x) * $x_value) . '
        </td>
        </tr>';
        $total_volume += $mover->getValue("miscelleneous", $x) * $x_value;
    }
}

$content .= '<tr>
<td colspan="2">
<h4>Total Volume Is</h4>
</td>
<td>
' . $total_volume . '
</td>
</tr>';
$content .= '</table>';
$content .= "</div>";



//echo $content;

$to = "terence@rebeanation.tech";
$subject = "Quote Request From Website";


$header = "From:noreply@leopardmovers.co.za \r\n";
$header .= "Cc:itsupport@leopardmovers.co.za \r\n";
$header .= "Cc: $email \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$send_email = mail($to, $subject, $content, $header);

if($send_email){
    echo "success";
}