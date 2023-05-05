<?php
    require_once "blocks/header.php";
?>
    <h2 class="title">Inputs</h2>
    <h3 class="task">Задание</h3>
    <p class="task-text">Создать страницу, на которой сделать необходимо два поля ввода, в которые пользователь будет вводить ширину и высоту. Сделайте блок, который будет менять свои размеры на введённые.</p>
    <div class="inputs-block">
        <div class="inputs-item">
            <input type="number" class="input" id="input-width" min="0" max="1170">
            <label for="input-width" class="input-label">Введите ширину (макс. 1170):</label>
        </div>
        <div class="inputs-item">
            <input type="number" class="input" id="input-height" min="0" max="500">
            <label for="input-height" class="input-label">Введите высоту (макс. 500):</label>
        </div>
    </div>
    <div class="block"></div>
 <script src="js/inputs.js"></script>
<?php
    require_once "blocks/footer.php";
?>