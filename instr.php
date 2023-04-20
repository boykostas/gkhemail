<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.svg">
    <link rel="stylesheet" href="style.css">
    <title>Инструкция</title>
</head>

<body>
    <div class="container">
        <div class="main main__instr">
            <div class="main__instr__back">
                <a href="index.html"><img src="img/btn-back.png" alt="Назад" class="scale img_back"></a>
            </div>
            <ul>
                <li class="main__instr_item">
                    <h1>Настройка почтовых клиентов</h1><br>
                    Почтовый клиент — программа для получения, написания и хранения электронных писем.<br>
                    <br>
                    Чаще всего почтовый клиент входит в стандартную поставку любой операционной системы:<br>
                    <br>
                    для Windows — Windows Mail;<br>
                    для Mac OS — Apple Mail;<br>
                    для iOS, Android — стандартные программы для смартфонов.<br>
                    Также есть множество других почтовых клиентов, которые можно скачать и установить
                    самостоятельно.<br>
                    Один из самых популярных — Mozilla Thunderbird (opens new window)— работает в операционных системах
                    Windows, Mac OS X и Linux.<br>
                    <br>
                    Основные настройки для почтовых клиентов:<br>
                    <br>
                    Сервер входящей почты (IMAP, рекомендуется): mail.jino.ru, порт 143<br>
                    Сервер входящей почты (POP3): mail.jino.ru, порт 110<br>
                    Сервер для отправки почты (SMTP): smtp.jino.ru, порт 587<br>
                    Имя пользователя: название почтового ящика целиком (например: my_mail@gkh47.ru)<br>
                    Пароль: тот пароль, который вы указали при создании ящика<br>
                    Шифрование: STARTTLS или SSL/TLS<br>
                    При отправке почты нужно использовать SMTP-аутентификацию, логин и пароль — такие же, как для
                    входящей почты.<br>
                    Если вы используете шифрование SSL/TLS, порт IMAP-сервера — 993, SMTP-сервера — 465.<br>
                </li><br>
                <li class="main__instr_item">
                    <h1>Автоматическая настройка почтовых клиентов</h1><br>
                    Для автоматической настройки почтового клиента вам нужно будет указать только имя отправителя,
                    e-mail и пароль.
                    <br>
                    Автонастройка доступна в следующих клиентах:<br>
                    <br>
                    для ОС Windows — Microsoft Outlook, Windows Mail, Mozilla Thunderbird;<br>
                    для ОС Linux — Mozilla Thunderbird;<br>
                    для ОС iOS — iOS Mail;<br>
                    для ОС macOS — macOS Mail;<br>
                    для ОС Android — Microsoft Outlook, myMail.<br>
                </li>
            </ul>
        </div>

        <footer class="footer">
            <div class="footer__content">
                <div class="adaptive-header">
                    <span class="desktop-header">
                        <h3>&copy МУП ЖКХ г.Гатчины, +7 (813 71) 221-36, gkh@gtn.ru, info@gkh47.ru</h3>
                        <p>
                            Юридический адрес: 188300, Ленинградская область, Гатчинский район, город Гатчина, Соборная
                            ул., д.1 <br>
                            ИНН: 4705001297
                            КПП: 470501001
                            ОГРН: 1024701243401
                            ОКПО: 03324134
                            ОКТМО: 41618101001
                        </p>
                    </span>
                    <span class="mobile-header">
                        <h3>&copy МУП ЖКХ г.Гатчины</h3>
                        <p>
                            Адрес: 188300, ЛО, г.Гатчина, Соборная ул. д.1
                        </p>
                    </span>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>