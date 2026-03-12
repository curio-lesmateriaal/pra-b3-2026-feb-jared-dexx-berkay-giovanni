<?php require_once '../backend/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once '../head.php'; ?>
</head>
<body>
<?php
require_once '../backend/conn.php';


$query = "SELECT * FROM taken";
$statement = $conn->prepare($query);
$statement->execute();
$meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

    <h1>maak een taak aan</h1>
    <form action="../backend/taskController.php" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($task['id']); ?>">

        <div class= "form-group">
        <label for="titel">taak:</label>
        <input type="text" id="titel" name="titel" placeholder="naam van de taak"> <br>
        <label for="beschrijving">beschrijving:</label>
        <input type="text" id="beschrijving" name="beschrijving" placeholder="beschrijving van de taak"> <br>
        <label for="afdeling">afdeling:</label>
        <select name="afdeling" id="afdeling">
            <option value="">– kies een afdeling –</option>
            <option value="personeel">personeel</option>
            <option value="horeca">horeca</option>
            <option value="techniek">techniek</option>
            <option value="inkoop">inkoop</option>
            <option value="klantenservice">klantenservice</option>
            <option value="groen">groen</option>
        </select> <br>

    submit <input type="submit" value="submit">
</form>
</div>

</body>
</html>