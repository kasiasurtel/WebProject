<?php

class Baza {

    private $mysqli; //uchwyt do BD

    public function __construct($serwer, $user, $pass, $kursy) {
        $this->mysqli = new mysqli($serwer, $user, $pass, $kursy);
        /* sprawdz połączenie */
        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n", $mysqli->connect_error);
            exit();
        }
        /* zmien kodowanie na utf8 */
        if ($this->mysqli->set_charset("utf8")) {
            //udało sie zmienić kodowanie
        }
    }

//koniec funkcji konstruktora

    function __destruct() {
        $this->mysqli->close();
    }

    public function select($sql, $pola) {
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola);
            $ile = $result->num_rows;
            $tresc.="<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc.="<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    @$tresc.="<td>" . $row->$p . "</td>";
                }
                $tresc.="</tr>";
            }
            $tresc.="</tbody></table>";
            $result->close();
        }
        return $tresc;
    }
    
    public function select2($sql, $pola, $usr) {
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola);
            $ile = $result->num_rows;
            $tresc.="<table><tbody>";
            while ($row = $result->fetch_object()) {
                $tresc.="<tr>";
                for ($i = 0; $i < $ilepol; $i++) {
                    if($i+1 == $ilepol) {
                        
                        $p = $pola[$i];
                        $q = $row->$p;
                        $l = $this->mysqli->query("SELECT `id_kurs` FROM `pozycja` JOIN `uzytkownik` ON `uzytkownik`.`id_uzytkownik` = `pozycja`.`id_uzytkownik` WHERE `id_kurs` = '$q' AND `login` = '$usr'")->num_rows;
                        if($l > 0) {@$tresc.="<td><button class=\"btn\" name=\"zap\" value=\"$q\">Wypisz się</button></td>";} else {@$tresc.="<td><button class=\"btn\" name=\"zap\" value=\"$q\">Zapisz się!</button></td>";}
                    
                    } else{
                    $p = $pola[$i];
                    @$tresc.="<td>" . $row->$p . "</td>";
                    }
                }
                $tresc.="</tr>";
            }
            $tresc.="</tbody></table>";
            $result->close();
        }
        return $tresc;
    }
    
    public function licz($q, $usr) {
        return $this->mysqli->query("SELECT `id_kurs` FROM `pozycja` JOIN `uzytkownik` ON `uzytkownik`.`id_uzytkownik` = `pozycja`.`id_uzytkownik` WHERE `id_kurs` = '$q' AND `login` = '$usr'")->num_rows;
    }

    public function insert($sql) {
        if ($this->mysqli->query($sql)) {
            return true;
        }
        else{
            return false;
        }
    }

    public function delete($sql) {
        if ($this->mysqli->query($sql)) {
            return true;
        }
        else{
            return false;
        }
    }
    
    public function count($sql){
        if ($result = $this->mysqli->query($sql)){
            $ile = $result->num_rows;
        }
        return $ile;
        }
        
        
         
   
}
//koniec klasy Baza

