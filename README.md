# Web Manage

Web Manage is a simple web application built with Laravel for managing a list of students. This application provides basic functionalities such as adding, viewing, editing, and deleting student information.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Usage Guide](#usage-guide)
- [Running the Application](#running-the-application)
- [Configuration](#configuration)

## Introduction

Web Manage is a web application developed to help users manage a list of students. The application allows you to perform basic operations such as adding, editing, viewing, and deleting student records.

## Features

- **View student list:** Display a list of all students with basic information such as ID, name, and address.
- **Add new student:** Provide a form to add new student information to the system.
- **Edit student information:** Allow users to edit the information of a student.
- **Delete student:** Remove a student from the system.
- **View student details:** Display detailed information about a student.

## System Requirements

- PHP >= 8.0
- Composer
- MySQL or MariaDB This project use HeidSQL 
- Laravel >= 10.x
- Node.js and npm (for building front-end assets)

## Installation

### Step 1: Clone the Project

Clone the repository from GitHub to your local machine.

git clone https://github.com/nguyendacson/Web_Manage.git

### Step 2: Install Dependencies

Navigate to the project directory and install the dependencies using Composer.

cd Web_Manage
composer install

### Step 3: Create .env File

Create a .env file from the .env.example file.

cp .env.example .env

### Step 4:  Configure .env File


Open the .env file and configure your database connection settings.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

### Step 5: Generate Application Key


Generate a new application key.

php artisan key:generate

### Step 6: Run Migrations


Run migrations to create necessary tables in the database.

php artisan migrate

### Step 7: Build Front-end Assets


Build front-end assets (CSS, JS).

npm install
npm run dev

## Usage Guide

1. Access the Application: Open a web browser and go to http://localhost:8000.
2. View Student List: You will see a list of students on the main page.
3. Add a New Student: Click on the "Add Student" button to add a new student.
4. Edit Student: Click on the edit icon to edit a student's information.
5. Delete Student: Click on the delete icon to remove a student from the list.
6. View Student Details: Click on the view icon to see detailed information about a student.

## Running the Application


To start the Laravel development server, run the following command:

php artisan serve


## Contact :

### email: dacson1822003@gmail.com
















