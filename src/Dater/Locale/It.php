<?php

namespace Dater\Locale;
use Dater\Dater;

class It extends \Dater\Locale {

    protected static $months = array('Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
    protected static $weekDays = array('Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato', 'Domenica');
    protected static $weekDaysShort = array('Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom');

    // Referring to https://en.wikipedia.org/wiki/Date_format_by_country
    protected static $formats = array(
        Dater::USER_DATE_FORMAT => 'd-m-Y',
        Dater::USER_TIME_FORMAT => 'H:i',
        Dater::USER_DATETIME_FORMAT => 'd-m-Y H:i',
    );
}
