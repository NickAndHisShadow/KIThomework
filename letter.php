<?php
header('Content-Type: text/html; charset=utf-8');
$str = "Импорт готов и отлажен, хорошо бы теперь запускать его периодически по CRONу. В Magento есть своя CRON подсистема. Почитать можно, например, тут: www.magentocommerce.com/wiki/1_-_installation_and_configuration/how_to_setup_a_cron_job. В двух словах: в привычный Unix cron добавляем cron job, который будет запускать cron.php или cron.sh скрипт, который в свою очередь запускает подсистему CRON Magento. В рамках этого вызова и выполняются все задачи, добавленные модулями через config.xml.";
echo wordwrap($str, 40, "<br/>>");