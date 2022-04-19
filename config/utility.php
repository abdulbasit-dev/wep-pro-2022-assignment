<?php

function render_table($array)
{
    //creating table
    echo '<table class="table table-hover">';

    // start thead 
    echo '<thead class="table-light">';
    //creating tr for th
    echo "<tr>";
    echo "<th>#</th>";
    foreach ($array[0] as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    echo '</thead>';
    // end thead 

    echo '<tbody >';
   
    //other tr's
    foreach ($array as $key => $value) {
        $i = $key + 1;
        echo "<tr>";
        echo "<td>$i</td>";
        foreach ($value as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo '</tbody>';
    echo "</table>";
}

function dump($array)
{
   return  "<pre>" . print_r($array) . "</pre>";
}
