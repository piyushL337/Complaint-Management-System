<?php
/** 
 *
 *
 *
 * Created by Piyush Joshi (PiyushL337@gmail.com)
 * Package: Login & Registration System
 * Date: 25/08/2021
 *
 *
 *
 */
	session_start(); // start session
	// connect to database
	$conn = new mysqli("localhost", "id17451854_pjoshi", "Bharatmata@11", "id17451854_pj");
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
  // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__))); // path to the root folder
	define ('INCLUDE_PATH', realpath(dirname(__FILE__) . '/includes' )); // Path to includes folder
	define('BASE_URL', 'http://localhost/user-accounts/'); // the home url of the website
function getMultipleRecords($sql, $types = null, $params = []) {
  global $conn;
  $stmt = $conn->prepare($sql);
  if (!empty($params) && !empty($params)) { // parameters must exist before you call bind_param() method
    $stmt->bind_param($types, ...$params);
  }
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_all(MYSQLI_ASSOC);
  $stmt->close();
  return $user;
}
function getSingleRecord($sql, $types, $params) {
  global $conn;
  $stmt = $conn->prepare($sql);
  $stmt->bind_param($types, ...$params);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $stmt->close();
  return $user;
}
function modifyRecord($sql, $types, $params) {
  global $conn;
  $stmt = $conn->prepare($sql);
  $stmt->bind_param($types, ...$params);
  $result = $stmt->execute();
  $stmt->close();
  return $result;
}
?>
