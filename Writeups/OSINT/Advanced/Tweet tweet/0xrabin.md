# 0xrabin Tweet tweet 🐦
```hacktoberfest_ctf{rickrolled_for_the_flag}```
Challenge Description
>🎶 Chari maryo sisai ko golli le 🎶
>🎶 Maya basyo tyo mitho boli le 🎶
>🎶 Maya sathai ma 🎶
>🎶 Udayo rellai le 🎶
>🎶🎶 Udayo rellai le 🎶🎶
>🎶🎶 Udayo rellai le.. 🎶🎶
>Challenge by Captain Nick Lucifer

Both from the lyrics of the song and the emoji of a bird it was clear that it was an reference to twitter.
Also there was link to challenge author's twitter handle.
The most recent tweet on the profile was the link to `https://w38-ho0k.000webhostapp.com/`

Visiting the website it seemed that content has been removed.
So I checked [Wayback Machine](web.archive.org) to find the removed content. In the web archive I found following assets
>https://w38-ho0k.000webhostapp.com/
>https://w38-ho0k.000webhostapp.com/index.css
>https://w38-ho0k.000webhostapp.com/flag.mp4
>https://w38-ho0k.000webhostapp.com/noflag.png
>https://w38-ho0k.000webhostapp.com/index.js

At first I checked the image file and ran all of steg forensics in it but did not find anything. The js and css file also seemed normal. So the last file that remained to be checked was `flag.mp4`.
First I did some low hanging operations like checking metadata but did not find anything.
The video file did have the same noflag.png embeded in it.
AFter these operations I extracted all the frames from the video using ffmpeg.
`ffmpeg -i noflag.mp4 frames/out-%03d.jpg`
Then I manually checked through every frame and in one of the frames flag was seen.
I wrote down the flag and submitted it.
```hacktoberfest_ctf{rickrolled_for_the_flag}```
