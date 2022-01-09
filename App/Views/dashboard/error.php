<div class="alert alert-danger">
    <ul>
        <?php if (is_array($errors)) : ?>

            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>

        <?php else : ?>

            <li><?= $errors ?></li>

        <?php endif; ?>

    </ul>
</div>