dir
cd public_html
dir
nano index.html
passwd
psql
logout
psql
cd public_html
dir
cd be
dir
cd redirect2
cd ..
mkdir ~/public_html/redirect
cd public_html
cd redirect
git init
git branch -m main
git add .
git commit -m "edelleenlähetyksen pohja"
git add .
git commit -m "tunnisteen syöttäminen kyselyjonon kautta"
git add .
git status
git commit -m "syötearvojen tarkistaminen"
git status
git log
clear
cd ..
mariadb knykanen
dir
cd public_html
dir
cd redirect
git status
git log
git status
git add .
git commit -m "tietokannan kytkeminen"
git log
git checkout a3195d1
psql
CREATE TABLE Genre (
genreid integer primary key,
nimi varchar(100) not null
);
\d
psql
mariadb knykanen
psql
mariadb knykanen
\d
\b
psql
\d
psql
