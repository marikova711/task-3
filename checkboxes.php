<?php
require_once "blocks/header.php";
?>
<h2 class="title">Checkboxes</h2>
<h3 class="task">Задание</h3>
<p class="task-text">Создать страницу на которой, есть чекбоксы, изначально не отмеченные. Сделайте так, чтобы только 3 чекбокса из них могли быть отмеченными. При попытке отметить 4-тый чекбокс ничего не должно происходить.</p>
<div class="checkbox-item">
    <input class="checkbox-input" type="checkbox" id="1" name="checkboxes">
    <label class="checkbox-label" for="1">Checkbox 1</label>
</div>
<div class="checkbox-item">
    <input class="checkbox-input" type="checkbox" id="2" name="checkboxes">
    <label class="checkbox-label" for="2">Checkbox 2</label>
</div>
<div class="checkbox-item">
    <input class="checkbox-input" type="checkbox" id="3" name="checkboxes">
    <label class="checkbox-label" for="3">Checkbox 3</label>
</div>
<div class="checkbox-item">
    <input class="checkbox-input" type="checkbox" id="4" name="checkboxes">
    <label class="checkbox-label" for="4">Checkbox 4</label>
</div>
<div class="checkbox-item">
    <input class="checkbox-input" type="checkbox" id="5" name="checkboxes">
    <label class="checkbox-label" for="5">Checkbox 5</label>
</div>
<script src="js/checkboxes.js"></script>
<?php
require_once "blocks/footer.php";
?>
