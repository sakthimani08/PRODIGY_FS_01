# PRODIGY_FS_01
A PHP user authentication system with session and UI

## 📌 **Extended Project Description for `SecureUserAuth`**

> **SecureUserAuth** is a complete and modern PHP-based user authentication system designed for web applications requiring secure login, session control, and role-based access. Built using core PHP, MySQL, and styled with a professional UI, this system is ideal for beginners and intermediate developers seeking to understand and implement authentication mechanisms from scratch.

---

### 🚀 Features

* ✅ **User Registration & Login System**
* 🔐 **Session-based Authentication**
* 🔒 **Secure Password Storage** using `password_hash()`
* 🛡️ **Role-Based Access Control** (e.g., `user`, `admin`)
* 🎨 **Clean, Modern UI** with Font Awesome icons and animations
* 🌐 **Responsive Layout** for both desktop and mobile
* 📂 Organized project structure for easy customization
* 📸 Customizable dashboard with sidebar navigation

---

### 🧠 Tech Stack

* **Frontend**: HTML5, CSS3, Font Awesome
* **Backend**: Core PHP (no frameworks)
* **Database**: MySQL (via phpMyAdmin)
* **Tools**: XAMPP, VS Code, Git, GitHub

---

### 📁 Folder Structure

```
SecureUserAuth/
│
├── dashboard.php
├── login.php
├── register.php
├── logout.php
├── config.php          # DB connection
├── assets/             # CSS, JS, images (optional)
└── README.md
```

---

### 🛠️ Setup Instructions

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/SecureUserAuth.git
   ```

2. Place the project in your XAMPP `htdocs` directory:

   ```
   C:\xampp\htdocs\SecureUserAuth
   ```

3. Start **Apache** and **MySQL** in the XAMPP Control Panel

4. Create a MySQL database named:

   ```
   secureuserauth
   ```

5. Import the `database.sql` file (if provided) into phpMyAdmin.

6. Update database credentials in `config.php`

7. Open in your browser:

   ```
   http://localhost/SecureUserAuth/login.php
   ```

---

### 🔐 Default User Example

| Username | Email                                     | Password    | Role |
| -------- | ----------------------------------------- | ----------- | ---- |
| sakthi   | [admin@gmail.com](mailto:admin@gmail.com) | sakthi\@123 | user |

---

### 📜 License

This project is open-source and available under the MIT License.

