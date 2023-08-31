<?php
    $users = array(
        array(
            "email"=>"abhishek@gmail.com",
            "userName"=>"Abhishek",
            "contactArray"=>array("contactNumber1"=>"8756658333","contactNumber2"=>"7865098743")
        ),
        array(
            "email"=>"harsh@gmail.com",
            "userName"=>"Harsh",
            "contactArray"=>array("contactNumber1"=>"9876558380","contactNumber2"=>"9886509875")
        ),
        array(
            "email"=>"vaishali@gmail.com",
            "userName"=>"Vaishali",
            "contactArray"=>array("contactNumber1"=>"8887566583","contactNumber2"=>"9967098740","contactNumber3"=>"8967098564")
        ),
    );
    echo "<table >
             <thead>
                <tr>
                    <td>Email</td><td>Username</td><td>Contact Numbers</td>
                </tr>
             </thead>
             <tbody>";
                foreach($users as $key => $user){
                    echo "<tr>";
                        echo "<td>"; echo $user["email"]; echo "</td>";
                        echo "<td>"; echo $user["userName"]; echo "</td>";
                        echo "<td>";
                            foreach($user["contactArray"] as $key => $value){
                                    echo $value."<br>";
                                }
                        echo "</td>";
                    echo "</tr>";
               }
            echo "</tbody>";
        echo "</table>";
?>