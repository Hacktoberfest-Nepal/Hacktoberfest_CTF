# Pr0d33p - Tactile

## Challenge Flag: hacktoberfest_ctf{V1SU41_CRYPTO_W1TH_BR41LL3}

## Write-up:

I searched about Tactile cipher and found out that Braille is a Tactile writing system and had same characters as displayed in the challenge image. This made me believe that it was related to Braille system.

Comparing all the characters in the image with the Braille system would take a lot of time for this challenge, so I tried digging for more information in the challenge. While hovering over the image, I saw some Braille characters.

I inspected element, and grabbed the text from **`title`** attribute in the image.

**⠧⠂⠎⠥⠲⠂⠸⠉⠗⠽⠏⠞⠕⠸⠺⠂⠞⠓⠸⠃⠗⠲⠂⠇⠇⠒**

Now, I decided to look for Braille decoders, and came over the `From_Braille()` function in CyberChef. I entered the Braille characters in the **Input** field and then selected the **From Braille** function, and it provided me **V1SU41_CRYPTO_W1TH_BR41LL3** in the **Output**.

If you want to try decoding the above Braille characters, you can visit my [CyberChef recipe](https://gchq.github.io/CyberChef/#recipe=From_Braille()&input=4qCn4qCC4qCO4qCl4qCy4qCC4qC44qCJ4qCX4qC94qCP4qCe4qCV4qC44qC64qCC4qCe4qCT4qC44qCD4qCX4qCy4qCC4qCH4qCH4qCS).

I enclosed this string insde the flag format, and finally captured the flag.