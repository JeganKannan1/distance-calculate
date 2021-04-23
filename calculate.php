<?php 
 
$current_lat=11.0168;
 $current_lng=76.9558; 
 $dest_lat=11.3806;
  $dest_lng=77.8944; 
            $theta = $current_lng - $dest_lng;
            $dist = sin(deg2rad($current_lat)) *sin(deg2rad($dest_lat)) +  cos(deg2rad($current_lat)) *cos(deg2rad($dest_lat)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist *60 *1.1515;

            
            $value = $miles * 1.609344;
               
           print_r($value);exit

             
        

?>