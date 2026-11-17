# StudentHub - PHP Mini Information Management System

StudentHub is a beginner-friendly PHP project that displays and organizes sample student records. It was created for Activity 9.

## Features
- Dashboard with total student, course, and year-level counts
- Student directory displayed in a table
- Search by student name, ID, course, or year level
- Individual student profile page
- Responsive HTML and CSS layout

## PHP concepts used
- **Arrays:** `data.php` stores student records in an array of associative arrays.
- **Functions:** `functions.php` contains functions for formatting names, generating initials, finding a student, and searching records.
- **Loops:** `foreach` displays student records.
- **String functions:** `strtolower()`, `ucwords()`, `trim()`, `substr()`, and `strpos()` process text.
- **Conditional statements:** `if` checks search results and whether a student profile exists.
- **Count functions:** `count()` counts records and unique values.

## Requirements
- XAMPP (Apache)
- A web browser
- A code editor such as Visual Studio Code

## How to run
1. Extract the `studenthub` folder.
2. Copy it into your XAMPP `htdocs` folder.
3. Open XAMPP Control Panel and start **Apache**.
4. Open your browser and visit: `http://localhost/studenthub/`

No database is required. The sample records are stored in a PHP array.

## GitHub upload
1. Create a new repository on GitHub named `studenthub`.
2. Upload the contents of this project folder.
3. Copy your repository URL for submission.

## Important note
The names and contact details are fictional sample data. Replace them with your own sample records if needed.
