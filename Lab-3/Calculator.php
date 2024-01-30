<html>
<head><title>Calculator</title></head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="First-Number" required/><br/>   
    <input type="text" name="Second-Number" required/><br/>
    <select name="Operation">
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">*</option>
        <option value="division">/</option>
    </select><br/>
    <input type="submit" value="Calculate"/>
</form>

<?php
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstNumber = $_POST['First-Number'];
    $secondNumber = $_POST['Second-Number'];
    $operation = $_POST['Operation'];

    switch ($operation) {
        case 'addition':
            $result = $firstNumber + $secondNumber;
            break;
        case 'subtraction':
            $result = $firstNumber - $secondNumber;
            break;
        case 'multiplication':
            $result = $firstNumber * $secondNumber;
            break;
        case 'division':
            if ($secondNumber != 0) {
                $result = $firstNumber / $secondNumber;
            } else {
                $result = "Division by zero error!";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    echo "Result: " . $result;
} 
?>

</body>
</html>
