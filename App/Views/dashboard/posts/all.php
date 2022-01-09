<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All Posts</title>

    <?= load_view('dashboard.includes.header') ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?= load_view('dashboard.includes.nav') ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All Post</h1>
                    </div>
                </div>

                <?php if (isset($errors)) : ?>
                    <?= load_view('dashboard.error', ['errors' => $errors]) ?>
                <?php endif; ?>

                <!-- ... Your content goes here ... -->

                <?php foreach ($posts as $post) : ?>

                    <h3><?= $post->title ?></h3>

                    <a href="<?= url('posts/edit/' . $post->id) ?>" class="btn btn-success">edit</a>

                    <form action="<?= url('posts/delete') ?>" method="POST" style="display: inline-block;">
                        <input type="hidden" name="post_id" value="<?= $post->id ?>">

                        <button type="submit" onclick="return confirm('you want to delete this post,are you sure?')" class="btn btn-danger">delete</button>
                    </form>

                <?php endforeach; ?>

            </div>
        </div>

    </div>

    <?= load_view('dashboard.includes.footer') ?>

</body>

</html>