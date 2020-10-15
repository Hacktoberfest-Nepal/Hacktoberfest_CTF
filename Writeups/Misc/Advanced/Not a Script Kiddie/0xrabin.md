# 0xrabin Not a Script Kiddie 

```hacktoberfest_ctf{scr1pt1ng_1s_sup3r_h3lpful}```
We were provided with a file. `Not-a-Script-Kiddie` 
Running file we find out that its a zip file.
```sh
file Not-A-Script-Kiddie 
Not-A-Script-Kiddie: Zip archive data, at least v2.0 to extract
```
After unzipping the file I found out that it was nested multiple times with the same name `Not-A-Script-Kiddie`
So I ran a simple while loop to unzip nested zip.
```sh
while true; do echo y | unzip Not-A-Script-Kiddie; done
```
After a while I saw that the loop had returned a error message saying it was unable to extract the zip. So I checked the file, it was actually a different file with zip headers.
The head part of the file read:
>#This is a shell archive (produced by GNU sharutils 4.15.2).
>#To extract the files from this archive, save it to some FILE, remove
>#everything before the '#!/bin/sh' line above, then type 'sh FILE'.
Then I did as told and ran
```sh
sh Not-A-Script-Kiddie
x - created lock directory _sh16830.
x - extracting CKsibzcccS (text)
x - removed lock directory _sh16830.
```
It created a new file that was  LZMA compressed.
I renamed it to `lzma.xz` and ran
```sh
unxz lzma.xz
```
which then extracted a tar file and upon extracting the tar file
It created a new directory with a new shell archive file.
Upon extracting the shell archive file I got lzma file.
Thus I realized that this process had been been done recursively to encode the file.
So I wrote a script to automate this extracting process
```py
#lzma => tar => folder/sharcl


import os, time
os.chdir('/tmp/workdir')                           #This directory contains lzma file

while True:
	initialfile = (os.listdir()[0])   				#Gets LZMA file from /tmp/workdir
   
	os.rename(initialfile,"lzma.xz")  				#Renames the LZMA file to lzma.xz
	newfile = (os.listdir()[0])						#Gets renamed file,             
	os.system("unxz "+newfile)						#Unxzing renamed file
	

	tarfile = "lzma"								#Unxzing lzma.xz gives lzma(which is a tar file)
	os.rename(tarfile,"ok.tar")
	os.system("tar xvf "+"ok.tar")					#Untar the tar	
	
	directory = next(os.walk('.'))[1][0]			#Untarring makes a directory with shar file
	os.chdir('./'+directory)						#Go to the directory
	
	sharfile = (os.listdir()[0])					#Get shar file name
	os.system("sh "+sharfile)						#Execute it and extract lzma
	os.system("rm "+sharfile)						#Delete the shar file
```
After running the script for a while I found a filenamed hello.txt with flag in it.

```hacktoberfest_ctf{scr1pt1ng_1s_sup3r_h3lpful}```
