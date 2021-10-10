# Doers

Social media app to showcase your todo list and its current progress mostly to motivate others and get motivated by
others.

TODO

- [x] The Easiest scaffolding for the project
- [x] Authentication
- [x] Scope todo item to a particular user (Delete can be done by owner only)
- [x] Todo can be marked completed incomplete by its owner
- [x] Show todo owner information on index page
- [ ] Show progress about the list somewhere on profile
- [x] User profile page where only user specific todos are listed
- [ ] Follow another user to see his/her todos and progress
- [ ] If authenticated user, show only todos from person he/she follows and his/her own todos on main page
- [ ] Design better pages and looks (the lowest priority)

# Prerequisites

- PHP >= 7.3
- PHP Extension - BCMath
- PHP Extension - Ctype
- PHP Extension - Fileinfo
- PHP Extension - JSON
- PHP Extension - Mbstring
- PHP Extension - OpenSSL
- PHP Extension - PDO
- PHP Extension - Tokenizer
- PHP Extension - XML
- MySQL
- GIT
- Composer
- NPM

## How to install

- Do the git clone of the project

```bash
git clone https://github.com/bhushan/doers.git
```

- Navigate inside project directory

```bash
cd doers
```

- Install composer dependencies

```bash
composer install
```

- Install NPM dependencies

```bash
npm install
```

- Create environment file by copying `.env.example` file to `.env`

- Generate App Key for the project

```bash
php artisan key:generate
```

- Change following configurations from `.env` file
    - DB_DATABASE=
    - DB_USERNAME=
    - DB_PASSWORD=

- Now create the database with the same name used in DB_DATABASE

- Migrate database and seed default data

```bash
php artisan migrate:fresh --seed
```

## How to run application

- Run below command from the project root directory, and run the provided url in browser

```bash
php artisan serve
```

## How to execute tests

- Run the below command from the project root directory

```bash
./vendor/bin/phpunit
```

or

```bash
php artisan tests
```

## Few useful commands

- Compile the assets

```bash
npm run <env>
```

Note:

a. ```env``` can be ```prod``` or ```dev```

b. ```prod``` generates the minified assets

- Watch changes in the assets

```bash
npm run watch
```
