# Pr0d33p - Convert HEX to base64

## Challenge Flag: hacktoberfest_ctf{c4n_y0u_r34ch_th1s_st4g3}

## Write-up:

I took the string from the challenge, i.e. **6861636b746f626572666573745f6374667b63346e5f7930755f72333463685f746831735f73743461337d**.

When I decoded it from HEX to ASCII, I got **hacktoberfest_ctf{c4n_y0u_r34ch_th1s_st4a3}**.

The last part of flag (i.e. st4a3) doesn't seem readable. I could submit st4ag3 or st4at3/st4a73, but the challenge had only two submission attempts. Then, I read the challenge description and found out that I need to become non-1337. So, I thought about replacing 1337 with something else in the string.

I decided to try all the numbers from 0 to 9 in all of the 4 characters. Luckily, I had to replace just the "1" from "1337", because I obtained the flag while replacing 1 with 7.

Therefore, the final string was **6861636b746f626572666573745f6374667b63346e5f7930755f72333463685f746831735f73743467337d**. I decoded it from HEX to ASCII and obtained the flag.