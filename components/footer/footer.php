<?php
/** @var  $ml */
?>
<footer class="bg-body-tertiary text-center text-lg-start">
    <div class="container-fluid p-4">
        <div class="row">
            <!-- Map Section -->
            <div class="col-lg-8 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"><?= $ml->tr('our_location') ?></h5>
                <div class="position-relative" style="overflow:hidden; max-width:100%; border-radius: 10px;">
                    <a href="https://yandex.com/maps/10262/yerevan/?utm_medium=mapframe&utm_source=maps"
                       style="color:#eee; font-size:12px; position:absolute; top:0px; left:0px;">
                        Ереван
                    </a>
                    <a href="https://yandex.com/maps/10262/yerevan/house/YE0Ycg5lSE0FQFpqfX12dXhhYA==/?ll=44.495053%2C40.175058&utm_medium=mapframe&utm_source=maps&z=16"
                       style="color:#eee; font-size:12px; position:absolute; top:14px; left:0px;">
                        Улица Бардзраберд, 27/1 — Яндекс Карты
                    </a>
                    <div class="mt-4">
                        <iframe src="https://yandex.com/map-widget/v1/?ll=44.495053%2C40.175058&mode=whatshere&whatshere%5Bpoint%5D=44.495182%2C40.174424&whatshere%5Bzoom%5D=17&z=16"
                                width="100%" height="300" frameborder="1" allowfullscreen="true"
                                style="position:relative; border:0; border-radius: 10px;">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase"><?= $ml->tr('contact_us') ?></h5>
                <form class="d-flex flex-column gap-2"  method="POST" action="/mailer.php">
                    <div class="form-group">
                        <label for="fullName"><?= $ml->tr('name') ?></label>
                        <input type="text" name="name" class="form-control" id="fullName" placeholder="<?= $ml->tr('name_placeholder') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?= $ml->tr('email') ?></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="<?= $ml->tr('email_placeholder') ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message"><?= $ml->tr('message')?> </label>
                        <textarea class="form-control" name="message" id="message" rows="4" placeholder="<?= $ml->tr('message_placeholder') ?>" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><?= $ml->tr('submit') ?></button>
                </form>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        &copy; <span id="current-year"></span> Copyright
    </div>
</footer>
