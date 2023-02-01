<!DOCTYPE html>
<html lang="en">
<head>
	<STYLE>
        .container{
           width: 30%;
            background-color:#FDD2CC;
            padding: 10pt;
			margin: 20pt;
        }
		
    </STYLE>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="forms.php" method="post" class="forms">
            <fieldset>
                <legend>Exercice Ninja</legend>
                <div class="mb-4">
                <label for="disabledSelect" class="form-label">Nom : </label>
                <input type="text" class="form-control" placeholder="Nom" require name="firstname">
                </div>
                <div class="mb-4">
                <label for="disabledSelect" class="form-label">Couleur : </label>
                <select id="" class="form-select" name="color" require>
                <option value="Blue">Bleu</option>
                        <option value="Red">Rouge</option>
                        <option value="Green">Vert</option>
                </select>
                </div>
                <button  name="submit" class="btn btn-danger">Envoyer</button>
                
            </fieldset>
        </form>
    </div>
</body>
</html>