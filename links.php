<?php
require_once "blocks/header.php";
?>
<h2 class="title">Links</h2>
<h3 class="task">Задание</h3>
<p class="task-text">Создать странницу с набором ссылок двух типов 1 тип ссылки на ресурсы текущего сайта и 2 тип ссылки ведущие на сторонний сайт. Найдите все ссылки, ведущие на другой сайт и добавьте им атрибут "target"="_blank".</p>
<div class="lists">
    <div class="list-block">
        <h4 class="list-title">Внешние ссылки</h4>
        <ul class="list">
            <li class="list-item">
                <a class="list-link" href="https://github.com/">Github</a>
            </li>
            <li class="list-item">
                <a class="list-link" href="https://www.youtube.com/">YouTube</a>
            </li>
            <li class="list-item">
                <a class="list-link" href="https://ru.pinterest.com/">Pinterest</a>
            </li>
            <li class="list-item">
                <a class="list-link" href="https://www.kinopoisk.ru/">Кинопоиск</a>
            </li>
        </ul>
    </div>
    <div class="list-block">
        <h4 class="list-title">Внутренние ссылки</h4>
        <ul class="list">
            <li class="list-item">
                <a class="list-link" href="checkboxes.php">Checkboxes</a>
            </li>
            <li class="list-item">
                <a class="list-link" href="inputs.php">Inputs</a>
            </li>
            <li class="list-item">
                <a class="list-link" href="counter.php">Counter</a>
            </li>
            <li class="list-item">
                <a class="list-link" href="colors.php">Colors</a>
            </li>
        </ul>
    </div>
</div>
<script src="js/links.js"></script>
<?php
require_once "blocks/footer.php";
?>