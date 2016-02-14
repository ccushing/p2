<!DOCTYPE html>
<html>
<head>

    <title>Charles Cushing P2 - CSCI E-15 : XKCD Random Password Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    <link href='css/p2.css' rel='stylesheet'>

    <?php require('PasswordGenerator.php'); ?>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="panel panel-primary">
                    <p class="bg-danger">Error! - Select a number from 3 to 9. Only a lunatic would go outside of these bounds!</p>
                  </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">XKCD Random Password Generator</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" id="PasswordForm" >
                            <div class="form-group">
                                <label for="MaxWords">Number of Words</label>

                                <select class="form-control" name="MaxWords">
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                </select>

                            </div>

                            <div class="panel panel-default">
                                <div class="checkbox">
                                    <label>
                                        <input name="IncludeSymbol" type="checkbox">
                                        Include a Symbol
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="IncludeNumber" type="checkbox">
                                        Include a Number
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="IncludeDash" type="checkbox">
                                        Include Dashes
                                    </label>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsCase" id="optionMixed" value="Mixed" checked>
                                        Use Mixed Case
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsCase" id="optionLower" value="Lower">
                                        Use Lower Case
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>

                        </form>

                    </div>

                     <div class="panel-body">
                    <table class="table table-bordered">
                <thead><tr><th>Generated Passwords</th></tr></thead>
                <tr>
                    <td><?php echo $password1; ?></td>
                </tr>

                <tr>
                    <td><?php echo $password2; ?></td>
                </tr>

                <tr>
                    <td><?php echo $password3; ?></td>
                </tr>

                <tr>
                    <td><?php echo $password4; ?></td>
                </tr>
				                <tr>
                    <td><?php echo $password5; ?></td>
                </tr>
            </table>
                         </div>
                </div>
            </div>

        </div>



    </div>



    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
