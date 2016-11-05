<?php
class User {

  private $database;
  private $domain;

  public function __construct() {
    $this->database = DataBase::connect();
    $this->domain = $_SERVER['HTTP_HOST'];
  }

  public static function getLang() {
    $user_lang = intval($_SESSION['user_lang']);
    return (!empty($user_lang)) ? $user_lang : htmlspecialchars(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
  }

  public static function isAuth() {
    return (!empty($_SESSION['user_id'])) ? true : false;
  }

  /**s
   * @return <string> User   IP Если IP верно
   * @return <boolean> false Если IP не верно
   */
	public static function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
    if(!filter_var($ip, FILTER_VALIDATE_IP)) {
      return false;
    }
    return $ip;
	}

  public function getInitials($uid) {
    $info = $this->getInfo($uid, 'firstname, lastname');
    return $info['firstname'].' '.$info['lastname'];
  }

  public function getInfo($user_id, $fields) {
    if(!$user_id) return false;
    $user_id = (int) $user_id;
    $get_info = $this->database->prepare("SELECT $fields FROM `users` WHERE `id` = :user_id");
    $get_info->execute(array(':user_id' => $user_id));
    return $get_info->fetch(PDO::FETCH_ASSOC);
  }

  /**
   * @desc Выход
   * @date 9.04.2016
   */
  public function logOut() {
    session_unset();
    session_destroy();
    header('Location: /');
  }

}
?>