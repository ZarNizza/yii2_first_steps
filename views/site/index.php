<?php
/* @var yii\web\View $this */
$this->title = 'My 1st Yii Application';
?>
<div class = 'site-index'>

<div class = 'jumbotron'>

<h2>Сервис проверки доступности url-ов</h2>
<h3>Тестовое задание: php-разработчик</h3>
<p>Yii2 фреймворк</p>
</div>

<div class = 'body-content'>

<div class = 'row'>

<div class = 'col-lg-4'>
<h3>Необходимо реализовать:</h3>
<p>
<ul>
<li>
<b>Пользовательскую часть</b> ( localhost ) - форма создания ссылки на проверку со следующим набором полей:
<ul>
<li>url для проверки</li>
<li>частота проверки ( каждые 1, 5, 10 минут )</li>
<li>количество повторов в случае ошибки ( от 0 до 10 )</li>
</ul>
</li>
<li><b>Административную часть</b> ( localhost/admin/ ) в интерфейсе которой можно:
<ul>
<li>просматривать список добавленных url-ов:<br/>
- дата создания<br/>
- url<br/>
- частота проверки<br/>
- количество повторов<br/>
</li>
<li>просматривать список проверок:<br/>
- дата проверки<br/>
- url<br/>
- http-код<br/>
- номер попытки<br/>
</li>
</ul>
</li>
<li><b>Backend</b>, который будет с заданной частотой проверять url’ы. Задержка между повторами в случае ошибки - 1 минута.
</li>
</ul>
</p>
</div>

<div class = 'col-lg-4'>
<h3>Требования
к&nbsp;
реализации:</h3>
<p>
<ul>
<li>Приложение на php-фреймворке ( крайне желательно <b>yii2</b> )</li>
<li>Миграция структуры данных средствами фреймворка</li>
<li>Приложение разрабатывать в <b>git</b> репозитории - начальный коммит в ветке master с форком ( или клоном репозитория ) фреймворка, реализация задания в отдельной ветке</li>
</ul>
</p>

</div>

<div class = 'col-lg-4'>
<h3>Опционально:</h3>
<p>
<ul>
<li>Возможность проверять <b>100+</b> url'ов в минуту, с соблюдением заданной частоты для каждого url’a (допускается погрешность до 10 секунд)</li>
<li>Реализация с <b>rabbitmq</b> (или другие очереди на выбор)</li>
<li><b>Dockerfile</b> + docker-compose</li>
</ul>
</p>

</div>

</div>
<hr/>
<div class = 'row'>

<div class = 'col-lg-4'>
    <p><a class = 'btn btn-default' href = 'http://www.yiiframework.com/doc/'>Yii Documentation &raquo;
</a></p>
</div>

<div class = 'col-lg-4'>
    <p><a class = 'btn btn-default' href = 'http://www.yiiframework.com/forum/'>Yii Forum &raquo;
</a></p>
</div>

<div class = 'col-lg-4'>
    <p><a class = 'btn btn-default' href = 'http://www.yiiframework.com/extensions/'>Yii Extensions &raquo;
</a></p>
</div>

</div>

</div>
</div>
