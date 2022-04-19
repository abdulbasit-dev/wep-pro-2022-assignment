<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>1. strlen()</h3>
            <p><strong>Description:</strong> <span class="text-muted">strlen — Get string length</span></p>
            <?php $str = 'abcdef'; ?>
            <p><strong class="text-primary">Input:</strong> strlen("abcdef") </p>
            <p><strong class="text-success">Output:</strong> <?php echo strlen($str) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>1. substr()</h3>
            <p><strong>Description:</strong> <span class="text-muted">substr — Return part of a string</span></p>
            <p><strong class="text-primary">Input:</strong> substr("abcdef", -1) </p>
            <p><strong class="text-success">Output:</strong> <?php echo substr("abcdef", -1) ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>3. strpos()</h3>
            <p><strong>Description:</strong> <span class="text-muted">strpos — Find the position of the first occurrence of a substring in a string</span></p>
            $mystring = 'abc'; <br>
            $findme = 'b'; <br>
            <?php
            $mystring = 'abc';
            $findme   = 'b';
            ?>
            <p><strong class="text-primary">Input:</strong> strpos($mystring, $findme) </p>
            <p><strong class="text-success">Output:</strong> <?php echo strpos($mystring, $findme) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>4. str_split()</h3>
            <p><strong>Description:</strong> <span class="text-muted">str_split — Convert a string to an array</span></p>
            <?php $str = "Hello Friend"; ?>
            <p><strong class="text-primary">Input:</strong> str_split("Hello Friend"); </p>
            <p><strong class="text-success">Output:</strong> <?php dump(str_split($str)) ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>5. str_replace()</h3>
            <p><strong>Description:</strong> <span class="text-muted">str_replace — Replace all occurrences of the search string with the replacement string</span></p>
            <p>$phrase = "You should eat fruits, vegetables, and fiber every day.";</p>
            <?php
            $phrase  = "You should eat fruits, vegetables, and fiber every day.";
            ?>
            <p><strong class="text-primary">Input:</strong> str_replace("You","We",$phrase) </p>
            <p><strong class="text-success">Output:</strong> <?php echo str_replace("You", "We", $phrase) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>6. str_repeat()</h3>
            <p><strong>Description:</strong> <span class="text-muted">str_repeat — Repeat a string</span></p>
            <p><strong class="text-primary">Input:</strong> str_repeat("Hello ", 3) </p>
            <p><strong class="text-success">Output:</strong> <?php echo str_repeat("Hello ", 3) ?></p>
        </div>
    </div>
</div>


<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>7. strrev()</h3>
            <p><strong>Description:</strong> <span class="text-muted">strrev — Reverse a string</span></p>
            <p><strong class="text-primary">Input:</strong> strrev("Hello World") </p>
            <p><strong class="text-success">Output:</strong> <?php echo strrev("Hello World") ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>8. str_pad()</h3>
            <p><strong>Description:</strong> <span class="text-muted">str_pad — Pad a string to a certain length with another string</span></p>
            <p><strong class="text-primary">Input:</strong> str_pad("Hello World", 10) </p>
            <p><strong class="text-success">Output:</strong> <?php echo str_pad("Hello World", 10) ?></p>
        </div>
    </div>
</div>


<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>9. trim()</h3>
            <p><strong>Description:</strong> <span class="text-muted">trim — Strip whitespace (or other characters) from the beginning and end of a string</span></p>
            <p><strong class="text-primary">Input:</strong>trim("Hello World") </p>
            <p><strong class="text-success">Output:</strong> <?php echo trim("Hello World") ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>10. number_format()</h3>
            <p><strong>Description:</strong> <span class="text-muted">number_format — Format a number with grouped thousands</span></p>
            <p><strong class="text-primary">Input:</strong> number_format(1235, 2, ',', ' ') </p>
            <p><strong class="text-success">Output:</strong> <?php echo number_format(1235, 2, ',', ' ') ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>11. chr()</h3>
            <p><strong>Description:</strong> <span class="text-muted">chr — Generate a single-byte string from a number</span></p>
            <p><strong class="text-primary">Input:</strong> chr(-159), chr(833) </p>
            <p><strong class="text-success">Output:</strong> <?php echo chr(-159), chr(833) ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>12. ord()</h3>
            <p><strong>Description:</strong> <span class="text-muted">ord — Convert the first byte of a string to a value between 0 and 255</span></p>
            <p><strong class="text-primary">Input:</strong> ord("Hi") </p>
            <p><strong class="text-success">Output:</strong> <?php echo ord("Hi") ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>13. addslashes()</h3>
            <p><strong>Description:</strong> <span class="text-muted">addslashes — Quote string with slashes</span></p>
            <p><strong class="text-primary">Input:</strong> addslashes("Is your name O'Reilly?") </p>
            <p><strong class="text-success">Output:</strong> <?php echo addslashes("Is your name O'Reilly?") ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>14. strip_tags()</h3>
            <p><strong>Description:</strong> <span class="text-muted">strip_tags — Strip HTML and PHP tags from a string</span></p>
            <p><strong class="text-primary">Input:</strong> strip_tags('<?php echo htmlspecialchars('<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>') ?>') </p>
            <p><strong class="text-success">Output:</strong> <?php echo strip_tags('<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>') ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>15. stripcslashes()</h3>
            <p><strong>Description:</strong> <span class="text-muted">stripcslashes — Un-quote string quoted with addcslashes()</span></p>
            <p><strong class="text-primary">Input:</strong> stripcslashes('I\'d have a coffee.\nNot a problem.') </p>
            <p><strong class="text-success">Output:</strong> <?php echo stripcslashes('I\'d have a coffee.\nNot a problem.') ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>16. htmlentities()</h3>
            <p><strong>Description:</strong> <span class="text-muted">htmlentities — Convert all applicable characters to HTML entities</span></p>
            <p><strong class="text-primary">Input:</strong> htmlentities('<?php echo htmlentities("A 'quote' is <b>bold</b>") ?>')</p>
            <p><strong class="text-success">Output:</strong> <?php echo htmlentities("A 'quote' is <b>bold</b>") ?></p>
        </div>
    </div>
</div>


<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>17. html_entity_decode()</h3>
            <p><strong>Description:</strong> <span class="text-muted">html_entity_decode — Convert HTML entities to their corresponding characters</span></p>
            <p><strong class="text-primary">Input:</strong> html_entity_decode('<?php echo htmlentities("I'll \"walk\" the <b>dog</b> now") ?>') </p>
            <p><strong class="text-success">Output:</strong> <?php echo html_entity_decode("I'll \"walk\" the <b>dog</b> now")  ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>18. htmlspecialchars()</h3>
            <p><strong>Description:</strong> <span class="text-muted">htmlspecialchars — Convert special characters to HTML entities</span></p>
            <p><strong class="text-primary">Input:</strong> htmlspecialchars('<?php echo htmlentities("<a href='test'>Test</a>") ?>')</p>
            <p><strong class="text-success">Output:</strong> <?php echo htmlspecialchars("<a href='test'>Test</a>") ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>19. nl2br()</h3>
            <p><strong>Description:</strong> <span class="text-muted">nl2br — Inserts HTML line breaks before all newlines in a string</span></p>
            <p><strong class="text-primary">Input:</strong> nl2br("foo isn't\n bar") </p>
            <p><strong class="text-success">Output:</strong> <?php echo nl2br("foo isn't\n bar")  ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>20. str_word_count()</h3>
            <p><strong>Description:</strong> <span class="text-muted">str_word_count — Return information about words used in a string </span></p>
            <p><strong class="text-primary">Input:</strong> str_word_count("Hello World")</p>
            <p><strong class="text-success">Output:</strong> <?php echo str_word_count("Hello World") ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class mt-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>21. explode()</h3>
            <p><strong>Description:</strong> <span class="text-muted">explode — Split a string by a string</span></p>
            <p><strong class="text-primary">Input:</strong> explode("Hello World") </p>
            <p><strong class="text-success">Output:</strong> <?php dump(explode(" ", "Hello World")); ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>22. md5()</h3>
            <p><strong>Description:</strong> <span class="text-muted">md5 — Calculate the md5 hash of a string</span></p>
            <p><strong class="text-primary">Input:</strong> md5("Hello World")</p>
            <p><strong class="text-success">Output:</strong> <?php echo md5("Hello World") ?></p>
        </div>
    </div>
</div>

<hr>
<div class="row class my-4">
    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>23. sha1()</h3>
            <p><strong>Description:</strong> <span class="text-muted">sha1 — Calculate the sha1 hash of a string</span></p>
            <p><strong class="text-primary">Input:</strong> sha1("Hello World")</p>
            <p><strong class="text-success">Output:</strong> <?php echo sha1("Hello World") ?></p>
        </div>
    </div>

    <div class="col-6">
        <div class="bg-light px-4 py-3  border border-1 rounded-3">
            <h3>24. crypt()</h3>
            <p><strong>Description:</strong> <span class="text-muted">crypt — One-way string hashing</span></p>
            <p><strong class="text-primary">Input:</strong> crypt("Password")</p>
            <p><strong class="text-success">Output:</strong> <?php echo crypt("mypassword", "password") ?></p>
        </div>
    </div>
</div>