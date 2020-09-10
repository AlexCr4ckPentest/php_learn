<?php
    // Alexeyev Alexandr

    // Writting something to stdin
    echo "Hello world (using echo)\n"; // Works
    print "Hello world (using print)\n"; // and this work too

    // Maybe try to use print as a fuction call?
    print("Hello world (using print as a function call)\n"); // Yeah! thats works great!

    // Save string "Hello world" to varibale
    $hello_str = "Hello world";

    // and lest test fromat print:
    print("Test format printing: some string here... $hello_str ...and something here...\n");


    // Test string concat:
    $str_1 = "Hello ";
    $str_2 = "world";
    $str_3 = $str_1 . $str_2; // In PHP using operator '.' for string concat

    print("Concat test:\n");
    print("str_1 = $str_1\n");
    print("str_2 = $str_2\n");
    print("Concated (str_1 + str_2) = $str_3\n");
?>