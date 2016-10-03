<?php

$row = [];

for ($i = 1; $i <= 100; $i++) {
    $row[] = $i;
}

echo "<table style='border:solid; text-align:center'><tr style='border:solid;'>
<td colspan='1' >

</td>";

foreach($row as $value) {
    if($value%2 == 0) {
        echo "<td >".$value."</td>";
    } else {
        echo "<td style='background-color:gray'>".$value."</td>";
    }
}
echo "</tr>";


for($i = 1; $i <= 100; $i++) {

    echo "<tr style='border:1px solid'>";
    if($i%2==0) {
        echo "<td >" . $i . "</td>";
    } else {
        echo "<td style='background-color:lightgray'>" . $i . "</td>";
    }
    $makeGray = true;
    foreach ($row as $value) {
        if($i%2==0) {
            if($makeGray) {
                echo "<td style='background-color:gray'>" . $value * $i . "</td>";
            } else {
                echo "<td >" . $value * $i . "</td>";
            }
            $makeGray = !$makeGray;
        } else {
            echo "<td style='background-color:lightgray'>" . $value * $i . "</td>";
        }
    }
    echo "</tr>";
}



echo "</table>";
?>
