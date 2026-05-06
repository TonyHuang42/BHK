## Quick Setup Script

1. **Run**

    ```
    composer run setup
    ```

    This will install dependencies, setup `.env`, generate key, install npm packages, and build assets, and link storage.

2. **Setup database**

    Edit `.env` file and set your database credentials:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cpn
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

    Then run
    
        php artisan migrate

    Or import from file.

## Manual Setup

1. **Install PHP dependencies**
   ```bash
   composer install
   ```

2. **Setup environment file**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Configure database**

   Edit `.env` file and set your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=cpn
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Run migrations**
   ```bash
   php artisan migrate
   ```

5. **Install Node.js dependencies**
   ```bash
   npm install
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Link storage**
   ```bash
   php artisan storage:link
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```
   Or use the dev script to run both server and Vite:
   ```bash
   composer run dev
   ```

9. **Access the application**
   - Frontend: http://localhost:8000
   - Admin panel: http://localhost:8000/admin


## Backend Test

```bash
composer test
```

## Create New Admin Account

```bash
php artisan make:admin
```

## Deployment

Follow these steps to deploy the application to a production server:

1. **Install production dependencies**
   ```bash
   composer install --no-dev --optimize-autoloader
   ```

2. **Setup environment file**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Edit `.env` and set:
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_URL=https://your-domain.com`
   - Database credentials
   - Any other production-specific settings

3. **Run migrations**
   ```bash
   php artisan migrate --force
   ```

4. **Link storage**
   ```bash
   php artisan storage:link
   ```

5. **Optimize the application**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan filament:cache-components
   php artisan icons:cache
   ```

6. **Web Server Configuration**
   Point your web server (Nginx/Apache) root to the `public/` directory of the project.