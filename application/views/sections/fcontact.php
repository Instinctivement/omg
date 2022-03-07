<div class="container">
  <div class="row justify-content-center mt-5 py-4 mx-0">
    <div class="col-sm-8 mt-4">
      <div class="card card-body shadow-sm " style="background-color: rgba(0,0,0,0.5) !important;">
        <form method="post" action="" class="row g-3 needs-validation" novalidate>
          <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Nom</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
              <input type="text" name="name" class="form-control" id="validationCustomUsername"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Merci de renseigner un nom.
                <?php echo form_error('name'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustomUseremail" class="form-label">Email</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-fill"></i></span>
              <input type="email" name="email" class="form-control" id="validationCustomUseremail"
                aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Merci de renseigner un e-mail.
                <?php echo form_error('email'); ?>
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
                <?php echo form_error('sujet'); ?>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="validationTextarea"
              placeholder="Message..." required></textarea>
            <div class="invalid-feedback">
              Please enter a message in the textarea.
              <?php echo form_error('message'); ?>
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
            <div class="col-12 justify-content-center">
              <button class="btn btn-primary" type="submit">Enregistrer</button>
            </div>
        </form>
      </div>
    </div>
  </div>

</div>
