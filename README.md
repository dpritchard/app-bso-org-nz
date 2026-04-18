# BSO — Botanical Society of Otago

Laravel application powering [bso.org.nz](https://bso.org.nz).

## Stack

| Layer | Version |
|---|---|
| PHP | 8.5 |
| Laravel | 13 |
| Node | 22 |
| Vite | 8 |
| Vue | 3 |

## Local development

**Prerequisites:** [Laravel Herd](https://herd.laravel.com) (PHP + local domains), Node 22 via Herd.

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
```

Mail is captured locally via [Mailtrap.io](https://mailtrap.io) — configure credentials in `.env`.

## Testing

```bash
php artisan test
```

100 tests, SQLite in-memory database, no external dependencies required.

## Docs

Local project documentation lives in `docs/` (gitignored):

- `docs/TODO.md` — open tasks and decisions
- `docs/sessions/` — session summaries
- `docs/testing/` — manual test guides
