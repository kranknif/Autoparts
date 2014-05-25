# Welcome to Autoparts!


Курсовой проект по информатике студенток МГТУ МИРЭА.


![alt text](https://pp.vk.me/c310624/v310624123/a571/MSyUeqTh46g.jpg "Oh, come on")

___

### Если Вас интересует только код..
Рекомендую установить расширение [Octotree для Chrome](https://chrome.google.com/webstore/detail/octotree/bkhaagjahfmjljalopjnoealnfndnagc) , которое отображает исходный код в виде дерева.

___

### Если Вы хотите склонировать проект..

После [установки](http://yiiframework.ru/doc/guide/ru/quickstart.installation) фреймворка [Yii](http://www.yiiframework.com/) и установки сборки веб-сервера [xampp](http://joomla-code.ru/joomla-install/xampp) и [клонирования](https://www.atlassian.com/git/tutorial/git-basics#!clone) данного проекта, надо внести изменения в файлы:
- index.php, 
- hosts, 
- vhosts, 
- создать БД 'autoparts' в phpMyAdmin, после чего открыть ее и импортировать файл autoparts.sql, который находится в .../httpdocs/protected/data.


* **в index.php:**

```
$yii=dirname(__FILE__).'*путь до фреймворка* .../yii.php';
```

* **в vhosts:**

```
<VirtualHost *:80>
ServerAdmin адрес@gmail.com
DocumentRoot " путь до ..\Autoparts\httpdocs"
ServerName autoparts
ErrorLog "logs/autoparts-error.log"
CustomLog "logs/autoparts-access.log" common
<Directory " путь до ..\Autoparts\httpdocs">
AllowOverride All
Order Allow,Deny
Allow from all
Require all granted
</Directory>
</VirtualHost>
```

* **в hosts:**

```
127.0.0.1 autoparts
```
