# 🔐 Secure PHP Login and Register System

A secure and modern user authentication system built with PHP & MySQL. This project demonstrates real-world login functionality with proper security practices and clean UI design.

---

## 🚀 Features

* ✅ User Registration & Login
* 🔐 Password Hashing (`password_hash`, `password_verify`)
* 🛡 SQL Injection Protection (Prepared Statements)
* 👤 Session-Based Authentication
* 🚪 Logout System
* 🎨 Modern UI Design (Glassmorphism Style)

---

## 🛠 Tech Stack

* PHP (Core)
* MySQL
* HTML, CSS
* JavaScript (optional)

---

## 📂 Project Structure

```
create-registration-login-system-php-mysql/
│
├── config/        # Database configuration
├── includes/      # Auth & helper functions
├── assets/        # CSS files
│
├── login.php
├── register.php
├── dashboard.php
├── logout.php
└── index.php
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository

```
git clone https://github.com/supriyo-chowdhury/create-registration-login-system-php-mysql.git
```

### 2️⃣ Import Database

* Open phpMyAdmin
* Create database: `login_system`
* Import `database.sql`

### 3️⃣ Configure Database

Edit `config/db.php`:

```
$host = "localhost";
$user = "root";
$pass = "";
$db   = "login_system";
```

### 4️⃣ Run Project

* Start XAMPP / Localhost
* Open: `http://localhost/create-registration-login-system-php-mysql`

---

## 🔒 Security Features

* Password encryption using bcrypt
* Prepared statements to prevent SQL injection
* Session validation for protected routes

---

## 🔮 Future Improvements

* 🔐 Google Authenticator (2FA)
* 📧 Email verification
* 🔁 Forgot password system
* 🧑‍💼 Admin panel

---

## 👨‍💻 Author

**Supriyo Chowdhury**

---

## ⭐ Support

If you like this project, please ⭐ star the repository!
