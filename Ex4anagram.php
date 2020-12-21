<?php
function is_anagram($wrd_1, $wrd_2) {
 {
       if (count_chars($wrd_1, 1) == count_chars($wrd_2, 1))
    {
        return "This two strings are anagram";
    }
    else
    {
        return "This two strings are not anagram";
    }
 }
print_r(is_anagram('anagram','nagaram')."\n");
print_r(is_anagram('cat','rat')."\n");
?>