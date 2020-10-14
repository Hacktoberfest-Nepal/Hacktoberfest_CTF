# Kiran Ghimire - Not a Script Kiddie

## Challenge Flag:hacktoberfest_ctf{scr1pt1ng_1s_sup3r_h3lpful}

## Write-up:

On decompressing the zipfile,I got one more zip file and again I got one more .This was looking like endless so to reach the end of it I used below bash code.
```
#!/bin/bash


unzip file.zip
for i in {1..1000};

do

mv Not-A-Script-Kiddie file$i.zip
unzip file$i.zip

done

```
It did not not finish there because I got a folder conatining shell archive which on running gave a lzma compressed file.It gave a tar file then again a folder conatining shell archive.This was like same as above so to automate this I used below bash code.

```
#!/bin/bash
for i in {0..1000};
do

chmod +x *
./*
lzma_file=$(file * | grep -i 'lzma' | cut -d ':' -f 1)

mv  $lzma_file $lzma_file.lzma
unlzma $lzma_file.lzma
tar -xvf $lzma_file

cd_file(){

folder=$(file * | grep -i 'directory' | cut -d ':' -f 1)
cd $folder/
}

cd_file
done


```

Make sure to run the code like this: . ./<file-name>
