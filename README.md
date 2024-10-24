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


6 . Create a local database 

7 . Follow Repo readme file instructions to run the Project. 

8 . Copy the project to a new directory without .git 

9 . Push the new project to the new reop


# Test Documentation 

## Introduction
This document contains the test cases and bug reports related to the login functionality of a web application. The test cases validate the login and password reset functionality, while the bug reports highlight issues identified during testing.

## Table of Contents
- [Test Cases](#test-cases)
- [Bug Reports](#bug-reports)

---

## Test Cases

| *test id* | *title*                                         | *prerequisite*                                        | *objective*                                                              | *steps*                                                                                                            | *expected result*                                                                | *actual result*                                                                 | *test data*                                | *status* |
|-------------|---------------------------------------------------|--------------------------------------------------------|----------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------|-----------------------------------------------------------------------------------|---------------------------------------------|------------|
| 1           | verify user can open login page successfully      | valid url\n                                             | to ensure that the user can open login page successfully                   | 1-enter valid url (http://127.0.0.1:8000/)\n2-check if page opens successfully                                       | 1- the login page is opened successfully                                          | 1- the login page is opened successfully                                          | N/A                                         | Passed     |
| 2           | verify user can  login  successfully              | 1-valid url\n2-valid Email\n3-valid password            | to ensure that the user can  login with valid credentials                  | 1-enter valid url (http://127.0.0.1:8000/)\n2-enter valid email and password\n3-click on login button                | 1-The user enters a valid Email and password.\n2-The user is logged in successfully | 1-The user enters a valid Email and password.\n2-The log in button does not work   | Email: wagdy2085@gmail.com\nPassword: fdfdd  | Failed     |
| 3           | Verify user can request a password reset link     | 1-valid url\n2-valid Email\n3-valid password            | to ensure that the user can  request a password reset link                 | 1-enter valid url (http://127.0.0.1:8000/)\n2-click on forgot password link\n3-enter valid email\n4-click reset link | 1- message confirms that the password reset link is sent                          | 1-Nothing happens after clicking "Send Password Reset Link"                       | Email: wagdy2085@gmail.com                  | Failed     |
| 4           | verify error message for invalid Email.           | 1-valid url\n2-invalid Email\n3-valid password          | to ensure  that the system displays an error message for invalid Email     | 1-enter valid url (http://127.0.0.1:8000/)\n2-enter invalid email and password\n3-click on login button              | 1- the system shows an "Invalid email" error.                                     | 1-The system did not display any error message                                    | Email: wagdy20858gmail.com                  | Blocked     |
| 5           | verify error message for invalid password.        | 1-valid url\n2-valid Email\n3-invalid password          | to ensure  that the system displays an error message for invalid password  | 1-enter valid url (http://127.0.0.1:8000/)\n2-enter valid email and invalid password\n3-click on login button        | 1- the system shows an "Invalid password" error.                                  | 1-The system did not display any error message                                    | Email: wagdy2085@gmail.com\nPassword: fdfdd  | Blocked     |

---

## Bug Reports

| *id* | *title*                                         | *decription*                                                                                            | *steps*                                                                                                            | *Expected result*                                                                | *Actual result*                                                                 | *Test data*                               | *Severity* | *piriorty* | *browser*     | *Environment*                     | *os*        | *screenshot* |
|--------|---------------------------------------------------|-----------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------|-----------------------------------------------------------------------------------|---------------------------------------------|-------------|--------------|----------------|--------------------------------------|--------------|----------------|
| 2      | Log In Button Not Working                         | 1-The "Log In" button does not work after\n entering valid credentials.                                    | 1-enter valid url (http://127.0.0.1:8000/)\n2-enter valid email and password\n3-click on login button                | 1-The user enters a valid Email and password.\n2-The user is logged in successfully | 1-The user enters a valid Email and password.\n2-The log in button does not work   | Email: wagdy2085@gmail.com\nPassword: fdfdd | critical    | high         | google chrome  | http://127.0.0.1:8000/login         | windows 10   | N/A            |
| 3      | Password Reset Button Not Working                 | The "Send Password Reset Link" button does not\n respond when clicked.                                      | 1-enter valid url (http://127.0.0.1:8000/)\n2-click on forgot password link\n3-enter valid email\n4-click reset link | 1- message confirms that the password reset link is sent                          | 1-Nothing happens after clicking "Send Password Reset Link"                       | Email: wagdy2085@gmail.com                 | critical    | high         | google chrome  | http://127.0.0.1:8000/forgot-password | windows 10   | N/A            |
| 4      | No Error Message for Invalid Email                | No error message is displayed when an invalid\n email is entered during login.                             | 1-enter valid url (http://127.0.0.1:8000/)\n2-enter invalid email and password\n3-click on login button              | 1- the system shows an "Invalid email" error.                                     | 1-The system did not display any error message                                    | Email: wagdy20858gmail.com                 | critical    | high         | google chrome  | http://127.0.0.1:8000/login         | windows 10   | N/A            |
| 5      | No Error Message for Invalid Password             | No error message is displayed when an invalid\n password is entered during login.                          | 1-enter valid url (http://127.0.0.1:8000/)\n2-enter valid email and invalid password\n3-click on login button        | 1- the system shows an "Invalid password" error.                                  | 1-The system did not display any error message                                    | Email: wagdy2085@gmail.com\nPassword: fdfdd | critical    | high         | google chrome  | http://127.0.0.1:8000/login         | windows 10   | N/A            |

---

## Environment Details
- *Browser*: Google Chrome
- *URL*: 
  - [Login Page](http://127.0.0.1:8000/login)
  - [Password Reset Page](http://127.0.0.1:8000/forgot-password)
- *Operating System*: Windows 10
- *Test Data*:
  - *Email*: wagdy2085@gmail.com
  - *Password*: fdfdd