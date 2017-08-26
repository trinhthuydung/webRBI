<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
    <form action="../../Controller/home/equipmentUnitController.php" onSubmit="return validateForm()" name="newEquipmentUnit">
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
                <td><strong>EquipNum </strong><input type="text" name="pltEquipment"></td>
                <td><strong>Component </strong><input type="text" name="pltComponent"></td>
                <td><strong>Equipment Description </strong><input type="text" name="ptlED"></td>
 
            </tr>
        </table>
    </fieldset>
    </div>
    

    
