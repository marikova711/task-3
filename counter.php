<?php
    require_once "blocks/header.php";
?>
<h2 class="title">Counter</h2>
<h3 class="task">Задание</h3>
<p class="task-text">Создать страницу, на которой дан инпут. В него разрешено вводить N символов. При введение текста справа появляется счетчик такого типа - "Осталось ввести 10 символов". После того, как предел достигнут - текст все равно разрешено вводить, только надпись будет "Лимит превышен на - (кол вол символов)".</p>
<p class="counter-text">Введите 20 символов:</p>
<div class="counter-block">
    <input class="input" type="text">
    <span></span>
</div>
<script src="js/counter.js"></script>
<?php
    require_once "blocks/footer.php";
?>
