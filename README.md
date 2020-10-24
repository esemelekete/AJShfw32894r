1. Clone repo ini
```
git clone https://github.com/esemelekete/AJShfw32894r.git
cd AJShfw32894r
```
2. Copy `.env.example` jadi `.env`
3. Atur variable environment di file `.env` (selain variabel **ENVIRONMENT**)
```
SITE_NAME="Repositori"
BASE_URL=http://localhost:3000/
ENVIRONMENT=development # jangan ubah ini dulu

DB_HOST=localhost
DB_NAME=repositori
DB_USER=root
DB_PASS=
```
4. Install dependency
```
composer install
npm i
```
5. Compile aset
```
npm run prod
```
6. Serve web di folder `public`
7. Kunjungi route `/migrate`
8. Tekan tombol `Migrate to latest`
9. Edit file `.env` ubah variabel **ENVIRONMENT** menjadi `production`
```
# seperti berikut
ENVIRONMENT=production
```
10. Sekarang route `/migrate` tidak lagi bisa diakses
11. Selesai.
