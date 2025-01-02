# Project Title: helping_agency

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

### 0. ![index](https://github.com/user-attachments/assets/b1b430b6-efb2-4c69-818f-8eab08a96016)


### 1. Login Page
![Login Page](C:\xampp\htdocs\helping_agency\Project_img/login.png)

### 2. Home Page
![Home Page](assets/images/screenshots/home.png)

### 3. Admin Dashboard
![Admin Dashboard](assets/images/screenshots/admin_dashboard.png)

## Contributing

Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

## Contact

For any inquiries, please reach out via:
- Email: [your-email@example.com](mailto:your-email@example.com)
- GitHub Issues: [Reload Site Issues](https://github.com/yourusername/reload-site/issues)
