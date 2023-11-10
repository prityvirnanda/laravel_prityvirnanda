ciphertext = '/ ,A2 8 A*., 334A+ ,/'
key = 0x61
plaintext =""

for c in plaintext :
    ciphertext += chr(ord(c) ^ key)
print("plaintext nya yaitu:",plaintext)