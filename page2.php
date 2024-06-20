<?php
    $page1_right_answers = [
        '1','4'
    ];
    $user_answers = $_POST['a'] ?? [];
    $scores = 0;
    foreach ($page1_right_answers as $key => $right_answer) {
        if ($right_answer == $user_answers[$key]){
            $scores++;
        }
    }
    var_dump($scores);

    $questions = [
        'Выберите цвета флага Германии',
        'Выберите президентов России',
    ];

    $answers = [
        ["Черный", "Красный", "Желтый", "Зелёный"],
        ["Путин В.В", "Ельцин Б.Н.", "Ленин В.И.", "Сталин И.В."]
    ];
?>

<form action="/" method="post" class="row mt-3 border rounded p-3">
    <?php
    foreach($questions as $q_key => $question):
        $answer_name = 'a[' . $q_key . '][]';
        ?>
        <div class="col-6 offset-3 border rounded p-3 mt-3">
            <p><?= $question ?></p>
            <div class="row">
                <?php
                foreach($answers[$q_key] as $a_key => $answer) {
                    $answer_id = 'a' . $q_key * 4 + $a_key;
                    $answer_value = $a_key + 1;
                    ?>
                    <div class="col-3">
                        <input type="checkbox" name="<?= $answer_name ?>" value="<?= $answer_value ?>" id="<?= $answer_id ?>" class="form-check-input">
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
        <input type="hidden" name="page" value="3">
        <input type="hidden" name="scores" value="<?= $scores ?>">
        <button class="btn btn-success">Send</button>
    </div>
</form>