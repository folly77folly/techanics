<!-- <?php
    require 'profile_top.php';
?> -->



        <br>
        <br>
        <br>
    <section class="mt-5">
        <div class="container mb-5">
          <div class="row">
              <div class="col-lg-3 col-md-4 d-md-block">
                  <div class="card bg-common card-left">
                      <div class="card-body">
                          <nav class="nav d-md-block d-none">
                              <a data-toggle="tab" class="nav-link active aa" href="#profile"><i class="fas fa-user mr-1"></i>Profile</a>
                              <a data-toggle="tab" class="nav-link aa" href="#account"><i class="fas fa-user-cog mr-1"></i>Account setting</a>
                              <a data-toggle="tab" class="nav-link aa" href="#address"><i class="far fa-address-card mr-1"></i>Addresses</a>
                              <a data-toggle="tab" class="nav-link aa" href="contact.html"><i class="fas fa-shopping-bag mr-1"></i>My orders</a>
                              <a data-toggle="tab" class="nav-link aa" href="#"><i class="fab fa-opencart mr-1"></i>Cart</a>
                          </nav>
                      </div>
                  </div>
              </div>
          
          <div class="col-lg-9 col-md-8">
              <div class="card">
                  <div class="card-header border-bottom mb-3 d-md-none">
                      <ul class="nav nav-tabs card-header-tabs nav-fill">
                          <li class="nav-item">
                            <a data-toggle="tab" class="nav-link active aa" href="#profile"><i class="fas fa-user mr-1"></i></a>
                          </li>
                          <li class="nav-item">
                            <a data-toggle="tab" class="nav-link aa" href="#account"><i class="fas fa-user-cog mr-1"></i></a>
                          </li>
                          <li class="nav-item">
                              <a data-toggle="tab" class="nav-link aa" href="#address"><i class="far fa-address-card mr-1"></i></a>
                            </li>
                          <li class="nav-item">
                            <a data-toggle="tab" class="nav-link aa" href="contact.html"><i class="fas fa-shopping-bag mr-1"></i></a>
                          </li>
                          <li class="nav-item">
                            <a data-toggle="tab" class="nav-link aa" href="#"><i class="fab fa-opencart mr-1"></i></a>
                          </li>
                        </ul>
                  </div>
      
                  <!--user profile-->
                  <div class="card-body tab-content border-0">
                      <!-- //actual profile start -->
                      <div class="tab-pane active" id="profile">
                          <h6>Your Profile Information</h6>
                          <hr>
                          <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Full Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rahul kumar">
                              <small class="form-text text-muted">Please enter your fullname</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Contact no</label>
                              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="999999999">
                              <small class="form-text text-muted">Please enter your contact no</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="abc@gmail.com">
                              <small class="form-text text-muted">Please enter your email</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Loaction</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rahul kumar">
                            </div>
      
                            <div class="form-group form-text text-muted small">
      
                            </div>
                            <button class="btn btn-outline-info" type="button">Update Profile</button>
                            <button class="btn btn-outline-info" type="button">Reset Changes</button>
                          </form>
                      </div>
                       <!-- //actual profile end -->
    
                        <!-- account setting start -->
                      <div class="tab-pane active" id="account">
                          <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">User Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rahul kumar">
                              <small class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim</small>
                            </div>
                          </form>
                          <hr>
                          <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Deactivate account</label>
                              <p class="text-muted">Once you delete your account, there is no going back, Please be certain</p>
                            </div>
                            <button class="btn btn-danger" type="button">Deactivate account</button>
                          </form>
                      </div> 
                       <!-- account setting end -->
    
                       <div class="tab-pane active" id="address">
                        <form>
                          <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">City</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputState">State</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip">Zip</label>
                              <input type="text" class="form-control" id="inputZip">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Add Address</button>
                        </form>
                    </div> 
                  </div>
                  </div>
              </div>
          </div>
    </div>
    </section>

<?php
    require 'footer.php';
?> 