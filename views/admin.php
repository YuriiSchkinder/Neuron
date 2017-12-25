<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="/">
    <title>Neuron HTML CSS Template</title>
    <script src="/js/admin.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400"  type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <h3 class="navbar-brand">Admin section</h3>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php if(Session::get('login')): ?>
                <li <?php if(App::getRouter()->getController()=='page') : ?> class='active' <?php endif;?>><a href="/admin">Posts</a></li>
                <li <?php if(App::getRouter()->getController()=='contact') : ?> class='active' <?php endif;?>><a href="/admin/contact">Contact</a></li>
                    <li  style="margin: 0 5px 0 50px;"><a class="dtn btn-warning" href='/'>Home Section</a></li>
                    <li ><a class="dtn btn-danger" href="/admin/user/logout">Logout</a></li>
                <?php else: ?>
                    <li  ><a class="dtn btn-warning" href='/'>Home Section</a></li>
                 <?php endif; ?>


            </ul>
        </div>

    </div>
</div>

<?= $data['content'] ?>

<!-- Footer Section -->



<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>