<?php include '../include/head.php'; ?>

<title>Структура кода JavaScript. <?php include '../include/title_jslearn.php'; ?></title>
<meta name='description' content='Структура кода JavaScript. Инструкции. Точка с запятой. Комментарии. Современный онлайн учебник по JavaScript на русском языке. <?php include '../include/description_jslearn.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_jslearn.php'; ?>
<?php include '../include/before_content_jslearn.php'; ?>

<article>
  <h1>JavaScript Структура кода</h1>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='hello_world.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='strict_mode.php'>Next &#10095;</a>
  </div>
  <hr>
  <p>Начнём изучение языка <strong>JavaScript</strong> с рассмотрения основных «строительных блоков» кода.</p>
  <hr>
  <h2>Инструкции</h2>
  <p><strong>Инструкции</strong> – это синтаксические конструкции и команды, которые выполняют действия.</p>
  <p>Мы уже видели инструкцию <code>alert('Привет, мир!')</code>, которая отображает сообщение «Привет, мир!».</p>
  <p>В нашем коде может быть столько инструкций, сколько мы захотим. Инструкции могут отделяться точкой с запятой.</p>
  <p>Например, здесь мы разделили сообщение «Привет, Мир!» на два вызова <code>alert</code>:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
    alert('Привет,'); alert('Мир!');
    </div>
  </div>
  <p>Но обычно каждую инструкцию пишут на новой строке, чтобы код было легче читать:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
    alert('Привет,');<br>
    alert('Мир!');
    </div>
  </div>
  <hr>
  <h2>Точка с запятой</h2>
  <p>В большинстве случаев точку с запятой можно не ставить, если есть переход на новую строку.</p>
  <p>Так тоже будет работать:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
    alert('Привет,')<br>
    alert('Мир!')
    </div>
  </div>
  <p>В этом случае JavaScript интерпретирует перенос строки как «неявную» точку с запятой. Это называется автоматическая вставка точки с запятой.</p>
  <p><b>В большинстве случаев новая строка подразумевает точку с запятой. Но «в большинстве случаев» не значит «всегда»!</b></p>
  <p>В некоторых ситуациях новая строка всё же не означает точку с запятой. Например:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
  alert(3 +<br>
  1<br>
  + 2);
    </div>
  </div>
  <p>Код выведет 6, потому что JavaScript не вставляет здесь точку с запятой. Интуитивно очевидно, что, если строка заканчивается знаком '+', значит, это «незавершённое выражение», поэтому точка с запятой не требуется. И в этом случае всё работает, как задумано.</p>
  <p>Но есть ситуации, где JavaScript «забывает» вставить точку с запятой там, где она нужна.</p>
  <p>Ошибки, которые при этом появляются, достаточно сложно обнаруживать и исправлять.</p>
  <div class='important'>
  <p><span class='info_sign'>&#x2139;</span><b>Пример ошибки</b></p>
  <p>Если вы хотите увидеть конкретный пример такой ошибки, обратите внимание на этот код:</p>
  <div class='w3-code notranslate jsHigh'>
  [1, 2].forEach(alert)
  </div>
    <p>Пока нет необходимости знать значение скобок <code>[]</code> и <code>forEach</code>. Мы изучим их позже. Пока что просто запомните результат выполнения этого кода: выводится 1, а затем 2.</p>
    <p>А теперь добавим <code>alert</code> перед кодом и не поставим в конце точку с запятой:</p>
    <div class='w3-code notranslate jsHigh'>
      alert('Сейчас будет ошибка')<br>
      [1, 2].forEach(alert)
    </div>
    <p>Теперь, если запустить код, выведется только первый <code>alert</code>, а затем мы получим ошибку!</p>
    <p>Всё исправится, если мы поставим точку с запятой после <code>alert</code>:</p>
    <div class='w3-code notranslate jsHigh'>
      alert('Теперь всё в порядке');
      [1, 2].forEach(alert)
    </div>
    <p>Теперь мы получим сообщение «Теперь всё в порядке», следом за которым будут 1 и 2.</p>
    <p>В первом примере без точки с запятой возникает ошибка, потому что JavaScript не вставляет точку с запятой перед квадратными скобками [...]. И поэтому код в первом примере выполняется, как одна инструкция. Вот как движок видит его:</p>
    <div class='w3-code notranslate jsHigh'>
        alert('Сейчас будет ошибка')[1, 2].forEach(alert)
    </div>
    <p>Но это должны быть две отдельные инструкции, а не одна. Такое слияние в данном случае неправильное, оттого и ошибка. Это может произойти и в некоторых других ситуациях.</p>
  </div>
  <p>Мы рекомендуем ставить точку с запятой между инструкциями, даже если они отделены переносами строк. Это правило широко используется в сообществе разработчиков. Стоит отметить ещё раз – в большинстве случаев можно не ставить точку с запятой. Но безопаснее, особенно для новичка, ставить её.</p>
  <hr>
  <h2>Комментарии</h2>
  <p>Со временем программы становятся всё сложнее и сложнее. Возникает необходимость добавлять комментарии, которые бы описывали, что делает код и почему.</p>
  <p>Комментарии могут находиться в любом месте скрипта. Они не влияют на его выполнение, поскольку движок просто игнорирует их.</p>
  <p><b>Однострочные комментарии начинаются с двойной косой черты <code>//</code></b>.</p>
  <p>Часть строки после <code>//</code> считается комментарием. Такой комментарий может как занимать строку целиком, так и находиться после инструкции.</p>
  <p>Как здесь:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      // Этот комментарий занимает всю строку<br>
      alert('Привет');<br>
      alert('Мир'); // Этот комментарий следует за инструкцией
    </div>
  </div>
    <p><b>Многострочные комментарии начинаются косой чертой со звёздочкой <code>/*</code> и заканчиваются звёздочкой с косой чертой <code>*/</code></b>.</p>
  <p>Как вот здесь:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      /* Пример с двумя сообщениями.<br>
      Это - многострочный комментарий.<br>
      */<br>
      alert('Привет');<br>
      alert('Мир');
    </div>
  </div>
  <p>Содержимое комментария игнорируется, поэтому, если мы поместим код внутри <code>/* … */</code>, он не будет исполняться.</p>
  <p>Это бывает удобно для временного отключения участка кода:</p>
  <div class='w3-example'>
    <div class='w3-code notranslate jsHigh'>
      /* Закомментировали код<br>
      alert('Привет');<br>
      */<br>
      alert('Мир');
    </div>
  </div>
  <div class='important'>
      <p><span class='info_sign'>&#x2139;</span><b>Используйте горячие клавиши!</b></p>
      <p>В большинстве редакторов строку кода можно закомментировать, нажав комбинацию клавиш <kbd class='shortcut'>Ctrl<span class='shortcut__plus'>+</span>/</kbd> для однострочного комментария и что-то вроде <kbd class='shortcut'>Ctrl<span class='shortcut__plus'>+</span>Shift<span class='shortcut__plus'>+</span>/</kbd> – для многострочных комментариев (выделите кусок кода и нажмите комбинацию клавиш). В системе Mac попробуйте <kbd class='shortcut'>Cmd</kbd> вместо <kbd class='shortcut'>Ctrl</kbd> и <kbd class='shortcut'>Option</kbd> вместо <kbd class='shortcut'>Shift</kbd>.</p>
  </div>
  <br>
  <div class='important'>
    <p><span class='warning_sign'>&#x26a0;</span><b>Вложенные комментарии не поддерживаются!</b></p>
    <p>Не может быть <code>/*...*/</code> внутри <code>/*...*/</code>.</p>
    <p>Такой код «умрёт» с ошибкой:</p>
      <div class='w3-code notranslate jsHigh'>
          /*<br>
          /* вложенный комментарий ?!? */<br>
          */<br>
          alert( 'Мир' );
      </div>
  </div>
  <p>Не стесняйтесь использовать комментарии в своём коде.</p>
  <p>Комментарии увеличивают размер кода, но это не проблема. Есть множество инструментов, которые минифицируют код перед публикацией на рабочий сервер. Они убирают комментарии, так что они не содержатся в рабочих скриптах. Таким образом, комментарии никоим образом не вредят рабочему коду.</p>
  <p>Позже в данном учебнике на нашем сайте <strong>W3Schools на русском</strong> будет глава <a href='code_quality.php'>Качество кода</a>, которая объяснит, как лучше писать комментарии.</p>
  <hr>
  <div class='w3-clear nextprev'>
    <a class='w3-left w3-btn' href='hello_world.php'>&#10094; Prev</a>
    <a class='w3-right w3-btn' href='strict_mode.php'>Next &#10095;</a>
  </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>