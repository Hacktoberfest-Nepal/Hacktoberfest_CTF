# PrashantDhungana - WrestlePHP

## Challenge Flag: hacktoberfest_ctf{3qu4l17y0xcafebabe_cafedead}

## Write-up:

*7068702e30646179676f642e78797a*

Challenge included a Random gibberish. But looking closely, it seemed like Hex.So I used [CyberChef](https://gchq.github.io/CyberChef/) to convert it from Hex to Text.

It gave a url:

*php.0daygod.xyz*

On Visiting the url,it gave a PHP code for the server to return us the flag.(code on the repo PrashantDhungana)

When simply going through the code, it just constructed the flag 
**hacktoberfest_ctf{youcan'tseewhatthiscontains}**

But this wasn't the flag...DUH!!!

SO we needed to fulfill all the criteria to build out the flag.

I wrote a Python script for the request and used a module "requests" to send request and send self crafted Headers as well as GET and POST parameters.(The Python Code is also in the repo PrashantDhungana)

The main thing which stuck me for sometime was to fulfill the parameter 

**$_POST['ctf'] == md5($_POST['ctf']**

But After Googling for sometime, I found out I could misuse the [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php) and Weak Comparison Vulnerability on PHP.

For more information I also stumbled upon [THIS VIDEO](https://www.youtube.com/watch?v=Jtb8Hncmbsg) from John Hammond explaining about [MD5 Magic hashes](https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/Type%20Juggling
) and Type Juggling.

So after making the Python script, I ran it and the response gave me the flag


###### hacktoberfest_ctf{3qu4l17y0xcafebabe_cafedead}





