<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold">
                        <strong>
                            <?= $this->session->auth_user['user_name'] ?>
                        </strong>
                    </span>
                    <span class="text-black-50"><?= $this->session->auth_user['user_email'] ?></span><span>
                </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Manager son profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">NOM</label>
                        <input type="text" class="form-control" placeholder="first name" value="<?= $this->session->auth_user['user_name'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">PSEUDO</label>
                        <input type="text" class="form-control" value="<?= $this->session->auth_user['user_pseudo'] ?>" placeholder="surname">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">PHONE</label>
                        <input type="text" class="form-control"
                            placeholder="enter phone number" value="<?= $this->session->auth_user['user_phone'] ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">SEXE</label>
                        <input type="text" class="form-control" placeholder="enter address line 1" value="<?= $this->session->auth_user['user_gender'] ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">DATE DE NAISSANCE</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="<?= $this->session->auth_user['user_birthday'] ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">DATE D'ENREGISTREMENT</label>
                        <input type="text" class="form-control" placeholder="education" value="<?= $this->session->auth_user['singned'] ?>">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">ENREGISTRER</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Editer sa
                        biographie</span>
                        <span class="border px-3 p-1 add-experience"><i
                            class="fa fa-plus"></i>&nbsp;Biographie</span>
                        </div>
                        <br>
                <div class="col-md-12">
                    <label class="labels">BIOGRAPHIE</label>
                    <textarea class="form-control" rows="12" id="comment" name="text"><?= $this->session->auth_user['user_biographie'] ?></textarea>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>