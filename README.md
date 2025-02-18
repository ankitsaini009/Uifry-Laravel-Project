Uifry-Laravel-Project

Uifry-Laravel-Project is a dental management web application built using Laravel. This project is designed to offer comprehensive dental services, including an easy-to-use interface for patients and dental professionals. Key features of this application include:

Live  Project Link : -------> https://dmprojects.xyz/ankitsaini/laravel-uifry/public/

Features

Google Authentication: Users can sign in securely using their Google account.

Booking System: A robust booking system for managing patient appointments, allowing users to book, reschedule, or cancel appointments with dental professionals.

Dental-Related Features: Includes features tailored to dental practices, such as treatment history tracking, patient records management, and appointment reminders.

Patient and Professional Dashboards: Separate dashboards for patients and dental professionals for better management and user experience.

Responsive Design: Fully responsive layout, making it accessible on desktops, tablets, and smartphones.

Technologies Used

Laravel: PHP framework for building the backend.

MySQL: Database for storing patient and appointment data.

Google Authentication: For secure user login.

Bootstrap: Frontend framework for responsive design.

Vue.js (optional): For building interactive components.

Installation

Clone this repository:

git clone https://github.com/ankitsaini009/Uifry-Laravel-Project.git

Install dependencies:

composer install

Copy .env.example to .env and set your environment variables:

cp .env.example .env

Generate an application key:

php artisan key:generate

Run migrations to set up the database:

php artisan migrate

Set up your Google authentication credentials as per the Laravel documentation.

Serve the application:

php artisan serve

Usage

Patient Users: Book appointments, view treatment history, and manage personal details.

Dental Professionals: Manage appointments, view patient history, and send appointment reminders.

License

This project is licensed under the MIT License - see the LICENSE file for details.
