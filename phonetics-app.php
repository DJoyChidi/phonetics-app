<?php 
if(isset($_POST['check'])){


    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];
    echo soundex($str1);
    echo ("<br>");
    echo soundex($str2);
    echo ("<br>");
    
    echo metaphone($str1);
    echo ("<br>");
    echo metaphone($str2);
}
?>


<!DOCTYPE html>
<html>

<head>

    <style type="text/css">
        .btn {
            border: none;
            color: white;
            padding: 10px 20px;
            background-color: #0610ff;
            text-align: center;
            position: relative;
            left: 155px;
            text-decoration: none;
            width: 150px;
            cursor: pointer;
            display: inline-block;
            border-radius: 15px;
        }

        .field {
            background-color: #DCDCDC;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 5px;
        }
    </style>
    <title>Phonetics App</title>
</head>

<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
            <span><input class="field" type="text" name="str1"></span>
            <span><input class="field" type="text" name="str2"></span><br>
            <input class="btn" type="submit" name="check" value="CHECK">
        </form>
</body>
</html>
