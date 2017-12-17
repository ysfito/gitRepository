<?php
include('creerprofil.html');
if (isset($_POST['creer'])) {
    extract($_POST);
    $f=fopen('base.txt', 'a+');
    if($f) echo 'bon<br>'; else echo 'pas bon';
    $exist=0;

    while (($ligne=fgets($f)) != false) {
        $infosprofil=explode(';',$ligne);
         if ($infosprofil[0]==$login) {
             $exist=1;
             break;
         }
        }
         if ($exist == 1) {
            echo'Ce profil exist déja';
            echo"<a href='profilexist.php'>Créer un profil</a>";
         }
         else {
             fseek($f,2);
             
                function genered($nbr){
                    $chaine="azeryuiopmlkjhgfdsqwxcvbnAµZERTYUIOPMLKJHGFDSQXWCVBN123654789";
                    $caractere=strlen($chaine);
                    $motpass="";
                    for ($i=0; $i <$nbr ; $i++) {
                        $genered= mt_rand(0,$caractere-1);
                    $motpass.= $chaine[$genered];
                    }
                   return $motpass;
                }
                $password=genered(7);
                fputs($f , "$login;$profil;$password;complete\n");
         }
    
    

}
?>