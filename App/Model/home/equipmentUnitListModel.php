<?php
require_once '../../Model/database.php';
class equipmentUnitListModel extends database{
    //put your code here
    function __construct() {
        
    }
    
    //Lay tat ca cac gia trij trong CSDL
    function getAllEquipmentUnit(){
        return $this->get_list_assoc('tbl_equipmentforrbi', '*');        
    }
    
    //lay ten cac cot trong CSDL
    function getAllPrameters(){
        $arr = $this->get_list_assoc('tbl_equipmentforrbi', '*');
        $outParams = array();
        $ti = "";
        if(count($arr)>0){
            foreach ($arr[0] as $key => $value) {
                array_push($outParams, $key);
            }
        }
        return $outParams;
    }
}

//$demo = new equipmentUnitListModel();
//$arr = $demo->getAllPrameters();
//foreach ($arr as $key => $value) {
//    echo $value."|";
//}
