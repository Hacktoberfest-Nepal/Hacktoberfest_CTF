# 0xOooo - I_LOVE_SO_MANY_ARGS

## Challenge Flag: hacktoberfest_ctf{OH_YES_I_DID_IT}

## Write-up:

The challenge description gave a link to the video of sacar and says This song might lead you somewhere(hira thaha bhayena, flag chai hola). Just opening the binary using cutter reveals the flag which is ofc in reverse order 
```
 0x00001287      push    0x54       ; 'T'
 0x00001289      push    0x49       ; 'I'
 0x0000128b      push    0x5f       ; '_'
 0x0000128d      push    0x44       ; 'D'
 0x0000128f      push    0x49       ; 'I'
 0x00001291      push    0x44       ; 'D'
 0x00001293      push    0x5f       ; '_'
 0x00001295      push    0x49       ; 'I'
 0x00001297      push    0x5f       ; '_'
 0x00001299      push    0x53       ; 'S'
 0x0000129b      push    0x45       ; 'E'
 0x0000129d      push    0x59       ; 'Y'
 0x0000129f      push    0x5f       ; '_'
 0x000012a1      push    0x48       ; 'H'
 0x000012a3      mov     r9d, 0x4f  ; 'O'
 0x000012a9      mov     r8d, 0x47  ; 'G'
 0x000012af      mov     ecx, 0x41  ; 'A'
 0x000012b4      mov     edx, 0x4c  ; 'L'
 0x000012b9      mov     esi, 0x46  ; 'F'
```
and the flag hacktoberfest_ctf{OH_YES_I_DID_IT}.
