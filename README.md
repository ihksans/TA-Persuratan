# TA-Persuratan

Lakukan dengan clean baik push, pull, merge dan lakukan sesuai prosedure

# [Remote Git]
1. git remote add origin https://github.com/ihksans/TA-Persuratan.git

# [Push seremoni]
1. git add .
2. git commit -m [Pesan bagian apa yang diperbaharui]
3. git pull origin [Target Branch]
4. git push origin [Target Branch]

# Jika terjadi conflick harap selesaikan dulu dan push ulang menggunakan
1. git add .
2. git pull origin [Target Branch] --allow-unrelated-histories
3. git push origin [Target Branch]

# [Update Branch Local]
1. git branch -m main master
2. git fetch origin
3. git branch -u origin/master master


# [Cara Menjalankan Project]
1. Buka 2 cmd 
2. Cmd pertama ketik perintah **npm install**
3. npm run watch
4. Cmd kedua ketik **php artisan serve**
5. Buka di browser alamat linknya

#Selamat Bekerja.....
