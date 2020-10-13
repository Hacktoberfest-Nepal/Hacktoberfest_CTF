# Pr0d33p - Baby RSA

## Challenge Flag: hacktoberfest_ctf{V3ry_34sy_RSA}

## Write-up:

I noticed the n was smaller, went to factor-db and factorised it, determined p and q and created the following script to get the flag.

```
from Crypto.Util.number import inverse
import codecs

n = 0x17488abded
e = 0x10001
c = [77818235039, 61072516178, 69558062856, 77849934423, 19491167803, 85304110827, 31224066597, 99373816116, 86032649390]
p, q = 100003, 999983

phi = (p-1)*(q-1)

d = inverse(e, phi)

try:
  for cc in c:
    m = pow(cc, d, n)
    a = (codecs.decode(str(hex(m)[2:]), 'hex')).decode("utf-8")
    print(a)

except:
  pass
```
Got the flag appended manuallly ;p
