<div  class="body" style=" background-image: url('public/images/bg/img_1.jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <br>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1) : ?>
              <div class="row pt-4 justify-content-center mx-0">
                  <div class="col-md-4">
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Login</strong> ou <strong>Mot de passe</strong> incorrect !.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  </div>
              </div>
    <?php endif; ?>
    <div class="row justify-content-center mt-5 py-4 mx-0">
      <div class="col-sm-4 mt-4">
        <div class="card card-body shadow-sm" style="height: 510px; margin-top: auto; margin-bottom: auto; width: 400px;background-color: rgba(0,0,0,0.5) !important;">
          <form class="my-2 ml-auto mr-auto py-2   col-10" method="post" action="<?= site_url('app/connexion'); ?>" style="text-align: center;">
                <div class="image row justify-content-center">
                  <span class="login-image-container bg-white">
                  <i class="fas fa-user-circle"></i>
                  </span>
                </div>

                  <br><br>
                <h1 class="h3 mb-3 font-weight-normal">CONNEXION</h1>

                  <div class="form-label-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" value="<?= $_GET['email']??""?>" required >
                    <label for="email" style="text-align: left;">Adresse email</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <label for="password" style="text-align: left;">Password</label>
                  </div>

                

                <button class="btn btn-primary form-control" type="submit" name="submit_login"><i class='fas fa-paper-plane'>ENVOYER</i></button>
                <div class="row ml-2 my-3 text-white">
                  <a href="<?= site_url('SignUp/index'); ?>" class="btn-link text-white text-center">Créer un compte ?</a>
                </div>
                <?php if(! empty( $login_error)) : ?>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10 has-error">
          <span class="help-block"><?= $login_error; ?></span>
        </div>
      </div>
      <!-- (...) -->
    <?php endif; ?>

                <p class="mt-3 mb-3 text-white">&copy; instinctivement</p>
          </form>
        </div>
      </div>
    </div>
  </div>


<?php if (isset($_GET['faux']) && $_GET['faux'] == 1) : ?>
    <script>
          Swal.fire('Email ou mot de passe incorrect !','message','error');
      </script>";
<?php endif; ?>