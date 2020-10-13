# Kiran Ghimire- Twine

## Challenge Flag: hacktoberfest_ctf{str1ngs_2_w1n}

## Write-up:

Easy challenge.Just string it , you will get the password.

```
strings Twine 
/lib64/ld-linux-x86-64.so.2
112basic_stringIcSt11char_traitsIcESaIcEE6appendERKS4_

memcmp
strtoul
__cxa_finalize
__libc_start_main
GCC_3.0
CXXABI_1.3
GLIBCXX_3.4
GLIBCXX_3.4.21
GLIBC_2.2.5
u/UH
ATSH
[A\]
[]A\A]A^A_
stoul
**y0u_g0t_17**
36b746
f77316e7d

```

```
 ./Twine 
Enter password: y0u_g0t_17
hacktoberfest_ctf{str1ngs_2_w1n}
```
