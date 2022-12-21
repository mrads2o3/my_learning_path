<?php
// 1
// $data = array(1,2,3,4,5,6,7,8,9,10);
// $dataganjil = array();
// $datagenap = array();
// $datafinal = array();

// foreach($data as $var){
//     if($var % 2 == 1){
//         array_push($dataganjil, $var);
//     }else{
//         array_push($datagenap, $var);
//     }
// }

// $datafinal = array_merge($dataganjil, $datagenap);
// var_dump($datafinal);


// 2 skip dulu
// $data = array(100, 3, 200, 5, 6, 18, 11);
// $datafinal = array();
// $temp = 0;
// foreach($data as $var){
//     if($var > $temp){
//         foreach(){

//         }
//         array_push($datafinal, $var);
//     }else{
//         $temp = $var;
//     }
// }

// var_dump($datafinal);

// 2
$data = array(100, 3, 200, 5, 6, 18, 11);
$finaldata = array();
rsort($data);
for($i=0;$i < 3;$i++){
    array_push($finaldata, $data[$i]);
}
print_r($finaldata);

// 3
// function tes($data)
// {
//     return $data != NULL;
// }

// $out = tes(8);
// print($out);

// 4
// function tes($data, $cek)
// {
//     if($cek){
//         return $data * 2;
//     }

//     return $data;
// }

// $out = tes(11, true);
// echo $out;

// 5
// function a($data)
// {
//     # code...
//     return $data++;
// }

// $out = a(5);
// echo $out;
?>