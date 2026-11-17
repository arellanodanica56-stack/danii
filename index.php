<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$totalStudents = count($students);
$totalCourses = count(array_unique(array_column($students, 'course')));
$yearLevels = count(array_unique(array_column($students, 'year')));

$pageTitle = 'Dashboard';
include __DIR__ . '/includes/header.php';
?>
<section class="welcome">
    <div>
        <p class="eyebrow">STUDENT INFORMATION SYSTEM</p>
        <h1>Welcome to StudentHub</h1>
        <p class="muted">A simple place to organize and view student records.</p>
    </div>
    <a class="button" href="students.php">View students <span>→</span></a>
</section>

<section class="stats-grid">
    <article class="stat-card">
        <div class="stat-icon purple">♧</div>
        <p class="stat-label">Total Students</p>
        <h2><?= $totalStudents ?></h2>
        <span class="stat-note">Records in the directory</span>
    </article>
    <article class="stat-card">
        <div class="stat-icon pink">▤</div>
        <p class="stat-label">Courses</p>
        <h2><?= $totalCourses ?></h2>
        <span class="stat-note">Different programs</span>
    </article>
    <article class="stat-card">
        <div class="stat-icon blue">☆</div>
        <p class="stat-label">Year Levels</p>
        <h2><?= $yearLevels ?></h2>
        <span class="stat-note">Across the student list</span>
    </article>
</section>

<section class="panel">
    <div class="panel-heading">
        <div>
            <p class="eyebrow">QUICK OVERVIEW</p>
            <h2>Recently added students</h2>
        </div>
        <a class="text-link" href="students.php">See all students →</a>
    </div>
    <?php $recentStudents = array_slice($students, 0, 4); ?>
    <div class="student-list">
        <?php foreach ($recentStudents as $student): ?>
            <a class="student-row" href="view_student.php?id=<?= urlencode($student['id']) ?>">
                <span class="avatar"><?= htmlspecialchars(getInitials($student['name'])) ?></span>
                <span class="student-main">
                    <strong><?= htmlspecialchars(formatName($student['name'])) ?></strong>
                    <small><?= htmlspecialchars($student['id']) ?> · <?= htmlspecialchars($student['course']) ?></small>
                </span>
                <span class="year-pill"><?= htmlspecialchars($student['year']) ?></span>
                <span class="row-arrow">→</span>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
