<?php get_header(); ?>

<div class="row" style="height: 500px;">
              <div class="col-md-5 col-md-offset-4" style="border: 1px solid; margin-top: 10px;">
                  <br>
                  <form action="index.php" method="post">
                      <div class="form-group">
                          <label> user Name</label>
                              <input type="text" name="email" />
                       </div>
                       
                      <div class="form-group">
                          <label> password</label>
                            <input type="password" name="pass"/>
                       </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                         
                  </form>
             
              </div>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>