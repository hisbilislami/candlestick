WITH ordered_data AS (
    SELECT
        id,
        period,
        color,
        LEAD(color, 1) OVER (ORDER BY id) AS next_color2,
        LEAD(color, 2) OVER (ORDER BY id) AS next_color3,
        LEAD(color, 3) OVER (ORDER BY id) AS next_color4,
        LEAD(color, 4) OVER (ORDER BY id) AS next_color5
    FROM candlestick
)
SELECT
    next_color5,
    COUNT(*) AS occurrence_count
FROM ordered_data
WHERE color = 'hijau'
AND next_color2 = 'merah'
AND next_color3 = 'merah'
GROUP BY next_color5;

