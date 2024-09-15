<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public function __construct()
    {
    }

    public function candle()
    {
        // Define your SQL query as a raw string
        $sql = "
                WITH ordered_data AS (
                    SELECT
                        id,
                        period,
                        kekuatan,
                        color,
                        LEAD(id, 1) OVER (ORDER BY id) AS next_id2,
                        LEAD(kekuatan, 1) OVER (ORDER BY id) AS next_kekuatan2,
                        LEAD(color, 1) OVER (ORDER BY id) AS next_color2,
                        LEAD(id, 2) OVER (ORDER BY id) AS next_id3,
                        LEAD(kekuatan, 2) OVER (ORDER BY id) AS next_kekuatan3,
                        LEAD(color, 2) OVER (ORDER BY id) AS next_color3,
                        LEAD(id, 3) OVER (ORDER BY id) AS next_id4,
                        LEAD(kekuatan, 3) OVER (ORDER BY id) AS next_kekuatan4,
                        LEAD(color, 3) OVER (ORDER BY id) AS next_color4,
                        LEAD(id, 4) OVER (ORDER BY id) AS next_id5,
                        LEAD(kekuatan, 4) OVER (ORDER BY id) AS next_kekuatan5,
                        LEAD(color, 4) OVER (ORDER BY id) AS next_color5
                    FROM candlestick
                )
                SELECT
                    id,
                    period,
                    color,
                    kekuatan,
                    next_id2,
                    next_kekuatan2,
                    next_color2,
                    next_id3,
                    next_kekuatan3,
                    next_color3,
                    next_id4,
                    next_kekuatan4,
                    next_color4,
                    next_id5,
                    next_kekuatan5,
                    next_color5
                FROM ordered_data;
                ";

        $results = DB::select($sql);

        return view('candle', ['results' => $results]);
    }
}
