<h3>All Post Meta</h3>

<?php $getPostCustom=get_post_custom(); // Get all the data ?>

<?php
    foreach($getPostCustom as $name=>$value) {

        echo "<strong>".$name."</strong>"."  =>  ";

        foreach($value as $nameAr=>$valueAr) {
                echo "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo $nameAr."  =>  ";
                echo var_dump($valueAr);
        }

        echo "<br /><br />";

    }
?>
