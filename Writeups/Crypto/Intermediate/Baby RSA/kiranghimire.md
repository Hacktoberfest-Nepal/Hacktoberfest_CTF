# Kiran Ghimire - Baby RSA

## Challenge Flag: hacktoberfest_ctf{V3ry_34sy_RSA}

## Write-up:

Run below code , you will get the flag.

```

#!/usr/bin/env python
from Crypto.Util.number import inverse,long_to_bytes
import binascii

n = 100001299949
e=65537

c = [77818235039, 61072516178, 69558062856, 77849934423, 19491167803, 85304110827, 31224066597, 99373816116, 86032649390]

p = 100003
q  = 999983

flag = b''
phi=(p-1)*(q-1)
d=inverse(e,phi)

for i in range(len(c)-1):
    try:
        m=long_to_bytes(pow(c[i],d,n))
        flag += m
    except:
        continue

print(flag)
```
