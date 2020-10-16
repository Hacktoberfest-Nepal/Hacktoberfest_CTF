# 0xrabin I Cee Macha Pokhari, where cow spoke
```hacktoberfest_ctf{kassam_gai_le_bolyoo_ma_dhateko_hoina}```

Challenge Description
It seemed that a trader sold a cow in 127.0.0.1, becuase it could speak. Pople say, it was a lie to sell the cow. Can you find out, if the cow did speak for real?

I downloaded the pcapng file and loaded it in wireshark.
Since the challenge description said 127.0.0.1.
I used the filter 
`ip.addr==127.0.0.1`
Looking through the filtered results I saw readable text in ICMP packets so I updated my filter
`ip.addr==127.0.0.1 and icmp`
Looking through the packets I saw Cow Esolang.
Then I concatenated all the Cow esolang sections and decoded it through an [online intepreter](https://tio.run/#cow) and got the flag.

```hacktoberfest_ctf{kassam_gai_le_bolyoo_ma_dhateko_hoina}```