<?php
/**
 * Created by PhpStorm.
 * User: Ádám
 * Date: 2020.02.09.
 * Time: 14:53
 */

namespace App\DataTransferObject;

use DateTime;

class BaseDataTransfer {

    public function dateFormat($dateTime, $formatString = null) {
        setlocale(LC_ALL,'hungarian');
        if($formatString === null) {
            $datetimeFormat = 'Y-m-d H:i:s';
        } else {
            $datetimeFormat = $formatString;
        }
        $dateTime = new DateTime($dateTime);
        return $dateTime->format($datetimeFormat);
    }

}