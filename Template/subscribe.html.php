<?php 
// Affiche la page d'inscription
?>
<!DOCTYPE html>
<html lang="fr">
<head>    
</head>
<body>
<div class="row h-100 justify-content-center align-items-center ">
        <div class="col-lg-4 col-md-6 col-sm-8 col-5 ">
            <h1 class="text-center h1-register">S'inscrire</h1><hr>
            <div class="list-group-item list-group-item-action d-flex align-items-center justify-content-center mb-2 mt-5">
                <form action="" method="POST" class="w-100 ">
                    <div class="form-group row">
                        <label class="register">Prénom :</label>
                        <input type="text" name="first_Name" class="form-control" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
                        <?php if (isset($errors['first_Name'])): ?>
                            <div style="color: red;"><?php echo $errors['first_Name']; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group row">
                        <label class="register">Nom :</label>
                        <input type="text" name="last_Name" class="form-control" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
                        <?php if (isset($errors['last_Name'])): ?>
                            <div style="color: red;"><?php echo $errors['last_Name']; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group row">
                        <label class="register">Email :</label>
                        <input type="text" name="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                        <?php if (isset($errors['email'])): ?>
                            <div style="color: red;"><?php echo $errors['email']; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group row">
                        <label class="register">Mot de passe :</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group row">
                        <label class="register">Confirmez le mot de passe :</label>
                        <input type="password" name="password_confirm" class="form-control">
                        <?php if (isset($errors['password'])): ?>
                            <div style="color: red;"><?php echo $errors['password']; ?></div>
                        <?php endif; ?>
                    </div><br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-light">M'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>