<?php

$vowels = array( 'a', 'e', 'i', 'o', 'u' );

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ( $strings as $string ) {

    $lower_case_string = strtolower( $string );

    $count = 0;

    for ( $i = 0; $i < strlen( $string ); $i++ ) {

        if ( in_array( $lower_case_string[$i], $vowels ) ) {
            $count++;
        }
    }

    echo "Original String: {$string}, Vowel Count: {$count}, Reversed String: " . strrev( $string ) . "\n";
}
