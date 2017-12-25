<!-- Home Section -->

<section id="home" class="main-home parallax-section">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Hello! This is Neuron.</h1>
                <h4>Responsive Blog HTML CSS Website Template</h4>

            </div>

        </div>
    </div>
</section>

<!-- Blog Section -->

<section id="blog">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $posts) :?>

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="blog-post-thumb" >
                    <div class="blog-post-image">
                        <a href="/page/view/<?=$posts['id'] ?>">
                            <img src="<?=$posts['path'] ?>" class="img-responsive" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3><?=$posts['title'] ?></h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="/page/view/<?=$posts['id'] ?>"><img src="images/author-image1.jpg" class="img-responsive img-circle"> <?=$posts['author'] ?></a></span>
                        <span><i class="fa fa-date"></i> <?=$posts['date'] ?></span>
                        <span><a href="/page/view/<?=$posts['id'] ?>"><i class="fa fa-comment-o"></i> <?=!is_null(Coments::countComents($posts['id']))?Coments::countComents($posts['id']):''?> Comments</a></span>
                    </div>
                    <div class="blog-post-des">
                        <p><?=$posts['desctiption'] ?></p>
                        <a href="/page/view/<?=$posts['id'] ?>" class="btn btn-default">Continue Reading</a>
                    </div>
                </div>


            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
