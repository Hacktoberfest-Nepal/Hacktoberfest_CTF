<?php

    if($_SERVER['HTTP_USER_AGENT'] != "Yes, I am a human."){
        die("You are a bot, mate!");
    } else echo "Nice! Now that we know you are a human, you can proceed further.\n\n";

    $flag = array("hacktoberfest_ctf{");
    if(apache_request_headers()["Sagarmatha-Hacktoberfest-CTF"] == "https://hacktober.tk/"){
        array_push($flag, "you");
    }
    
    if(isset($_GET['hello']) && $_GET['hello'] === "hi"){
        array_push($flag, "can't");
    }
    
    if($_GET['world'] != "0x10001" && strcasecmp($_GET['world'], "0x10001") == 0){
        array_push($flag, "see");
    }
    
    if(isset($_GET['nice']) && isset($_GET['ecin']))
        if($_GET['nice'] != $_GET['ecin']){
            if(sha1($_GET['nice']) == sha1($_GET['ecin'])){            
                array_push($flag, "what");
            }        
        }
    
    if($_POST['ctf'] == md5($_POST['ctf'])){
        array_push($flag, "this");
    }
    
    if(isset($_POST['parm']) && isset($_POST['mrap'])){
        if(md5($_POST['parm']) == md5($_POST['mrap'])){
            if($_POST['parm'] != $_POST['mrap']){
                array_push($flag, "contains!");
            }
        }
    }
    
    array_push($flag, "}");
    
    echo implode('', $flag);
    
?>