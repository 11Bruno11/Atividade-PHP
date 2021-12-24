<?php


if( $_POST['a'] >= $_POST['b']){
    if($_POST['a'] % $_POST['b'] == 0){
        echo $_POST['a']," e ", $_POST['b'] ," são multiplos!";
    }
    else {
        echo $_POST['a']," e ", $_POST['b'] ," não não multiplos!";
    }
} elseif ($_POST['a'] < $_POST['b']) {
    if($_POST['b'] % $_POST['a'] == 0){
        echo $_POST['a']," e ", $_POST['b'] ," são multiplos!";
    }
    else {
        echo $_POST['a']," e ", $_POST['b'] ," não não multiplos!";
    }
}

?>