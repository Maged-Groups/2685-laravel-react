# Laravel with React using Vite and Inertia

## Create a New Project

```bash
Laravel new react-inertia-app
```

## Install Front-End Packages

```bash
pnpm i
```

## Add React

```bash
pnpm i react react-dom
```

## Add Vite/react

```bash
pnpm install --save-dev @vitejs/plugin-react
```

## Add Inertia

```bash
composer require inertiajs/inertia-laravel
```

# Start Your App Creation

-   Create a blade root document
    resources/view/app.blade.php

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        @viteReactRefresh @vite('resources/js/app.jsx') @inertiaHead
    </head>
    <body>
        @inertia
    </body>
</html>
```

## Cereate Inertia Middleware

```bash
php artisan inertia:middleware
```

## Update bootstrap/app.php

```php
use App\Http\Middleware\HandleInertiaRequests;
...
->withMiddleware(function (Middleware $middleware) {
    $middleware->web(append: [
        HandleInertiaRequests::class,
    ]);
})
```

## Install @inertiajs/react

```bash
pnpm install @inertiajs/react
```

-   Rename resources/js/app.js to app.jsx
-   Update resources/js/app.jsx

```jsx
...
import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
    return pages[`./Pages/${name}.jsx`]
  },
  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />)
  },
})
```

## Update vite.config.js

```js
      ...
      import react from '@vitejs/plugin-react';
      ...
      plugins: [
        ...
        react(),
      ],

```

-   Create first ReactJS component (resources/js/Pages/Home.jsx)

## Add traditional React function Component

```js
export default function Home() {
    return (
        <div>
            <h1>React is Working in Laravel</h1>
        </div>
    );
}
```

## Update the routes to serve inertia

```php
Route::get('/', function () {
    return inertia('Home');
    });

```

## Update vite.config.js

```js
 plugins: [
       ...
       laravel({
            ...
            input: ['resources/js/app.jsx'],
            ...
        }),
    ],
 resolve: {
      alias: {
          '@': '/resources',
      },
  }
```

## Update the app.jsx to inclde app.ccs

```js
...
import '@/css/app.css'
...
```

## Update config/database.php

-   remove mb4 under MySQL

```php
...
'mysql' => [
    ...
    'charset' => env('DB_CHARSET', 'utf8'),
    'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
    'prefix' => env('DB_PREFIX', ''),
    'engine' => env('DB_ENGINE', 'InnoDB'),
...
],
```

## Update .env

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=root
DB_PASSWORD=
DB_CHARSET=utf8
DB_COLLATION=utf8_unicode_ci
DB_PREFIX=
DB_ENGINE=InnoDB
```

## Start both servers

```bash
pnpm run dev
```

```bash
php artisan ser
```
