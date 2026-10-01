<?php
/*
Defination:
A regular expression (Regex) is a sequence of characters that defines a specific pattern for searching, matching, validating, or manipulating text.

Regular expressions are mainly used for form validation, searching and replacing text, and extracting specific information from strings.

PHP provides functions such as preg_match(), preg_match_all(), and preg_replace() for working with regular expressions.

Some commonly used symbols are:

^ – represents the beginning of a string.
$ – represents the end of a string.
. – matches any single character.
* – matches zero or more occurrences.
+ – matches one or more occurrences.
? – matches zero or one occurrence.
[] – matches any one character from the specified set.
{n} – specifies an exact number of occurrences.

For example, the following expression checks whether a string contains exactly 10 digits:
/^[0-9]{10}$/

#Delimiters
A regular expression pattern must be enclosed within delimiters.
for example: 
"/PHP/"
"#PHP#"
"~PHP~"
The slash (/) is the most commonly used delimiter.

*/
/*
1. preg_match()
checks whether a string matches a regular expression pattern. It returns 1 if a match is found, 0 if no match is found, or FALSE if an error occurs.
syntax: preg_match(pattern,subject);
example:

$text="Hello, welcome to the world of web!";
$pattern="/PHP/";
if(preg_match($pattern, $text)) {
    echo "Match found!";
} else {
    echo "No match found.";
}


/*
2. preg_match_all()
searches for all occurrences of a pattern in a string and returns the number of matches found.
syntax: preg_match_all(pattern,subject,matches);
example:

$text2="The quick brown fox jumps over the lazy dog. The dog barked.";
$pattern2="/dog/";
preg_match_all($pattern2, $text2, $matches);
echo "Number of matches found: " . count($matches[0]);  
*/


/*
3. preg_replace()
replaces occurrences of a pattern in a string with a specified replacement string.
syntax: preg_replace(pattern, replacement, subject,limit);
example:

$text3="The quick brown fox jumps over the lazy dog.dog,dog";
$pattern3="/dog/";
$replacement="cat";
$new_text=preg_replace($pattern3, $replacement, $text3);
echo $new_text;
*/

/*
4. preg_split()
splits a string into an array based on a regular expression pattern.
syntax: preg_split(pattern, subject);
example:

$text4="apple,banana,orange,grape";
$pattern4="/,/";
$fruits=preg_split($pattern4, $text4);
print_r($fruits);
*/

/*
user phone number validation

$pattern6="/^[0-9]{10}$/";
$mobile="0987654321";
if(preg_match($pattern6, $mobile)) {
    echo "Valid mobile number";
} else {
    echo "Invalid mobile number";
}
    */
?>