<?php

use Carbon\Carbon;

if (!function_exists('format_post_date')) {
    function format_post_date($date): string
    {
        $date = $date instanceof Carbon ? $date : Carbon::parse($date);
        $now = Carbon::now();

        $diffInMinutes = intval($date->diffInMinutes($now));

        if ($diffInMinutes < 60) {
            if ($diffInMinutes > 0) {
                return $diffInMinutes . ' min ago';
            }

            return 'Just now';
        }

        $diffInHours = intval($date->diffInHours($now));

        if ($diffInHours < 24) {
            return $diffInHours . ' hr ago';
        }

        return $date->format('M j, Y');
    }
}
