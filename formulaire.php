<!DOCTYPE html>
<html>
<head>
    <title>formulaire d'inscription</title>
    <link rel="stylesheet" href="frontend/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bb.css">
    <style type="text/css">
    	form label{
    		color: black;
    		font-size: 18px;
    		font-family:consolas;
    	}
    </style>

</head>
<body s>
<div class="container" style="margin-top:80px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="box-shadow: 0px 0px 8px 8px #D0D0D0;font-family: Consolas;border-radius: 15px;">
            <form class="col-md-12" method="post"  action="cible.php">
            <div class="form-group">
                <legend><h2 style="color: red ;font-family: Consolas"> <span class="glyphicon glyphicon-comment"></span> Veuillez renseigner les informations suivantes</h2></legend>
            </div>
            <div class="form-group">
                <label for="Nom">Nom: </label>
                <input type="text" name="nom" id="Nom" autofocus="" required="required" class="form-control">
            </div>

            <div class="form-group">

                <label for="text" >Prenom</label>
                <input type="text" class="form-control"  required="required" name="prenom">
            </div>
            <div class="form-group">
                <label for="text" >Addresse</label>
                <input type="text" name="adresse" class=" form-control"  required="required" placeholder="DAKAR,Fann BP 5005">

            </div>

            <div class="form-group">
                <label for="text" >code</label>
                <input type="text" name="code" id="Numero de telephone" class="form-control"  required="required"
                       placeholder="77 275 34 32">
            </div>
            <div class="form-group">
                <label for="text"> ville</label>
                <input type="text" name="ville" class=" form-control"  required="required">
            </div>
            



            <div class="form-group">

                <input type="submit" name="Creer" value="enregistrer" class="btn btn-info">
            </div>

            </form>
        </div>

    </div>
</div>
<br><br>


</body>
</html>