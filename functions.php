<?php
// Convert a name into a neat title-style format.
function formatName($name) {
    return ucwords(strtolower(trim($name)));
}

// Get the first letter of each part of a student's name.
function getInitials($name) {
    $parts = preg_split('/\s+/', trim($name));
    $initials = '';
    foreach ($parts as $part) {
        if ($part !== '') {
            $initials .= strtoupper(substr($part, 0, 1));
        }
    }
    return substr($initials, 0, 2);
}

// Find a student by their ID.
function findStudentById($students, $id) {
    foreach ($students as $student) {
        if ($student['id'] === $id) {
            return $student;
        }
    }
    return null;
}

// Filter student records using a search keyword.
function searchStudents($students, $keyword) {
    $keyword = strtolower(trim($keyword));
    if ($keyword === '') {
        return $students;
    }

    $matches = [];
    foreach ($students as $student) {
        $searchableText = strtolower(
            $student['name'] . ' ' .
            $student['id'] . ' ' .
            $student['course'] . ' ' .
            $student['year']
        );

        if (strpos($searchableText, $keyword) !== false) {
            $matches[] = $student;
        }
    }
    return $matches;
}
