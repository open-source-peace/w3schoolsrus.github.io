<?php include '../include/head.php'; ?>
<title>Учебник по кибербезопасности. Сетевой транспорт. <?php include '../include/title.php'; ?></title>
<meta name='description' content='Учебник по кибербезопасности. Углубленный транспортный и канальный уровни. TCP. Трехстороннее рукопожатие. Спуфинг (обман) трафика. UDP. Коммутируемые сети. ARP. VLAN. <?php include '../include/description.php'; ?>'>

<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_cybersecurity.php'; ?>
<?php include '../include/before_content_cybersecurity.php'; ?>

<article>
    <h1>Кибербезопасность. <span class="color_h1">Сетевой транспорт</span></h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="cybersecurity_network_layer.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="cybersecurity_firewalls.php">Next &#10095;</a>
    </div>
    <hr>
    <h2>Углубленный транспортный и канальный уровни</h2>
    <p>Компьютерные системы часто нуждаются в взаимодействии с другими системами; это делается путем помещения их в одну сеть. Существует несколько различных технологий, позволяющих компьютерам обмениваться данными по разным сетям. В этом разделе мы углубимся в протоколы, которые используются в большинстве сетей.</p>
    <p>Используемые нами сети состоят из нескольких протоколов, некоторые из которых относятся к этому классу. В сетях также используется много других протоколов, каждый из которых может иметь риски безопасности, связанные с ними.</p>
    <hr>

    <h2>TCP (&quot;Transmission Control Protocol&quot; - &quot;Протокол управления передачей&quot;)</h2>
    <p>Так же, как IP использует IP-адреса для адресации, TCP и UDP используют порты. Порт, обозначенный числом от 0 до 65535, определяет, какая сетевая служба должна обрабатывать запрос.</p>
    <p>На картинке ниже мы можем увидеть TCP-пакет и то, как он будет выглядеть для любого, кто проверяет трафик в сети.</p>
    <p><img src="../images/img_tcp-header.png" alt="TCP заголовок" style="width:100%;max-width:1280px"></p>

    <p>Мы можем видеть график, показывающий 16 бит для портов источника и назначения, это то же самое для UDP. Номера последовательности и подтверждения используются в 3-Way-Handshake (трехстороннем рукопожатии) и для надежной передачи данных. Мы также можем видеть контрольные биты, используемые для обозначения того, что это за пакет. Другие заголовки также играют важную роль, но за пределами курса безопасности.</p>
    <hr>

    <h2>TCP 3-Way-Handshake - 3-стороннее рукопожатие</h2>
    <p>TCP использует трехстороннее рукопожатие, чтобы две системы могли взаимодействовать. Рукопожатие использует 32 бита чисел ГПСЧ (&quot;генератор псевдослучайных чисел&quot;), чтобы установить рукопожатие. Рукопожатие означает, что обе стороны намерены общаться.</p>
    <p>Вот рисунок для иллюстрации:</p>
    <p><img src="../svg/img_tcp-handshake-1.svg" alt="TCP Handshake" style="width:100%;max-width:1280px"></p>
    <p>Объяснение того, как TCP участвует в обмене данными:</p>
    <ol>
        <li>Клиент инициирует обмен данными, отправляя пакет с битом управления SYN, установленным в заголовке, номером PRNG в поле порядкового номера и целевым портом назначения. Сетевой уровень (уровень 3) позволяет отправлять пакет в удаленную систему. Этот пакет называется SYN-пакетом. </li>
        <li>Сервер получает пакет, считывает порядковый номер от клиента и формирует ответ. Ответ устанавливает поле Acknowledgment (Подтверждение) с номером Sequencer (Последовательность) клиента с добавленным к нему номером 1. Кроме того, ответ содержит набор управляющих битов SYN и ACK, а порядковый номер установлен на номер сервера PRNG. Этот пакет называется пакетом SYN/ACK.</li>
        <li>Клиент получает пакет SYN-ACK и для завершения квитирования возвращает пакет с установленным битом управления ACK. Последний пакет также подтверждает номер ГПСЧ от сервера, возвращая его в поле Acknowledgment (Подтверждение) заголовка.</li>
    </ol>
    <p>Этот процесс обычно называют трехсторонним рукопожатием SYN, SYN/ACK, ACK.</p>
    <p>На следующем рисунке мы видим, как два хоста выполняют трехстороннее рукопожатие:</p>
    <p><img src="../images/img_wireshark-handshake-1.png" alt="Рукопожатие в Wireshark" style="width:100%;max-width:1280px"></p>
    <p>На снимке экрана показан инструмент Wireshark, используемый для захвата и проверки пакетов. Wireshark - очень хорошая утилита, потому что она позволяет нам визуализировать пакеты и исследовать их более глубоко. На снимке экрана показаны 3 пакета, представляющие трехстороннее рукопожатие. Обратите внимание на столбцы источника и назначения, представляющие взаимодействующие стороны. В поле &quot;Информация&quot; отображается порт источника и назначения, включая (в квадратных скобках) SYN, SYN/ACK и ACK.</p>
    <p>На следующем снимке экрана показаны данные, передаваемые между сторонами после трехстороннего рукопожатия. Данные внутри пакета TCP были выделены в нижней части изображения.</p>
    <p><img src="../images/img_tcp-data.png" alt="TCP Данные" style="width:100%;max-width:1280px"></p>
    <div class="w3-panel w3-note">
        <p>Сообщение для учеников W3School показано на скриншоте выше. Видишь?</p>
    </div>
    <hr>

    <h2>Spoofing Traffic - Спуфинг (обман) трафика</h2>
    <p>Сегодня существует несколько ограничений для сетей, позволяющих создавать пакеты по своему усмотрению. Кто угодно может создавать пакеты с любым из полей заголовков, установленным на любое желаемое значение. Это называется спуфингом, позволяющим злоумышленникам отправлять трафик от имени других.</p>
    <p><img src="../svg/img_spoofing-2.svg" alt="Spoofing" style="width:100%;max-width:1280px"></p>
    <p>Протокол TCP имеет встроенную безопасность, но он полагается на мощь генераторов чисел PRNG (&quot;Pseudo Random Number Generator&quot; - &quot;Генератор псевдослучайных чисел&quot;). Если порядковые номера взаимодействующих сторон можно угадать, безопасность TCP может быть скомпрометирована в том смысле, что злоумышленник может участвовать в ложных сообщениях через TCP.</p>
    <p>Многие протоколы легко подделать, но TCP предлагает некоторую устойчивость к этому. Такие протоколы, как UDP и ICMP, не обеспечивают аналогичной защиты.</p>
    <p>Подмена пакетов обычно выполняется злоумышленниками с полномочиями root/system, то есть наивысшими привилегиями в операционной системе. Причина в том, что операционные системы предписывают использование API, что заставляет пользователя соблюдать правила связи, указанные в RFC (&quot;Request For Comments&quot; - &quot;Запрос комментариев&quot;). Если злоумышленник не имеет наивысших привилегий, он не сможет создавать свои собственные пакеты в сети.</p>
    <hr>

    <h2>UDP (&quot;User Datagram Protocol&quot; - &quot;Протокол пользовательских датаграмм&quot;)</h2>
    <p>UDP используется для трафика, который не требует устойчивости и безопасности TCP, как правило, таких приложений, как VOIP, но в современном мире большее количество приложений используют UDP для поддержки быстрой передачи пакетов с отказоустойчивостью и безопасностью, встроенными в более высокие уровни модели OSI; QUIC является примером этого.</p>
    <p>Глядя на заголовок UDP, мы видим, что используются те же порты источника и назначения, но нет порядковых номеров или управляющих битов. Протокол имеет гораздо меньше накладных расходов, что приводит к более быстрой передаче данных.</p>
    <p><img src="../images/img_udp-header.png" alt="UDP Заголовок" style="width:100%;max-width:1280px"></p>
    <p>Поскольку UDP не имеет таких функций, как трехстороннее рукопожатие, UDP можно легко подделать.</p>
    <hr>

    <h2>Коммутируемые сети</h2>
    <p>Системы подключаются к LAN (&quot;Local Area Network&quot; - &quot;Локальная сеть&quot;) через коммутатор. Коммутаторы используют для адресации MAC-адреса (&quot;Media Access Control&quot; - &quot;Управление доступом к среде&quot;), а не более известный IP-адрес. Коммутатор пересылает трафик через локальные сети, то есть в вашу домашнюю сеть или в филиалы вашей организации. MAC-адреса разработаны так, чтобы быть уникальными, но любой может изменить свой MAC-адрес, если у него есть права администратора.</p>
    <p>MAC-адрес, определяемый 6 октетами, например: FC:F8:AE:12:34:56</p>
    <p>Первые три октета представляют организацию, которая произвела устройство для связи, и называется OUI (&quot;Organizational Unique Identifier&quot; - &quot;Уникальный идентификатор организации&quot;). Вышеупомянутый MAC-адрес назначен Intel Corporate. Вы можете искать MAC-адреса во многих местах, например:
        <a href="https://www.adminsub.net/mac-address-finder/intel" target="_blank" rel="nofollow">https://www.adminsub.net/mac-address-finder/intel</a>.</p>
    <p>Последние три октета определяются производителем.</p>
    <hr>

    <h2>ARP</h2>
    <p>ARP (&quot;Address Resolution Protocol&quot; - &quot;Протокол разрешения адресов&quot;) - это протокол, который позволяет компьютерным системам знать, какой MAC-адрес принадлежит какому IP-адресу. Если трафик необходимо маршрутизировать, компьютерная система будет перенаправлять трафик на шлюз по умолчанию, настроенный в системе.</p>
    <p>ARP, как и DNS, - это протокол, преобразующий один адрес в другой. Каждый раз, когда система пытается связаться с IP-адресом, находящимся в локальной сети, она проверяет свой кэш ARP, чтобы узнать, не было ли разрешено недавно.</p>
    <p>Вы можете проверить свой собственный ARP. Просто запустите команду <code>arp -a</code> как в Linux, так и в Windows. Это показывает, с какими системами ваша система недавно взаимодействовала.</p>
    <div class="w3-code w3-border notranslate">
        Alice: Кто-нибудь знает MAC-адрес 192.168.10.10?<br>
        Bob: Конечно, Alice, это мой MAC-адрес.</div>
    <hr>

    <h2>VLAN (&quot;Virtual LAN&quot; - &quot;Виртуальная локальная сеть&quot;)</h2>
    <p>VLAN, часто называемая частной VLAN, позволяет коммутатору встраивать теги (или идентификатор VLAN) во фрейм. Затем несколько коммутаторов могут гарантировать, что компьютерные системы в локальной сети могут связываться только с определенными другими системами, то есть с другими системами с тем же идентификатором VLAN.</p>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="cybersecurity_network_layer.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="cybersecurity_firewalls.php">Next &#10095;</a>
    </div>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>