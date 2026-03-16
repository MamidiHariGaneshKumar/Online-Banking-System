# Online Banking System

The **Online Banking System** is a web-based application that allows users to perform banking operations online.
This system enables customers to securely access their bank accounts, transfer funds, check balances, and view transaction history through a simple web interface.

The project digitizes traditional banking services and allows users to access financial services anytime using the internet.

---

# Features

* User registration and account creation
* Secure login authentication
* View account details
* Check account balance
* Transfer money between accounts
* View transaction history
* Delete account functionality

---

# Technologies Used

### Frontend

* HTML
* CSS
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Server

* XAMPP / WAMP Server

### Development Tools

* VS Code
* Notepad++

---

# System Architecture

User → Web Interface → PHP Backend → MySQL Database

---

# Project Modules

### 1. User Registration

Users can create a new account by providing personal details such as name, address, username, password, and initial balance.

### 2. User Login

Users log in securely using their username and password.

### 3. Account Details

Users can view their account information such as account number, balance, and personal details.

### 4. Money Transfer

Users can transfer money from their account to another user's account.

### 5. Transaction History

Users can view previous transactions including sender, receiver, amount, and transaction date.

### 6. Balance Checking

Users can check their current account balance.

---

# Database Tables

### Accounts Table

Stores user account information.

Example Fields:

* firstname
* lastname
* username
* password
* address
* nationality
* balance

### Transactions Table

Stores transaction history.

Example Fields:

* id
* sender
* receiver
* amount
* transaction_date

---

# How to Run the Project

### Step 1 Install XAMPP or WAMP Server

Start the following services:

* Apache
* MySQL

---

### Step 2 Setup Database

1. Open **phpMyAdmin**
2. Create database:

onlinebank2

3. Import SQL tables if required.

---

### Step 3 Place Project Folder

Move the project folder to:

xampp/htdocs/

---

### Step 4 Run the Project

Open browser and run:

http://localhost/Online-Banking-System

---

# Future Improvements

* Implement stronger authentication
* Add OTP verification
* Improve UI design
* Add admin dashboard
* Deploy system online

---
