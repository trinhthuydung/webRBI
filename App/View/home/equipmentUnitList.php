<?php
require_once '../../Model/home/equipmentUnitListModel.php';
$equList = new equipmentUnitListModel();
$params = $equList->getAllPrameters();
$val = $equList->getAllEquipmentUnit();


?>
<link rel="stylesheet" href="../../../../Public/css/home.css">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/tableItem.js"></script>
<input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for names..">
<table border="1" class="listTable" id="listTable">
    <tr>
        <?php
        foreach ($params as $value) {
            echo "<th><strong>$value</strong></th>";
        }
        ?>
    </tr>
    <?php
        foreach ($val as $key => $value) {
            echo "<tr>";
            foreach ($value as $key => $va) {
                echo "<td>$va</td>";
            }
            echo "<td><input type='checkbox' class='checkBoxClass' onchange='checkBoxChangeHandler()'></td>";
            echo "</tr>";
        }
    ?>
</table>
<div id="deleteItem" >
    <button onclick="deleteItems()">Delete Items</button>
</div>
<div id="deleteItem" >
    <button onclick="deleteAllItems()">Delete All</button>
</div>
<form enctype="multipart/form-data" method="post" role="form" action="../../Controller/home/equipmentUnitController.php">
    <div class="form-group">
        <label for="exampleInputFile">File Upload</label>
        <input type="file" name="file" id="file">
        <p class="help-block">Only .xls File Import.</p>
    </div>
    <button type="submit" class="btn btn-default" name="Import" value="Import">Upload</button>
</form>

<form action="../../Controller/home/uploadInput.php" method="POST" enctype="multipart/form-data">
    <div class="row" >
        <span>Equipment template:</span>
        <input type="file" name="fileupload_1"/><input type="submit" value="submit" name="submit1"/>

    </div>
</form>
<form method="post"action="../../Controller/home/email.php">
    <div>
        <input type="submit" value="Send mail">
    </div>

</form>

<script>
   /* function deleteItem(){
        var x = document.getElementsByClassName("checkBoxClass");
        table = document.getElementById("listTable");
        tr = table.getElementsByTagName("tr");
        var items = [];
        for (var i = 0; i < x.length; i++) {
            if(x[i].checked) {
                //Lay Id bat dau tu dong thu 2, bo qua ten cot
                td = tr[i+1].getElementsByTagName("td")[0];
                if (td) {
                    items.push(td.innerHTML);
                }
            }
        }

        var dataq = JSON.stringify(items);

        $.ajax({
            url: "../../Controller/home/equipmentUnitController.php",
            data: 'act=delete&equUnitCode=' + dataq,
            success: function(req){
                alert("Delete Unit Code" + dataq + " successfully! ");
                $(location).attr('href', '../../View/home/index.php?data=home&action=listEquipmentUnit&left=home_left');
            }
        });
    } */
</script>
