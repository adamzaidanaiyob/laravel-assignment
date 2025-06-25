# Laravel Assignment

This is a Laravel-based assignment project featuring user and product management modules.

## Features

- User CRUD (Create, Read, Update, Delete) with search and filter by status
- Product CRUD with search and filter by publish status
- Soft deletes for products
- Responsive Bootstrap 5 UI

## Requirements

- PHP >= 8.1
- Composer
- MySQL or compatible database
- Node.js & npm (for frontend assets, optional)

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Copy and Configure Environment File

```bash
cp .env.example .env
```

Edit `.env` and set your database credentials:

```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations and Seeders

```bash
php artisan migrate --seed
```

This will create the necessary tables and populate them with sample data.

### 6. (Optional) Compile Frontend Assets

If you want to customize frontend assets:

```bash
npm install
npm run dev
```

### 7. Start the Development Server

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- Use the navigation bar to switch between Users and Products.
- You can add, edit, view, and delete users and products.
- Use the search and filter options at the top of each module to find specific records.

## Notes

- Products support soft deletes (deleted products are not permanently removed from the database).
- Default pagination is set to 10 items per page.

## Troubleshooting

- If you encounter permission issues, ensure the `storage` and `bootstrap/cache` directories are writable.
- For any database errors, double-check your `.env` configuration and that the database exists.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
