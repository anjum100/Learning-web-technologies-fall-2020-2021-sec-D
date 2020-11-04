
<?php

$data="";



if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['name'];
    
    if($name ==""){
        
        echo "field required....";
        
    }
    
    else{
         $data=$name;
    }
    
    
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>NAME</title>
</head>
<body>

    <form method="post" style=" width:300px">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>