<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>1. is_array()</h3>
            <p><strong>Description:</strong> <span class="text-muted">is_array — Finds whether a variable is an array</span></p>
            $yes = array('this', 'is', 'an array'); </p>
            <?php $yes = array('this', 'is', 'an array'); ?>
            <p><strong class="text-primary">Input:</strong> is_array($yes) </p>
            <p><strong class="text-success">Output:</strong> <?php echo is_array($yes) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>2. in_array()</h3>
            <p><strong>Description:</strong> <span class="text-muted">in_array — Checks if a value exists in an array</span></p>
            <p>$os = array("Mac", "NT", "Irix", "Linux"); </p>
            <?php $os = array("Mac", "NT", "Irix", "Linux"); ?>
            <p><strong class="text-primary">Input:</strong> in_array("Mac", $os) </p>
            <p><strong class="text-success">Output:</strong> <?php echo in_array("Mac", $os) ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6 ">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>3. array_merge()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_merge — Merge one or more arrays</span></p>
            <p>$array1 = array("color" => "red", 2, 4);</p>
            <p>$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);</p>
            <?php $array1 = array("color" => "red", 2, 4); ?>
            <?php $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4); ?>
            <p><strong class="text-primary">Input:</strong> dump(array_merge($array1, $array2)); </p>
            <p><strong class="text-success">Output:</strong> <?php
                                                                $result = array_merge($array1, $array2);
                                                                dump($result);
                                                                ?></p>
        </div>
    </div>

    <div class="col-6 ">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>4. array_keys()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_keys — Return all the keys or a subset of the keys of an array</span></p>
            <p> $array = array(0 => 100, "color" => "red"); </p>
            <?php $array = array(0 => 100, "color" => "red"); ?>
            <p><strong class="text-primary">Input:</strong> dump(array_keys($array)); </p>
            <p><strong class="text-success">Output:</strong> <?php dump(array_keys($array)); ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>5. array_key_exists()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_key_exists — Checks if the given key or index exists in the array</span></p>
            <p> $search_array = array('first' => 1, 'second' => 4); </p>
            <?php $search_array = array('first' => 1, 'second' => 4); ?>
            <p><strong class="text-primary">Input:</strong> array_key_exists('first', $search_array) </p>
            <p><strong class="text-success">Output:</strong> <?php echo array_key_exists('first', $search_array) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>6. array_shift()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_shift — Shift an element off the beginning of array</span></p>
            <p> $stack = array("orange", "banana", "apple", "raspberry"); </p>
            <p> $fruit = array_shift($stack);</p>
            <?php
            $stack = array("orange", "banana", "apple", "raspberry");
            $fruit = array_shift($stack);
            ?>
            <p><strong class="text-primary">Input:</strong> dump($stack); </p>
            <p><strong class="text-success">Output:</strong> <?php dump($stack); ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>7. array_push()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_push — Push one or more elements onto the end of array</span></p>
            <p>$stackPush = array("orange", "banana"); </p>
            <?php $stackPush = array("orange", "banana"); ?>
            <p><strong class="text-primary">Input:</strong> dump(array_push($stack, "apple", "raspberry")); </p>
            <p><strong class="text-success">Output:</strong> <?php array_push($stackPush, "apple", "raspberry");
                                                                dump($stackPush) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>8. array_pop()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_pop — Pop the element off the end of array</span></p>
            <p> $stackPop = array("orange", "banana", "apple", "raspberry"); </p>
            <?php $stackPop = array("orange", "banana", "apple", "raspberry"); ?>
            <p><strong class="text-primary">Input:</strong> dump(array_pop($stack)); </p>
            <p><strong class="text-success">Output:</strong> <?php array_pop($stackPop);
                                                                dump($stackPop) ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>9. array_values()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_values — Return all the values of an array</span></p>
            <p>$arrayValue = array("size" => "XL", "color" => "gold");</p>
            <?php $arrayValue = array("size" => "XL", "color" => "gold"); ?>
            <p><strong class="text-primary">Input:</strong> dump(array_values($array) </p>
            <p><strong class="text-success">Output:</strong> <?php dump(array_values($arrayValue)); ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>10. array_map()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_map — Applies the callback to the elements of the given arrays</span></p>
            function cube($n) <br>
            {
            <pre>   return ($n * $n * $n);</pre>
            } <br>


            $a = [1, 2, 3, 4, 5];<br>
            $b = array_map('cube', $a);
            <br>
            <br>

            <?php
            function cube($n)
            {
                return ($n * $n * $n);
            }

            $a = [1, 2, 3, 4, 5];
            $b = array_map('cube', $a);
            ?>
            <p><strong class="text-primary">Input:</strong> dump($b) </p>
            <p><strong class="text-success">Output:</strong> <?php dump($b) ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>11. array_slice()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_slice — Extract a slice of the array</span></p>
            <p> $inputSlice = array("a", "b", "c", "d", "e");</p>
            <?php $inputSlice = array("a", "b", "c", "d", "e"); ?>
            <p><strong class="text-primary">Input:</strong> dump(array_slice($inputSlice, 2)) </p>
            <p><strong class="text-success">Output:</strong> <?php dump(array_slice($inputSlice, 2)) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>12. array_unshift</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_unshift — Prepend one or more elements to the beginning of an array</span></p>
            <p> $queue = array("orange", "banana"); </p>
            <?php $queue = array("orange", "banana");
            array_unshift($queue, "apple", "raspberry");
            ?>
            <p><strong class="text-primary">Input:</strong> dump(array_unshift($queue, "apple", "raspberry")); </p>
            <p><strong class="text-success">Output:</strong> <?php dump($queue) ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>13. array_rand()</h3>
            <p><strong>Description:</strong> <span class="text-muted">array_rand — Pick one or more random keys out of an array</span></p>
            <p> $inputRand = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");</p>
            <P>$rand_keys = array_rand($inputRand, 2);</P>
            <?php $inputRand = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
            $rand_keys = array_rand($inputRand, 2); ?>
            <p><strong class="text-primary">Input:</strong> echo $input[$rand_keys[0]] </p>
            <p><strong class="text-success">Output:</strong> <?php echo $inputRand[$rand_keys[0]] ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>14. count()</h3>
            <p><strong>Description:</strong> <span class="text-muted">count — Counts all elements in an array or in a Countable object</p>
            <p> $nums = [1,2,3,4,5]; </p>
            <?php $nums = [1, 2, 3, 4, 5]; ?>
            <p><strong class="text-primary">Input:</strong> var_dump(count($nums)); </p>
            <p><strong class="text-success">Output:</strong> <?php var_dump(count($nums)); ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class my-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3 border border-1 rounded-3">
            <h3>15. implode()</h3>
            <p><strong>Description:</strong> <span class="text-muted">implode — Join array elements with a string</span></p>
            <p> $array = ['lastname', 'email', 'phone'];</p>
            <?php $array = ['lastname', 'email', 'phone'];?>
            <p><strong class="text-primary">Input:</strong> var_dump(implode(",", $array)); </p>
            <p><strong class="text-success">Output:</strong> <?php var_dump(implode(",", $array)); ?></p>
        </div>
    </div>
</div>