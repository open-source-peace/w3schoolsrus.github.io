<?php include '../include/head.php'; ?>
    <title>Установка сервера Apache на Windows. <?php include '../include/title.php'; ?></title>
    <meta name="description" content="Как установить сервер Apache 2.4 на компьютер с ОС Windows? Инструкция по установке и настройке локального сервера Apache на русском языке. <?php include '../include/description.php'; ?>">
    <style>
        .code {background:#D6ECE9;padding:5px;}
        i {color:#2D3EAE;}
    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_blog.php'; ?>
<?php include '../include/before_content_blog.php'; ?>

<article>
    <h1 class="w3-center">Установка локального сервера Apache 2.4 на компьютер с Windows</h1>

    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="atom_edit_rus.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="mysql_install.php">Next &#10095;</a>
    </div>

    <div class="author">
        <p>Original: <strong>&quot;<a href="http://httpd.apache.org/docs/2.4/platform/windows.html" target="_blank" rel="nofollow">Using Apache HTTP Server on Microsoft Windows</a>&quot;</strong>,<br><i>translating by WebSunSey - <time datetime="2019-12-08">08.12.2019</time></i></p>
    </div>
    <hr>
    <a href="http://www.apache.org/" target="_blank" rel="nofollow"><img src="../images/apache.png" alt="Как установить сервер Apache?" class="w3-left w3-padding img-responsive" title="Сервер Apache" width="220"></a>
    <h2>Как установить локальный сервер Apache 2.4 на компьютер с Windows?</h2>
    <h3>Использование Apache HTTP Server в Microsoft Windows</h3>
    <p>Этот документ объясняет, как установить, настроить и запустить Apache 2.4 под Microsoft Windows. Если у вас есть вопросы после просмотра документации (и любых журналов событий и ошибок), вам следует обратиться к <a href="http://httpd.apache.org/userslist.html" target="_blank" rel="nofollow">списку рассылки</a>, поддерживаемому равноправными пользователями.</p>
    <p>В этом документе предполагается, что вы устанавливаете бинарный дистрибутив Apache. Если вы хотите скомпилировать Apache самостоятельно (возможно, для помощи в разработке или отслеживании ошибок), см. <a href="http://httpd.apache.org/docs/2.4/platform/win_compiling.html" target="_blank" rel="nofollow">Компиляция Apache для Microsoft Windows</a>.</p>

    <h3>Требования к операционной системе</h3>
    <p>Основной платформой Windows для запуска Apache 2.4 является Windows 2000 или более поздняя версия. Всегда получайте и устанавливайте текущий пакет обновления, чтобы избежать ошибок операционной системы.</p>
    <p style="background:#eee;padding:5px;">Версии Apache HTTP Server более поздние, чем 2.2, не будут работать ни в одной операционной системе, предшествующей Windows 2000.</p>

    <h3>Загрузка Apache для Windows</h3>
    <p>Сам по себе Apache HTTP Server Project не предоставляет бинарные выпуски программного обеспечения, только исходный код. Отдельные коммиттеры могут предоставлять бинарные пакеты для удобства, но это не релиз, подлежащий доставке.</p>
    <p>Если вы не можете скомпилировать Apache HTTP Server самостоятельно, вы можете получить бинарный пакет из многочисленных бинарных дистрибутивов, доступных в Интернете.</p>
    <p>Популярные варианты развертывания Apache httpd (и, необязательно, PHP и MySQL) в Microsoft Windows включают в себя:</p>
    <ul>
        <li><a href="https://www.apachehaus.com/cgi-bin/download.plx" target="_blank" rel="nofollow">ApacheHaus</a></li>
        <li><a href="https://www.apachelounge.com/download/" target="_blank" rel="nofollow">Apache Lounge</a></li>
        <li><a href="https://bitnami.com/stack/wamp" target="_blank" rel="nofollow">Bitnami WAMP Stack</a></li>
        <li><a href="http://www.wampserver.com/" target="_blank" rel="nofollow">WampServer</a></li>
        <li><a href="https://www.apachefriends.org/ru/index.html" target="_blank" rel="nofollow">XAMPP</a></li>
    </ul>

    <h3>Настройка Apache для Windows</h3>
    <p>Apache настраивается с помощью файлов в подкаталоге conf. Это те же файлы, которые используются для настройки версии Unix, но есть несколько разных директив для Apache в Windows. <a href="http://httpd.apache.org/docs/2.4/mod/directives.html" target="_blank" rel="nofollow">Смотрите указатель директив</a> для всех доступных директив.</p>
    <p>Основные отличия в Apache для Windows:</p>
    <ul>
        <li>Поскольку Apache для Windows является многопоточным, он не использует отдельный процесс для каждого запроса, как Apache в Unix. Вместо этого обычно работают только два процесса Apache: родительский процесс и дочерний процесс, который обрабатывает запросы. Внутри дочернего процесса каждый запрос обрабатывается отдельным потоком.</li>
        <p>Директивы управления процессом также различны:</p>
        <p><a href="http://httpd.apache.org/docs/2.4/mod/mpm_common.html#maxconnectionsperchild" target="_blank" rel="nofollow">MaxConnectionsPerChild</a>: Как и директива Unix, она контролирует, сколько соединений будет обслуживать один дочерний процесс перед выходом. Однако, в отличие от Unix, процесс замены не доступен мгновенно. Используйте значение по умолчанию MaxConnectionsPerChild 0, если не указано, как изменить поведение для устранения утечки памяти в сторонних модулях или внутрипроцессных приложениях.</p>
        <p style="background:#eee;padding:5px;border: 1px solid red;">Предупреждение. Файл конфигурации сервера перечитывается при запуске нового дочернего процесса. Если вы изменили httpd.conf, новый дочерний элемент может не запуститься или вы можете получить неожиданные результаты.</p>
        <p><a href="http://httpd.apache.org/docs/2.4/mod/mpm_common.html#threadsperchild" target="_blank" rel="nofollow">ThreadsPerChild</a>: эта директива является новой. Он сообщает серверу, сколько потоков он должен использовать. Это максимальное количество соединений, которые сервер может обработать за один раз, поэтому убедитесь, что это число достаточно высоко для вашего сайта, если вы получаете много посещений. Рекомендуемое значение по умолчанию - ThreadsPerChild 150, но его необходимо настроить, чтобы отразить наибольшее ожидаемое количество одновременных соединений для принятия.</p>

        <li>Директивы, которые принимают имена файлов в качестве аргументов, должны использовать имена файлов Windows вместо Unix. Однако, поскольку Apache может интерпретировать обратный слеш как последовательность «escape-символов», вы должны постоянно использовать прямой слеш в именах путей, а не обратный слеш.</li>
        <li>Хотя в Windows имена файлов обычно не чувствительны к регистру, URL-адреса по-прежнему обрабатываются внутренне как регистрозависимые, прежде чем они сопоставляются с файловой системой. Например, все директивы <a href="http://httpd.apache.org/docs/2.4/mod/core.html#location" target="_blank" rel="nofollow">&lt;Location&gt;</a>, <a href="http://httpd.apache.org/docs/2.4/mod/mod_alias.html#alias" target="_blank" rel="nofollow">Alias</a> и <a href="http://httpd.apache.org/docs/2.4/mod/mod_proxy.html#proxypass" target="_blank" rel="nofollow">ProxyPass</a> используют регистрозависимые аргументы. По этой причине особенно важно использовать директиву <a href="http://httpd.apache.org/docs/2.4/mod/core.html#directory" target="_blank" rel="nofollow">&lt;Directory&gt;</a> при попытке ограничить доступ к контенту в файловой системе, поскольку эта директива применяется к любому контенту в каталоге, независимо от того, как к нему осуществляется доступ. Если вы хотите убедиться, что в URL используются только строчные буквы, вы можете использовать что-то вроде:</li>
        <p class="code">
            <code>
                <b>RewriteEngine</b> On<br>
                <b>RewriteMap</b> lowercase int:tolower<br>
                <b>RewriteCond</b> "%{REQUEST_URI}" "[A-Z]"<br>
                <b>RewriteRule</b> "(.*)" "${lowercase:$1}" [R,L]
            </code>
        </p>
        <li>При работе Apache требуется доступ на запись только в каталог журналов и любое настроенное дерево каталогов кэша. Из-за проблемы нечувствительных к регистру и коротких имен в формате 8.3 Apache должен проверить все указанные пути. Это означает, что каждый каталог, который оценивает Apache, от корня диска до листа каталога, должен иметь разрешения на чтение и просмотр каталога. Если Apache2.4 установлен в C:\Program Files, то для Apache должны быть видны корневой каталог, Program Files и Apache2.4.</li>
        <li>Apache для Windows содержит возможность загружать модули во время выполнения, без перекомпиляции сервера. Если Apache скомпилирован нормально, он установит несколько дополнительных модулей в каталог \Apache2.4\modules. Чтобы активировать те или иные модули, необходимо использовать директиву LoadModule. Например, чтобы активировать модуль статуса, используйте следующее (в дополнение к директивам по активации статуса в access.conf):</li>
        <p class="code"><code>LoadModule status_module "modules/mod_status.so"</code></p>
        <p>Информация о <a href="http://httpd.apache.org/docs/2.4/mod/mod_so.html#creating" target="_blank" rel="nofollow">создании загружаемых модулей</a> также доступна.</p>
        <li>Apache также может загружать расширения ISAPI (Интерфейс прикладного программирования интернет-сервера), например, используемые Microsoft IIS и другими серверами Windows. Более <a href="http://httpd.apache.org/docs/2.4/mod/mod_isapi.html" target="_blank" rel="nofollow">подробная информация доступна</a>. Обратите внимание, что Apache не может загружать фильтры ISAPI, и обработчики ISAPI с некоторыми расширениями функций Microsoft не будут работать.</li>
        <li>При запуске сценариев CGI метод, используемый Apache для поиска интерпретатора сценария, настраивается с помощью директивы <a href="http://httpd.apache.org/docs/2.4/mod/core.html#scriptinterpretersource" target="_blank" rel="nofollow">ScriptInterpreterSource</a>.</li>
        <li>Поскольку в Windows часто сложно управлять файлами с такими именами, как .htaccess, может оказаться полезным изменить имя этого файла конфигурации для каждого каталога с помощью директивы <a href="http://httpd.apache.org/docs/2.4/mod/core.html#accessfilename" target="_blank" rel="nofollow"></a>AccessFilename.</li>
        <li>Любые ошибки во время запуска Apache регистрируются в журнале событий Windows при работе в Windows NT. Этот механизм действует как резервная копия для тех ситуаций, когда Apache еще не готов использовать файл error.log. Вы можете просмотреть журнал событий приложений Windows с помощью средства просмотра событий, например, Пуск - Настройки - Панель управления - Администрирование - Просмотр событий.</li>
    </ul>
    <h3>Запуск Apache как сервиса</h3>
    <p>Apache поставляется с утилитой, которая называется Apache Service Monitor. С его помощью вы можете видеть и управлять состоянием всех установленных сервисов Apache на любом компьютере в вашей сети. Чтобы иметь возможность управлять службой Apache с помощью монитора, сначала необходимо установить службу (либо автоматически через установку, либо вручную).</p>
    <p>Вы можете установить Apache в качестве службы Windows NT следующим образом из командной строки в подкаталоге Apache bin:</p>
    <p class="code"><code>httpd.exe -k install</code></p>
    <p>Если вам нужно указать имя службы, которую вы хотите установить, используйте следующую команду. Вы должны сделать это, если у вас есть несколько различных сервисных установок Apache на вашем компьютере. Если вы указываете имя во время установки, вы должны также указать его во время любой другой -k операции</p>
    <p class="code"><code>httpd.exe -k install -n &quot;MyServiceName&quot;</code></p>
    <p>Если вам нужно иметь конкретно названные файлы конфигурации для разных сервисов, вы должны использовать это:</p>
    <p class="code"><code>httpd.exe -k install -n &quot;MyServiceName&quot; -f &quot;c:\files\my.conf&quot;</code></p>
    <p>Если вы используете первую команду без каких-либо специальных параметров, кроме <code>-k install</code>, служба будет называться Apache2.4, и предполагается, что конфигурация будет <code>conf\ httpd.conf</code>.</p>
    <p>Удаление службы Apache легко. Просто используйте:</p>
    <p class="code"><code>httpd.exe -k uninstall</code></p>
    <p>Определенную службу Apache, которую нужно удалить, можно указать с помощью:</p>
    <p class="code"><code>httpd.exe -k uninstall -n &quot;MyServiceName&quot;</code></p>
    <p>Обычный запуск, перезапуск и завершение работы службы Apache обычно выполняется через Apache Service Monitor, с помощью таких команд, как <code>NET START Apache2.4</code> и <code>NET STOP Apache2.4</code>, или с помощью обычного управления службами Windows. Прежде чем запускать Apache как службу любым способом, необходимо проверить файл конфигурации службы, используя:</p>
    <p class="code"><code>httpd.exe -n &quot;MyServiceName&quot; -t</code></p>
    <p>Вы также можете управлять сервисом Apache с помощью переключателей командной строки. Для запуска установленного сервиса Apache необходимо использовать это:</p>
    <p class="code"><code>httpd.exe -k start -n &quot;MyServiceName&quot;</code></p>
    <p>Чтобы остановить службу Apache через ключи командной строки, используйте это:</p>
    <p class="code"><code>httpd.exe -k stop -n &quot;MyServiceName&quot;</code></p>
    <p>или</p>
    <p class="code"><code>httpd.exe -k shutdown -n &quot;MyServiceName&quot;</code></p>
    <p>Вы также можете перезапустить работающую службу и заставить ее перечитать файл конфигурации, используя:</p>
    <p class="code"><code>httpd.exe -k restart -n &quot;MyServiceName&quot;</code></p>
    <p>По умолчанию все службы Apache зарегистрированы для запуска в качестве системного пользователя (учетная запись LocalSystem). Учетная запись LocalSystem не имеет прав доступа к вашей сети через какой-либо механизм, защищенный Windows, включая файловую систему, именованные каналы, DCOM или безопасный RPC. Однако он имеет широкие привилегии на локальном уровне.</p>
    <p style="background:#eee;padding:5px;border: 1px solid red;">Никогда не предоставляйте никаких сетевых привилегий учетной записи LocalSystem! Если вам нужен Apache для доступа к сетевым ресурсам, создайте отдельную учетную запись для Apache, как указано ниже.</p>
    <p>Пользователям рекомендуется создать отдельную учетную запись для запуска служб Apache. Если вам необходимо получить доступ к сетевым ресурсам через Apache, это необходимо.</p>
    <ol>
        <li>Создайте обычную учетную запись пользователя домена и обязательно запомните ее пароль.</li>
        <li>Предоставьте только что созданному пользователю <i>привилегию входить в систему как сервис</i> и <i>действовать как часть операционной системы</i>. В Windows NT 4.0 эти привилегии предоставляются через Диспетчер пользователей для доменов, но в Windows 2000 и XP вы, вероятно, захотите использовать групповую политику для распространения этих параметров. Вы также можете установить их вручную с помощью оснастки MMC Local Security Policy.</li>
        <li>Убедитесь, что созданная учетная запись является членом группы «Пользователи».</li>
        <li>Предоставьте учетной записи права на чтение и выполнение (RX) всем папкам документов и сценариев (например, <i>htdocs</i> и <i>cgi-bin</i>).</li>
        <li>Предоставьте права на изменение учетной записи (RWXD) в директории <i>logs</i> Apache.</li>
        <li>Предоставьте учетной записи права на чтение и выполнение (RX) двоичного исполняемого файла <i>httpd.exe</i>.</li>
    </ol>
    <p style="background:#eee;padding:5px;">Обычно рекомендуется предоставлять пользователю доступ к службе Apache в режиме чтения и выполнения (RX) для всего каталога Apache2.4, за исключением подкаталога <i>logs</i>, где пользователь должен иметь права как минимум на изменение (RWXD).</p>
    <p>Если вы разрешаете учетной записи входить в систему как пользователь и как служба, то вы можете войти в систему с этой учетной записью и проверить, имеет ли учетная запись привилегии для выполнения сценариев, чтения веб-страниц и что вы можете запустить Apache в окне консоли. Если это работает, и вы выполнили шаги, описанные выше, Apache должен работать как сервис без проблем.</p>
    <p style="background:#eee;padding:5px;">Код ошибки 2186 является хорошим признаком того, что вам необходимо просмотреть конфигурацию &quot;Вход в систему&quot; для службы, поскольку Apache не может получить доступ к требуемому сетевому ресурсу. Также обратите пристальное внимание на привилегии пользователя, настроенного для запуска Apache.</p>
    <p>При запуске Apache как службы вы можете получить сообщение об ошибке из диспетчера управления службами Windows. Например, если вы попытаетесь запустить Apache с помощью апплета Services на панели управления Windows, вы можете получить следующее сообщение:</p>
    <p class="code"><code>Could not start the Apache2.4 service on \\COMPUTER<br>Error 1067; The process terminated unexpectedly.</code></p>
    <p class="code"><code>(Не удалось запустить службу Apache2.4 на \\ COMPUTER<br>Ошибка 1067; Процесс неожиданно завершился.)</code></p>
    <p>Вы получите эту общую ошибку, если возникнут проблемы с запуском службы Apache. Чтобы увидеть, что действительно вызывает проблему, вы должны следовать инструкциям по запуску Apache для Windows из командной строки.</p>
    <p>Если у вас возникли проблемы со службой, рекомендуется выполнить приведенные ниже инструкции, чтобы попытаться запустить httpd.exe из окна консоли, и устранить ошибки, прежде чем пытаться запустить его как службу снова.</p>
    <h3>Запуск Apache как консольного приложения</h3>
    <p>Запуск Apache как службы обычно является рекомендуемым способом его использования, но иногда проще работать из командной строки, особенно во время начальной настройки и тестирования.</p>
    <p>Чтобы запустить Apache из командной строки как консольное приложение, используйте следующую команду:</p>
    <p class="code"><code>httpd.exe</code></p>
    <p>Apache выполнится и будет работать до тех пор, пока не будет остановлен нажатием Control-C.</p>
    <p>Вы также можете запустить Apache с помощью ярлыка &quot;Запуск Apache&quot; в консоли, расположенной в меню <i>Пуск -> Программы -> Apache HTTP Server 2.4.xx -> Управление сервером Apache</i> во время установки. Это откроет окно консоли и запустит Apache внутри него. Если у вас не установлен Apache в качестве службы, окно будет отображаться до тех пор, пока вы не остановите Apache, нажав Control-C в окне консоли, в котором работает Apache. Сервер закроется через несколько секунд. Однако, если у вас установлен Apache в качестве службы, ярлык запускает службу. Если служба Apache уже запущена, ярлык ничего не делает.</p>
    <p>Если Apache работает как служба, вы можете остановить его, открыв другое окно консоли и введя:</p>
    <p class="code"><code>httpd.exe -k shutdown</code></p>
    <p>Запуску в качестве службы следует отдавать предпочтение перед запуском в окне консоли, потому что это позволяет Apache завершать любые текущие операции и корректно очищаться.</p>
    <p>Но если сервер работает в окне консоли, вы можете остановить его, только нажав Control-C в том же окне.</p>
    <p>Вы также можете Apache перезапустить. Это заставляет его перечитать файл конфигурации. Любые выполняемые операции разрешено выполнять без перерыва. Чтобы перезапустить Apache, нажмите Control-Break в окне консоли, которое вы использовали для запуска Apache, или введите</p>
    <p class="code"><code>httpd.exe -k restart</code></p>
    <p>если сервер работает как сервис.</p>
    <p style="background:#eee;padding:5px;">Примечание для людей, знакомых с версией Apache для Unix: эти команды предоставляют Windows-эквивалент для <i>kill -TERM pid</i> и <i>kill -USR1 pid</i>. Используемая опция командной строки <i>-k</i> была выбрана в качестве напоминания о команде <i>kill</i>, используемой в Unix.</p>
    <p>Если окно консоли Apache закрывается сразу или неожиданно после запуска, откройте командную строку в меню <i>Пуск -> Программы</i>. Перейдите в папку, в которую вы установили Apache, введите команду <i>httpd.exe</i> и прочитайте сообщение об ошибке. Затем перейдите в папку <i>logs</i> и просмотрите файл <i>error.log</i> на предмет ошибок конфигурации. Предполагая, что httpd установлен в <i>C:\Program Files\Apache Software Foundation\Apache2.4\</i>, вы можете сделать следующее:</p>
    <p class="code"><code>c:<br>cd "\Program Files\Apache Software Foundation\Apache2.4\bin"<br>httpd.exe</code></p>
    <p>Затем дождитесь остановки Apache или нажмите Control-C. Затем введите следующее:</p>
    <p class="code"><code>cd ..\logs<br>more &lt; error.log</code></p>
    <p>При работе с Apache важно знать, как он найдет файл конфигурации. Вы можете указать файл конфигурации в командной строке двумя способами:</p>
    <ul>
        <li><i>-f</i> указывает абсолютный или относительный путь к конкретному файлу конфигурации:</li>
        <p class="code"><code>httpd.exe -f &quot;c:\my server files\anotherconfig.conf&quot;</code></p>
        <p>или</p>
        <p class="code"><code>httpd.exe -f files\anotherconfig.conf</code></p>
        <li><i>-n</i> указывает установленную службу Apache, файл конфигурации которой будет использоваться:</li>
        <p class="code"><code>httpd.exe -n &quot;MyServiceName&quot;</code></p>
    </ul>
    <p>В обоих этих случаях правильный <a href="http://httpd.apache.org/docs/2.4/mod/core.html#serverroot" target="_blank" rel="nofollow">ServerRoot</a> должен быть установлен в файле конфигурации.</p>
    <p>Если вы не укажете файл конфигурации с помощью <i>-f</i> или <i>-n</i>, Apache будет использовать имя файла, скомпилированное на сервере, например <i>conf\httpd.conf</i>. Этот встроенный путь относится к каталогу установки. Вы можете проверить имя скомпилированного файла по значению, помеченному как <i>SERVER_CONFIG_FILE</i>, при вызове Apache с ключом <i>-V</i>, например так:</p>
    <p class="code"><code>httpd.exe -V</code></p>
    <p>Затем Apache попытается определить свой <a href="http://httpd.apache.org/docs/2.4/mod/core.html#serverroot" target="_blank" rel="nofollow">ServerRoot</a>, выполнив следующие действия в следующем порядке:</p>
    <ol>
        <li>Директива <a href="http://httpd.apache.org/docs/2.4/mod/core.html#serverroot" target="_blank" rel="nofollow">ServerRoot</a> через ключ командной строки <i>-C</i>.</li>
        <li>Ключ <i>-d</i> в командной строке.</li>
        <li>Текущий рабочий каталог.</li>
        <li>Запись реестра, которая была создана, если вы выполнили бинарную установку.</li>
        <li>Корень сервера скомпилирован в сервер. По умолчанию это <i>/apache</i>, вы можете проверить это с помощью <i>httpd.exe -V</i> и найти значение, помеченное как <i>HTTPD_ROOT</i>.</li>
    </ol>
    <p>Если вы не выполняли бинарную установку, Apache в некоторых случаях будет жаловаться на отсутствующий раздел реестра. Это предупреждение можно игнорировать, если сервер в противном случае смог найти свой файл конфигурации.</p>
    <p>Значением этого ключа является каталог ServerRoot, который содержит подкаталог <i>conf</i>. Когда Apache запускается, он читает файл <i>httpd.conf</i> из этого каталога. Если этот файл содержит директиву ServerRoot, которая содержит каталог, отличный от каталога, полученного из ключа реестра выше, Apache забудет ключ реестра и использует каталог из файла конфигурации. Если вы копируете каталог Apache или файлы конфигурации в новое местоположение, очень важно обновить директиву ServerRoot в файле <i>httpd.conf</i>, чтобы отразить новое местоположение.</p>
    <h3>Тестирование установки</h3>
    <p>После запуска Apache (в окне консоли или в качестве службы) он будет прослушивать порт 80 (если только вы не изменили директиву <a href="http://httpd.apache.org/docs/2.4/mod/mpm_common.html#listen" target="_blank" rel="nofollow">Listen</a> в файлах конфигурации или не установили Apache только для текущего пользователя). Чтобы подключиться к серверу и получить доступ к странице по умолчанию, запустите браузер и введите этот URL:</p>
    <p class="code"><code>http://localhost/</code></p>
    <p>Apache должен ответить с приветственной страницей, и вы должны увидеть &quot;It Works!&quot;. Если ничего не происходит или вы получаете сообщение об ошибке, посмотрите файл <i>error.log</i> в подкаталоге <i>logs</i>. Если ваш хост не подключен к сети или у вас есть серьезные проблемы с конфигурацией DNS (службы доменных имен), вам, возможно, придется использовать этот URL:</p>
    <p class="code"><code>http://127.0.0.1/</code></p>
    <p>Если вы используете Apache на альтернативном порту, вам нужно явно указать это в URL:</p>
    <p class="code"><code>http://127.0.0.1:8080/</code></p>
    <p>Как только ваша базовая установка заработает, вы должны правильно ее настроить, отредактировав файлы в подкаталоге <i>conf</i>. Опять же, если вы измените конфигурацию службы Windows NT для Apache, сначала попытайтесь запустить ее из командной строки, чтобы убедиться, что служба запускается без ошибок.</p>
    <p>Поскольку Apache не может использовать тот же порт совместно с другим приложением TCP/IP, вам может потребоваться остановить, удалить или перенастроить некоторые другие службы перед запуском Apache. Эти конфликтующие службы включают в себя другие WWW-серверы, некоторые реализации брандмауэра и даже некоторые клиентские приложения (такие как Skype), которые будут использовать порт 80, чтобы попытаться обойти проблемы брандмауэра.</p>
    <h3>Настройка доступа к сетевым ресурсам</h3>
    <p>Доступ к файлам по сети можно указать с помощью двух механизмов, предоставляемых Windows:</p>
    <p><b>Mapped drive letters</b><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>e.g.</b>, <code>Alias "/images/" "Z:/"</code><br>
        <b>UNC paths</b><br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>e.g.</b>, <code>Alias "/images/" "//imagehost/www/images/"</code>
    </p>
    <p>Сопоставленные буквы дисков позволяют администратору поддерживать сопоставление с конкретным компьютером и путем вне конфигурации Apache httpd. Однако эти сопоставления связаны только с интерактивными сеансами и не доступны напрямую для Apache httpd, когда он запускается как служба. Используйте только пути UNC для сетевых ресурсов в httpd.conf, чтобы к ресурсам можно было обращаться последовательно независимо от того, как запущен Apache httpd. (Тайные и подверженные ошибкам процедуры могут обойти ограничение на сопоставленные буквы дисков, но это не рекомендуется.)</p>
    <p class="code">Пример DocumentRoot с UNC-путем<br><code>DocumentRoot &quot;//dochost/www/html/&quot;</code></p>
    <p class="code">Пример DocumentRoot с IP-адресом в UNC-пути<br><code>DocumentRoot &quot;//192.168.1.50/docs/&quot;</code></p>
    <p class="code">Пример Alias и соответствующий каталог с UNC-путем<br><code>Alias &quot;/images/&quot; &quot;//imagehost/www/images/&quot;<br>&lt;Directory &quot;//imagehost/www/images/&quot;&gt;<br>#...<br>&lt;/Directory&gt;</code></p>
    <p>При запуске Apache httpd в качестве службы необходимо создать отдельную учетную запись для доступа к сетевым ресурсам, как описано выше.</p>
    <h3>Настройка Windows</h3>
    <ul>
        <li>Если в экземпляре операционной системы используется более нескольких десятков конвейерных регистраторов, часто необходимо увеличить &quot;desktop heap&quot;. Для получения более подробной информации обратитесь к документации по журналу.</li>
    </ul>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="atom_edit_rus.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="mysql_install.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
    </div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>