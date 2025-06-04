Secure User Authentication System

1. Import this SQL in phpMyAdmin:
CREATE DATABASE secure_auth;
USE secure_auth;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) DEFAULT 'user'
);

2. Place all files in htdocs/SecureUserAuth in XAMPP.
3. Open http://localhost/SecureUserAuth/register.html in your browser.
4. Register, then login, and access dashboard.