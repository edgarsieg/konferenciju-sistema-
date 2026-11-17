SD1 KONFERENCIJŲ SISTEMA

Šis ZIP skirtas tavo jau veikiančiam Laravel projektui C:\laragon\www\mano-projektas.

1. Sustabdyk php artisan serve su Ctrl+C.
2. Pasidaryk savo projekto kopiją, jei nori turėti atsarginę versiją.
3. Išarchyvuok šio ZIP TURINĮ tiesiai į C:\laragon\www\mano-projektas.
4. Leisk Windows perrašyti sutampančius failus.
5. VS Code atidaryk C:\laragon\www\mano-projektas.
6. Terminale paleisk:

npm install
npm run dev
php artisan optimize:clear
php artisan serve

7. Atidaryk http://127.0.0.1:8000

8. lang\lt\messages.php faile pakeisk:
'student_group' => 'ĮRAŠYK SAVO GRUPĘ'
į savo tikrą grupę.

9. Patikrink route sąrašą:
php artisan route:list

Git darbui rekomenduojama atšaka:
git checkout -b sd1-development

Commitų pavyzdžiai:
git add .
git commit -m "Create routes and controllers"
git commit -m "Create application views"
git commit -m "Add admin management forms"
git commit -m "Add Lithuanian translations"
git commit -m "Add Bootstrap design and JavaScript library"

Svarbu: SD1 nenaudoja duomenų bazės. Duomenys yra laikini masyvai controlleriuose. Create, edit, register ir delete užklausos parodo architektūrą ir validaciją, bet neišsaugo realių įrašų. SD2 metu prie šios struktūros galima prijungti duomenų bazę ir autentifikaciją.
