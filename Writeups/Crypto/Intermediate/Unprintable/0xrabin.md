# 0xrabin Unprintable

```hacktoberfest_ctf{zwsp_1s_1nv1s1bl3}```

Challenge Description

>Maybe it's just that I cannot be printed 🙁

First I thought the challenge was incomplete. Later I found out that there were unprintable characters in the challenge description between the letter M and y through inspecting element containing challenge description.
>M[unprintable character here]y

At first I thought this was some whitespace encoding but it turned out to be something else.Since I had no idea what this was I checked the hints and found out that it was zero width cipher.
And through the help of an [online zero width decoder](https://offdev.net/demos/zwsp-steg-js) I got the flag

```hacktoberfest_ctf{zwsp_1s_1nv1s1bl3}```

