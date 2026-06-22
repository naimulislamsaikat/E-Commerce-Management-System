<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show-info</title>
    <link rel="stylesheet" href="../CSS/show.css">
</head>
<body>
    <form action="../PHP/user_update.php" id="show-info" method="post">
        
        
        <label for="" style="margin-right: 63px;">Name:</label>
        <input type="text" id="name" name="name" value=""><br>

        <label for="" style="margin-right: 64px;">Email:</label>
        <input type="email" name="email" id="email"><br>

        <label for="" style="margin-right: 85px;">ID:</label>
        <input type="text" name="id" id="id" value="" readonly><br>

        <label for="" style="margin-right: 5px;">Phone Number:</label>
        <input type="text" name="number" id="phn-no"><br>

        <label for="" style="margin-right: 48px;">Address:</label>
        <input type="text" name="address" id="address"><br>
        <div class="btn">
            <button type="submit" style="padding: 10px 120px; border-radius: 10px; background-color:blueviolet; color:#FFFFFF; font-size:larger;">Save Info</button>
        </div>
        

    </form>
    <?php
      include 'new.php';
      
    ?>
</body>
</html>