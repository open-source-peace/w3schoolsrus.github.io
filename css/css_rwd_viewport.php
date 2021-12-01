<?php include '../include/head.php'; ?>

<title>CSS Окно просмотра - Viewport. <?php include '../include/title.php'; ?></title>
<meta name='description' content='CSS Окно просмотра. Метатег viewport. Как сделать веб-страницу адаптивной? Стилизация веб-страниц. Современный учебник по CSS3. <?php include '../include/description.php'; ?>'>
    <style>
        img.viewport {
            border:10px solid #f1f1f1;
            border-radius:3px;
        }
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_css.php'; ?>
<?php include '../include/before_content_css.php'; ?>

<article>
    <h1>Адаптивный веб-дизайн. <span class="color_h1">Окно просмотра - Viewport</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_grid.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Что такое окно просмотра (viewport)?</h2>
    <p><strong>Окно просмотра (viewport)</strong> - это видимая область пользователя веб-страницы.</p>
    <p>Окно просмотра зависит от устройства и на мобильном телефоне будет меньше, чем на экране компьютера.</p>
    <p>До планшетов и мобильных телефонов веб-страницы предназначались только для экранов компьютеров, и веб-страницы обычно имели статичный дизайн и фиксированный размер.</p>
    <p>Затем, когда многие пользователи начали сёрфить в Интернете с помощью планшетов и мобильных телефонов, веб-страницы фиксированного размера оказались слишком большими, чтобы соответствовать области просмотра. Чтобы это исправить, браузеры на этих устройствах уменьшали всю веб-страницу до размеров экрана.</p>
    <p>Это было не самое лучшее отображение веб-страниц!! Но это самое быстрое решение.</p>
    <hr>

    <h2>Настройка области просмотра</h2>
    <p>В HTML5 появился метод, позволяющий веб-дизайнерам контролировать область просмотра с помощью тега <code class="w3-codespan">&lt;meta&gt;</code>.</p>
    <p>Необходимо включить следующий <code class="w3-codespan">&lt;meta&gt;</code> элемент viewport во все веб-страницы:</p>
    <div class="w3-code w3-border notranslate htmlHigh">
        <div>
            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
        </div>
    </div>
    <p><code class="w3-codespan">&lt;meta&gt;</code> элемент viewport дает браузеру инструкции о том, как управлять размерами и масштабированием страницы.</p>
    <p>Часть <code class="w3-codespan">width=device-width</code> устанавливает ширину страницы в соответствии с шириной экрана устройства (которая зависит от устройства).</p>
    <p>Часть <code class="w3-codespan">initial-scale=1.0</code> устанавливает начальный уровень масштабирования при первой загрузке страницы браузером.</p>
    <p>Ниже приведен пример веб-страницы <em>без</em> метатега viewport, и веб-страница <em>из</em> метатегом viewport:</p>
    <div class="w3-note w3-panel">
        <p><strong>Совет:</strong> Если вы просматриваете эту страницу с помощью телефона или планшета, вы можете нажать на две ссылки ниже, чтобы увидеть разницу.</p>
    </div>
    <br>
    <div class="w3-row" style="text-align:center;">
        <div class="w3-half">
            <a target="_blank" href="example_withoutviewport.html"><img src="../images/img_viewport1.png" alt="Веб-страница без метатега viewport" class="w3-hover-shadow viewport"><br><br><b>Без метатега viewport</b></a>
            <br>
            <br>
        </div>
        <div class="w3-half">
            <a target="_blank" href="example_withviewport.html"><img src="../images/img_viewport2.png" alt="Веб-страница из метатегом viewport" class="w3-hover-shadow viewport"><br><br><b>Из метатегом viewport</b></a>
            <br>
            <br>
        </div>
    </div>
    <hr>
    <h2>Размер содержимого в окне просмотра</h2>
    <p>Пользователи при просмотре веб-страниц используют скроллинг (прокрутку) по вертикали и на десктопах, и на мобильных устройствах, но не по горизонтали!</p>
    <p>Таким образом, если пользователь вынужден прокручивать по горизонтали или уменьшать масштаб, чтобы увидеть всю веб-страницу, это вызывает неудобства для работы пользователя.</p>
    <p>Некоторые дополнительные правила, которым нужно следовать:</p>
    <p><strong>1. НЕ используйте большие элементы фиксированной ширины.</strong> Например, если изображение отображается с шириной, превышающей область просмотра, это может привести к появлению горизонтальной прокрутки области просмотра. Не забудьте настроить этот контент так, чтобы он соответствовал ширине области просмотра.</p>
    <p><strong>2. НЕ позволяйте контенту полагаться на определенную ширину области просмотра для правильного рендеринга.</strong> Поскольку размеры и ширина экрана в пикселях CSS сильно различаются в зависимости от устройства, контент не должен полагаться на определенную ширину области просмотра для хорошей визуализации.</p>
    <p><strong>3. Используйте CSS медиазапросы для применения различных стилей для маленьких и больших экранов.</strong> Установка абсолютной ширины CSS для элементов страницы приведет к тому, что элемент станет слишком широким для области просмотра на меньшем устройстве. Вместо этого рассмотрите использование относительных значений ширины, таких как ширина: 100%. Также будьте осторожны с использованием больших абсолютных значений позиционирования. Это может привести к тому, что элемент выйдет за пределы области просмотра на небольших устройствах.</p>

    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="css_rwd_intro.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="css_rwd_grid.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
  </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>