  <?php

    function fileСreation(string $source, $arr)
    {
        $f = fopen($source, 'w+');   
        foreach($arr as $item){
            fputs($f,$item."\n");
        };
        fclose($f);
    };

?>