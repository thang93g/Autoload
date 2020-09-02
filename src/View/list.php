<a href="index.php?page=add-student">Add Student</a>
<table>
    <tr>
        <th>Stt</th>
        <th>Name</th>
        <th>Age</th>
        <th>Image</th>
    </tr>
    <?php if (empty($students)): ?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else: ?>
    <?php foreach ($students as $key => $student): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $student->getName() ?></td>
        <td><?php echo $student->getAge() ?></td>
        <td><img src="<?php echo $student->getImage() ?>"></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>