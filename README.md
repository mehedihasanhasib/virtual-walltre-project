# Introduction

This is a virtual wallet web-application. User can save there personal, business or any other documents effortlessly. All they need to do just login with an email account select a package and just go on.

# Features 

- Admin can create roles and assign.
- Admin can create packages which will be shown in the frontend.
- New users can see the package and buy one from those for just once, users can't update their package or can't buy a second package.
- After successful payment user can now upload their information to the dashboard.
- Premium user will get some extra benefits like they will able to upload their NID and Passport information and also download as PDF.

# How to install

#### Pre-requisite

XAMPP or any webserver and MySQL server installed is the primary requisition.

#### Next-Steps

To install this app just download or clone the repository and open a terminal in the same folder directory and run the following commands one by one:

```
composer install
```

```
cp .env-example .env
```

```
php artisan key:generate
```

```
npm install
```

```
php artisan migrate
```

```
php artisan db:seed --class=AdminSeeder
```

```
php artisan serve
```



Now enjoy the app. ❤

