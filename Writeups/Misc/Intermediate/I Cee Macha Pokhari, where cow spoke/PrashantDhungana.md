# PrashantDhungana - I Cee Macha Pokhari,where cow spoke

## Challenge Flag: hacktoberfest_ctf{kassam_gai_le_bolyoo_ma_dhateko_hoina}

## Write-up:

The challenge included a pcap file and a hint about the flag being in the IP **127.0.0.1**

**A pcap or Packet Capture file is a file which contains traffic between a Source and a Destination including the respective Protocol,Data etc.**

So on opening the file on **Wireshark** and applying the filter **ip.addr==127.0.0.1.1** we only get the Traffic for 127.0.0.1

The Protocol ICMP was being used to communicate.This was already hinted by the Title of the Challenge- I Cee Macha Pokhari (ICMP).On analysing the packet, Dilogue between the **Seller**, **Buyer** and the **Cow** was included.

Cow only spoke the alphabets **"M"** and **"O"**.

At 1st I thought it might be binary but on closer look, there were 4 combination for those characters(one for capital letter and other for small).

So I then thought about searching for Moo language / Cow language and then I found out there is an [Esoteric Language](https://en.wikipedia.org/wiki/Esoteric_programming_language) called [Cow](https://esolangs.org/wiki/COW)

Then I quickly googled an interpreter for the language and found this [SITE](https://frank-buss.de/cow.html) and pasted the Code and the site spat out the flag as:

###### hacktoberfest_ctf{kassam_gai_le_bolyoo_ma_dhateko_hoina}

  

