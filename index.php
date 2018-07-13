<?
5.)	What is wrong with this query

	   "SELECT * FROM table WHERE id = $_POST[ 'id' ]"


Answer: 	
The very first thing that stands out is the quotes do not look correct. You cannot put quotes around an array key when within double quotes.  You could store the key in a variable and write it something like this:

//$_POST['id'] = 45;

//$answer = "SELECT * FROM table WHERE id = $_POST[id]";
//echo $answer;


6.)	What is wrong with this if statement?

	if( !strpos( $haystack, $needle ) ) return false;

Answer: There is no function written. So far there are just the parameters that if they do NOT equal to !strpos it will return false. It should read:

if( !strpos( $haystack, $needle ) ) {
	// place function here
}
return false;

?>