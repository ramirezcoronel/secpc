<?php
	if ($this->error) {
?>
  <div class="modal-back">
  <div class="modal">
  <div class="modal-header">
    <p>Ha ocurrido un error!</p>
  </div>
  <div class="modal__box">
   <p><?php echo $this->error;?></p>
        </div>
  <div class="bottom">
    <button class="botom">Ok</button>
  </div>
</div>  
</div>

	

<?php
	}
?>