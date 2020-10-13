# Pr0d33p - Unprintable

## Challenge Flag: hacktoberfest_ctf{zwsp_1s_1nv1s1bl3}

## Write-up:

For the Unprintable challenge, I didn't find anything excluding the description in the challenge information. The description stated:

**M​​​​‏​‏​​​​‎‏‍​​​​‎‏‏​​​​‏‌‍​​​​‏‎‌​​​​‏‍‌​​​​‎‏‎​​​​‏​‌​​​​‏‍‏​​​​‏​‍​​​​‏​‌​​​​‏‎​​​​​‏‎‌​​​​‎‏​​​​​‎‏‏​​​​‏‎‌​​​​‏​‍​​​​‏‏‎​​​​‏‏‍​​​​‏‎‏​​​​‏‎​​​​​‏‍‍​​​​‎‏​​​​​‌‏‏​​​​‏‎​​​​​‎‏​​​​​‌‏‏​​​​‏‍​​​​​‏‎‎​​​​‌‏‏​​​​‏‎​​​​​‌‏‏​​​​‎‏‎​​​​‏‌‎​​​​‍​‌​​​‌​​​aybe it's just that I cannot be printed 🙁**

I thought about checking what the description might be containing. So, I inspected element, and saw the following:

```
M&#8203;&#8203;&#8203;&#8203;&rlm;&#8203;&rlm;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&zwj;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&zwnj;&zwj;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&zwnj;&#8203;&#8203;&#8203;&#8203;&rlm;&zwj;&zwnj;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&rlm;&#8203;&zwnj;&#8203;&#8203;&#8203;&#8203;&rlm;&zwj;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&#8203;&zwj;&#8203;&#8203;&#8203;&#8203;&rlm;&#8203;&zwnj;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&zwnj;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&#8203;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&zwnj;&#8203;&#8203;&#8203;&#8203;&rlm;&#8203;&zwj;&#8203;&#8203;&#8203;&#8203;&rlm;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&rlm;&rlm;&zwj;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&#8203;&rlm;&zwj;&zwj;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&#8203;&#8203;&#8203;&#8203;&#8203;&zwnj;&rlm;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&#8203;&#8203;&#8203;&#8203;&#8203;&zwnj;&rlm;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&zwj;&#8203;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&lrm;&#8203;&#8203;&#8203;&#8203;&zwnj;&rlm;&rlm;&#8203;&#8203;&#8203;&#8203;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&#8203;&zwnj;&rlm;&rlm;&#8203;&#8203;&#8203;&#8203;&lrm;&rlm;&lrm;&#8203;&#8203;&#8203;&#8203;&rlm;&zwnj;&lrm;&#8203;&#8203;&#8203;&#8203;&zwj;&#8203;&zwnj;&#8203;&#8203;&#8203;&zwnj;&#8203;&#8203;&#8203;aybe it's just that I cannot be printed 🙁
```

This means there were a lot of characters with &#8203;, &rlm; and &lrm;.

With a simple Google search, I found out that they refer to Zero-width Space, Right-to-left Mark and Left-to-right Mark respectively. As per the challenge title, these unicode characters aren't visible while they are rendered or printed.

The next step I took in solving this challenge was to look up for any information on whether I could hide my text using these 3 unicode characters, and I found about zero-width space steganography.

Right after that, I looked up for zero-width space steganography tools, and came up against this webpage built on JavaScript: https://offdev.net/demos/zwsp-steg-js

I visited it, pasted the challenge description in the **Message** field under **Decoding**, and finally it provided me the flag.