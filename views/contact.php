
<?php
$input_array = [
    ["name" => "Zara Azad", "phone" => "+964000110011", "email" => "zara@mail.com"],
    ["name" => "Ahmed Rafiq", "phone" => "+964000223311", "email" => "arafiq@mail.com"],
    ["name" => "Darbaz Khudhr", "phone" => "+964000440444", "email" => "darbaz@mail.com"],
];
?>
<div class="mt-5">
    <h1 class="mb-4">List of contact numbers</h1>
    <?php render_table($input_array);?>

</div>
