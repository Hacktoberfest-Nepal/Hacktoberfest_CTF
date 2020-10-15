 
# 0xrabin BabyRSA
Flag : hacktoberfest_ctf{V3ry_34sy_RSA}
Challenge Description
>Can you prove our RSA implementation insecure?

We get a file with contents:

>n = 0x17488abded
>e = 0x10001
>c = [77818235039, 61072516178, 69558062856, 77849934423, 19491167803, 85304110827, 31224066597, 99373816116, 86032649390]

RsaCtfTool Comes into play.
```sh
./RsaCtfTool.py -n 0x17488abded -e 0x1001 --uncipher ciphertext```
```
We do this for every cipher text then concatenate the unciphered texts which are parts of the flags.
And we get the flag
hacktoberfest_ctf{V3ry_34sy_RSA}