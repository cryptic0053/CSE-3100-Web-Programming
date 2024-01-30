<html>
<head><title>Personality</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
Select your personality attributes:<br />
<select name="attributes" >
<option value="perky">Perky</option>
<option value="morose">Morose</option>
<option value="thinking">Thinking</option>
<option value="feeling">Feeling</option>
<option value="thrifty">Spend-thrift</option>
<option value="prodigal">Shopper</option>
</select>
<br>
<input type="submit" name="s" value="Record my personality!" />
</form>

<?php
	// write your code here.....
	
if (isset($_GET["s"])) {
    // Check if attributes are selected
    if(isset($_GET["attributes"])) {
        $selected_attributes = $_GET["attributes"];
        echo "Your selected personality attributes: $selected_attributes";
        // You can process or store these attributes as needed
    } else {
        echo "Please select at least one attribute.";
    }
}
?>


</body>
</html>