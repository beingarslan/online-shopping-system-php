# Online Shopping System (PHP)

A simple PHP-based online shopping system with category and product management, user login, and a responsive Bootstrap UI.

---

## Features

- **User Authentication** – Login page for user access.
- **Category Management** – Create, read, update, and delete product categories.
- **Product Management** – View and manage products.
- **Responsive UI** – Built with Bootstrap 5 for a clean, mobile-friendly interface.
- **Shared Navigation** – Consistent navbar across all pages.

---

## Tech Stack

| Layer     | Technology        |
|-----------|-------------------|
| Backend   | PHP               |
| Database  | MySQL (MySQLi)    |
| Frontend  | Bootstrap 5.1.3   |

---

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- A web server such as Apache or Nginx (e.g., via [XAMPP](https://www.apachefriends.org/) or [LAMP](https://ubuntu.com/server/docs/lamp-applications))

---

## Installation & Setup

1. **Clone the repository**

   ```bash
   git clone https://github.com/beingarslan/online-shopping-system-php.git
   cd online-shopping-system-php
   ```

2. **Place the project in your web server's root directory**

   For XAMPP, copy the folder to `htdocs/`:

   ```
   C:\xampp\htdocs\online-shopping-system-php\
   ```

3. **Create the database**

   Open your MySQL client (e.g., phpMyAdmin) and create a database named `shopping_system`:

   ```sql
   CREATE DATABASE shopping_system;
   ```

   Then create the required tables:

   ```sql
   USE shopping_system;

   CREATE TABLE categories (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       description TEXT
   );

   CREATE TABLE products (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       description TEXT,
       price DECIMAL(10, 2),
       category_id INT,
       FOREIGN KEY (category_id) REFERENCES categories(id)
   );
   ```

4. **Configure the database connection**

   Open `config.php` and update the credentials if needed:

   ```php
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $dbname     = "shopping_system";
   ```

5. **Start your web server and navigate to the project**

   ```
   http://localhost/online-shopping-system-php/
   ```

---

## Project Structure

```
online-shopping-system-php/
├── config.php            # Database connection helper
├── index.php             # Home page
├── login.php             # User login page
├── menu.php              # Shared navigation bar
├── categories.php        # Category list & CRUD UI
├── category_actions.php  # Category CRUD logic (PHP functions)
├── products.php          # Products page
└── README.md
```

---

## Pages

| Page              | URL                    | Description                          |
|-------------------|------------------------|--------------------------------------|
| Home              | `/`                    | Landing page                         |
| Login             | `/login.php`           | User login form                      |
| Categories        | `/categories.php`      | List, add, edit, and delete categories |
| Products          | `/products.php`        | View products                        |

---

## License

This project is open source and available for educational and demo purposes.
