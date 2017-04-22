<?php

include_once "Baza.php";

class Kursy{
    public $imie;
    public $nazwisko;
    public $login;
    public $haslo;
    public $email;
    public $status;
    function __construct($imie,$nazwisko,$login,$haslo,$email,$status) {
        $this->imie=$imie;
        $this->nazwisko=$nazwisko;
        $this->login=$login;
        $this->haslo=$haslo;
        $this->email=$email;
        $this->status=$status;
}
function dodaj() {
    $blad = false;

    $opt = array("options" => array("regexp" => "/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{2,}$/"));
    if (!filter_var($_REQUEST['imie'], FILTER_VALIDATE_REGEXP, $opt) === false) {
        $imie = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['imie']))));
        
    } else {
        
          echo "Błąd! Niepoprawne imię!";
          $blad = true;
    }
    
    $opt = array("options" => array("regexp" => "/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹŻ]{2,}$/"));
    if (!filter_var($_REQUEST['nazwisko'], FILTER_VALIDATE_REGEXP, $opt) === false) {
        $nazwisko = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['nazwisko']))));
        
    } else {
          echo "Błąd! Niepoprawne nazwisko!";
          $blad = true;
    }

    
    $opt = array("options" => array("regexp" => "/^[0-9a-zA-Z]([-_]*[0-9a-zA-Z]+)*$/"));
    if (!filter_var($_REQUEST['login'], FILTER_VALIDATE_REGEXP, $opt) === false) {
        $login = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['login']))));
       
    } else {
        echo "Błąd! Niepoprawny login!";
          $blad = true;
    }

   $opt = array("options" => array("regexp" => "/^[0-9a-zA-Z]([-_]*[0-9a-zA-Z]+)*$/"));
    if (!filter_var($_REQUEST['haslo'], FILTER_VALIDATE_REGEXP, $opt) === false) {
        $haslo = md5(htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['haslo'])))));
       
    } else {
        echo "Błąd! Niepoprawne haslo!";
          $blad = true;
    }
    

    if (!filter_var($_REQUEST['email']) === false) {
        $email = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['email']))));
    } else {
        echo "Niepoprawny email!" . '<br/>';
        $blad = true;
    }
    
    $status = "zwykly";
    
    if (!$blad) {
       $ob = new Baza("localhost", "root", "", "kursy");
       
       $ehhh = $ob->count("SELECT `login` FROM `uzytkownik` WHERE `login`='$login'");
       $ehhh2 = $ob->count("SELECT `email` FROM `uzytkownik` WHERE `email`='$email'");
       
       if(!$ehhh2 == 0) {echo "Podany e-mail jest już w bazie danych!";}
       else if(!$ehhh == 0){ echo "Nazwa użytkownika jest zajęta!";} else {
       
       $ob->insert("INSERT INTO `uzytkownik` (`imie`,`nazwisko`,`login`,`haslo`,`email`,`status`) VALUES ('$imie', '$nazwisko', '$login','$haslo','$email','$status')");
          

        echo "<h3>Rejestracja zakonczyla sie powodzeniem.</h3>" . '<br/>';
        
        }
        
    }
    else{
        echo "<h3><b>Zapisanie danych do bazy nie powiodło się. Spróbuj jeszcze raz.</b></h3>";
    }
}



function zaloguj(){
    
    $blad = false;
    $errors = "Wystąpił błąd! \\n";

        $login = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['login'])))); 

 
        $haslo = md5(htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['haslo'])))));
 
    
    if (!$blad) {
          $ob = new Baza("localhost", "root", "", "id1434839_kursy");
          $usser = $ob->count("SELECT `login` FROM uzytkownik WHERE `login`='$login'");
          $pass = $ob->count("SELECT `haslo` FROM uzytkownik WHERE `login` = '$login' AND `haslo`='$haslo'");
          echo $usser.$pass;
                  
          if($usser == 0){
                echo "<script type='text/javascript'>alert('Przepraszamy, nie ma takiego użytkownika...');</script>";
          }else if ($pass == 0){
                echo "<script type='text/javascript'>alert('Błędne hasło!');</script>";
          }else{
              echo "<script type='text/javascript'>alert('$errors');</script>";
              session_set_cookie_params(0);
              if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
              $_SESSION['username'] = $login;
              header_remove();
              header("Location: index.php");
          }
    }
    else{
         echo "<script type='text/javascript'>alert('$errors');</script>";
    }
    
}

function wyloguj(){
    session_start(); //to ensure you are using same session
    session_destroy(); //destroy the session
    header("location:index.php"); //to redirect back to "index.php" after logging out
    exit();
}


     public static function kursy1() {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `nazwa` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` group by `pozycja`.`id_kurs` order by count(`id_pozycja`) desc limit 1",array('nazwa'));
        echo $k1;
    }
    
    public static function kursy1o() {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `opis` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` group by `pozycja`.`id_kurs` order by count(`id_pozycja`) desc limit 1",array('opis'));
        echo $k1;
    }
    
     public static function kursy2() {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `nazwa` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` group by `pozycja`.`id_kurs` order by count(`id_pozycja`) desc limit 1, 1",array('nazwa'));
        echo $k1;
    }
    
    public static function kursy2o() {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `opis` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` group by `pozycja`.`id_kurs` order by count(`id_pozycja`) desc limit 1, 1",array('opis'));
        echo $k1;
    }
    
     public static function kursy3() {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `nazwa` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` group by `pozycja`.`id_kurs` order by count(`id_pozycja`) desc limit 2, 1",array('nazwa'));
        echo $k1;
    }
    
    public static function kursy3o() {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `opis` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` group by `pozycja`.`id_kurs` order by count(`id_pozycja`) desc limit 2, 1",array('opis'));
        echo $k1;
    }
    
    public static function mojek($usr) {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `nazwa`, `opis` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` JOIN `uzytkownik` ON `pozycja`.`id_uzytkownik` = `uzytkownik`.`id_uzytkownik` WHERE `login`='$usr'", array('nazwa', 'opis'));
        echo $k1;
    }
    
    public static function niemojek($usr) {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select("SELECT `nazwa`, `opis` FROM `kurs` WHERE `id_kurs` NOT IN (SELECT `kurs`.`id_kurs` FROM `kurs` JOIN `pozycja` ON `kurs`.`id_kurs` = `pozycja`.`id_kurs` JOIN `uzytkownik` ON `pozycja`.`id_uzytkownik` = `uzytkownik`.`id_uzytkownik` WHERE `login`='$usr') LIMIT 3", array('nazwa', 'opis'));
        echo $k1;
    }
    
    public static function dost($usr) {
        $ob = new Baza("localhost", "root", "", "kursy");
        $k1 = $ob->select2("SELECT `nazwa`, `opis`, `id_kurs` FROM `kurs` WHERE 1", array('nazwa', 'opis', 'id_kurs'), $usr);
        echo $k1;
    }
    
    public static function zap($q, $usr) {
        $ob = new Baza("localhost", "root", "", "kursy");
        $l = $ob->licz($q, $usr);
        $uid = intval(htmlspecialchars(addslashes(strip_tags(trim($ob->select("SELECT `id_uzytkownik` FROM `uzytkownik` WHERE `login`='$usr'", array('id_uzytkownik')))))));
        if($l > 0){
            $ob->delete("DELETE FROM `pozycja` WHERE `id_kurs`='$q' AND `id_uzytkownik`='$uid'")
                    or die('Błąd! ' . mysql_error());

            echo 'Wypisałeś się z kursu!';
            } else {
                $ob->insert("INSERT INTO `pozycja` (`id_kurs`, `id_uzytkownik`) VALUES ('$q', '$uid')")
                    or die('Błąd! ' . mysql_error());

            echo 'Zapisałeś się na kurs!';
            }
        }
        
    }


