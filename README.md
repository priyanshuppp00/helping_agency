# Project Title: helping_agency
# Website URl: http://helpingagency.42web.io

## Features

### 1. **Authentication**
   - User login and registration system.
   - Password hashing for secure storage.
   - Force login for unauthenticated users.

### 2. **User Dashboard**
   - Displays user-specific services and profile details.
   - Manage user profile information.
   - Logout functionality to securely end sessions.

### 3. **Navigation Pages**
   - **Home**: A welcoming page with general information.
   - **Services**: Display of available services.
   - **About**: Information about the application or organization.
   - **Contact**: Contact form for user inquiries.
   - **FAQs**: Commonly asked questions and answers.

### 4. **Admin Dashboard**
   - Manage services (add, edit, delete).
   - Manage user profiles.
   - Overview of site metrics.

## Technologies Used

- **Frontend**:
  - HTML5, CSS3, Bootstrap
  - JavaScript

- **Backend**:
  - PHP for server-side logic
  - MySQL for database management

- **Additional Libraries**:
  - FontAwesome for icons
  - jQuery for dynamic interactions

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/priyanshuppp00/helping_agency.git
   ```

2. Navigate to the project directory:
   ```bash
   cd helping_agency
   ```

3. Set up the database:
   - Import the SQL file located in the `db` folder into your MySQL database.

4. Update the database configuration:
   - Edit `php/db_connect.php` to include your database credentials.
   ```php
   $host = 'your_host';
   $user = 'your_user';
   $password = 'your_password';
   $database = 'your_database';
   ```

5. Start the development server:
   - Use a local server like XAMPP, WAMP, or MAMP to host the application.
   - Place the project in the appropriate `htdocs` or equivalent folder.

6. Access the application:
   - Open `http://localhost/reload-site` in your browser.

## Usage

1. Navigate to the site.
2. Login or register to access the main content.
3. Explore the navigation pages: Home, Services, About, Contact, and FAQs.
4. For admin access, use the provided credentials to manage services and profiles.


## Screenshots

### 1. ![index](https://github.com/user-attachments/assets/b1b430b6-efb2-4c69-818f-8eab08a96016)


### 2. Login Page
![login](https://github.com/user-attachments/assets/84c2b411-f52c-4be1-8458-5cd5ee063460)


### 2.1. Register Page
![register](https://github.com/user-attachments/assets/07777d07-0d05-4d08-9be3-cf9a7c06d329)

### 3. Home Page
![home](https://github.com/user-attachments/assets/6e1d0247-2da4-4e23-80ce-79403ed2f7d8)

 ### 4. Services 
![services](https://github.com/user-attachments/assets/af677890-b589-4ad4-927e-b8e2ad5820fd)

 ### 5. About
 ![about](https://github.com/user-attachments/assets/0125bee7-de55-45d8-bdeb-f407291be8fb)

  ### 6. Contact
 ![contact](https://github.com/user-attachments/assets/40b692d6-a007-40ae-95f2-2f7b87ac4ecd)
 
### 7. Admin Dashboard
![dashboard](https://github.com/user-attachments/assets/b9da2859-4a2b-47bd-92fe-631b96fdf3bd)
![dashboard1](https://github.com/user-attachments/assets/ada6046b-b49e-43c0-9409-fcc51deb219e)
 
 ### 8. Faqs
![faqs](https://github.com/user-attachments/assets/2775869d-478e-4518-a094-040436eef665)
 
 
 ### 9. profile
 ![profile](https://github.com/user-attachments/assets/ac277d97-c07d-497f-b051-ae1bcad8f91e)
 


## Contributing

Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss what you would like to change.

