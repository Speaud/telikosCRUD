<?php
/**
The Ultimate CRUD-ifier
*/
// CREATE

$Crud = '';

// INSERT, UPDATE

// READ

$cRud = 'SELECT * FROM {$tbl}';

/*

	$cRud .=
	
		WHERE {$key0} 
		
			array(
			
				0 => "=" ,
				
				1 => "!=",
				
				2 => ">",
				
				3 => "<",
				
				4 => "<",
				
				5 => (
				
					LIKE => (
					
						{$value}%,
				
						%{$value}%,
				
						%{$value}
					
					)
					
				),
				
				6 => (
				
					AND => (
					
						
					
					)
				
				)
			
			);
		
			=
			
				{$value}
			
			!=
			
				{$value}
			
			LIKE
			

			
			>

				{$value}
			
			<

				{$value}
			
			AND {$key1}
			

*/

// UPDATE

$crUd = 'INSERT INTO ';

// DELETE

$cruD = '';

?>