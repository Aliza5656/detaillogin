🔐 Login & Registration System (User Details)
This project contains Login and Registration pages built with PHP and MySQL.
The registration form collects full user information such as username, email, phone number, gender, country, and password.

Registration Page Features
When a user signs up, the system collects:

👤 Username – User’s unique name.

📧 Email – Valid email address (must be unique).

📱 Phone Number – Contact number.

🚻 Gender – Male, Female, or Other (select).

🌍 Country – Dropdown menu for selecting the country.

🔒 Password – Encrypted using password_hash() for security.

Login Page Features
User Authentication via Email/Username and Password.

Session Management – Keeps users logged in until they log out.

Error Handling – Invalid login attempts show user-friendly messages.

Database Table (users)
The users table in MySQL includes:

id (Primary Key)

username

email

phone_number

gender

country

password (Hashed)

created_at

Workflow
Registration Form – User submits details → Data validated → Saved in MySQL.

Login Form – User enters Email/Username & Password → Verified from database → Redirected to Dashboard.

Logout – User session is destroyed and redirected to Login page.

UI Design Suggestions
Registration page with icons for each field (👤, 📧, 📱).

Country dropdown with flags or emojis (🌍).

Use modern styling like a card layout or glassmorphism for a premium feel.
