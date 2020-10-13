# Pr0d33p - Supply Me Something

## Challenge Flag: hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}

## Write-up:

So I got the supply binary file from the challenge and tried decompiling it. On a normal run, it would request me to try again. I saw 0x539 in the decompiled code which when converted to decimal becomes 1337. 

I thought about supplying 1337 arguments to the binary but it still provided the same message. Then I thought about what if the binary is taking the filename as first argument.

And this led me to trying out with 1336 arguments because ./supply would be the first argument. While running it, I was given the flag: 

*hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}*



