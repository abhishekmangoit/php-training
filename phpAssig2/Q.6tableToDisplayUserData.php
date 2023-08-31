<?php
    $users = array(
        array("lastName"=>"Choudhary", "dob"=>"14/3/2000", "email"=>"abhishek@gmail.com"),
        array("firstName" => "Harsh", "lastName" => "Raikar", "dob" => "2/1/2002", "email" => "harsh@gmail.com"),
        array("firstName" => "Vaishali", "lastName" => "Mandloi", "dob" => "1/5/2002", "email" => "vaishali@gmail.com"),
        array("firstName" => "Mohit", "lastName" => "Choudhary", "dob" => "1/3/2001", "email" => "mohit@gmail.com"),
    );
    echo "<table border=1>
             <thead >
                <tr>
                    <td>First Name</td><td>Last Name</td><td>Date Of Birth</td><td>Email</td>
                </tr>
             </thead>
             <tbody>";
                 foreach($users as  $user){
                    echo "<tr>";
                          echo "<td>"; echo $user["firstName"]; echo"</td>";
                          echo "<td>"; echo $user["lastName"]; echo"</td>";
                          echo "<td>"; echo $user["dob"]; echo"</td>";
                          echo "<td>"; echo $user["email"]; echo"</td>";
                    echo "</tr>";
                    }
            echo "</tbody>
          </table>";
?>