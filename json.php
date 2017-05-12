<?php
//look up the record based on email and get the firstname and lastname
...

//build the JSON array for return
$json = array(array('field' => 'first_name', 
                    'value' => 'Andun'), 
              array('field' => 'last_name', 
                    'value' => 'Ranmal'));
echo json_encode($json );
?>