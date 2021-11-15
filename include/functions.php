
<?php
// session_start();
// $data = [
//     'surname' => '',
//     'name' => '',
//     'patronymic' => '',
//     'phone' => '',
//     'email' => '',
//     'product' => ' ',
//     'price' => '',
// ];
// if (!empty($_POST)) {
//     require_once 'db.php';
//     $data = load($data);
//     $order_id = save($data, $tabale = 'orders');
//     var_dump($order_id);
// }

// function load($data)
// {
//     foreach ($_POST as $k => $v) {
//         if (array_key_exists($k, $data)) {
//             $data[$k] = $v;
//         }
//     }
//     return $data;
// }
// // Простая запись данных, без проверок. https://www.youtube.com/watch?v=poWwbxQwdhs&ab_channel=WebForMySelf---16:00
// function save($table, $data)
// {
//     $tbl = R::dispense($table);
//     foreach ($data as $k => $v) {
//         $tbl->$k = $v;
//     }
//     return a::store($tbl);
// }

// function debug($data)
// {
//     echo '<pre>' . print_r($data, return: true) . '</pre>';
// }
