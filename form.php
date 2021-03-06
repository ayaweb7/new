<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Создание формы обратной связи </title>
    <meta name="description" content="Создание формы обратной связи" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    
</head>

<body>

    <div class="form-wrapper">

        <form class="contact-form" id="contact-form_1" method="POST" enctype="multipart/form-data">
            <p class="contact-form__title">Заказать услугу</p>
            <p class="contact-form__description"></p>
<!-- ИМЯ -->            
			<div class="contact-form__input-wrapper">
                <input name="name" type="text" class="contact-form__input contact-form__input_name"
                    placeholder="Введите ваше имя">
                <div class="contact-form__error contact-form__error_name"></div>
            </div>
<!-- ТЕЛЕФОН -->
            <div class="contact-form__input-wrapper">
                <input name="tel" type="tel" class="contact-form__input contact-form__input_tel"
                       placeholder="Введите ваш телефон">
                <div class="contact-form__error contact-form__error_tel"></div>
            </div>
<!-- ПОЧТА -->
            <div class="contact-form__input-wrapper"> 
                <input name="email" type="email" class="contact-form__input contact-form__input_email"
                    placeholder="Введите ваш email">
                <div class="contact-form__error contact-form__error_email"></div>
            </div>
<!-- СООБЩЕНИЕ -->
            <div class="contact-form__input-wrapper">
                <textarea name="text" class="contact-form__input contact-form__text" placeholder="Введите ваше сообщение"></textarea>
                <div class="contact-form__error contact-form__error_text"></div>
            </div>
<!-- ДАТА, ВРЕМЯ -->            
			<div class="contact-form__input-wrapper">
                <input type="text" value="<?php echo (new DateTime())->format('j.m.Y h:i:s'); ?>"></input>
            </div>

<!--
            <div class="contact-form__input-wrapper">
                <input class="contact-form__input contact-form__file" type="file" name="files[]">
                <div class="contact-form__error contact-form__error_file"></div>
            </div>

            <div class="contact-form__input-wrapper">
                <input type="checkbox" name="agreement" class="contact-form__input contact-form__checkbox" id="agreement">
                <label for="agreement" class="contact-form__checkbox-label">Я принимаю условия <a href="#">пользовательского соглашения</a></label>
                <div class="contact-form__error contact-form__error_agreement"></div>
            </div>
-->
            <button class="contact-form__button" type="submit"> Отправить заявку </button>
        </form>

<!-- ДАТА, ВРЕМЯ -->
<div id="current_date_time_block"></div>

<script type="text/javascript">
    
    /* функция добавления ведущих нулей */
    /* (если число меньше десяти, перед числом добавляем ноль) */
    function zero_first_format(value)
    {
        if (value < 10)
        {
            value='0'+value;
        }
        return value;
    }

    /* функция получения текущей даты и времени */
    function date_time()
    {
        var current_datetime = new Date();
        var day = zero_first_format(current_datetime.getDate());
        var month = zero_first_format(current_datetime.getMonth()+1);
        var year = current_datetime.getFullYear();
        var hours = zero_first_format(current_datetime.getHours());
        var minutes = zero_first_format(current_datetime.getMinutes());
        var seconds = zero_first_format(current_datetime.getSeconds());

        return day+"."+month+"."+year+" "+hours+":"+minutes+":"+seconds;
    }

    /* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */
    document.getElementById('current_date_time_block').innerHTML = date_time();
</script>
        
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <script src="/mail/js/mail.js"></script>

    <script>
        $(function() {
            $('.contact-form__input_tel').mask('+7(000)000-00-00');
        });
    </script>
</body>

</html>