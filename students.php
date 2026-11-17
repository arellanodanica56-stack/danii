<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$keyword = isset($_GET['q']) ? trim($_GET['q']) : '';
$filteredStudents = searchStudents($students, $keyword);
$pageTitle = 'Student Directory';
include __DIR__ . '/includes/header.php';
?>
<section class="page-heading">
    <div>
        <p class="eyebrow">RECORD MANAGEMENT</p>
        <h1>Student Directory</h1>
        <p class="muted">Browse and search the student records.</p>
    </div>
    <span class="count-pill"><?= count($filteredStudents) ?> students found</span>
</section>

<section class="panel">
    <form class="search-form" method="GET" action="students.php">
        <label class="search-box">
            <span>⌕</span>
            <input type="search" name="q" value="<?= htmlspecialchars($keyword) ?>" placeholder="Search by name, student ID, course, or year...">
        </label>
        <button class="button" type="submit">Search</button>
        <?php if ($keyword !== ''): ?>
            <a class="clear-link" href="students.php">Clear</a>
        <?php endif; ?>
    </form>

    <?php if (count($filteredStudents) > 0): ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>STUDENT</th>
                        <th>STUDENT ID</th>
                        <th>COURSE</th>
                        <th>YEAR LEVEL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($filteredStudents as $student): ?>
                        <tr>
                            <td>
                                <div class="table-student">
                                    <span class="avatar"><?= htmlspecialchars(getInitials($student['name'])) ?></span>
                                    <strong><?= htmlspecialchars(formatName($student['name'])) ?></strong>
                                </div>
                            </td>
                            <td class="muted"><?= htmlspecialchars($student['id']) ?></td>
                            <td><?= htmlspecialchars($student['course']) ?></td>
                            <td><span class="year-pill"><?= htmlspecialchars($student['year']) ?></span></td>
                            <td><a class="view-link" href="view_student.php?id=<?= urlencode($student['id']) ?>">View profile →</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="empty-state">
            <div class="empty-icon">⌕</div>
            <h3>No students found</h3>
            <p>Try another name, ID, course, or year level.</p>
            <a class="text-link" href="students.php">Show all students</a>
        </div>
    <?php endif; ?>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
