<?php
$questions = [
    "В каком году отменили крепостное право?",
    "Выберите годы правления Ивана Грозного:"
];

$answers = [
    [
        "1861",
        "1681",
        "1900",
        "2024"
    ],
    [
        '1430-1480',
        '1428-1479',
        '1633-1684',
        '1533-1584'
    ]
];
?>

<form action="/" method="post" class="row mt-3 border rounded p-3">
    <?php
    foreach ($questions as $q_key => $question):
        $answer_name = 'a[' . $q_key . ']';
        ?>
        <div class="col-6 offset-3 border rounded p-3 mt-3">
            <p><?= $question ?></p>
            <div class="row">
                <?php
                foreach ($answers[$q_key] as $a_key => $answer) {
                    $answer_id = 'a' . $q_key * 4 + $a_key;
                    $answer_value = $a_key + 1;
                    ?>
                    <div class="col-3">
                        <input type="radio" name="<?= $answer_name ?>" value="<?= $answer_value ?>" id="<?= $answer_id ?>"
                            class="form-check-input">
                        <label for="<?= $answer_id ?>" class="form-check-label"><?= $answer ?></label>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    endforeach;
    ?>
    <div class="d-grid mt-3">
        <input type="hidden" name="page" value="2">
        <button class="btn btn-success">Send</button>
    </div>
</form>