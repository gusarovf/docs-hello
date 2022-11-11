<script>
  $(document).ready(function() {
    var form = $(".contactform")
    var submitBtn = form.find(".button-submit")
    var successBtn = form.find(".success")
    var errorBtn = form.find(".failture")

    var showSendResult = (success) => {
      submitBtn.hide()
      if (success) {
        successBtn.show()
      } else {
        errorBtn.show()
      }

      setTimeout(() => {
        successBtn.hide()
        errorBtn.hide()
        submitBtn.show()
      }, 3000)

    }

    form.submit(function(e) {
      e.preventDefault()
      var _this = $(this)


      try {
        $.ajax({
          url: "/includes/forms/contact_form/tg-form.php",
          type: "POST",
          data: _this.serialize() + "&form-name=" + "contactform",
          success: function success(res) {
            var response = JSON.parse(res)

            if (response.hasOwnProperty("err")) {
              showSendResult(false)
            } else if (response.hasOwnProperty("okSend")) {
              showSendResult(true)
            } else {
              showSendResult(false)
            }

            _this.find($("input, textarea")).val("")
          },
        })
      } catch (e) {
        // console.log(e)
      }
    })
  })
</script>
<?php

function contact_form($name_placeholder, $contact_placeholder, $button_text, $lang)
{
  return <<<HTML
    <form class="contactform" style="margin-top: 10px;">
        <div class="card">
          <div class="card-rows">
            <div class="card-rows__item">
              <input type="text" name="name" required class="input input-bordered" placeholder="{$name_placeholder}">
            </div>
            <div class="card-rows__item">
              <input type="text" name="contact" required class="input input-bordered" placeholder="{$contact_placeholder}">
            </div>
            <div class="card-rows__item" style="display: none;">
              <input type="text" name="add" class="input input-bordered" placeholder="Add">
            </div>
          </div>
        </div>
        <input type="hidden" name="lang" value="{$lang}">
      
        <div style="padding: 10px 0;"></div>
        
        <div class="button success">✓</div>
        <div class="button failture">х</div>

        <button class="button button-submit button-yellow">
          {$button_text}
        </button>
      </form>
HTML;
}
