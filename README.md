## Project Structure

```bash
BRIN-Event-management/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/
│   │       │   ├── DashboardController.php
│   │       │   ├── EventController.php
│   │       │   ├── UserController.php
│   │       │   └── ReportController.php
│   │       │
│   │       └── User/
│   │           ├── HomeController.php
│   │           ├── EventController.php
│   │           └── ProfileController.php
│   │
│   └── Models/
│       ├── User.php
│       ├── Event.php
│       └── Category.php
│
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
│
├── public/
│   └── assets/
│       ├── user/
│       │   ├── css/
│       │   ├── js/
│       │   └── images/
│       │
│       └── admin/
│           ├── css/
│           ├── js/
│           └── images/
│
├── resources/
│   └── views/
│       │
│       ├── layouts/
│       │   ├── user/
│       │   │   └── main.blade.php
│       │   │
│       │   └── admin/
│       │       └── main.blade.php
│       │
│       ├── components/
│       │   ├── user/
│       │   │   ├── navbar.blade.php
│       │   │   ├── footer.blade.php
│       │   │   ├── event-card.blade.php
│       │   │   └── pagination.blade.php
│       │   │
│       │   └── admin/
│       │       ├── sidebar.blade.php
│       │       ├── navbar.blade.php
│       │       ├── alert.blade.php
│       │       └── table.blade.php
│       │
│       ├── user/
│       │   ├── home.blade.php
│       │   │
│       │   ├── events/
│       │   │   ├── index.blade.php
│       │   │   └── show.blade.php
│       │   │
│       │   ├── calendar/
│       │   │   └── index.blade.php
│       │   │
│       │   ├── profile/
│       │   │   └── index.blade.php
│       │   │
│       │   └── auth/
│       │       ├── login.blade.php
│       │       └── register.blade.php
│       │
│       └── admin/
│           ├── dashboard.blade.php
│           │
│           ├── events/
│           │   ├── index.blade.php
│           │   ├── create.blade.php
│           │   ├── edit.blade.php
│           │   └── show.blade.php
│           │
│           ├── users/
│           │   └── index.blade.php
│           │
│           ├── categories/
│           │   └── index.blade.php
│           │
│           └── reports/
│               └── index.blade.php
│
├── routes/
│   ├── web.php
│   └── admin.php
│
├── storage/
│
├── tests/
│
├── .env
├── .gitignore
├── artisan
├── composer.json
└── README.md
```
