<?php

# Get Form Values (If not posted, then set default values)

if (isset($_POST['MaxWords'])) {
    $MaxWords = $_POST["MaxWords"];
} else {
    $MaxWords = 3;
}

if (isset($_POST['optionsCase'])) {
    $Case = $_POST["optionsCase"];
} else {
    $Case = "Mixed";
}

if (isset($_POST['PasswordsToGenerate'])) {
    $PasswordsToGenerate = $_POST["PasswordsToGenerate"];
} else {
    $PasswordsToGenerate = 5;
}


$IncludeSymbol = isset($_POST['IncludeSymbol']);
$IncludeDash   = isset($_POST['IncludeDash']);
$IncludeNumber = isset($_POST['IncludeNumber']);


# Validate the form input 
$validForm = true;

# Number of Words is between 3 and 9
if ($MaxWords < 3 OR $MaxWords > 9 OR is_numeric($MaxWords) == false) {
    $validForm = false;
}


# Validate Number of Passwords to Generate is between 1 and 20
if ($PasswordsToGenerate < 1 OR $PasswordsToGenerate > 20 OR is_numeric($PasswordsToGenerate) == false) {
    $validForm = false;
}


function generatePassword($numberOfWords, $includeDashes, $includeSymbol, $includeNumber, $case)
{
    
    # This function generates a password based on the given options.
    
    $password = "";
    
    # Assign Words into an Array
    $words[0]  = "Book";
    $words[1]  = "Boat";
    $words[2]  = "Green";
    $words[3]  = "Horse";
    $words[4]  = "Animal";
    $words[5]  = "Cat";
    $words[6]  = "Desk";
    $words[7]  = "Coffee";
    $words[8]  = "Dog";
    $words[9]  = "Hose";
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
    
    #Split Symbols in to an Array
    $symbols = str_split(".!@#$%^&*()/\:;+=");
    
    #Loop through the specified number of words and concatenate the randomly selected words
    for ($x = 1; $x <= $numberOfWords; $x++) {
        $word = $words[array_rand($words)];
        
        if ($case == "Mixed") {
            $password = $password . $word;
        } elseif ($case == "Lower") {
            $password = $password . strtolower($word);
        } elseif ($case == "Upper") {
            $password = $password . strtoupper($word);
        }
        
        if ($includeDashes) {
            $password = $password . "-";
        }
        
    }
    
    # Truncate the last Dash
    $password = rtrim($password, "-");

    # Add a symbol if symbols are specified
    if ($includeSymbol) {
        $password = $password . $symbols[array_rand($symbols)];
    }
    
    # Add a number if numbers are specified
    if ($includeNumber) {
        $password = $password . rand(100, 10000);
    }


    
    return $password;
    
}

?> 