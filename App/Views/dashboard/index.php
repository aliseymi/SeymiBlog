<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

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
                        <h1 class="page-header">Welcome <?= $user->name ?></h1>
                    </div>
                </div>

                <!-- ... Your content goes here ... -->

            </div>
        </div>

    </div>

    <?= load_view('dashboard.includes.footer') ?>

</body>

</html>