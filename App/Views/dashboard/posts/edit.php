<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Post</title>

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
                        <h1 class="page-header">Edit Post</h1>
                    </div>
                </div>

                <?php if (isset($errors)) : ?>
                    <?= load_view('dashboard.error', ['errors' => $errors]) ?>
                <?php endif; ?>

                <?php if (isset($message)) : ?>
                    <?= load_view('dashboard.success', ['message' => $message]) ?>
                <?php endif; ?>

                <form action="<?= url('posts/update/' . $post->id) ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $post->title ?>">
                    </div>

                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <img src="<?= url($post->image) ?>" style="margin-top: 10px;" alt="post_image" width="200" height="auto">
                    </div>

                    <div class="form-group">
                        <label for="body">body</label>
                        <textarea name="body" id="body" class="form-control"><?= $post->body ?></textarea>
                    </div>

                    <input type="submit" value="update" class="btn btn-info">
                </form>

                <!-- ... Your content goes here ... -->

            </div>
        </div>

    </div>

    <?= load_view('dashboard.includes.footer') ?>

</body>

</html>