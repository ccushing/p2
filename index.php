<!DOCTYPE html>
<html>
<head>

    <title>Charles Cushing P2 - CSCI E-15 : XKCD Random Password Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    <link href='css/p2.css' rel='stylesheet'>

    <?php
require('PasswordGenerator.php');
?>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">



                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">XKCD Random Password Generator</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" id="PasswordForm" >
                            <div class="form-group">
                                <label for="MaxWords">Number of Words (Between 3 and 9)</label>
                                <input type="number" class="form-control" name="MaxWords" id="MaxWords" value="<?php echo $MaxWords; ?>" />
                            </div>

                        <div class="panel <?php if ($validForm) {echo "form-noerror";} ?>">
                    <p class="bg-danger">Error! - Please verify the number of words is between 3 and 9 and the number of passwords to generate is between 1 and 20.</p>
                  </div>


                            <div class="panel panel-default">
                                <div class="checkbox">
                                    <label>
                                        <input name="IncludeSymbol" type="checkbox" <?php
if ($IncludeSymbol) {
    echo "checked";
}
?> value="1">
                                        Include a Symbol
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="IncludeNumber" type="checkbox" <?php
if ($IncludeNumber) {
    echo "checked";
}
?> value="1">
                                        Include a Number
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="IncludeDash" type="checkbox" <?php
if ($IncludeDash) {
    echo "checked";
}
?> value="1">
                                        Include Dashes
                                    </label>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsCase" id="optionMixed" value="Mixed" <?php
if ($Case == "Mixed") {
    echo "checked";
}
?> >
                                        Use Mixed Case
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsCase" id="optionLower" value="Lower" <?php
if ($Case == "Lower") {
    echo "checked";
}
?>>
                                        Use Lower Case
                                    </label>
                                </div>
                                                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsCase" id="optionUpper" value="Upper" <?php
if ($Case == "Upper") {
    echo "checked";
}
?>>
                                        Use Upper Case
                                    </label>
                                </div>
                            </div>

                                                        <div class="form-group">
                                <label for="PasswordsToGenerate">Number of Passwords to Generate</label>

                                <select class="form-control" name="PasswordsToGenerate" id="PasswordsToGenerate">

                                                <?php
												# Generate the options for selecting the number of passwords to generate
												# Be sure to auto-select what the user has already selected
												for ($c = 1; $c <= 20; $c++) {
    
													if ($c == $PasswordsToGenerate) {
														echo "<option selected>" . $c . "</option>";
													} else {
														echo "<option>" . $c . "</option>";
													}
    
												}
												?> 
                                </select>

                            </div>



                            <button type="submit" class="btn btn-default">Submit</button>

                        </form>

                    </div>

                     <div class="panel-body">
                    <table class="table table-bordered">
                <thead><tr><th>Generated Passwords</th></tr></thead>

                <?php
					# Generate the passwords based on how many passwords were selected to generate
					if ($validForm) {
						for ($c = 1; $c <= $PasswordsToGenerate; $c++) {
        
							echo "<tr><td>" . generatePassword($MaxWords, $IncludeDash, $IncludeSymbol, $IncludeNumber, $Case) . "</td></tr>";
						}
					}
				?> 
            </table>
                         </div>
                </div>
            </div>

        </div>



    </div>



    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>