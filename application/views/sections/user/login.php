<div class="row justify-content-center mt-5 py-4 mx-0">
  <div class="col-sm-4 mt-4">
    <div class="card card-body shadow-sm " style="background-color: rgba(0,0,0,0.5) !important;">
      <form class="my-2 ml-auto mr-auto py-2   col-10" method="post" action="<?= site_url('app/connexion'); ?>"
        style="text-align: center;">
        <!-- <div class=" row justify-content-center">
          <span>
            <i class="bi bi-person-circle  image"></i>
          </span>
        </div> -->
        <br><br>
        <h1 class="h3 mb-3 font-weight-normal">CONNEXION</h1>

        <div class="row  justify-content-center mt-3">
                    <div class="col-md-12">
                        <label class="labels">PHONE</label>
                        <input type="text" class="form-control"
                            placeholder="enter phone number" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">SEXE</label>
                        <input type="text" class="form-control" placeholder="enter address line 1" value="">
                    </div>
                    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
                </div>

        <div class="form-label-group">
          <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email"
            value="<?= $_GET['email']??""?>" required>
          <label for="email" style="text-align: left;">Adresse email</label>
        </div>
        <div class="form-label-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          <label for="password" style="text-align: left;">Password</label>
        </div>
        <button class="btn btn-primary form-control" type="submit" name="submit_login"><i
            class='fas fa-paper-plane'>ENVOYER</i></button>
        <div class="row ml-2 my-3 text-white">
          <a href="<?= site_url('SignUp/index'); ?>" class="btn-link text-white text-center">Créer un compte ?</a>
        </div>
        <?php if(! empty( $login_error)) : ?>
          <div class="form-group">
            <div class="col-md-offset-2 col-md-10 has-error">
              <span class="help-block"><?= $login_error; ?></span>
            </div>
          </div>
        <?php endif; ?>
        <p class="mt-3 mb-3 text-white">&copy; instinctivement</p>
      </form>
    </div>
  </div>
</div>



<div class="container">
  <div class="row justify-content-center my-5 py-4 mx-0">
    <div class="col-sm-5 mt-4">
      <div class="card card-body shadow-sm " style="background-color: rgba(0,0,0,0.5) !important;">
        <form method="post" action="<?= site_url('app/connexion'); ?>" class="row g-3 needs-validation" novalidate>
          <br><br>
          <div>
           <h1 class="h3 mb-3 font-weight-bold">CONNEXION</h1>  
          </div>
        <div class="col-md-">
            <label for="validationCustomSujet" class="form-label">Sujet</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-chat-left-dots-fill"></i></span>
              <input type="text" name="sujet" class="form-control" id="validationCustomSujet"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Merci de renseigner un sujet.
              </div>
            </div>
          </div>
          <div class="col-md-">
            <label for="validationCustomSujet" class="form-label">Sujet</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-chat-left-dots-fill"></i></span>
              <input type="text" name="sujet" class="form-control" id="validationCustomSujet"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Merci de renseigner un sujet.
              </div>
            </div>
          </div>
          <div class="col-md-">
          <button class="btn btn-primary form-control" type="submit" name="submit_login"><i
            class='fas fa-paper-plane'>ENVOYER</i></button>
        <div class="row ml-2 my-3 text-white">
          <a href="<?= site_url('SignUp/index'); ?>" class="btn-link text-white text-center">Créer un compte ?</a>
        </div>
        <?php if(! empty( $login_error)) : ?>
          <div class="form-group">
            <div class="col-md-offset-2 col-md-10 has-error">
              <span class="help-block"><?= $login_error; ?></span>
            </div>
          </div>
        <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
<br><br>    <br><br>    <br><br>    <br><br>