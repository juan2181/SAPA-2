<?php
date_default_timezone_set('America/Mexico_city');
                        $hoy=getdate(); 
                        if($hoy["mon"] < 10){
                            $mes="0".$hoy["mon"];
                        }
                        else{
                            $mes=$hoy["mon"];
                        }
                        if($hoy["mday"] < 10){
                            $dia="0".$hoy["mday"];
                        }
                        else{
                            $dia=$hoy["mday"];
                        }
                        $fecha_actual=$hoy["year"]."-".$mes."-".$dia; 


?>
