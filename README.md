# NUVCLUBS

NUVCLUBS is a web based platform designed to streamline club management and intra university communication. It provides a centralized system where users can register, join clubs, view activities, and communicate using the integrated chat module. The system supports multiple user roles and maintains structured data for club operations, announcements, profile management, and event updates.

---

## Features

### Club Management
Users can browse available clubs, view details, see ongoing events, and request to join. Each club has a dedicated section for posts, images, updates, and member information.

### User Authentication
The system includes secure registration and login using session based authentication. User roles such as Admin, Moderator, and Member are supported. Access control is implemented through server side checks.

### Profile Management
Users can upload profile images, update personal details, manage preferences, and maintain their member identity across clubs.

### Moderator and Admin Controls
Moderators handle member requests, approve or reject join requests, publish announcements, upload media, and manage club pages. Admins have extended privileges to manage users, clubs, and system level configurations.

### Event and Announcement Posting
Club panels allow moderators to upload event posters, publish updates, add descriptions, and manage timelines. The front facing homepage displays events through sliders, galleries, and frames.

### Image and Gallery Management
The platform supports uploading and storing event images, profile pictures, and gallery items. Structured folders are maintained for organized storage.

### Integrated Chat System
The NUVCHATS module provides real time communication features. Registered users can start conversations, send messages, view chat history, and interact with club members. PHP and SQL based message handling ensures reliable delivery and retrieval.

### Session Handling and Error Management
The system includes custom session handlers, inactivity checks, redirection control, and graceful error pages to maintain smooth usage flow.

---

## Technology Stack

**Frontend**
CSS  
HTML  
JavaScript  
Font Awesome

**Backend**
PHP  
Custom MVC style module layout  
Session based authentication  
Server side rendering

**Database**
MySQL  
Tables for users, clubs, moderators, chat messages, posts, events, and media  
SQL scripts included in the project (club.sql, chatapp.sql)

---

## Directory Structure Overview

The project is organized into the following major modules:

**admin/**  
Administrative interface for system level management  

**css/**  
Stylesheets used across all modules  

**dbconnect.php**  
Database configuration and connection file  

**homepage/**  
Public homepage layout and event showcase screens  

**imageGallery/**  
Module for displaying uploaded club and event images  

**login.php, logout.php**  
Authentication flow and session management  

**moderator/**  
Moderator dashboard, approvals, content uploads, event creation  

**profile/**  
User profile pages, image uploads, and detail editing  

**NUVCHATS/**  
Chat system code folder including message handlers and UI  

**errors.php, session_error.php**  
Custom error screens and session failure handlers  

**slider/**  
Homepage slider images and scripts  

---

## Database

The system uses MySQL with structured tables to support users, clubs, moderators, posts, and chat messages. SQL schema files are included:

club.sql  
chatapp.sql  

These contain table definitions, foreign keys, and sample inserts.  

---

## How It Works

1. Users register and authenticate into the system.  
2. After login, users can browse clubs or view their existing memberships.  
3. Moderators can upload events, announcements, and media.  
4. The homepage displays featured events, club information, and sliders.  
5. The chat system enables direct communication between logged in users.  
6. The database stores user details, messages, posts, events, and media paths.  
7. Session control ensures secure access throughout the workflow.  

---

## Setup Instructions

1. Import the SQL files (club.sql, chatapp.sql) into a MySQL server  
2. Configure database credentials in dbconnect.php  
3. Place the project folder in a PHP supported environment such as XAMPP, WAMP, or Apache  
4. Start the server and navigate to index.php in a browser  
5. Register a new account and begin accessing available modules  

---

## Notes

This repository contains the complete source code and assets for the NUVCLUBS platform, including media directories, backend modules, and SQL schemas. All functionality depends on correct configuration of PHP sessions, directory permissions, and MySQL connectivity.
