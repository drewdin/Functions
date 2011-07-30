<?php
	// First function created
	function lowestValueInArray2( $array ) {
		
		$i = -1;	
		foreach( $array as $value ) {
			
			if( $i <= $value ) {
				
				if( $i == -1 ) {
					
					$i = $value;
					
				} elseif( $value <= $i ) {
					
					$i = $value;
				
				}	
				
			} else {
				
				$j = $value;
				if( $j <= $i ) {
					
					$i = $j;
					
				}
				
			}
		}
		
		return $i;
	}
	
	
	// Second function created
	function lowestValueInArray( $data ) {
		
		if( !is_array( $data ) ) { return $data; }
	    
	    $len = count( $data );
	    if( $len == 0 ) { return $data; }
	    
	    $result = $data[0];
	    for( $i = 0; $i < $len; $i++) {
	    	
	        if( $result > $data[$i] ) {
	        	
	            $result = $data[$i];
	            
	        }
	        
	    }
	
	    return $result;
    
	}
	
	
	// Third function created
	if( function_exists( "min" ) == false ) {
		
		function min( $data ) {
                    
	        if( !is_array( $data ) ) { return $data; }
	        
	        $len = count( $array );
	        if( $len == 0 ) { return $data; }
	        
	        $result = $data[0];
	        for( $i = 0; $i < $len; $i++ ) {
	        	
				if( $result > $data[$i] ) {
					
					$result= $data[$i];
					
				}
				
			}
	   
	        return $result;
	        
		}
		
	}
	
	
	$array = array( 30, 3, 15, 18, 21, 21, 100, 60, 12, 6, 14, 2 );
	
	$lowestNumber = lowestValueInArray( $array );

	echo "<p>Lowest Number is $lowestNumber</p>";