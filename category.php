<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category</title>
</head>
<body>

  <h1>MVP</h1>
  <p>
    <ul>
      <li>List the bookmarks in the specified category</li>
      <li>Have a link to the edit/delete form for each bookmark</li>
    </ul>
  </p>
  <h2>Secondary objectives:</h2>
  <p>
    <ul>
      <li>List latest bookmarks added in category</li>
      <li>Have the edit/delete/move forms on this page</li>
    </ul>
  </p>
  <table>
        <?php
            require('db.php');

            $rep = $bdd->query('SELECT * FROM `bookmarks`');
            while ($data = $rep->fetch()) {
            echo '<tr>';
            echo '<td>'.$data['id'].'</td>';
            echo '<td>'.$data['name'].'</td>';
            echo '</tr>';
            }
            $rep->closeCursor();
        ?>
        <?php
            $id = mysql_real_escape_string($_POST['bookmarks']); // mettre ca avant ou après la query mysql ???
            $requete = "SELECT * FROM bookmarks WHERE id = '$id' "; // or catergory TBD, Id = number donc utilitée de string ??
            $name = mysql_real_escape_string($_POST['bookmarks']);
            $requete = "SELECT * FROM bookmarks WHERE name = '$name' ";
        ?>
    </table>
</body>
</html>
