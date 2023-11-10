plaintext = input("masukan plaintext:")
key =0x61
ciphertext =""

for c in plaintext:
    ciphertext += chr(ord(c) ^ key)
print("ciphertext dari" ,plaintext,"yaitu:")
print("ciphertext")