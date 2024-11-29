<?php
/** @var  $selected */
/** @var  $remainLang */
/** @var  $ml */
?>
<div class="container-fluid">
    <header class="bg-light py-4">
        <div class="container-custom">
            <div class="row align-items-center">
                <div class="col-12 col-sm-auto d-flex justify-content-center justify-content-sm-start mb-3 mb-sm-0">
                    <a href="/" class="navbar-brand nav-img m-2">
                        <img src="./images/logo/custom-x.svg" alt="Logo" class="img-fluid img-logo">
                    </a>
                </div>
                <div class="col d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-end">
                    <h4 class="nav_text text-align-center"><?= $ml->tr('text_nav')?></h4>
                    <div class="d-flex align-items-center justify-content-center me-3 gap-3 phoneItem">
                        <div class="d-flex align-items-center">
                            <img src="./images/icons/phone.svg" alt="" class="phone-icon">
                            <a href="tel:+37494844452" class="text-decoration-none text-dark ms-2">+374 99 656 780</a>
                        </div>
                        <div class="dropdown mt-3 mt-sm-0">
                            <button class="btn btn-light dropdown-toggle" type="button" id="languageDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./images/flags/<?= array_values($selected)[0]['flag'] ?>"
                                     alt="<?= array_keys($selected)[0] ?>"
                                     style="height: 20px;">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <?php foreach ($remainLang as $key => $value): ?>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="?lang=<?= $key ?>">
                                            <img src="./images/flags/<?= $value['flag'] ?>"
                                                 alt="<?= $key ?>"
                                                 style="height: 20px;"
                                                 class="me-2">
                                            <?= $value['name'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Navbar -->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid justify-content-end me-2">
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" aria-labelledby="navbarNavAltMarkup" id="navbarNavAltMarkup">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link mb-3 active" href="#Որոշումներ"><?= $ml->tr('administrative') ?></a>
                        <a class="nav-link mb-3 active" href="#ԱՏԳ_ԱԱ"><?= $ml->tr('atg') ?></a>
                        <a class="nav-link mb-3 active" href="#Կարգավորում"><?= $ml->tr('regulatory') ?></a>
                        <a class="nav-link mb-3 active" href="#Կիրառում"><?= $ml->tr('apply') ?></a>
                        <a class="nav-link mb-3 active" href="#Ակտեր"><?= $ml->tr('addition') ?></a>
                        <a class="nav-link mb-3 active" href="#Ընթացիկ_ձևակերպումներ"><?= $ml->tr('current') ?></a>
                        <a class="nav-link mb-3 active" href="#Մաքսային_խորհրդատվություն"><?= $ml->tr('customs_consulting') ?></a>
                        <a class="nav-link mb-3 active" href="#Այլ_հարցեր"><?= $ml->tr('other_questions_nav') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>





<div class="container-fluid p-0 header">
    <div class="row justify-content-center header_images"></div>
</div>