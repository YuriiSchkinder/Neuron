<!-- Home Section -->

<section id="home" class="main-contact parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Contact Us</h1>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <?php if(Session::hasMessage()): ?>
                    <h2 class="col-md-offset-4 "style="color: red; ">  <?php Session::getMessage();  ?> </h2>
                <?php endif;?>

                <h2>Say hello..</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>


                <form action="/contact" method="post">
                    <div class="col-md-4 col-sm-4">
                        <input name="name" type="text" class="form-control" id="name" value="<?= Session::valuesForm($data,isset($_POST['name'])?$_POST['name']:'')?>" placeholder="Name">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input name="email" type="email" class="form-control" id="email" value="<?= Session::valuesForm($data,isset($_POST['email'])?$_POST['email']:'')?>"  placeholder="Email">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <input name="subject" type="text" class="form-control" id="subject" value="<?= Session::valuesForm($data,isset($_POST['subject'])?$_POST['subject']:'')?>"  placeholder="Subject">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea name="message" rows="5" class="form-control" id="message"   placeholder="Message"><?= Session::valuesForm($data,isset($_POST['message'])?$_POST['message']:'')?></textarea>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>