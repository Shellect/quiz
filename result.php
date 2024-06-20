<?php
    $page3_right_answers = [
        'Петр 1',
    ];
    $user_answers = $_POST['a'] ?? [];
    $scores = $_POST['scores'] ?? 0;
    foreach($page3_right_answers as $key => $right_answer) {
        if ($right_answer == trim($user_answers[$key])) {
            $scores += 5;
        }
    }
?>

<div class="row">
    <div class="col">
        <p>Congrataulations! You have scored <?= $scores ?> !</p>
        <a href="/">Назад</a>
    </div>
</div>