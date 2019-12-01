<?php require_once("../controllers/list.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h3>Lista de usuários cadastrados</h3>
    <?php if(count($users) != 0){?>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
            </tr>

            <?php 
                for($i=0; $i<count($users);$i++){
                    print "<tr>";
                    print "<td>$i<td>";
                    print "<td>".$users[$i]->getUsername()."</td>";
                    print "<td>".$users[$i]->getPassword()."</td>";
                    print "</tr>";
                }
            ?>
        </table>
    <?php } ?>
</body>
</html>