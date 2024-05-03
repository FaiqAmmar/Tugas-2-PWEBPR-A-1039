<?php
require_once 'database.php';
// class Contact {
//   static function select () {
//     global $conn;
//     $sql = "SELECT * FROM contact_app";
//     $result = $conn->query($sql);
//     $arr = array();

//     if ($result->num_rows > 0) {
//       while ($row = mysql_fetch_assoc($result)) {
//         foreach ($row as $key => $value) {
//           $arr[$key][] = $value;  
//         }
//       }
//     }
//     return $arr;
//   }
//   static function insert($id, $owner, $no_id, $no_hp) {
//     global $conn;
//     $sql - "INSERT INTO contact_app(id, owner, no_id, no_hp) VALUES (?, ?, ?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param('ssss', $id, $owner, $no_id, $no_hp);
//     $stmt->execute();
//     $result = $stmt->affected_rows > 0 ? true : false;
//     return $result;
//   }
// }

?>