<?php

namespace Dater\Locale;
use Dater\Dater;

class ZhCn extends \Dater\Locale {

    protected static $months = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
    protected static $weekDays = array('星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期天');
    protected static $weekDaysShort = array('星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期天');

    // Referring to https://en.wikipedia.org/wiki/Date_format_by_country
    protected static $formats = array(
        Dater::USER_DATE_FORMAT => 'Y年m月d日',
        Dater::USER_TIME_FORMAT => 'H时i分',
        Dater::USER_DATETIME_FORMAT => 'Y年m月d日 H时i分',
    );
}
