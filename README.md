# LogInSystem

Welcome to LogInSystem! This repository contains a simple login system implemented using PHP and SQL.

## Features

- User registration: Allows users to create an account by providing their username and password.
- User login: Allows registered users to log in using their credentials.
- Password hashing: Securely stores user passwords by hashing them before storing them in the database.
- User authentication: Verifies user credentials during login.

## Requirements

To run this login system, you need the following:

- PHP 5.6 or later
- MySQL or any other supported database management system
- XAMPP or alternative local server software

## Installation

1. Clone the repository to your local machine using the following command:

   ```
   git clone https://github.com/harisdev-netizen/logInSystem.git

2. Configure the database connection by modifying the `config.php` file. Update the database host, username, password, and database name to match your local environment.

3. Import the `database.sql` file into your database management system to create the necessary tables.

4. Install and configure XAMPP or an alternative local server software such as WAMP, MAMP, or LAMP.

5. Copy the cloned repository into the appropriate folder for your local server software (e.g., for XAMPP, copy it to the `htdocs` folder).

6. Start the local server software and ensure that the PHP and MySQL services are running.

7. Access the login system by opening `index.php` in your web browser.

## Usage

- **Registration**: Fill in the registration form with a unique username and a strong password. Click on the "Register" button to create an account.

- **Login**: Enter your registered username and password in the login form. Click on the "Login" button to log in to the system.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, please feel free to open an issue or submit a pull request.
