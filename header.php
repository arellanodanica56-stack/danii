<?php
if (!isset($pageTitle)) {
    $pageTitle = 'StudentHub';
}
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | StudentHub</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar">
        <a class="brand" href="index.php">
            <span class="brand-mark">S</span>
            <span>Student<span class="brand-light">Hub</span></span>
        </a>
        <p class="nav-label">MENU</p>
        <nav>
            <a class="nav-link <?= $currentPage === 'index.php' ? 'active' : '' ?>" href="index.php"><span>▦</span> Dashboard</a>
            <a class="nav-link <?= in_array($currentPage, ['students.php', 'view_student.php']) ? 'active' : '' ?>" href="students.php"><span>♧</span> Student Directory</a>
        </nav>
        <div class="sidebar-bottom">
            <div class="help-card">
                <span class="help-icon">i</span>
                <strong>StudentHub</strong>
                <small>Mini Information Management System</small>
            </div>
            <small class="copyright">PHP Activity Project · 2026</small>
        </div>
    </aside>
    <main class="main-content">
        <header class="topbar">
            <div class="mobile-brand">StudentHub</div>
            <span class="topbar-label">Student Information Management</span>
            <span class="admin-chip"><span class="online-dot"></span> Admin View</span>
        </header>
        <div class="content-area">
