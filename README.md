# 📌 Inowtech Test

Welcome to the **Inowtech Test Code** Laravel project! This is a robust web application built using Laravel to manage data effectively.

## 🚀 Features

✅ Manage Student Data 📚  
✅ Manage Teacher Data 👨‍🏫  
✅ Manage Class Data 🏫  
✅ Form Validation for Secure Data Entry ✅  
✅ Responsive & User-Friendly UI 🎨  
✅ Built with Laravel & Tailwind CSS ⚡  

---

## 🛠️ Tech Stack

- **Framework**: Laravel  
- **Frontend**: Tailwind CSS  
- **Database**: MySQL  
- **Version Control**: Git & GitHub  
- **Authentication**: Laravel Breeze (if applicable)  

---

## 📦 Installation & Setup

Follow these steps to set up the project on your local machine:

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/sofyannurrohman/inowtech-test.git
cd inowtech-test
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install
```

### 3️⃣ Set Up Environment Variables
Duplicate the `.env.example` file and rename it to `.env`.
Then, generate the application key:
```bash
php artisan key:generate
```

### 4️⃣ Configure Database
Edit the `.env` file and set up your database credentials:
```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Run migrations:
```bash
php artisan migrate --seed
```

### 5️⃣ Run the Application
Start the development server:
```bash
php artisan serve
```
Then, visit `http://127.0.0.1:8000` in your browser. 🎉

---

## 🏗️ Project Structure

📂 **app/** - Application logic & controllers  
📂 **database/** - Migrations & Seeders  
📂 **resources/** - Views & CSS files  
📂 **routes/** - Web routes  
📂 **public/** - Static files (CSS, JS, Images)  

---

## 💡 Usage

- Navigate to **Dashboard** to manage data.
- Add, edit, and delete students, teachers, and classes.
- Validation ensures data integrity.

---

## 👥 Contributors
👤 **Sofyan Nurrohman**  
🔗 [GitHub Profile](https://github.com/sofyannurrohman)  

---

## 📜 License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## ⭐ Show Your Support!
Give this repo a ⭐ if you found it helpful!
