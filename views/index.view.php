<?php include('partials/header.php'); ?>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>    
    </ul>
    <h1>Submit your name</h1>
    <form action="/practitioner/names" method="POST">
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>    
    </form>
<?php include('partials/footer.php'); ?>