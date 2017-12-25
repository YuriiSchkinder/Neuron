<!-- Home Section -->

<section id="home" class="main-gallery parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Image Gallery</h1>
            </div>

        </div>
    </div>
</section>

<!-- Gallery Section -->

<section id="gallery">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <h2>Beautiful Images with Magnific Popup..</h2>
                <p>Aliquam blandit velit nisi, sed fringilla felis lacinia sed. Integer vitae porta felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non tristique lacus. Suspendisse ut tortor vitae risus lacinia tristique. Aliquam sed consectetur libero.</p>
                <p>Morbi tellus dolor, porta dignissim enim sit amet, dapibus sagittis erat. In blandit elit sit amet dui aliquet congue nec vel quam. Integer id tristique libero.</p>
                <span></span>
                <?php foreach ($data as $path): ?>
                <div class="col-md-6 col-sm-6">
                    <div class="gallery-thumb">

                            <img src="<?=$path?>" class="img-responsive" alt="Gallery Image">
                        </a>
                    </div>
                </div>
                <?php endforeach;?>


                <div class="col-md-12 col-sm-12">
                    <p>Aliquam blandit velit nisi, sed fringilla felis lacinia sed. Integer vitae porta felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non tristique lacus.</p>
                </div>
            </div>

        </div>
    </div>
</section>
