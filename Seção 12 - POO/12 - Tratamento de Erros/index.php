<?php 
    try{
        echo '<h3> *** Try *** </h3>';
        //$sql = 'Select * from clientes';
        //mysql_query($sql);

        // Lançando um erro:
        if(!file_exists('require_configPerson_a.php')){
            throw new Exception('As configurações personalziadas não foram encontradas ' . date('d/m/y - h:i:s'));
        }

    }catch(Error $e) 
    {
        echo '<h3> *** Catch Error *** </h3>';
        echo '<p style="color:red;">' . $e;
    }catch(Exception $e)
    {
        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color:pink;">' . $e;
    }
     finally
    {
        echo '<h3> *** Finally *** </h3>';
    }

?>