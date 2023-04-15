<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerifyIt</title>
</head>
<body>
    <div class="container">
    <form action="index1.php" method="post">
    <label for="Number">Number <input type="number" name="num" id="">  </label><br>
    <input type="submit" value="Search" name="submit">
    </form>
    <div class="details">
    <?php
    if(isset($_POST['submit']))
        {
            echo "
            <table>
            <tr><th colspan='2'>Number Details</th></tr>
            <tr><th>Name</th><td>XYZ</td></tr>
            <tr><th>Number</th><td>".$_POST['num']."</td></tr>
            <tr><th>Operator</th><td>XYZ</td></tr>
            <tr><th>State</th><td>XYZ</td></tr>
            <tr><th>Circle</th><td>XYZ</td></tr>
            

    </table>";

        }
        
    ?>
    


    </div>
    </div>
</body>
</html>