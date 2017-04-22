<?php

class UserLog {
private $login;
private $haslo;
private $log = false;
function __construct($name, $pass ){ $this->login=$login; $this->haslo=$haslo; }
public function getName() { return $this->name; }
public function logout() {
$this->log = false;
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy();
}

static function loginForm($link)
// $link – wartość atrybutu action dla formularza logowania
{
echo '<div><h3>Zaloguj się:</h3>';
echo '<form action="'.$link.'" method="post" />';
echo ' Name: <br/><input type="text" name="login" /><br />';
echo 'Password: <br/><input type="password" name="haslo" /><br />';
echo '<input type="submit" name="login" value="Login" />';
echo '<input type="reset" value="Anuluj" />';
echo '</form>';
}

static function login($name, $pass, $bd, $table)
{ //$bd - uchwyt do BD, $table – nazwa tabeli z uzytkownikami w bazie
$user = null;
if ( ($name!=="") && ($pass!=="")) {
$sql="select * from ".$table." where name='".$name."' and pass='".$pass."' ";
if ($result = $bd->getMysqli()->query($sql)) {
$ile = $result->num_rows; //ile wierszy
if ($ile == 1) { //użytkownik zalogowany
$user = new UserLog($name, $pass);
$user->log = true;
$_SESSION["userOK"] = serialize($user);
}
$result->close(); /* zwolnij pamięć */
}
} return $user;
}
}

