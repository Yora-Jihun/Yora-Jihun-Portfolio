<?php

use Carbon\Carbon;

if (!function_exists('format_post_date')) {
    function format_post_date($date): string
    {
        $date = $date instanceof Carbon ? $date : Carbon::parse($date);
        $now = Carbon::now();

        if ($date->diffInHours($now) < 24) {
            return $date->diffForHumans([
                'particles' => true,
                'short' => false,
                'syntax' => Carbon::DIFF_ABSOLUTE,
            ]);
        }

        return $date->format('M j, Y');
    }
}
