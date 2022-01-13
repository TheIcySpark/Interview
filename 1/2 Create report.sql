SELECT descrip, 
	max(CASE WHEN month= 'jan' THEN VALUE ELSE 0 END) jan,
	max(CASE WHEN month = 'feb' THEN VALUE ELSE 0 END) feb
FROM
(
	SELECT id, month, col1 VALUE, 'col1' descrip
	FROM theTable
	UNION ALL
	SELECT id, month, col2 VALUE, 'col2' descrip
	FROM theTable
	UNION ALL
	SELECT id, month, col3 VALUE, 'col3' descrip
	FROM theTable
	UNION ALL
	SELECT id, month, col4 VALUE, 'col4' descrip
	FROM theTable
) src
GROUP BY descrip