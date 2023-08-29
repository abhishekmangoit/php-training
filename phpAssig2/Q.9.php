<?php
    $states = array("mp"=>"MP","raj"=>"Rajasthan","maha"=>"Maharashtra","guj"=>"Gujrat");
    $cities = array(
        "mpq"=>['Indore','Dewas','ujjain'],
        "maha"=>['Mumbai','Pune','Nashik','Nagpur'],
        "raj"=>['jaipur','Udaipur'],
        "guj"=>['Ahmedabad','Surat','Vadodara']
    );
    echo "<table border=1>
    <thead>
       <tr>
           <td>State</td><td>City</td>
       </tr>
    </thead>
    <tbody>";
        foreach($states as $stateKey => $state){
            echo "<tr>";
                echo "<td>"; echo $state; echo "</td>";
                echo "<td>"; 
                    // foreach($cities as $cityKey => $city){
                    if(isset($cities[$stateKey])){
                            foreach($cities[$stateKey] as $stateCity => $cityName){
                                echo $cityName.(" ");
                            }
                    }
                echo "</td>";
            echo "</tr>";
        }
    echo "</tbody>
    </table>";
?>