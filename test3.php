<?php
$r = 0;
$c = 0;

// Check if the form fields are set and not empty
if (isset($_POST['txtRows']) && isset($_POST['txtCols'])) {
    if (!empty($_POST['txtRows']) && !empty($_POST['txtCols'])) {

        // Assign and convert input values to integers
//        $r = intval($_POST['txtRows']);
//        $c = intval($_POST['txtCols']);

        $r = $_POST['txtRows'];
        $c = $_POST['txtCols'];
        settype($r, 'integer');
        settype($c, 'integer');
        // Output the results
        echo "Number of Rows: $r<br>";
        echo "Number of Columns: $c<br>";
    } else {
        echo "Please fill in both the rows and columns fields.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function  ColorTextfilld(){
            event.currentTarget.style.background ="red";


        }

    </script>

</head>
<body>
<?php
//$v=`dir`;
//echo $v
//?>
<form action="test3.php" method="post">
    <table>
        <tr>
            <td>Number of Rows:</td>
            <td><input type="text" name="txtRows"></td>
        </tr>
        <tr>
            <td>Number of Columns:</td>
            <td><input type="text" name="txtCols"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Generate Table"></td>
        </tr>
    </table>
</form>
<?php
// Assuming $r (number of rows) and $c (number of columns) are set
if ($r > 0 && $c > 0) {
    echo "<table border='1'>";

    // Loop to generate rows
    for ($i = 0; $i < $r; $i++) {
        echo "<tr>";

        // Loop to generate columns
        for ($j = 0; $j < $c; $j++) {
            ?>

            <td>
                <input type="text" onclick="ColorTextfilld()" value="<?php echo $i; ?>" >
            </td>

            <?php
        }

        echo "</tr>"; // Close the row
    }

    echo "</table>"; // Close the table
}
?>










<!---->
<?php
//// 1. Regular Indexed Array Example
//$products = array('Books', 'CDs', 'DVDs');
//
//// Accessing array elements
//echo "Product at index 0: " . $products[0] . "<br>"; // Books
//echo "Product at index 1: " . $products[1] . "<br>"; // CDs
//echo "Product at index 2: " . $products[2] . "<br>"; // DVDs
//
//// Modifying an element in the array
//$products[0] = 'Games'; // Changing 'Books' to 'Games'
//echo "After modification, product at index 0: " . $products[0] . "<br>"; // Games
//
//// Looping through the array with a for loop
//echo "Looping with a for loop:<br>";
//for ($i = 0; $i < 3; $i++) {
//    echo $products[$i] . " ";
//}
//echo "<br>";
//
//// Looping through the array with a foreach loop
//echo "Looping with a foreach loop:<br>";
//foreach ($products as $current) {
//    echo $current . " ";
//}
//echo "<br>";
//
//// Adding a new element to the array
//$products[3] = 'Laptops'; // Adding 'Laptops' to the end
//echo "After adding a new product, array contains: ";
//foreach ($products as $current) {
//    echo $current . " ";
//}
//echo "<br>";
//
//// 2. Associative Array Example (Array with product names as keys and prices as values)
//$prices = array('CD' => 100, 'KB' => 10, 'LCD' => 4);
//
//// Accessing associative array elements
//echo "Price of CD: " . $prices['CD'] . "<br>";  // 100
//echo "Price of KB: " . $prices['KB'] . "<br>";  // 10
//echo "Price of LCD: " . $prices['LCD'] . "<br>"; // 4
//
//// Modifying an element in the associative array
//$prices['CD'] = 120; // Changing price of CD to 120
//echo "After modification, price of CD: " . $prices['CD'] . "<br>";  // 120
//
//// Adding a new product to the associative array
//$prices['Laptop'] = 500; // Adding Laptop with price 500
//echo "After adding a new product, price of Laptop: " . $prices['Laptop'] . "<br>"; // 500
//
//// Looping through the associative array
//echo "Looping through associative array:<br>";
//foreach ($prices as $product => $price) {
//    echo $product . " costs $" . $price . "<br>";
//}
//?>
<!---->

</body>
</html>