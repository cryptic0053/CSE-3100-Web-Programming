<html>
<head><title>Calculator</title></head>
<body>

<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="First-Number" value="<?php echo isset($_POST['First-Number']) ? $_POST['First-Number'] : ''; ?>" required/><br/>   
    <input type="text" name="Second-Number" value="<?php echo isset($_POST['Second-Number']) ? $_POST['Second-Number'] : ''; ?>" required/><br/>
    <select name="Operation">
        <option value="addition" <?php if(isset($_POST['Operation']) && $_POST['Operation'] == 'addition') echo 'selected="selected"'; ?>>+</option>
        <option value="subtraction" <?php if(isset($_POST['Operation']) && $_POST['Operation'] == 'subtraction') echo 'selected="selected"'; ?>>-</option>
        <option value="multiplication" <?php if(isset($_POST['Operation']) && $_POST['Operation'] == 'multiplication') echo 'selected="selected"'; ?>>*</option>
        <option value="division" <?php if(isset($_POST['Operation']) && $_POST['Operation'] == 'division') echo 'selected="selected"'; ?>>/</option>
    </select><br/>
    <input type="submit" value="Calculate"/>
</form>

<?php
if ($result !== '') {
    echo "<p>Result: $result</p>";
}
?>

</body>
</html>
