# Bestelsysteem

## Installatie
1. doe 'composer install'
2. doe 'npm install'
3. maak een kopie van de '.env.example' file en hernoem deze naar '.env.'. Pas de 'DB_USERNAME=' en 'DB_PASSWORD=' aan met
   uw persoonlijke username en password
4. maak connectie met de database met dezelfde persoonlijke username en password
5. doe 'npm run dev'
6. doe 'php artisan serve'
7. ga naar 'http://127.0.0.1:8000/' in uw browser

## Default admin account
1. doe 'php artisan migrate:fresh --seed'
2. u kunt nu inloggen met de volgende gegevens als admin:
   email adres: admin@almere.nl
   wachtwoord: secret
