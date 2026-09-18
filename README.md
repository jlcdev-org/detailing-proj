# ServiceFlow

ServiceFlow is a small-business auto-detailing management platform built with the TALL stack. The current implementation includes the public marketing website, service catalog, packages and promotions, contact form UI, and business information pages. Customer, staff, and admin operations will be added in later phases.

## Tech Stack

- **Laravel 13** — application framework and backend
- **Livewire 4** — server-driven interactive components
- **Alpine.js** — lightweight browser interactions, bundled with Livewire
- **Tailwind CSS 4** — CSS-first styling through the Vite plugin
- **Vite 8** — frontend development server and production asset bundler
- **PHP 8.3+**
- **SQLite** — default local database
- **PHPUnit 12** — automated testing
- **Laravel Pint** — PHP code formatting
- **Docker and Apache** — Render deployment

## Prerequisites

Install the following before setting up the project:

- PHP 8.3 or later with the extensions required by Laravel
- Composer 2
- Node.js 20 or later
- npm 10 or later
- Git
- SQLite

Optional:

- Docker Desktop, for testing the production container locally

Verify the main tools:

```bash
php -v
composer -V
node -v
npm -v
git --version
```

## Local Setup

The recommended project location is `~/Sites/serviceflow`.

### 1. Clone the repository

```bash
mkdir -p ~/Sites
git clone git@github.com:jlcdev-org/detailing-proj.git ~/Sites/serviceflow
cd ~/Sites/serviceflow
```

If the repository already exists locally, enter it and pull the latest changes:

```bash
cd ~/Sites/serviceflow
git pull origin main
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Create the environment file

```bash
cp .env.example .env
php artisan key:generate
```

The default environment uses SQLite. Create the local database file:

```bash
mkdir -p database
touch database/database.sqlite
```

### 4. Run migrations

```bash
php artisan migrate
```

### 5. Start development

Run Laravel and Vite together:

```bash
composer run dev
```

Alternatively, run them in separate terminals:

```bash
php artisan serve
```

```bash
npm run dev
```

The application is available at `http://127.0.0.1:8000` by default.

## Production Build

Compile optimized frontend assets:

```bash
npm run build
```

For a production environment, configure at least:

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.example
```

Generate a unique application key with `php artisan key:generate`. Never commit the generated `.env` file or production secrets.

## Verification

Run the automated tests:

```bash
php artisan test --compact
```

Build the frontend assets:

```bash
npm run build
```

Format modified PHP files:

```bash
vendor/bin/pint --dirty --format agent
```

Inspect application routes:

```bash
php artisan route:list --except-vendor
```

## Public Routes

| Page | Path |
| --- | --- |
| Home | `/` |
| Services | `/services` |
| Packages | `/packages` |
| About | `/about` |
| Contact | `/contact` |

## Render Deployment

The repository includes:

- `Dockerfile`
- `docker-entrypoint.sh`
- `render.yaml`
- `.dockerignore`

To deploy with Render:

1. Sign in to Render and create a new Blueprint.
2. Connect `jlcdev-org/detailing-proj`.
3. Allow Render to read `render.yaml`.
4. Review the production environment variables.
5. Deploy the web service.

The entrypoint configures Apache for Render's assigned port, prepares Laravel, runs migrations, and starts the web server.

> Render's filesystem is ephemeral. SQLite is suitable for the current public-site phase, but persistent customer, booking, payroll, and inventory data should use a managed PostgreSQL database before those features go to production.

## Project Structure

```text
app/                         Laravel application code
resources/css/app.css        Tailwind CSS theme and application styles
resources/js/app.js          Frontend JavaScript entry point
resources/views/components/  Shared Blade components and public layout
resources/views/public/      Public website pages
routes/web.php               Public web routes
tests/                       PHPUnit test suite
```

## Repository

GitHub: `git@github.com:jlcdev-org/detailing-proj.git`
