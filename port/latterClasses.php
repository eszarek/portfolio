<?php

require_once "connect.php";

$sql = 'SELECT * FROM csClass order by CourseNumber';

//prepares a statement for execution

$stmt = $pdo->prepare($sql);

//execute the query
$stmt->execute();

//fetched the next row and returns array
//default: array indexed by column name and o-indexed column header
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
$count = count($result);
if(empty($result)){
    echo "<p class='error'>Nothing found, please try again. <a href='index.php'>Return to Home</a></p>";
}else {
    echo '<div id=\"allClasses\">

  <table>
  <tr>
                <th>Class Number</th>
                <th>Class Name</th>

            </tr>
  ';
    for ($i = $count/2; $i < $count; $i++) {
        // Process the row
        $row = $result[$i];
        if (!empty($row['CDescription'])) { ?>

            <tr onClick='toggleRow(this)'>
                <td id="underlineHeading">

                    <?php echo $row['CourseNumber'];?>

                </td>
                <td >

                    <?php echo $row['CName'];?>

                </td >


                <td class='expanded-row-content hide-row' ">

                <?php echo $row['CDescription'];?>

                </td>
            </tr>
        <?php }


        else{ ?>
            <tr>
                <td>

                    <?php echo $row['CourseNumber'];?>

                </td>
                <td>
                    <?php echo $row['CName'];?>
                </td>

            </tr>



            <?php
        }//else no desc

    }//close for each
    echo "</table> </div>

 <script>
    const toggleRow = (element) => {
      element.getElementsByClassName('expanded-row-content')[0].classList.toggle('hide-row');
      console.log(Event);
    }
  </script>

";
} //close empty else

?>
