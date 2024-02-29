<?php include "header.php";
include "connexionPdo.php";
$action=$_GET['action'];
$num=$_POST['num']; // je récupère le libellé du formulaire
$libelle=$_POST['libelle']; // je récupère le libellé du formulaire
$continent=$_POST['continent']; // je récupère le continent du formulaire

if($action == "Modifier"){
    $req=$monPdo->prepare("update nationalite set libelle =:libelle, numContinent= :continent where num = :num");
    $req->bindParam(':num', $num);
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':continent', $continent);
}else{
    $req=$monPdo->prepare("insert into nationalite(libelle, numContinent) values(:libelle, :continent)");
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':continent', $continent);

}
$nb=$req->execute();
$message= $action == "Modifier" ? "modifiée" : "ajoutée";

echo '<div class="container mt-5">';
echo '<div class="row">
       <div class="col mt-5">';

if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
        La nationalitée a bien été '. $message .' </div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
        La nationalitée n\'a pas été '. $message .' </div>';
}
?>
<a href="listeNationalites.php" class="btn btn-info"> Revenir à la liste des nationalités </a>
</div>  


<?php include "footer.php";

?>