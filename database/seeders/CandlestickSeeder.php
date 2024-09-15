<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandlestickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['id' => 1, 'period' => '1', 'date' => '2024-09-15 11:32:27.316', 'color' => 'merah', 'minutes' => '2024-09-15 11:32:27.316', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 2, 'period' => '1', 'date' => '2024-09-15 11:32:27.316', 'color' => 'hijau', 'minutes' => '2024-09-15 11:32:27.316', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 3, 'period' => '1', 'date' => '2024-09-15 11:32:27.316', 'color' => 'merah', 'minutes' => '2024-09-15 11:32:27.316', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 4, 'period' => '1', 'date' => '2024-09-15 11:32:27.316', 'color' => 'hijau', 'minutes' => '2024-09-15 11:32:27.316', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 5, 'period' => '1', 'date' => '2024-09-15 11:32:27.316', 'color' => 'merah', 'minutes' => '2024-09-15 11:32:27.316', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 6, 'period' => '2', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 7, 'period' => '2', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 8, 'period' => '2', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 9, 'period' => '2', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 10, 'period' => '2', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 11, 'period' => '3', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 12, 'period' => '3', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 13, 'period' => '3', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 14, 'period' => '3', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 15, 'period' => '3', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 2],
            ['id' => 16, 'period' => '4', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 17, 'period' => '4', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 18, 'period' => '4', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 19, 'period' => '4', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 20, 'period' => '4', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 21, 'period' => '5', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 1],
            ['id' => 22, 'period' => '5', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 2],
            ['id' => 23, 'period' => '5', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 1],
            ['id' => 24, 'period' => '5', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 2],
            ['id' => 25, 'period' => '5', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 26, 'period' => '6', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 27, 'period' => '6', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 28, 'period' => '6', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 29, 'period' => '6', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 30, 'period' => '6', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 31, 'period' => '7', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 32, 'period' => '7', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 33, 'period' => '7', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 34, 'period' => '7', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 35, 'period' => '7', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 2],
            ['id' => 36, 'period' => '8', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 37, 'period' => '8', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 38, 'period' => '8', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 39, 'period' => '8', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 40, 'period' => '8', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 41, 'period' => '9', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 1],
            ['id' => 42, 'period' => '9', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 2],
            ['id' => 43, 'period' => '9', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 1],
            ['id' => 44, 'period' => '9', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 2],
            ['id' => 45, 'period' => '9', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
            ['id' => 46, 'period' => '10', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 2, 'breakout' => 1],
            ['id' => 47, 'period' => '10', 'date' => '2024-09-15 11:38:46.188', 'color' => 'hijau', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 3, 'breakout' => 2],
            ['id' => 48, 'period' => '10', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 4, 'breakout' => 1],
            ['id' => 49, 'period' => '10', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 5, 'breakout' => 2],
            ['id' => 50, 'period' => '10', 'date' => '2024-09-15 11:38:46.188', 'color' => 'merah', 'minutes' => '2024-09-15 11:38:46.188', 'kekuatan' => 1, 'breakout' => 1],
        ];
    }
}
