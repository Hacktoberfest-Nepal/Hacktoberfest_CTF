# PrashantDhungana - Tactile

## Challenge Flag: hacktoberfest_ctf{V1SU41_CRYPTO_W1TH_BR41LL3}

## Write-up:

This Challenge's title "Tactile" has the meaning- "of or connected with the sense of touch". And the Challenge hint also suggested that this was related to **Braille**

**Braille** is a **tactile** writing system used by people who are visually impaired.

It consists of **3 rows** and **2 columns** of dots which produce to form several combination of symbols.

So every alphabet in the English language has some corresponding Braille Notation.

**Fun Fact:** The reason why Braille is different from English alphabet is to make reading easier and more faster by only the usage of minimum dots to form a picture for a Blind person.

So I googled Braille and found [Notations for Alphabets!](https://brailleworks.com/wp-content/uploads/2016/01/Braille-Alphabet-Red-Black700x700-700x700.jpg)

After side by side comparision from both the Challenge and the Notation,the message was:

###### v,su.,
######  l
###### crypto
######  l
###### w,th
######  l
###### br.,ll:

It was clear that it wanted to spell **VISUAL CRYPTO WITH BRAILLE**. But Notice that special symbols like commas(,) , full-stop(.) and colon(:) were used,though there were corresponding symbols for those alphabets. And then I thought, This message must have used [LEET or 1337 Speak](https://en.wikipedia.org/wiki/Leet) 

Generally, In 1337(LEET) speak:
* A -----> 4
* E -----> 3
* I -----> 1
* O -----> 0
* T -----> 7


And replacing those Special characters with Leetspeak and also the seperator **L** with an underscore(_), we finally get the flag:

## hacktober_ctf{v1su41_crypto_w1th_br41ll3}