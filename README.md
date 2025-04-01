# College_Management_System_Using_PHP
# College Management System (Simple)

This is a very basic College Management System built with PHP and MySQL. It provides simple functionalities for managing students, faculty, and administrators.

## Features

* **Admin Login:** Secure admin login using hashed passwords.
* **Student Management:**
    * Add new students.
    * View student details.
* **Faculty Management:**
    * Add new faculty members.
    * View faculty details.
* **Database Driven:** Uses MySQL to store and retrieve data.

## Prerequisites

* **Web Server:** (e.g., Apache, Nginx)
* **PHP:** Version 7.0 or higher.
* **MySQL:** Database server.

## Installation

1.  **Database Setup:**
    * Create a MySQL database named `college_db`.
    * Run the SQL queries (provided in the PHP files as comments) to create the `students`, `faculty`, and `admin` tables.
    * **Important:** Hash the admin password using `password_hash()` and insert it into the `admin` table.
2.  **Configuration:**
    * Edit `config.php` with your MySQL database credentials (username, password, database name).
3.  **File Placement:**
    * Place all the PHP files in your web server's document root or a subdirectory.
4.  **Access:**
    * Open your web browser and navigate to `http://localhost/your_project_directory/index.php` (or the appropriate URL).

## Usage

1.  **Login:**
    * Use the admin username and password to log in.
2.  **Admin Dashboard:**
    * The admin dashboard allows you to add new students and faculty members.
3.  **Student/Faculty Details:**
    * To view student or faculty details, you must pass the appropriate parameters into the url. For example: student\_page.php?roll\_number=1234, or faculty\_page.php?employee\_id=5678.

## GitHub Setup

1.  **Create Repository:**
    * Create a new repository on GitHub.
2.  **Initialize Git:**
    * In your project directory, run `git init`.
3.  **Add Files:**
    * Add all files to the repository using `git add .`.
4.  **Commit Changes:**
    * Commit the changes with `git commit -m "Initial commit"`.
5.  **Add Remote:**
    * Add the remote repository URL using `git remote add origin your_github_repo_url`.
6.  **Push Code:**
    * Push the code to GitHub using `git push -u origin master`.

## Security Notes

* **Important:** This is a basic system and lacks many security features.
* **Password Hashing:** Always use `password_hash()` and `password_verify()` for password security.
* **Input Sanitization:** Sanitize all user inputs to prevent SQL injection and other vulnerabilities.
* **Error Handling:** Implement robust error handling.
* **HTTPS:** Use HTTPS to encrypt communication.

## Future Enhancements

* Course management.
* Attendance tracking.
* Grade management.
* User role management.
* Improved UI.
* More robust security.

## Author

Your Name

## License

MIT License
