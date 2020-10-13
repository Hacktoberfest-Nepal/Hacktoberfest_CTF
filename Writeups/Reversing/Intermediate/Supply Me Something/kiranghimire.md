# Kiran Ghimire- Supply Me Something


## Challenge Flag: hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}
## Write-up:

gdb ./<>

```
gdb-peda$ info func
All defined functions:

Non-debugging symbols:
0x0000000000001000  _init
0x0000000000001030  printf@plt
0x0000000000001040  __cxa_finalize@plt
0x0000000000001050  _start
0x0000000000001080  deregister_tm_clones
0x00000000000010b0  register_tm_clones
0x00000000000010f0  __do_global_dtors_aux
0x0000000000001130  frame_dummy
0x0000000000001135  main
0x0000000000001220  __libc_csu_init
0x0000000000001280  __libc_csu_fini
0x0000000000001284  _fini
gdb-peda$ 



```

```
gdb-peda$ disas main
Dump of assembler code for function main:
   0x0000000000001135 <+0>:     push   rbp
   0x0000000000001136 <+1>:     mov    rbp,rsp
   0x0000000000001139 <+4>:     sub    rsp,0x50
   0x000000000000113d <+8>:     mov    DWORD PTR [rbp-0x44],edi
   0x0000000000001140 <+11>:    mov    QWORD PTR [rbp-0x50],rsi
   0x0000000000001144 <+15>:    mov    DWORD PTR [rbp-0x8],0x0
   0x000000000000114b <+22>:    lea    rax,[rip+0xeb2]        # 0x2004
   0x0000000000001152 <+29>:    mov    QWORD PTR [rbp-0x18],rax
   0x0000000000001156 <+33>:    movabs rax,0xb5b2bfc4bbb3b1b8
   0x0000000000001160 <+43>:    movabs rdx,0xc4b3afc4c3b5b6c2
   0x000000000000116a <+53>:    mov    QWORD PTR [rbp-0x40],rax
   0x000000000000116e <+57>:    mov    QWORD PTR [rbp-0x38],rdx
   0x0000000000001172 <+61>:    movabs rax,0xc284afc580c9cbb6
   0x000000000000117c <+71>:    movabs rdx,0x87838381af84af83
   0x0000000000001186 <+81>:    mov    QWORD PTR [rbp-0x30],rax
   0x000000000000118a <+85>:    mov    QWORD PTR [rbp-0x28],rdx
   0x000000000000118e <+89>:    mov    DWORD PTR [rbp-0x20],0xc484bdaf
   0x0000000000001195 <+96>:    mov    WORD PTR [rbp-0x1c],0xcd83
   0x000000000000119b <+102>:   mov    BYTE PTR [rbp-0x1a],0x0
   0x000000000000119f <+106>:   mov    DWORD PTR [rbp-0x4],0x0
   0x00000000000011a6 <+113>:   jmp    0x11b0 <main+123>
   0x00000000000011a8 <+115>:   add    DWORD PTR [rbp-0x8],0x1
   0x00000000000011ac <+119>:   add    DWORD PTR [rbp-0x4],0x1
   0x00000000000011b0 <+123>:   mov    eax,DWORD PTR [rbp-0x4]
   0x00000000000011b3 <+126>:   cmp    eax,DWORD PTR [rbp-0x44]
   0x00000000000011b6 <+129>:   jl     0x11a8 <main+115>
   0x00000000000011b8 <+131>:   lea    rax,[rbp-0x40]
   0x00000000000011bc <+135>:   mov    QWORD PTR [rbp-0x10],rax
   0x00000000000011c0 <+139>:   jmp    0x11d6 <main+161>
   0x00000000000011c2 <+141>:   mov    rax,QWORD PTR [rbp-0x10]
   0x00000000000011c6 <+145>:   lea    rdx,[rax+0x1]
   0x00000000000011ca <+149>:   mov    QWORD PTR [rbp-0x10],rdx
   0x00000000000011ce <+153>:   movzx  edx,BYTE PTR [rax]
   0x00000000000011d1 <+156>:   sub    edx,0x50
   0x00000000000011d4 <+159>:   mov    BYTE PTR [rax],dl
   0x00000000000011d6 <+161>:   mov    rax,QWORD PTR [rbp-0x10]
   0x00000000000011da <+165>:   movzx  eax,BYTE PTR [rax]
   0x00000000000011dd <+168>:   test   al,al
   0x00000000000011df <+170>:   jne    0x11c2 <main+141>
   0x00000000000011e1 <+172>:   cmp    DWORD PTR [rbp-0x8],0x539
   0x00000000000011e8 <+179>:   jne    0x11fd <main+200>
   0x00000000000011ea <+181>:   lea    rax,[rbp-0x40]
   0x00000000000011ee <+185>:   mov    rdi,rax
   0x00000000000011f1 <+188>:   mov    eax,0x0
   0x00000000000011f6 <+193>:   call   0x1030 <printf@plt>
   0x00000000000011fb <+198>:   jmp    0x120e <main+217>
   0x00000000000011fd <+200>:   lea    rdi,[rip+0xe05]        # 0x2009
   0x0000000000001204 <+207>:   mov    eax,0x0
   0x0000000000001209 <+212>:   call   0x1030 <printf@plt>
   0x000000000000120e <+217>:   mov    eax,0x1337
   0x0000000000001213 <+222>:   leave  
   0x0000000000001214 <+223>:   ret    
End of assembler dump.
```

```
gdb-peda$ b *main+172
Breakpoint 1 at 0x11e1

```

```
gdb-peda$ r
Starting program: /home/kiran/Documents/test/ctf/hacktober/supply 
[----------------------------------registers-----------------------------------]
RAX: 0x0 
RBX: 0x0 
RCX: 0x7ffff7f9b718 --> 0x7ffff7f9db00 --> 0x0 
RDX: 0x7d ('}')
RSI: 0x7fffffffdb08 --> 0x7fffffffde7a ("/home/kiran/Documents/test/ctf/hacktober/supply")
RDI: 0x1 
RBP: 0x7fffffffda10 --> 0x555555555220 (<__libc_csu_init>:      push   r15)
RSP: 0x7fffffffd9c0 --> 0x7fffffffdb08 --> 0x7fffffffde7a ("/home/kiran/Documents/test/ctf/hacktober/supply")
RIP: 0x5555555551e1 (<main+172>:        cmp    DWORD PTR [rbp-0x8],0x539)
R8 : 0x0 
R9 : 0x7ffff7fe2180 (<_dl_fini>:        push   rbp)
R10: 0x7 
R11: 0x2 
R12: 0x555555555050 (<_start>:  xor    ebp,ebp)
R13: 0x0 
R14: 0x0 
R15: 0x0
EFLAGS: 0x246 (carry PARITY adjust ZERO sign trap INTERRUPT direction overflow)
[-------------------------------------code-------------------------------------]
   0x5555555551da <main+165>:   movzx  eax,BYTE PTR [rax]
   0x5555555551dd <main+168>:   test   al,al
   0x5555555551df <main+170>:   jne    0x5555555551c2 <main+141>
=> 0x5555555551e1 <main+172>:   cmp    DWORD PTR [rbp-0x8],0x539
   0x5555555551e8 <main+179>:   jne    0x5555555551fd <main+200>
   0x5555555551ea <main+181>:   lea    rax,[rbp-0x40]
   0x5555555551ee <main+185>:   mov    rdi,rax
   0x5555555551f1 <main+188>:   mov    eax,0x0
[------------------------------------stack-------------------------------------]
0000| 0x7fffffffd9c0 --> 0x7fffffffdb08 --> 0x7fffffffde7a ("/home/kiran/Documents/test/ctf/hacktober/supply")
0008| 0x7fffffffd9c8 --> 0x1000000c2 
0016| 0x7fffffffd9d0 ("hacktoberfest_ctf{y0u_4r3_4_1337_m4t3}")
0024| 0x7fffffffd9d8 ("rfest_ctf{y0u_4r3_4_1337_m4t3}")
0032| 0x7fffffffd9e0 ("f{y0u_4r3_4_1337_m4t3}")
0040| 0x7fffffffd9e8 ("3_4_1337_m4t3}")
0048| 0x7fffffffd9f0 --> 0x7d3374346d5f ('_m4t3}')
0056| 0x7fffffffd9f8 --> 0x555555556004 --> 0x6361680037333331 ('1337')
[------------------------------------------------------------------------------]
Legend: code, data, rodata, value

Breakpoint 1, 0x00005555555551e1 in main ()

```
