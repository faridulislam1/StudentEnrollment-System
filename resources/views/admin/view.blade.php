@extends('layout')
@section('content')

<div class="row user-profile">
            <div class="col-lg-4 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">Farid</p>
                  <p class="designation">Web Developer</p>
                  <a class="email" href="#">ffaridul10@gmail.com</a>
                  <a class="number" href="#">+880 1758254410</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam consectetur ex quod.</p>
                  </div>
                 <!--  <div class="info-links">
                    <a class="website" href="https://www.bootstrapdash.com/">
                      <i class="icon-globe icon"></i>
                      <span>https://www.bootstrapdash.com/</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span>https://www.facebook.com/johndoe</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span>https://www.linkedin.com/johndoe</span>
                    </a>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-lg-8 side-right">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h2 class="card-title">Details</h2>
                    <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Avatar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <form>
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Change user name">
                          </div>
                          <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" placeholder="Change designation">
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Change mobile number">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Change email address">
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" rows="6" class="form-control" placeholder="Change address"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="website">Website URL</label>
                            <input type="text" class="form-control" id="website" placeholder="Change website url">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div><!-- tab content ends -->
                      <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                        <div class="wrapper mb-5 mt-4">
                          <div class="badge badge-warning text-white">Note : </div>
                          <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                        </div>
                        <form>
                          <input type="file" class="dropify" data-max-file-size="1mb" data-default-file="http://via.placeholder.com/100x100"/>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <form>
                          <div class="form-group">
                            <label for="change-password">Change password</label>
                            <input type="password" class="form-control" id="change-password" placeholder="Enter you current password">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" id="new-password" placeholder="Enter you new password">
                          </div>
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



@endsection