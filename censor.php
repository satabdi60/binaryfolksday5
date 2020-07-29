<?php
$list = array('idiot','noob','Geek');
$replace = array('i***t','**ob','****');

if(isset($_POST['data'])){          // this checks if the user has submitted the form.
    $usercomment = $_POST['data'];
    if(!empty($usercomment)){       // this checks if the data entered is not empty
        $censored_output = str_ireplace($list,$replace,$usercomment);
                        echo $censored_output;
    }else{
        echo 'please enter some text';
    }
}
?>
<form action="" method="POST">
    <textarea style="width: 100%;
height: 200px;" name="data" col="60" row="20" placeholder="Type any thing containing words like 'idiot','noob','geek'"></textarea><br>
    <input type="submit" value="Post Comment"/>
</form>
