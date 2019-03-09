<?php

namespace Dater\Locale;
use Dater\Dater;

class Ko extends \Dater\Locale {

    protected static $months = array('1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월');
    protected static $weekDays = array('월요일', '화요일', '수요일', '목요일', '금요일', '토요일', '일요일');
    protected static $weekDaysShort = array('월요일', '화요일', '수요일', '목요일', '금요일', '토요일', '일요일');

    // Referring to https://en.wikipedia.org/wiki/Date_format_by_country
    protected static $formats = array(
        Dater::USER_DATE_FORMAT => 'Y년m월d일',
        Dater::USER_TIME_FORMAT => 'H시 i분',
        Dater::USER_DATETIME_FORMAT => 'Y년m월d일 H시 i분',
    );
}
