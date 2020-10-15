# 0xrabin Convert Hex To Base64

Flag:hacktoberfest_ctf{c4n_y0u_r34ch_th1s_st4g3}
Challenge Description

>6861636b746f626572666573745f6374667b63346e5f7930755f72333463685f746831735f73743461337d
>Decode it if you can, only non-1337 can decode it!

Decoding the hex we get
`hacktoberfest_ctf{c4n_y0u_r34ch_th1s_st4a3}`
which seems to be incorrect flag
Looking at the hint we see that we need to replace 1337 with 7337
After replacing 1337 with 7337 in hex and decoding it we get the correct flag
```hacktoberfest_ctf{c4n_y0u_r34ch_th1s_st4g3}```