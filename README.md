# Makkasar Sticker

## Cara Jalankan

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan storage:link
php artisan migrate
npm install
npm run dev
php artisan serve

