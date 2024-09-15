<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candle Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #ffffff;
        }
        table, th, td {
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .merah {
            color: #ff0000; /* Red */
        }
        .hijau {
            color: #008000; /* Green */
        }
    </style>
</head>
<body>
    <h1>Candle Data</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Period</th>
                <th>Color</th>
                <th>Kekuatan</th>
                <th>Next ID 2</th>
                <th>Next Kekuatan 2</th>
                <th>Next Color 2</th>
                <th>Next ID 3</th>
                <th>Next Kekuatan 3</th>
                <th>Next Color 3</th>
                <th>Next ID 4</th>
                <th>Next Kekuatan 4</th>
                <th>Next Color 4</th>
                <th>Next ID 5</th>
                <th>Next Kekuatan 5</th>
                <th>Next Color 5</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->period }}</td>
                    <td class="{{ $row->color }}">{{ $row->color }}</td>
                    <td>{{ $row->kekuatan }}</td>
                    <td>{{ $row->next_id2 }}</td>
                    <td>{{ $row->next_kekuatan2 }}</td>
                    <td class="{{ $row->next_color2 }}">{{ $row->next_color2 }}</td>
                    <td>{{ $row->next_id3 }}</td>
                    <td>{{ $row->next_kekuatan3 }}</td>
                    <td class="{{ $row->next_color3 }}">{{ $row->next_color3 }}</td>
                    <td>{{ $row->next_id4 }}</td>
                    <td>{{ $row->next_kekuatan4 }}</td>
                    <td class="{{ $row->next_color4 }}">{{ $row->next_color4 }}</td>
                    <td>{{ $row->next_id5 }}</td>
                    <td>{{ $row->next_kekuatan5 }}</td>
                    <td class="{{ $row->next_color5 }}">{{ $row->next_color5 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
