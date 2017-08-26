
<?php
require_once '../../Model/home/equipmentUnitModel.php';
$eqUnit = new equipmentUnitModel();
$unitCodes = $eqUnit->getAllEquipmentUnitCode();
?>
<link rel="stylesheet" href="../../../../Public/css/home.css" xmlns="http://www.w3.org/1999/html">
<form action="../../Controller/home/equipmentTempController.php" onsubmit="return validateForm()" name="newPlant" method="POST">
    <fieldset>
        <table>
            <legend>Plant information</legend>
            <tr>
                <td><strong>Plant </strong><input type="text" name="pltName"></td>
                <td><strong>Unit </strong><input list="pltUnit" name="pltUnit"></td>
                <datalist id="pltUnit">
                    <?php
                    foreach ($unitCodes as $value) {
                        echo "<option value='".$value[0]."'>";
                    }
                    ?>
                </datalist>
                <td><strong>Equipment </strong><input type="text" name="pltEquipment"></td>
                <td><strong>Component </strong><input type="text" name="pltComponent"></td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <table>