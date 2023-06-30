<html>
<head>
    <title>Already a member</title>
</head>
<body>
    <center>
    <h1>E-Health Care</h1>
    <h2>Already a member?</h2>
    
    <div class="container">
        <!--action  PHP code la run karto   method="POST" jo retrived karel -->
        <form action="" method="POST">
            <input type="text" name="pwd" placeholder="Enter Password" />
            <input type="submit" name="search" value="Search ">

        </form>
        <table>
                <tr>
                    <th>Name</th>
                </tr>
                <tr>
                    <th>Gender</th>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                </tr>
                <tr>
                    <th>Age</th>
                </tr>

                <tr>
                    <th>Address</th>
                </tr>
                <tr>
                    <th>District</th>
                </tr>
                <tr>
                    <th>State</th>
                </tr>
                <tr>
                    <th>Pincode</th>
                </tr>
                <tr>
                    <th>Contact Number</th>
                </tr>
                <tr>
                    <th>Another Contact Number</th>
                </tr>
                <tr>
                    <th>Email</th>
                </tr>

                <tr>
                    <th>Blood Group</th>
                </tr>
                <tr>
                    <th>Disabilities</th>
                </tr>
                <tr>
                    <th>Any Drug Allergies</th>
                </tr>
                <tr>
                    <th>Allergy Details</th>
                </tr>

                <tr>
                    <th>Insurance Company</th>
                </tr>
                <tr>
                    <th>Insurance Number</th>
                </tr> <br>
                <?php
                $connection=mysqli_connect("localhost","root","");
                $db=mysqli_select_db($connection,'test');

                if(isset($_POST['search']))
                {}
                    $id=$_POST['pwd'];

                    $query = "SELECT * FROM 'test1' where id='$id'";
                    $result=mysqli_query($connection,$query);

                    while($row=mysqli_fetch_field($result))
                    {}
                       
                      ?>
                      <tr>
                        <td> <?php echo $row['Name']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Gender']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['DOB']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Age']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Address']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['District']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['State']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Pincode']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Num1']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Num2']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Email']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['BloodGroup']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Diability']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Allergy']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['Allergies']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['IC']; ?> </td>
                      </tr>
                      <tr>
                        <td> <?php echo $row['It']; ?> </td>
                      </tr>
                     
                    }




                }
                ?>
                
                
            </table>
        </div>
    </center>





        
</body>
</html>