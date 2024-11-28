<?php
/** @var  $ml */

$sectorArr = [
    'Որոշումներ' => [
        'text' => $ml->tr('release_control_department')
    ],
    'ԱՏԳ_ԱԱ' => [
        'text' => $ml->tr('decisions_codes')
    ],
    'Կարգավորում' => [
        'text' => $ml->tr('decisions_not_tariff')
    ],
    'Կիրառում' => [
        'text' => $ml->tr('decisions_application_non_application_privileges')
    ],
    'Ակտեր' => [
        'text' => $ml->tr('decisions_related_customs_value_addition')
    ],
    'Ընթացիկ_ձևակերպումներ' => [
        'text' => $ml->tr('decisions_related_current_formulations')
    ],
    'Մաքսային_խորհրդատվություն' => [
        'text' => $ml->tr('decisions_consulting')
    ],
    'Այլ_հարցեր' => [
        'text' => $ml->tr('other_questions')
    ],
]

?>

<div class="aos-all">
    <section class="page py-1">
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center text-center section-text p-5">
                <h2 class="text-center"><?= $ml->tr('about') ?></h2>
            </div>
            <?php $index = 0; ?>
            <?php foreach ($sectorArr as $key => $sector): ?>
                <div class="row d-flex flex-column align-items-center justify-content-center" id="<?= $key ?>" data-aos="fadeInUp">
                    <div class="col-12 col-md-6 col-lg-4 mx-auto m-4 w-100 item1">
                        <div class="card <?= $index % 2 === 0 ? 'card-blue' : 'card-dark' ?>">
                            <div class="card-body">
                                <?= $sector['text'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>
    </section>
</div>
