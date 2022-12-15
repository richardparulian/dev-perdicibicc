<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('format_indo')) {
    function format_indo($date)
    {
        date_default_timezone_set('Asia/Jakarta');

        $ci     = &get_instance();
        $Day    = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        // $Day = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $Month  = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

        $years  = substr($date, 0, 4);
        $month  = substr($date, 5, 2);
        $dates  = substr($date, 8, 2);
        $time   = substr($date, 11, 5);
        $day    = date("w", strtotime($date));
        $result = $Day[$day] . ", " . $dates . " " . $Month[(int)$month - 1] . " " . $years . " " . $time;
        //$result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " " . $waktu;

        return $result;
    }
}
