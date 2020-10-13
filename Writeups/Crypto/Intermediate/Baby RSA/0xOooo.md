# 0xOooo - Baby RSA

## Challenge Flag: hacktoberfest_ctf{V3ry_34sy_RSA}

## Write-up:

so "Can you prove our RSA implementation insecure?" was given as challenge description with Baby_rsa.txt with the following contents:- 

```
n = 0x17488abded 
e = 0x10001 
c = [77818235039, 61072516178, 69558062856, 77849934423, 19491167803, 85304110827, 31224066597, 99373816116, 86032649390]
```

first we convert the hex to decimal for n and e and n will be 100001299949 wheares e will be 65537

using a very popular tool named **RsaCtfTool** we can now uncipher the hidden ciphertext as c using `./RsaCtfTool.py -n 100001299949 -e 65537 --uncipher "cipher"`

we have to do the same for each cipher/value in the ciphertext c and concatatinating the output sipts out the flag as hacktoberfest_ctf{V3ry_34sy_RSA}

