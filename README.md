# 🌍 Web Design Travel Project

A comprehensive travel agency website with an integrated **Admin Dashboard** for managing travel services, customer bookings, and inquiries. Built with modern web technologies for optimal performance and user experience.

[![GitHub last commit](https://img.shields.io/github/last-commit/arizzira/Web_Desain_Travel_Project)](https://github.com/arizzira/Web_Desain_Travel_Project)
[![GitHub repo size](https://img.shields.io/github/repo-size/arizzira/Web_Desain_Travel_Project)](https://github.com/arizzira/Web_Desain_Travel_Project)
[![GitHub](https://img.shields.io/github/license/arizzira/Web_Desain_Travel_Project)](https://github.com/arizzira/Web_Desain_Travel_Project/blob/main/LICENSE)

## ✨ Features

### 🏖️ Public Website
- **Service Catalog**: Browse available travel packages with detailed information
- **Smart Booking**: Interactive booking form with real-time validation
- **Contact System**: Direct messaging system to admin panel
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **User Authentication**: Secure registration and login system

### 🎛️ Admin Dashboard
- **User Management**: View and manage registered users
- **Service Management**: Full CRUD operations for travel packages
- **Booking Management**: Track and manage customer reservations
- **Message Center**: Handle customer inquiries and support requests
- **Analytics**: Monitor bookings and user engagement
- **Role-based Access**: Secure admin authentication and authorization

## 🛠️ Tech Stack

### Frontend
- **Framework**: React.js
- **Styling**: Tailwind CSS
- **HTTP Client**: Axios
- **Routing**: React Router
- **State Management**: React Hooks

### Backend
- **Language**: PHP 7.4+
- **Database**: MySQL 8.0+
- **Architecture**: RESTful API
- **Security**: Password hashing, input validation
- **Server**: Apache (XAMPP)

### Development Tools
- **Version Control**: Git & GitHub
- **Package Manager**: npm
- **Local Server**: XAMPP
- **Code Editor**: VS Code (recommended)

## 🚀 Quick Start

### Prerequisites
- [Node.js](https://nodejs.org/) (v14.0 or higher)
- [XAMPP](https://www.apachefriends.org/) or similar PHP/MySQL environment
- [Git](https://git-scm.com/)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/arizzira/Web_Desain_Travel_Project.git
   cd Web_Desain_Travel_Project
   ```

2. **Backend Setup**
   ```bash
   # Copy backend files to XAMPP htdocs
   cp -r backend/ /path/to/xampp/htdocs/travel-backend/
   
   # Start XAMPP services (Apache & MySQL)
   # Import database schema from database_travel folder
   ```

3. **Database Configuration**
   - Create MySQL database: `travel_database`
   - Import the SQL file from `backend/database_travel/`
   - Update database credentials in `backend/koneksi.php`

4. **Frontend Setup**
   ```bash
   cd frontend
   npm install
   npm start
   ```

5. **Environment Configuration**
   - Update API base URL in frontend to match your backend server
   - Default: `http://localhost/travel-backend/`

## 📁 Project Structure

```
Web_Desain_Travel_Project/
├── 📁 backend/
│   ├── 📁 database_travel/
│   │   ├── 📄 Kirim_layanan.php
│   │   ├── 📄 Koneksi.php
│   │   ├── 📄 create_layanan.php
│   │   ├── 📄 delete_layanan.php
│   │   ├── 📄 get_layanan.php
│   │   ├── 📄 get_pesan_kontak.php
│   │   ├── 📄 get_pesanan.php
│   │   ├── 📄 get_users.php
│   │   ├── 📄 inser_layanan.php
│   │   ├── 📄 kirim_pesan_kontak.php
│   │   ├── 📄 login.php
│   │   ├── 📄 register.php
│   │   └── 📄 update_layanan.php
│   └── 📄 README.md
├── 📁 frontend/
│   ├── 📁 public/
│   ├── 📁 src/
│   │   ├── 📁 assets/
│   │   ├── 📁 components/
│   │   │   ├── 📁 Body/
│   │   │   ├── 📁 Header/
│   │   │   └── 📁 Hubungi_Kami/
│   │   ├── 📁 pages/
│   │   │   ├── 📄 AdminDashboard.jsx
│   │   │   ├── 📄 KelolaLayanan.jsx
│   │   │   ├── 📄 LoginPage.jsx
│   │   │   ├── 📄 PesanLayananKami.jsx
│   │   │   ├── 📄 PesanMasuk.jsx
│   │   │   ├── 📄 RegisterPage.jsx
│   │   │   └── 📄 UserList.jsx
│   │   ├── 📄 App.jsx
│   │   ├── 📄 App.css
│   │   └── 📄 main.jsx
│   ├── 📄 package.json
│   ├── 📄 package-lock.json
│   └── 📄 vite.config.js
└── 📄 README.md
```

## 🔧 API Endpoints

### Authentication
- `POST /login.php` - User login
- `POST /register.php` - User registration

### Services Management
- `GET /get_layanan.php` - Get all travel services
- `POST /create_layanan.php` - Create new service
- `PUT /update_layanan.php` - Update existing service
- `DELETE /delete_layanan.php` - Delete service

### Booking & Messages
- `GET /get_pesanan.php` - Get all bookings
- `POST /inser_layanan.php` - Create new booking
- `GET /get_pesan_kontak.php` - Get contact messages
- `POST /kirim_pesan_kontak.php` - Send contact message

### User Management
- `GET /get_users.php` - Get all registered users

## 🖥️ Usage

### For Customers
1. **Browse Services**: View available travel packages on the homepage
2. **Book Services**: Fill out the booking form with your travel preferences
3. **Contact Support**: Use the contact form for inquiries
4. **Account Management**: Register and login to track your bookings

### For Administrators
1. **Login**: Access the admin panel with administrator credentials
2. **Manage Services**: Add, edit, or remove travel packages
3. **View Bookings**: Monitor customer reservations and their status
4. **Handle Messages**: Respond to customer inquiries
5. **User Overview**: View registered users and their activities

## 🔒 Security Features

- **Password Encryption**: Secure password hashing
- **Input Validation**: Server-side validation for all inputs
- **SQL Injection Protection**: Prepared statements for database queries
- **Authentication**: Session-based user authentication
- **Role-based Access**: Admin-only areas protected from unauthorized access

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 👨‍💻 Author

**Arizzira** - [GitHub Profile](https://github.com/arizzira)

## 📞 Support

If you have any questions or need help getting started, please:
- Open an [issue](https://github.com/arizzira/Web_Desain_Travel_Project/issues)
- Contact via email: [your-email@example.com]

---

⭐ **Don't forget to give this project a star if you found it helpful!** ⭐
