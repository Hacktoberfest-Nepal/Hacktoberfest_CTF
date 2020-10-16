# 0xrabin Supply me something
```hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}```
Challenge Description
>Sorry, I am programmed to only argue with 1337s.

So opening the binary and reading the decompiled code I found that the program checks if the number of arguement passed is 1337 and prints the try again msg to console. So what I did was change the jne instructions to je with the help of binaryninja and then ran the binary and got the flag.
```sh
./supply_cracked
hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}
```
```hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}```