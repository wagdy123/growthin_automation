# Setup Documentation

use these steps to set up your environment and project.
## Steps
1 . Download [Laragon](https://laragon.org/download/) to install PHP and SQL.

2 . Download [Composer](https://getcomposer.org/download/)

3 . Download database management system [TablePlus](https://tableplus.com/download)

4 . Download [node.js](https://nodejs.org/en/download/package-manager) 

5 . clone the repo  
        

bash
git clone https://github.com/irabbi360/laravel-vue3-spa-starter.git


6. Create a local database 

7 . Follow Repo readme file instructions to run the Project. 

8 . Copy the project to a new directory without .git 

9 . Push the new project to the new reop


# Test Documentation 

## Introduction
This project involves testing and bug reporting for user authentication features, specifically the login and password reset functionality. The test cases check whether users can log in successfully and request a password reset link. Bugs found during testing are documented in detailed bug reports.

## Table of Contents
- [Installation](#installation)
- [Usage](#usage)
- [Test Cases](#test-cases)
- [Bug Reports](#bug-reports)
- [Troubleshooting](#troubleshooting)
- [Contributors](#contributors)
- [License](#license)

## Installation
1. **Clone the repository:**
   bash
   git clone https://github.com/your-repo/project-name.git
   

2. **Navigate to the project directory:**
   bash
   cd project-name
   

3. **Install required dependencies:**
   bash
   pip install -r requirements.txt
   

## Usage
To execute the test cases, perform the following steps:
1. Ensure the required environment (e.g., server, database) is running.
2. Run the provided test scripts or test cases using your preferred testing tool (e.g., Selenium, Postman).
3. Refer to the test cases and bug reports below for insights into each test and potential issues.

## Test Cases
The following table summarizes the test cases designed for user authentication features.

| Test ID | Title                                           | Prerequisite                                    | Objective                                           | Steps                                                   | Expected Result                                         | Actual Result                                           | Test Data                                          | Status |
|---------|-------------------------------------------------|------------------------------------------------|-----------------------------------------------------|----------------------------------------------------------|---------------------------------------------------------|---------------------------------------------------------|---------------------------------------------------|--------|
| 1       | Verify user can open login page successfully    | Valid URL                                       | Ensure the user can open the login page successfully | 1. Enter valid URL (http://127.0.0.1:8000/)<br>2. Click "Log In" button              | The login page opens successfully                       | The login page opens successfully                       | N/A                                               | Pass   |
| 2       | Verify user can login successfully              | 1. Valid URL<br>2. Valid Email<br>3. Valid Password | Ensure the user can log in with valid credentials    | 1. Enter valid URL<br>2. Enter valid email and password<br>3. Click "Log In" | User logs in successfully                               | Login failed                                           | Email: wagdy2085@gmail.com<br>Password: fdfdd      | Failed |
| 3       | Verify user can request password reset link     | 1. Valid URL<br>2. Valid Email<br>3. Valid Password | Ensure the user can request a password reset link    | 1. Enter valid URL<br>2. Click "Send Password Reset Link" | Password reset link sent successfully                   | Nothing happens after clicking "Send Password Reset Link" | Email: wagdy2085@gmail.com<br>Password: fdfdd      | Failed |

## Bug Reports
Below is a summary of bugs discovered during testing, along with details for reproducing and diagnosing them.

| Bug ID | Assigned By  | Description                                         | Steps                                                   | Expected Result                                         | Actual Result                                           | Severity  | Priority | Browser        | Environment               | OS          |
|--------|--------------|-----------------------------------------------------|----------------------------------------------------------|---------------------------------------------------------|---------------------------------------------------------|-----------|----------|----------------|---------------------------|-------------|
| 2      | Ahmed Wagdy  | "Log In" button does not work after entering credentials | 1. Enter valid URL<br>2. Enter valid email and password  | User logs in successfully                               | Login failed                                             | Critical  | High     | Google Chrome  | http://127.0.0.1:8000/    | Windows 10  |
| 3      | Ahmed Wagdy  | "Send Password Reset Link" button does not work      | 1. Enter valid URL<br>2. Click "Send Password Reset Link" | Password reset link sent successfully                   | Nothing happens after clicking "Send Password Reset Link" | Critical  | High     | Google Chrome  | http://127.0.0.1:8000/    | Windows 10  |

## Troubleshooting
- **Login issues**: If the login is unsuccessful, ensure that the provided credentials are correct and the server is running.
- **Password reset**: In case the password reset link isn't sent, check the email server configuration and review error logs.

## Contributors
- **Ahmed Wagdy**: Test case design, bug reporting, test execution.

## License
This project is licensed under the [MIT License](LICENSE).


### Instructions:
1. *Replace the placeholder repository link* in the Installation section with your actual repository URL.
2. *Customize the "Contributors" section* to reflect the team members involved.
3. *Save this file* as README.md in your project's root directory.

Let me know if you'd like to further tailor this file or add any other sections!