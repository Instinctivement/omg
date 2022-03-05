<div id="messages" class="d-flex justify-content-center">
<div class="container"mt-5>>
<br>
<br>
<br>

Il y a actuellement <?php echo $nb_messages; ?> messages. <br />
				<?php echo url('écrire un commentaire', 'contact/ecrire'); ?>
			</p>

			
<br>
<br>
<div class="pagination"><?php echo $pagination; ?></div>
<div class="row g-3">
<?php foreach($messages as $message): ?>
  <div class="col-md-6" id="num_<?php echo $message->contactId; ?>">
    <div class="card">
      <div class="card-header">
       <span><?php echo htmlentities($message->contactSujet); ?></span>
        le <span><?php echo $message->contactCreatedAt; ?></span>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Par <span ><?php echo htmlentities($message->contactName); ?></span></p>
          <footer class="blockquote-footer"><?= $message->contactContent ?></footer>
        </blockquote>
      </div>
    </div>
  </div>
			<?php endforeach; ?>

      
</div>

			<div class="pagination"><?php echo $pagination; ?></div>



      <br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>