<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class timeController extends Controller
{
    public function showTimeZone($timeZone = null)
    {
        if (!empty($timeZone)) {
            $time = new DateTime(date("Y-m-d H:i:sa"), new DateTimeZone('UTC'));
            $time->setTimezone(new DateTimeZone(str_replace("-", "/", $timeZone)));
            echo "múi giờ bạn chọn: " . $timeZone . " Hiện tại đang là" . $time->format('d-m-y h:i:sa');
        }
        return view("index");
    }
}
