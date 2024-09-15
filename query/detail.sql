with ordered_data as (
select
	id,
	period,
	kekuatan,
	color,
	lead(id, 1) over (
	order by id) as next_id2,
	lead(kekuatan, 1) over (
	order by id) as next_kekuatan2,
	lead(color, 1) over (
	order by id) as next_color2,
	lead(id, 2) over (
	order by id) as next_id3,
	lead(kekuatan, 2) over (
	order by id) as next_kekuatan3,
	lead(color, 2) over (
	order by id) as next_color3,
	lead(id, 3) over (
	order by id) as next_id4,
	lead(kekuatan, 3) over (
	order by id) as next_kekuatan4,
	lead(color, 3) over (
	order by id) as next_color4,
	lead(id, 4) over (
	order by id) as next_id5,
	lead(kekuatan, 4) over (
	order by id) as next_kekuatan5,
	lead(color, 4) over (
	order by id) as next_color5
from
	candlestick )
select
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
from
	ordered_data;
