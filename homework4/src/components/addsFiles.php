<?php

include COMPONENTS_DIR."fileСreation.php";

function addsFiles($dir){
                        if (is_dir($dir)) {
                            if ($dh = opendir($dir)) {
                                while (($file = readdir($dh)) !== false ) {
                                    if(strlen($file) > 2){ /* "Это костыль, при чтение директории первые 2 элемента не файлы а '.', '..'. Не могу понять с чем это связанно!!!" */
                                        $picturesArr[] = ASSETS_DIR.$file;       
                                    }
                                }
                                closedir($dh);
                                $adds1 = fileСreation(DB_DIR .'catalog.csv', $picturesArr);
                                return $adds1;
                            }
                        }
                    };

?>