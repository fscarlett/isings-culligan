<div class="product-modal">
  <div class="product-modal-content">
    <div class="product-modal-header">
      <!-- <img src="/images/hugging-heart.svg" alt="" /> -->
      <h2><?php the_title(); ?></h2>

    </div>

    
    <div class="product-modal-form-wrapper">

      <?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true"]'); ?>
      
      <!-- form shortcode goes here -->

      <p class="close-product-modal-link">Cancel</p>

    </div>
  </div>
</div>


<script type="text/javascript">
  var modal = document.querySelector(".product-modal");
  var trigger = document.querySelector(".product-modal-trigger");
  var closeButton = document.querySelector(".close-product-modal-link");

  function toggleModal() {
    modal.classList.toggle("show-product-modal");
  }

  function windowOnClick(event) {
    if (event.target === modal) {
      toggleModal();
    }
  }

  trigger.addEventListener("click", toggleModal);
  closeButton.addEventListener("click", toggleModal);
  window.addEventListener("click", windowOnClick);
  closeButton.addEventListener("keydown", function(e) { 
    var code = e.keyCode;
    // 13 = Return, 32 = Space
    if ((code === 13) || (code === 32)) {
      window.location.reload(false); 
    }
  });

</script>