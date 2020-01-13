<?php 

namespace Src\EventChannel;

require_once '../../vendor/autoload.php';

$newsChannel = new EventChannel();

$hidhgardenGroup = new Publisher('highgarden-news', $newsChannel);
$winterfellNews = new Publisher('winterfell-news', $newsChannel);
$winterfellDaily = new Publisher('winterfell-news', $newsChannel);

$sandra = new Subscriber('Sandra Stark');
$arya = new Subscriber('Arya Stark');
$cersei = new Subscriber('Cersei');
$snow = new Subscriber('Jon Snow');

$newsChannel->subscribe('highgarden-news', $cersei);
$newsChannel->subscribe('winterfell-news', $sandra);
$newsChannel->subscribe('highgarden-news', $arya);
$newsChannel->subscribe('winterfell-news', $arya);
$newsChannel->subscribe('winterfell-news', $snow);

$hidhgardenGroup->publish('New highgarden post');
$winterfellNews->publish('New winterfell post');
$winterfellDaily->publish('New daily winterfell post');