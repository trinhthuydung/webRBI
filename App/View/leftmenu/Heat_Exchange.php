<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
   <form action="../../Controller/home/equipmentTempController.php" onSubmit="return validateForm()" name="plant" method="POST">
    <fieldset>
        <table>
            <legend>Heat Exchanger</legend>
          
            <tr>
                <td><strong>Operating Pressure (barg) Inlet</strong></td>
                <td><input type="text" name="pltOPI"></td><td width="60px"></td>
                <td><strong>Operating Temp (C) Inlet</strong></td>
                <td><input type="text" name="pltOTI"></td>
            </tr>
            <tr>
                <td><strong>Operating Temp (C) Outlet</strong></td>
                <td><input type="text" name="pltOTO"></td><td width="60px"></td>
                <td><strong>Operating Pressure (barg) Outlet</strong></td>
                <td><input type="text" name="pltOPO"></td>
            </tr>            
            </table>
            </fieldset>