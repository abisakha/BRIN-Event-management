## Project Structure

```bash
BRIN-Event-management/
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
