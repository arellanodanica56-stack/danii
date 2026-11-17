<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$id = isset($_GET['id']) ? trim($_GET['id']) : '';
$student = findStudentById($students, $id);
$pageTitle = 'Student Profile';
include __DIR__ . '/includes/header.php';
?>
<?php if ($student): ?>
    <div class="back-line"><a class="text-link" href="students.php">← Back to directory</a></div>
    <section class="profile-card">
        <div class="profile-top">
            <span class="profile-avatar"><?= htmlspecialchars(getInitials($student['name'])) ?></span>
            <div>
                <p class="eyebrow">STUDENT PROFILE</p>
                <h1><?= htmlspecialchars(formatName($student['name'])) ?></h1>
                <p class="muted"><?= htmlspecialchars($student['id']) ?></p>
            </div>
        </div>
        <div class="profile-details">
            <div><span>Course</span><strong><?= htmlspecialchars($student['course']) ?></strong></div>
            <div><span>Year Level</span><strong><?= htmlspecialchars($student['year']) ?></strong></div>
            <div><span>Email Address</span><strong><?= htmlspecialchars($student['email']) ?></strong></div>
            <div><span>Contact Number</span><strong><?= htmlspecialchars($student['phone']) ?></strong></div>
            <div class="full-detail"><span>Address</span><strong><?= htmlspecialchars($student['address']) ?></strong></div>
        </div>
    </section>
<?php else: ?>
    <section class="panel empty-state">
        <div class="empty-icon">!</div>
        <h2>Student record not found</h2>
        <p>The student ID may be incorrect or the record does not exist.</p>
        <a class="button" href="students.php">Return to directory</a>
    </section>
<?php endif; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
