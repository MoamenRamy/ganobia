# Ganobia Management System

A comprehensive **military personnel and administrative management system** built with **Laravel 12**, designed to organize and manage units, sectors, soldiers, volunteers, archives, weapons, specialties, locations, and related administrative data through a role-based web interface.

The system focuses on structured data management, administrative workflows, role-based access control, Excel import/export, and centralized personnel records.

---

## 🚀 Features

### 👥 Personnel Management

* Manage soldiers and volunteers
* Create, view, update, and delete personnel records
* Store personal and administrative information
* Track enlistment and discharge dates
* Manage attendance and other personnel attributes
* Organize personnel by sector and unit
* Assign weapons and specialties
* Manage attachment/assignment locations

### 🪖 Military Structure

* Manage sectors
* Manage units
* Connect units with their corresponding sectors
* Organize personnel according to the military structure

### 🗃️ Archives

* Manage soldier archives
* Manage volunteer archives
* View archived personnel records
* Update and delete archive records
* Role-based access to archive operations

### 🔫 Weapons & Specialties

* Manage weapons
* Assign weapons to soldiers
* Manage military specialties
* Connect personnel with their assigned specialization

### 📍 Locations

* Manage attachment/assignment locations
* Manage governorates
* Associate personnel with their locations
* Organize personnel based on administrative placement

### 📊 Excel Import & Export

The system supports importing and exporting personnel data using Excel files.

* Import soldiers from Excel
* Import volunteers from Excel
* Export soldiers
* Export volunteers
* Handle large amounts of personnel data through spreadsheet workflows

### 🔐 Role-Based Access Control

Different system operations are protected using role-based middleware.

Examples include:

* User management restricted to authorized roles
* Administrative CRUD operations protected by roles
* Personnel management controlled by specific roles
* Archive access controlled by role permissions
* Role management restricted to administrators

---

## 🛠️ Tech Stack

| Technology        | Purpose                          |
| ----------------- | -------------------------------- |
| PHP 8.2+          | Backend language                 |
| Laravel 12        | Web application framework        |
| Laravel Jetstream | Authentication & user management |
| Laravel Sanctum   | API authentication support       |
| Livewire 3        | Interactive UI components        |
| MySQL             | Database                         |
| Laravel Eloquent  | ORM & database relationships     |
| Laravel Excel     | Excel import/export              |
| Blade             | Server-side templating           |
| JavaScript        | Frontend interactions            |
| Vite              | Asset bundling                   |
| PHPUnit           | Automated testing                |

---

## 🏗️ Architecture

The project follows Laravel's MVC architecture.

```text
ganobia/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   └── ...
│
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
│
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
│
├── routes/
│   ├── web.php
│   └── ...
│
├── public/
├── storage/
├── tests/
├── composer.json
└── package.json
```

---

## 🗄️ Main Data Relationships

The system uses Laravel Eloquent relationships to connect the main entities.

```text
Sector
  │
  └── Unit
       │
       ├── Soldiers
       │    ├── Weapon
       │    ├── Specialty
       │    ├── Governorate
       │    └── Attachment Place
       │
       └── Volunteers
```

Examples of implemented relationships include:

* `Unit → Sector`
* `Soldier → Sector`
* `Soldier → Unit`
* `Soldier → Weapon`
* `Soldier → Specialty`
* `Soldier → Governorate`
* `Soldier → Attachment Place`

---

## 🔑 Authentication & Authorization

The application uses **Laravel Jetstream** for authentication and implements role-based authorization through middleware.

Administrative routes are protected using role middleware such as:

```php
->middleware('role:1,2')
```

or:

```php
->middleware('role:1,2,3')
```

This allows different users to access different parts of the management system according to their assigned role.

---

## 📥 Excel Import

Personnel data can be imported directly from Excel files.

Example workflow:

```text
Excel File
    ↓
Upload
    ↓
Validation
    ↓
Import
    ↓
Database
    ↓
Personnel Management
```

The project uses:

```text
maatwebsite/excel
```

for spreadsheet processing.

---

## 📤 Excel Export

The application also provides export functionality for personnel records, allowing administrators to generate Excel files from the stored database information.

---

## ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/MoamenRamy/ganobia.git

cd ganobia
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create environment file

```bash
cp .env.example .env
```

On Windows, you can also create a copy manually:

```text
.env.example → .env
```

### 4. Generate application key

```bash
php artisan key:generate
```

### 5. Configure the database

Update your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Install frontend dependencies

```bash
npm install
```

### 8. Build frontend assets

```bash
npm run build
```

For development:

```bash
npm run dev
```

### 9. Start the application

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

---

## 🧪 Testing

Run the Laravel test suite with:

```bash
php artisan test
```

Or:

```bash
composer test
```

---

## 🔒 Environment & Security

Do not commit sensitive environment variables to GitHub.

The following values should remain private:

```env
APP_KEY=
DB_PASSWORD=
MAIL_PASSWORD=
API_KEYS=
```

Use `.env.example` as the template for local configuration.

---

## 📌 Project Purpose

Ganobia was developed as a practical Laravel management system demonstrating how a complex administrative application can be structured around:

* Relational database design
* MVC architecture
* Role-based authorization
* CRUD operations
* Personnel management
* Excel data processing
* Eloquent relationships
* Authentication
* Administrative workflows
* Server-side rendered interfaces

---

## 📚 Key Laravel Concepts Demonstrated

This project demonstrates practical experience with:

* Laravel 12
* MVC architecture
* Eloquent ORM
* Model relationships
* Middleware
* Role-based authorization
* Resource-style CRUD operations
* Form handling
* Validation
* Authentication
* Laravel Jetstream
* Laravel Sanctum
* Livewire
* Database migrations
* Seeders
* Excel import/export
* PHPUnit testing
* Vite asset management

---

## 👨‍💻 Author

**Moamen Ramy**

Back-End Engineer specializing in:

* PHP
* Laravel
* MySQL
* Python
* Django
* REST APIs
* Database Design
* Backend Development

### Connect

* GitHub: [@MoamenRamy](https://github.com/MoamenRamy)
* LinkedIn: [Moamen Ramy](https://www.linkedin.com/in/moamen-ramy-492a8b212/)

---

## ⭐ Support

If you find this project useful or interesting, consider giving it a ⭐ on GitHub.
