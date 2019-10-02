<?php include('partials/header.php'); ?>
    <h1>Todos</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description ?></strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php include('partials/footer.php'); ?>