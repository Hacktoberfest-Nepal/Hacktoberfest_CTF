# 0xOooo - Supply Me Something

## Challenge Flag: hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}

## Write-up:

So, here the challenge description said `Sorry, I am programmed to only argue with 1337s.`

downloading the binary to our machine and running it gives hacktoberfest_ctf{try_4g41n}

so first Analysing the binary i found its checking if the supplied args is 1337 so a function call is made which pushed the local values and variables at stack so analysing the stack i saw the flag at memory address 0x0007fffffffde08(this address may differ from yours)

==>

![0xOooo - Supply Me Something](https://i.ibb.co/VN0SKFk/received-3423041877775700.jpg)
