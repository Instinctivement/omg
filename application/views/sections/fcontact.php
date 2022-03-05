<div class="container">
<br>
<br>
<br>
  <form method="post" action="" class="row g-3 needs-validation" novalidate>
  <div class="col-md-6">
      <label for="validationCustomUsername" class="form-label">Nom</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
        <input type="text" name="name" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
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
        <input type="email" name="email" class="form-control" id="validationCustomUseremail" aria-describedby="inputGroupPrepend" required>
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
        <input type="text" name="sujet" class="form-control" id="validationCustomSujet" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Merci de renseigner un sujet.
          <?php echo form_error('sujet'); ?>
        </div>
      </div>
    </div>
    <div class="mb-3">
    <label for="validationTextarea" class="form-label">Message</label>
    <textarea class="form-control" name="message" id="validationTextarea" placeholder="Required example textarea" required></textarea>
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
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Enregistrer</button>
    </div>
  </form>
</div>
</div>


<br>
<br>
<br>
<br>
<br>
</div>