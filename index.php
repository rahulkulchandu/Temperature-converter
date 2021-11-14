<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i-converter F to c and c to f</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <h1>Temperature-Converter</h1>
    <div class="main-box">
        <div class="left-box">
            <img src="images/Color-Temperature.jpg" alt="">
        </div>
        <div class="right-box">
            <form action="index.php" method="post">
                <input class="temp" type="number" name="temp" placeholder="Enter the temperature">
                <div class="units">
                    <label for="cel">cel</label>
                    <input type="radio" name="unit" id="cel" value="cel">
                    <label for="fehn">Fehn</label>
                    <input type="radio" name="unit" id="unit" value="fehn">
                </div>
                <input class="btn" type="submit" name="submit" value="Convert Now">
            </form>
            <div class="result">
                    <?php
                        if(isset($_POST['submit'])){
                            $temp = $_POST['temp'];
                            $unit = $_POST['unit'];
                            if($unit == "cel"){
                                $result = $temp*9/5+32 ;
                                echo '<p>The temperature is cel in feh <span>'.$result.'</span></p>';
                            }
                            if($unit == "fehn"){
                               $result=($temp-32)*5/9;
                               echo '<p>The temperature is fehn in cel <span>'.$result.'</span></p>';
                            }
                            
                        }
                        ?>
                </div>
        </div>
    </div>
</body>

</html>