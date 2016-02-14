<?php

# Get Form Values

 $MaxWords = $_POST["MaxWords"];
 $Case = $_POST["optionsCase"];

 $IncludeSymbol= false;
 $IncludeDash= false;
 $IncludeNumber= false;

 if ( $_POST["IncludeSymbol"] = "on") {
 $IncludeSymbol = true;}

  if ( $_POST["IncludeDash"] = "on") {
  $IncludeDash = true;}

  if ( $_POST["IncludeNumber"] = "on") {
  $IncludeNumber = true;}


  
# Validate Number of Words is between 3 and 9
if ($MaxWords >= 3 AND $MaxWords <= 9)
	$validForm = true;
else
	$validForm = false;


	if ($validForm = false)
	{

	#exit();
	}





# Return 5 Passwords
# echo "MaxWords".$MaxWords;
# echo "IncludeDash".$IncludeDash;
# echo "IncludeSymbol".$IncludeSymbol;
# echo "IncludeNumber".$IncludeNumber;
# echo "IncludeCase".$Case;


# echo generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber,$Case);

$password1 = generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber,$Case);
$password2 = generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber,$Case);
$password3 = generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber,$Case);
$password4 = generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber,$Case);
$password5 = generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber,$Case);

?>


<?php

function generatePassword($numberOfWords, $includeDashes, $includeSymbol, $includeNumber,$case) {

$password = "";

# Assign Words into an Array
$words[0] = "Book";
$words[1] = "Boat";
$words[2] = "Green";
$words[3] = "Horse";
$words[4] = "Animal";
$words[5] = "Cat";
$words[6] = "Desk";
$words[7] = "Coffee";
$words[8] = "Dog";
$words[9] = "Hose";
$words[10] = "Run";
$words[11] = "Money";
$words[12] = "Ice";
$words[13] = "Note";
$words[14] = "Drawer";
$words[15] = "Window";
$words[16] = "Clock";
$words[17] = "Green";
$words[18] = "Fast";
$words[19] = "Slow";
$words[20] = "Ten";
$words[21] = "Bank";
$words[22] = "Code";
$words[23] = "State";
$words[24] = "City";
$words[25] = "Address";
$words[26] = "Truck";
$words[27] = "Garage";
$words[28] = "String";
$words[29] = "Format";
$words[30] = "Agile";
$words[31] = "Large";
$words[32] = "Growing";
$words[33] = "Visit";
$words[34] = "History";
$words[35] = "Stop";
$words[36] = "Go";
$words[37] = "Strike";
$words[38] = "Tower";
$words[39] = "Right";
$words[40] = "Left";
$words[41] = "Machine";
$words[42] = "Paint";
$words[43] = "Blue";
$words[44] = "Apply";
$words[45] = "Mail";
$words[46] = "Border";
$words[47] = "Type";
$words[48] = "Head";
$words[49] = "Body";

$symbols = str_split(".!@#$%^&*()/:;+=");


for ($x = 1; $x <= $numberOfWords; $x++) {
     $word = $words[array_rand($words)];

	 if ($case = "Mixed"){
	 $password = $password.$word;}
	 elseif ($case = "Lower"){
	 $password = $password.strtolower($word);}

	 if ($includeDashes = true){
	 $password = $password."-";}

} 

	# Truncate the last Dash
	$password = rtrim($password, "-");


	 if ($includeSymbol = true){
	  $password = $password.$symbols[array_rand($symbols)];}

	 if ($includeNumber = true){
	  $password = $password.rand( 100 , 10000 );}


	return $password;
    
 } 

?>