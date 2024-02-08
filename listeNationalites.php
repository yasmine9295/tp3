<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from Nationalites");
$req->setFetchMode(PDO::Fetch_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>

    <main role="main">
    <div class="container">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Libellé</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
    </main>
<?php include "footer.php";

?>
