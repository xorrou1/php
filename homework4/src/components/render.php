<?php 
/* При подставлении обсолютного пути картинки отказываются отображатя */
    function renderPictures( $picturesArr){
        foreach($picturesArr as $key => $arr){
            foreach($arr as $value ){
                echo '              <div class="pictures_bloc">'."<br />";
                echo '                  <img class="pictures_bloc_img" src="'.$value.'" alt="pictures '.($key + 1).'">';
                echo '              </div>';
            }

        }
    };

?>