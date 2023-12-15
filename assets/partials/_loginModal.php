<!-- Modal -->
<?
require 'assets/styles/styles.php'
?>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"id="top">
        <h5 class="modal-title">ADMIN LOGIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="mid">
        <!--_-->
        <form action="assets/partials/_handleLogin.php" method="POST">
          <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" id="bottom" class="btn btn-success" name="submit">Login</button>
        </form>
      </div>
      
    </div>
  </div>
</div>