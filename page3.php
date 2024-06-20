<?php
    $page2_right_answers = [
        ['1', '2', '3'],
        ['1', '2']
    ];

    $user_answers = $_POST['a'] ?? [];
    $scores = $_POST['scores'] ?? 0;
    var_dump($user_answers);
    foreach($page2_right_answers as $key => $right_answers) {
        var_dump($right_answers);
        if ($right_answers == $user_answers[$key]) {
            $scores += 3;
        } 
    }
    var_dump($scores);

    $questions = [
        "Напишите имя первого императора Российской империи.",
    ];

?>

<form action="/" method="post" class="row mt-3 border rounded p-3">
    <?php
    foreach($questions as $q_key => $question):
        ?>
        <div class="col-6 offset-3 border rounded p-3 mt-3">
            <p><?= $question ?></p>
            <div class="row">
                <div class="col">
                    <input type="text" name="a[]" class="form-control">
                </div>
            </div>
        </div>
        <?php
    endforeach;
    ?>
    <div class="d-grid mt-3">
        <input type="hidden" name="page" value="4">
        <input type="hidden" name="scores" value="<?= $scores ?>">
        <button class="btn btn-success">Send</button>
    </div>
</form>