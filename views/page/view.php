<!-- Home Section -->

<section id="home" class="main-single-post parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Single Post</h1>
            </div>

        </div>
    </div>
</section>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
    <div class="container">
        <div class="row">
            <?php foreach ($data['post'] as $posts) :?>
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="blog-single-post-thumb">


                    <div class="blog-post-title">
                        <h2><?=$posts['title'] ?></a></h2>
                    </div>

                    <div class="blog-post-format">
                        <span><img src="images/author-image1.jpg" class="img-responsive img-circle"> <?=$posts['author'] ?></span>
                        <span><i class="fa fa-date"></i> <?=$posts['date'] ?></span>
                        <span><a href="#"><i class="fa fa-comment-o"></i> <?=Coments::countComents($posts['id'])?> Comments</a></span>
                    </div>

                    <div class="blog-post-des">

                        <p><?=$posts['content'] ?></p>

                        <div class="blog-post-image">
                            <img src="<?=$posts['path'] ?>" class="img-responsive" alt="Blog Image 3">
                        </div>
                    </div>

                    <div class="blog-author">
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="images/author-image1.jpg" class="img-circle img-responsive" alt="blog">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Jen Lopez ( Designer )</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="blog-comment">
                        <h3>Comments</h3>
                        <?php foreach ($data['coments'] as $coment) :?>
                            <?php if($coment) :?>
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="images/comment-image2.jpg" class="img-responsive img-circle" alt="Blog Image 22">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><?=$coment['name']?></h3>
                                <span><?= $coment['date']?> </span>
                                <p><?=$coment['message']?></p>
                            </div>
                        </div>
                                <?php else:?>
                                <div class="media">
                                    <div class="media-body">
                                        <p>Pusto</p>
                                    </div>
                                </div>
                        <?php endif;?>
                        <?php endforeach;?>
                    </div>


                    <div class="blog-comment-form">
                        <h3>Leave a Comment</h3>
                        <?php if(Session::hasMessage()): ?>
                            <h2 class="col-md-offset-4 "style="color: red; ">  <?php Session::getMessage();  ?> </h2>
                        <?php endif;?>
                        <form action="/page/view/<?= $data['post'][0]['id']?>" method="post">
                            <input type="hidden" name="id_post" value="<?= $data['post'][0]['id']?>">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" message="message" required="required"></textarea>
                            <div class="col-md-3 col-sm-4">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Post Your Comment">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</section>
