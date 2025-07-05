# EventEase - Online Event Management System

EventEase is a modern and responsive web-based event management system designed to streamline event discovery, booking, and management. This platform allows users to browse upcoming events, register or book seats, and enables admins to manage events, attendees, and users seamlessly.

---

## Features

### User Features
- Register/Login system with validation
- View upcoming events
- Filter events by category, location, and date
- Book tickets for events
- Checkout system with live total price calculation
- View personal bookings in **My Events** section
- Contact form for user inquiries

### Admin Features
- Admin dashboard with stats (Total Events, Bookings, Users)
- Manage Users (view/edit/delete)
- Manage Events (add/edit/delete)
- Attendee List with CSV export
- Approve or monitor bookings

---

## Project Structure

```
event-ease/
│
├── assets/                     # Static images and icons
├── controllers/               # Business logic (form handlers, DB calls)
├── models/                    # Database queries and connections
├── views/
│   ├── layouts/               # Navbar, sidebar, footer
│   ├── events_page.php        # All events listing
│   ├── event_details_page.php # Single event page
│   ├── checkout_page.php      # Booking checkout
│   └── contact_us_page.php    # Contact form
├── public/
│   └── styles/                # CSS files
│
├── uploads/                   # Uploaded event images
├── index.php                  # Homepage
└── README.md                  # This file
```

---

## Setup Instructions

### Requirements
- PHP >= 7.4
- MySQL (or MariaDB)
- XAMPP / LAMP / WAMP stack

### Setup Steps

1. **Clone this repository**
   ```bash
   git clone https://github.com/ahasan-ullah/Event-Ease.git
   ```

2. **Import the Database**
   - Open `phpMyAdmin`
   - Create a new DB named `event_ease`
   - Import the provided `event_ease.sql` file

3. **Configure DB Connection**
   - Edit `config/db.php` with your DB credentials:
     ```php
     $conn = new mysqli("localhost", "root", "", "event_ease");
     ```

4. **Start Your Server**
   - Open XAMPP/WAMP/LAMP
   - Start Apache and MySQL
   - Navigate to:
     ```
     http://localhost/event-ease/index.php
     ```

---

## Sample Credentials

### Admin
```
Email: admin@gmail.com
Password: admin123
```

### 👥 User
```
Email: ahasan@gmail.com
Password: Abc123
```

---

## Database Overview

### Tables:
- `users` - stores user info
- `events` - stores event details
- `attendee_list` - bookings
- `contact_messages` - messages from contact form

---