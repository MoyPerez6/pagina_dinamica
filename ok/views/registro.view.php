<?php include('shared/header.php'); ?>
<style>
    body{
        background-color: lightgray;
    }
</style>
<div class="container ">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <br>
                <br>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="bg-light p-5">
                    <div class="form-group text-center">
                        <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" width="100px" height="100px" alt="">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Nombre</strong></label>
                        <input id="my-input" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Email</strong></label>
                        <input id="my-input" class="form-control" type="email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Password</strong></label>
                        <input id="my-input" class="form-control" type="password" name="pass" >
                    </div>
                    <div class="form-group">
                        <label for="my-input"><strong>Confirma Password</strong></label>
                        <input id="my-input" class="form-control" type="password" name="repitepass" >
                    </div>
                    <?php if (!empty($errores))  {?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?php echo $errores; ?></strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } ?>
                    <input type="submit" class="btn btn-info btn-lg btn-block text-uppercase btn-rounded"  value="Registrarse" name="registro" >
                    <br>
                    <strong></strong>ya tienes cuenta? <a href="login" class="text-primary"><b>Iniciar sesion</b></a>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
<?php include('shared/footer.php'); ?>