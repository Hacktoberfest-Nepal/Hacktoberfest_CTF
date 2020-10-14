# PrashantDhungana - Supply Me Something

## Challenge Flag: hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}

## Write-up:

A binary file was provided for the challenge.The challenge description read
*Sorry,I am programmed to only **argue** with 1337s*

So I thought this binary file expects some number of arguments to be passed to it.

So I wrote a python script

*
#!/usr/bin/python
import os

count=" 1337"
extra=" 1337"
for x in range(1,1338):
	print(x)
	output=os.system('./supply {0}'.format(count))
	count=count+extra

*

This script adds a new argument "1337" in every loop as:

* ./supply 1337 (1st iteration)
* ./supply 1337 1337 (2nd iteration)
* ./supply 1337 1337 1337 (3rd iteration)

and so on...

After running the script,at exactly **1337** number arguments, the binary spits out the flag.

*Note:I found out any string rather than 1337 can be used to get the flag unless the number of arguments are exactly 1337
i.e.
* ./supply abc (1st iteration)
* ./supply abc abc (2nd iteration)
* ./supply abc abc abc (3rd iteration)*

and so on..upto **1337** arguments

So the Final Flag was:
###### hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}