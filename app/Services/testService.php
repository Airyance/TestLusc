<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Services\bdServices;


class testService {

    /*  $matriz=Array(
        Array(0,1,2,3,4,5,6,7),
        Array(2,3,1,0,4,5,7,6)
                                );
        $test = null;
        $test0 = null;
*/

        //$matriz = Array();

    public function conversorMatiz($test1,$test2){


        $matriz1= explode(",", $test1); // convierto el string a matriz 1
        $matriz2= explode(",", $test2); // convertimos el t4st 2

     // echo "estos es lo que hay en test1:  ".$test1;
        global $matriz;

        $matriz=Array(
        Array(intval($matriz1[0]),intval($matriz1[1]),intval($matriz1[2]),intval($matriz1[3]),intval($matriz1[4]),intval($matriz1[5]),intval($matriz1[6]),intval($matriz1[7])),
        Array(intval($matriz2[0]),intval($matriz2[1]),intval($matriz2[2]),intval($matriz2[3]),intval($matriz2[4]),intval($matriz2[5]),intval($matriz2[6]),intval($matriz2[7]))
                                );

        var_dump($matriz);
       
        return $matriz;
        //var_dump($matriz);

        

    }



    public function diagnosticar($matriz){       

    $signoTest2=Array( "","","","","","","","" );



         for ( $i = 0; $i < 8; $i++) {
            if ($matriz[1][0] == $matriz[0][$i]) {

                if($i==0){

                    if ($matriz[1][0 + 1] == $matriz[0][$i + 1]) {
                    $signoTest2[0] = "+";
                    $signoTest2[1] = "+";
                } else {
                    $signoTest2[0] = "+";
                }
                }elseif($i==7){

                    if  ($matriz[1][0 + 1] == $matriz[0][$i - 1]) {
                        $signoTest2[0] = "+";
                        $signoTest2[1] = "+";
                    } else {
                    $signoTest2[0] = "+";
                    }

                }else{

                if ($matriz[1][0 + 1] == $matriz[0][$i + 1] || $matriz[1][0 + 1] == $matriz[0][$i - 1]) {
                    $signoTest2[0] = "+";
                    $signoTest2[1] = "+";
                } else {
                    $signoTest2[0] = "+";
                }


                }
                
            }
        }

       
        //para adquirir X       
        for ($i = 0; $i < 8; $i++) {
            if ($signoTest2[1] == false) { 
                if ($matriz[1][1] == $matriz[0][$i]) {
              
                if ($i==0) {
                   
                    if ($matriz[1][1 + 1] == $matriz[0][$i + 1]) {
                        $signoTest2[1] = "X";
                        $signoTest2[2] = "X";
                    } else {
                        $signoTest2[1] = "X";
                    }
                }    



                elseif ($i==7) {
                    if ($matriz[1][1 + 1] == $matriz[0][$i - 1]) { 
                        $signoTest2[1] = "X";
                        $signoTest2[2] = "X";
                   
                    } else {
                        $signoTest2[1] = "X";
                    }


                }
                    else{

                        if ($matriz[1][1 + 1] == $matriz[0][$i + 1] || $matriz[1][1 + 1] == $matriz[0][$i - 1]) {
                                $signoTest2[1] = "X";
                                $signoTest2[2] = "X";
                                } else {
                                $signoTest2[1] = "X";
                    }

                    }
                    
                }
            } else {
                if ($matriz[1][2] == $matriz[0][$i]) {
                    

                    if($i==0){

                        if ($matriz[1][2 + 1] == $matriz[0][$i + 1]) {
                        $signoTest2[2] = "X";
                        $signoTest2[3] = "X";
                        } else {
                        $signoTest2[2] = "X";
                        }
                    }elseif($i==7){

                        if ($matriz[1][2 + 1] == $matriz[0][$i - 1]) {
                        $signoTest2[2] = "X";
                        $signoTest2[3] = "X";
                        } else {
                        $signoTest2[2] = "X";
                        }


                    }else{

                        if ($matriz[1][2 + 1] == $matriz[0][$i + 1] || $matriz[1][2 + 1] == $matriz[0][$i - 1]) {
                        $signoTest2[2] = "X";
                        $signoTest2[3] = "X";
                        } else {
                        $signoTest2[2] = "X";
                        }

                    }

                }
            }
        }



        //para adquirir el menos

        for ($i = 0; $i < 8; $i++) {
            if ($matriz[1][6] == $matriz[0][$i]) {
               
                if($i ==0){

                   if ($matriz[1][6 + 1] == $matriz[0][$i + 1]) {
                    $signoTest2[6] = "-";
                    $signoTest2[7] = "-";
                } else {
                    $signoTest2[7] = "-";
                } 
                }elseif($i==7){

                    if ($matriz[1][6 + 1] == $matriz[0][$i - 1]) {
                    $signoTest2[6] = "-";
                    $signoTest2[7] = "-";
                     } else {
                    $signoTest2[7] = "-";
                    }
                } else{

                    if ($matriz[1][6 + 1] == $matriz[0][$i + 1] || $matriz[1][6 + 1] == $matriz[0][$i - 1]) {
                    $signoTest2[6] = "-";
                    $signoTest2[7] = "-";
                    } else {
                    $signoTest2[7] = "-";
                        }
                }
            }
        }

        //para adquirir el igual
        for ($i = 0; $i < 8; $i++) {
            if ($signoTest2[$i] == false) {
                $signoTest2[$i] = "=";
            }
        }
    

        //var_dump($signoTest2);
        return $signoTest2;

    }

//diagnosticar($matriz);


public function Interpretacion($segundoTest,$signoTest2){ // va a llenar la tabla 
       
    $resulFinal=Array("","","","","","","","","","","","","","","","");
    $auxiliar = explode(",", $segundoTest);
  

    $resulFinal=Array($signoTest2[0],$auxiliar[0],$signoTest2[1],$auxiliar[1],$signoTest2[2],$auxiliar[2],$signoTest2[3],$auxiliar[3],$signoTest2[4],$auxiliar[4],$signoTest2[5],$auxiliar[5],$signoTest2[6],$auxiliar[6],$signoTest2[7],$auxiliar[7]);
        
        var_dump($resulFinal);
        
        $resultadoFinal2=implode(',', $resulFinal);
        
       
       $bd = new bdServices();     // CREO LA CONEXION CON LA BASE DE DATOS
       $fecha=date('Y-m-d H:i:s');
       $comando="INSERT INTO `tests`(`Id`, `Resultado`, `Resultado2`, `Resultado_final`,
        `consecutivo_paciente`, `Fecha_examen`, `created_at`, `updated_at`) VALUES ('0','".session('test1')."','".session('test2')."','".$resultadoFinal2."','4','".$fecha."','".session('Usuario')."','')";
       $bd->insertar($comando);
       $comando2="SELECT `Id` FROM `tests` WHERE `Fecha_examen`='".$fecha."'";
       $aux = $bd->insertar($comando2);
       $contenedor = $aux->fetch_assoc();
       $idTest = $contenedor['Id'];
       session(['idTest' => $idTest]);
       $comando3="INSERT INTO `diagnosticos`(`Id`, `Desc_ansiedad`, `N_ansiedad`, `Desc_estres`, `N_estres`, `Des_compensacion`, `N_compensacion`, `id_test`, `created_at`, `updated_at`) VALUES ('','','','','','','','".$idTest."','".session('Usuario')."','')";
       $bd->insertar($comando3);
       $comando4 = "SELECT `Id` FROM `diagnosticos` WHERE `id_test`=".$idTest."";
       $aux2 = $bd->insertar($comando4);
       $contenedor3 = $aux2->fetch_assoc();
       var_dump($contenedor3);
       $idDiag = $contenedor3['Id'];

       session(['idDiag' => $idDiag]);

      
      // $comando5 = "INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('','','','','','')";


        //suma
        
       if($resulFinal[0]== $resulFinal[2]){

            $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[0].$resulFinal[1].$resulFinal[2].$resulFinal[3]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[0].$resulFinal[1].$resulFinal[2].$resulFinal[3]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[0].$resulFinal[1].$resulFinal[2].$resulFinal[3]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);
                

        }else{

            $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[0].$resulFinal[1]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[0].$resulFinal[1]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[0].$resulFinal[1]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);

        }

        //multiplicacion 
        if($resulFinal[2]== $resulFinal[4]){echo "_____estoy en el multiplicadore de pos 2 y 4 :___".$resulFinal[2].$resulFinal[3].$resulFinal[4].$resulFinal[5] ;

                $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[2].$resulFinal[3].$resulFinal[4].$resulFinal[5]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[2].$resulFinal[3].$resulFinal[4].$resulFinal[5]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[2].$resulFinal[3].$resulFinal[4].$resulFinal[5]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);
            
        }elseif($resulFinal[4]== "X" && $resulFinal[6]=="X"){echo "_____estoy en el multiplicadore de pos 4 y 6 :___".$resulFinal[4].$resulFinal[5].$resulFinal[6].$resulFinal[7];

                $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[4].$resulFinal[5].$resulFinal[6].$resulFinal[7]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[4].$resulFinal[5].$resulFinal[6].$resulFinal[7]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[4].$resulFinal[5].$resulFinal[6].$resulFinal[7]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);
            
        }else{
            if($resulFinal[2]=="X"){echo "----Ya estoy en el X unitaria en la posicion 2----:".$resulFinal[2].$resulFinal[3] ;

                $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[2].$resulFinal[3]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[2].$resulFinal[3]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[2].$resulFinal[3]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);


            }elseif($resulFinal[4]=="X"){ echo "/// estoy en la posicion x 4:-------:_____".$resulFinal[4].$resulFinal[5];

                $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[4].$resulFinal[5]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[4].$resulFinal[5]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[4].$resulFinal[5]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);

            }
        }

        //resta
        if($resulFinal[14]== $resulFinal[12]){

            $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[12].$resulFinal[13].$resulFinal[14].$resulFinal[15]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[12].$resulFinal[13].$resulFinal[14].$resulFinal[15]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[12].$resulFinal[13].$resulFinal[14].$resulFinal[15]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);

        }else{

            $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[14].$resulFinal[15]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[14].$resulFinal[15]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[14].$resulFinal[15]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);

        }

        //igual
        for ( $i = 0; $i < 16; $i=$i+2) {
            if($resulFinal[$i]== "=" && $resulFinal[$i+2]=="="){
                echo "____Ya ENTRE L IGUALES :___".$resulFinal[$i].$resulFinal[$i+1].$resulFinal[$i+2].$resulFinal[$i+3];
                $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[$i].$resulFinal[$i+1].$resulFinal[$i+2].$resulFinal[$i+3]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[$i].$resulFinal[$i+1].$resulFinal[$i+2].$resulFinal[$i+3]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[$i].$resulFinal[$i+1].$resulFinal[$i+2].$resulFinal[$i+3]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);

            }
        }

        //Mas-menos

        $com_aux=" INSERT INTO `proced_diagnosticos`(`Id_diag`, `Signo`, `Definicion`, `Prioridad`, `created_at`, `updated_at`) VALUES ('".$idDiag."','".$resulFinal[0].$resulFinal[1].$resulFinal[14].$resulFinal[15]."',(SELECT `Descripcion` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[0].$resulFinal[1].$resulFinal[14].$resulFinal[15]."'),(SELECT `Prioridad` FROM `ordenamientos` WHERE `Signo`='".$resulFinal[0].$resulFinal[1].$resulFinal[14].$resulFinal[15]."'),'".session('Usuario')."','')";

            $bd->insertar($com_aux);
                            

            return true; 
    }



    public function Compensacion($matriz){
        $cont = 0;
        $cont2 = 0;
        $descripcion;
        $bd=new bdServices();

        for ( $j = 0; $j < 2; $j++) {
            if ($matriz[$j][0] == 7 || $matriz[$j][0] == 6 || $matriz[$j][0] == 0) {
                if ($j == 0) {
                    $cont = +3;
                } else {
                    $cont2 = +3;
                }

            } else if ($matriz[$j][1] == 7 || $matriz[$j][1] == 6 || $matriz[$j][1] == 0) {
                if ($j == 0) {
                    $cont = +2;
                } else {
                    $cont2 = +2;

                }
            } else if ($matriz[$j][2] == 7 || $matriz[$j][2] == 6 || $matriz[$j][2] == 0) {
                if ($j == 0) {
                    $cont = +1;
                } else {
                    $cont2 = +1;
                }
            }
        }
        if ($cont < $cont2) {

            $descripcion="pronóstico desfavorable, si no es tratado con prontitud.";


           // Si el test 1 tiene un nivel de compensación es menor que el segundo test entoces es defavorable
        }elseif($cont2==$cont){

             $descripcion="pronóstico favorable, si es tratado con prontitud";   

        }else{


            $descripcion="pronóstico favorable, si es tratado con prontitud";

            
        }

        if($cont2 == 5 || $cont2 == 6 ){

          $comando9="UPDATE `diagnosticos` SET `Des_compensacion`= 'Presenta alto nivel de compensación. ".$descripcion."',`N_compensacion`= '3' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }elseif($cont2==1 || $cont2==2){
             $comando9="UPDATE `diagnosticos` SET `Des_compensacion`= 'Presenta bajo nivel de compensación. ".$descripcion."',`N_compensacion`= '1' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }elseif ($cont2==0) {
            
          $comando9="UPDATE `diagnosticos` SET `Des_compensacion`= 'No presenta nivel de compensación. ".$descripcion."',`N_compensacion`= '0' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }
        else{

             $comando9="UPDATE `diagnosticos` SET `Des_compensacion`= 'Presenta moderado nivel de compensación. ".$descripcion."',`N_compensacion`= '2' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);
           
        }
    
        return true;

    }

    public function Ansiedad($matriz){
        $cont = 0;
        $cont2 = 0;
        $descripcion;
        $bd = new bdServices();
        for ($j = 0; $j < 2; $j++) {
            if ($matriz[$j][7] == 1 || $matriz[$j][7] == 2 || $matriz[$j][7] == 3 || $matriz[$j][7] == 4) {
                if ($j == 0) {
                    $cont =+3;
                }
                $cont2 = +3;
            } else if ($matriz[$j][6] == 1 || $matriz[$j][6] == 2 || $matriz[$j][6] == 3 || $matriz[$j][6] == 4) {
                if ($j == 0) {
                    $cont = +2;
                } else {
                    $cont2 = +2;
                }
            } else if ($matriz[$j][5] == 1 || $matriz[$j][5] == 2 || $matriz[$j][5] == 3 || $matriz[$j][5] == 4) {
                if ($j == 0) {
                    $cont = +1;
                } else {
                    $cont2 = +1;
                }
            }

        }
        if ($cont < $cont2) {

            $descripcion="pronóstico desfavorable, si no es tratado con prontitud.";


           // Si el test 1 tiene un nivel de compensación es menor que el segundo test entoces es defavorable
        }elseif($cont2==$cont){

             $descripcion="pronóstico favorable, si es tratado con prontitud";   

        }else{


            $descripcion="pronóstico favorable, si es tratado con prontitud";

            
        }

        if($cont2 == 5 || $cont2 == 6 ){

          $comando9="UPDATE `diagnosticos` SET `Desc_ansiedad`= 'Presenta alto nivel de ansiedad. ".$descripcion."',`N_ansiedad`= '3' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }elseif($cont2==1 || $cont2==2){
             $comando9="UPDATE `diagnosticos` SET `Desc_ansiedad`= 'Presenta bajo nivel de ansiedad. ".$descripcion."',`N_ansiedad`= '1' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }elseif ($cont2==0) {
            
          $comando9="UPDATE `diagnosticos` SET `Desc_ansiedad`= 'No presenta nivel de ansiedad. ".$descripcion."',`N_ansiedad`= '0' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }
        else{

             $comando9="UPDATE `diagnosticos` SET `Desc_ansiedad`= 'Presenta moderado nivel de ansiedad. ".$descripcion."',`N_ansiedad`= '2' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);
           
        }
    
        echo "********* ESTE ES EL VALOR DE CONT_1 Y cONT_2 ----".$cont." Y ESTE ES EL ORRO 2----".$cont2;
        return true;
     }



     public function Estres(){
        $N=0;
        $bd = new bdServices();
        $comando8="SELECT SUM(`Prioridad`) FROM `proced_diagnosticos` WHERE `Id_diag`= ".session('idDiag')." ";
        $aux=$bd->insertar($comando8);
        $suma=$aux->fetch_assoc();
        $N=intval($suma);

        if($N>12){

          $comando9="UPDATE `diagnosticos` SET `Desc_estres`= 'Presenta alto nivel de estrés. pronóstico desfavorable, si no es tratado con prontitud',`N_estres`= '3' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }elseif($N<=6 && $N!=0){
             $comando9="UPDATE `diagnosticos` SET `Desc_estres`= 'Presenta bajo nivel de estrés. pronóstico favorable, si es tratado con prontitud',`N_estres`= '1' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }elseif ($N==0) {
            
          $comando9="UPDATE `diagnosticos` SET `Desc_estres`= 'No presenta nivel de estrés. pronóstico favorable, si es tratado con prontitud',`N_estres`= '0' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);

        }
        else{

             $comando9="UPDATE `diagnosticos` SET `Desc_estres`= 'Presenta moderado nivel de estrés. pronóstico desfavorable, si no es tratado con prontitud',`N_estres`= '2' WHERE `Id`= ".session('idDiag')."";
          $bd->insertar($comando9);
           
        }
            
     
        return $N;
     }



    








    }







?>