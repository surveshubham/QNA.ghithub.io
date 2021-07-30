<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> login</h5><p>  <p>
        <small>sign up to login</small>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="/shubham/QNA/component/_handlelogin.php?" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" id="lusername" name="lusername">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="lpassword" name="lpassword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
     
    </div>
  </div>
</div>

<!--ends here-->