<!DOCTYPE html>
<html>
<head>
    <title>Výsledek</title>
</head>
<body>
    <h2>Výsledek:</h2>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if($num2 == 0){
                    echo "Dělení nulou není možné.";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Neplatná operace.";
                break;
        }

        echo "Výsledek: $num1 $operator $num2 = $result";
    }
    ?>
</body>
</html>