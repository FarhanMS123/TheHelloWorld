# BNCC Hackathon

This is only `readme` for this project. To see the Laravel License, you could read [Laravel Readme](./README.example.md)

## Setup

1. Copy `.env.example` and paste and rename to `.env`.
2. Edit `.env` as your preference (please give interest to `DB_DATABASE`) :
```
...

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hackathon
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME= {{"Your Email"}}
MAIL_PASSWORD= {{"Your given security password"}}
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
...
```
, or `CREATE` a database base in your prefere.

Note: You could use other emails, instead of gmail
      If you do that, just change "MAIL_HOST" to "smtp.{"your email preference"}".  
      DO NOT use real password for MAIL_PASSWORD

4. Open `database/seeds/AdminSeeder.php`, then edit as your preference.
```php
...

Team::create([
    "name" => "BNCC", // edit with whatever username you want
    "type" => "admin",
    "password" => Hash::make("Abc123!!!") // edit as password you need
]);

...
```

5. Also config the prices in `config/hackathon.php`
```php
return [
    "price_early_bid" => "134.000",
    // https://www.php.net/manual/en/datetime.formats.php
    //                              >> YYYY/mm/dd HH:MM:II
    "end_time_early_bid" => strtotime("2021/01/12 20:50:30"),
    "price_binusian" => "212.000",
    "price_non_binusian" => "385.000"
];
```

6. Do this in your terminal
```bash
> composer install
> npm install
> npm run prod
> composer dump-autoload
> php artisan migrate
> php artisan db:seed --class=AdminSeeder
> php artisan storage:link
```

7. Serve it.

## References

1. https://medium.com/@nasrulhazim/laravel-using-different-table-and-guard-for-login-bc426d067901
2. https://medium.com/@agavitalis/how-to-send-an-email-in-laravel-using-gmail-smtp-server-53d962f01a0c
