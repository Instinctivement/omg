        <br>

        <div class="row justify-content-center mt-4 py-4 mx-0">
          <div class="col-sm-8 mt-2"> 
            <div class="card card-body shadow-sm" style="margin-top: auto; margin-bottom: auto; background-color: rgba(0,0,0,0.5) !important;">
              <form method="post" action="<?= site_url('signup/ecrire'); ?>" class="needs-validation text-white" novalidate>
                  <div class="image-inscription row justify-content-center">
                      <span class="inscription-image-container bg-white">
                    <i class="fas fa-user-circle"></i>
                    </span>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="name">Nom<span class="text-danger">*</span></label>
                      <input type="text" name="name" class="form-control" maxlength="30" id="name" value="<?= $data['name'] ?? '' ?>" placeholder="Ex: User" required aria-describedby>
                      <div class="valid-feedback">
                            Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                            Le champ est vide
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="pseudo">Pseudo<span class="text-danger">*</span></label>
                      <input type="text" name="pseudo" id="pseudo" class="form-control" maxlength="15" placeholder="Ex: Pseudo" value="<?= $data['pseudo'] ?? '' ?>" required>
                      <div class="valid-feedback">
                              Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                             Le champ est vide !
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="email">Email address<span class="text-danger">*</span></label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Ex: adress@gmail.com"  value="<?= $data['email'] ?? '' ?>" required>
                      <div class="valid-feedback">
                             Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                              Le champ est vide
                            </div>
                       </div>
                    <div class="col-md-6 mb-3">
                      <label for="birthday">Date de naissance<span class="text-danger">*</span></label>
                      <input min="1950-01-01" max="2000-01-01" type="date" name="birthday"  id="dat" class="form-control" placeholder="birthday" value="<?= $data['birthday'] ?? '' ?>" required>
                      <div class="valid-feedback">
                              Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                             Le champ est vide !
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="gender">Sexe<span class="text-danger">*</span></label>
                      <select requitext-danger name="gender" class="custom-select" id="gender" required>
                              <option disabled selected>Genre...</option>
                              <option <?= (isset($data['gender'])) && $data['gender'] === "Masculin" ? 'selected' : '' ?> value="Masculin">Masculin</option>
                              <option <?= (isset($data['gender'])) && $data['gender'] === "Feminin" ? 'selected' : '' ?> value="Feminin">Feminin</option>
                        </select>
                      <div class="valid-feedback">
                             Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                              Le champ est vide
                            </div>
                       </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone">Téléphone<span class="text-danger">*</span></label>
                      <input type="number" name="phone"  class="form-control" placeholder="Ex: 65654****" id="phone" value="<?= $data['phone'] ?? '' ?>" required>
                      <div class="valid-feedback">
                              Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                             Le champ est vide !
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="password">Password<span class="text-danger">*</span></label>
                      <input type="password" min="4" max="12" name="password" id="password" class="form-control" placeholder="password" id="pass2" value="<?= $data['password'] ?? '' ?>" required>
                      <div class="valid-feedback">
                             Merci de remplire avec de bonnes informations !
                      </div>
                      <div class="invalid-feedback">
                              Le champ est vide
                            </div>
                       </div>
                    <div class="col-md-6 mb-3">
                      <label for="confirm">Confirm Password<span class="text-danger">*</span></label>
                      <input type="password" min="4" max="12" name="cpassword" id="confirm" class="form-control" placeholder="password" id="pass1" value="<?= $data['password'] ?? '' ?>" required>
                      <div class="valid-feedback">
                              Merci de remplire avec de bonnes informations !                      </div>

                      <div class="invalid-feedback">
                             Le champ est vide !
                      </div>
                    </div>
                  </div>

                      <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Accepté les cconsditions d'utilisation 
                        </label>
                        <div class="invalid-feedback">
                        You must agree before submitting.
                        Vous devez obligatoirement accepter les conditions d'utilisation
                        </div>
                    </div>
                    </div>

                  <div class="row justify-content-center">
                      <button type="submit" name="submit_signup" class="btn btn-primary col-md-6 mb-3-md-4"><i class='fas fa-paper-plane'>ENVOYER</i></button>
                  </div>

                  <div class="row ml-2 my-3">
                      Vous avez deja un compte?&nbsp;<a href="<?= site_url('login/index'); ?>">Connectez-vous</a>
                  </div>
                  <div class="row ml-2 my-3">
                      <a href="./" class="btn-link text-light">Accueil</a>
                  </div>
              </form>
          </div>
         </div>
        </div>

