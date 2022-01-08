<div style="width: 600px; margin: 172px auto; background-color: #f8d7da; color: #721c24; padding: 10px 20px; border-radius: 5px; border: 1px solid #f5c6cb;">
    <ul>
        <?php if (is_array($errors)) : ?>

            <?php foreach ($errors as $error) : ?>
                <li><?= '* ' . $error ?></li>
            <?php endforeach; ?>

        <?php else : ?>

            <li><?= '* ' . $errors ?></li>

        <?php endif; ?>

    </ul>
</div>