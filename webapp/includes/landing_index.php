  <main role="main" class="container">
    <form class="form-group" method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
      <label class="form-label" for="comment">Your message goes here。</label>
      <textarea class="form-input" id="comment" name="comment" placeholder="Comment" rows="3" required="on" minlength="2" maxlength="240"></textarea>
      <br>
      <input name="submit-comment" type="submit" value="Submit">
      <i class="icon icon-check"></i>
    </form>
  </main>
