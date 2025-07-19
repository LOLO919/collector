# collector
my collection of dolls

1.создать папку- репу в гите
2. перенести из гита  через  команду в терминале git clone 
перешли в свой проект на маке через cd в терминале и скопировали туда через ссылку с гита
   https://github.com/LOLO919/collector.git 
3. добавляем композер внутрь проекта (взяли его из другого проекта) composer.phar
4. laravel : 
4.1. ./composer.phar create-project "laravel/laravel:^10.0" app1
4.2. создали папку тк нельзя было в текущую папку установить ларавель и скопировали в корень
5. проблема с токеном
6.  ./composer.phar require moonshine/moonshine установили пакет  муншайн
7. распаковали композер меняли в env  DB_DATABASE=collector
8. php artisan moonshine:install установали муншайн
9. чтобы зайти в него php artisan serve и сменили в адресе /admin http://127.0.0.1:8000/admin


