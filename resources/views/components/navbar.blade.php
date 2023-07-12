          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
              id="layout-navbar">

              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none ">
                  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                      <i class="bx bx-menu bx-sm"></i>
                  </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                  <!-- Search -->
                  <div class="navbar-nav align-items-center" style="margin-right:30%;">
                      <span class="fw-semibold d-block">Hello,  Cok!</span>
                  </div>
                  {{-- <div id="time-left"></div> --}}

                  <ul class="navbar-nav flex-row align-items-center ms-auto">

                      <!-- User -->
                      <li class="nav-item navbar-dropdown dropdown-user dropdown">
                          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                              data-bs-toggle="dropdown">
                              <div class="avatar avatar-online">
                                  <img src="{{ asset('assets/sneat/') }}/assets/img/avatars/default.png" alt
                                      class="w-px-40 h-auto rounded-circle" />
                              </div>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end">
                              <li>
                                  <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalProfile">
                                      <div class="d-flex">
                                          <div class="flex-shrink-0 me-3">
                                              <div class="avatar avatar-online">
                                                  <img src="{{ asset('assets/sneat/') }}/assets/img/avatars/default.png" alt
                                                      class="w-px-40 h-auto rounded-circle" />
                                              </div>
                                          </div>
                                          <div class="flex-grow-1">
                                              {{-- <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                              <small class="text-muted">{{ Auth::user()->unit->name }}</small> --}}
                                              <span class="fw-semibold d-block"></span>
                                              <small class="text-muted"></small>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <div class="dropdown-divider"></div>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                      data-bs-target="#modalProfile">
                                      <i class="bx bx-user me-2"></i>
                                      <span class="align-middle">My Profile</span>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="#">
                                      <i class="bx bx-cog me-2"></i>
                                      <span class="align-middle">Settings</span>
                                  </a>
                              </li>
                              <li>
                                  <div class="dropdown-divider"></div>
                              </li>
                              <li>
                                  {{-- <form action="{{ route('logout') }}" method="POST"> --}}
                                  <form action="" method="POST">
                                      {{-- @csrf --}}
                                      <button type="submit" class="dropdown-item">
                                          <i class="bx bx-power-off me-2"></i>
                                          <span class="align-middle">Log Out</span>
                                      </button>
                                  </form>
                              </li>
                          </ul>
                      </li>
                      <!--/ User -->
                  </ul>
              </div>
          </nav>
          <!-- / Navbar -->

          {{-- Modal Profile --}}
          <div class="col-lg-4 col-md-6">
              <div class="mt-3">
                  <!-- Modal -->
                  <div class="modal fade" id="modalProfile" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="modalCenterTitle">My Information</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                              </div>

                              <div class="container mt-3">
                                  <div class="col-xl-12">
                                      {{-- <h6 class="text-muted">My Information</h6> --}}
                                      <div class="nav-align-top mb-4">
                                          <ul class="nav nav-pills mb-3 nav-fill " role="tablist">
                                              <li class="nav-item">
                                                  <button type="button" class="nav-link active" role="tab"
                                                      data-bs-toggle="tab"
                                                      data-bs-target="#navs-pills-justified-profile"
                                                      aria-controls="navs-pills-justified-profile"
                                                      aria-selected="false">
                                                      <i class="tf-icons bx bx-user"></i> My Profile
                                                  </button>
                                              </li>
                                              <li class="nav-item">
                                                  <button type="button" class="nav-link " role="tab"
                                                      data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home"
                                                      aria-controls="navs-pills-justified-home" aria-selected="true">
                                                      <i class="tf-icons bx bx-key"></i> Change Password
                                                  </button>
                                              </li>
                                          </ul>
                                          <div class="tab-content">

                                              <div class="tab-pane fade show active" id="navs-pills-justified-profile"
                                                  role="tabpanel">
                                                  <div class="col row">
                                                      <label for="emailWithTitle" class="form-label">Name</label>
                                                      {{-- <p>{{ Auth::user()->name }}</p> --}}
                                                  </div>
                                                  <hr>
                                                  <div class="col row">
                                                      <label for="emailWithTitle" class="form-label">Email</label>
                                                      {{-- <p>{{ Auth::user()->email }}</p> --}}
                                                  </div>
                                                  <hr>
                                                  <div class="col row">
                                                      <label for="emailWithTitle" class="form-label">Unit</label>
                                                      {{-- <p>{{ Auth::user()->unit->name }}</p> --}}
                                                  </div>
                                                  <hr>
                                                  <div class="col row">
                                                      <label for="emailWithTitle" class="form-label">Role</label>
                                                      {{-- <p>{{ Auth::user()->role->name }}</p> --}}
                                                  </div>
                                                  <hr>
                                              </div>

                                              <div class="tab-pane fade " id="navs-pills-justified-home"
                                                  role="tabpanel">
                                                  {{-- <form action="{{ route('ChangePassword') }}" method="POST" enctype="multipart/form-data"> --}}
                                                      {{-- @csrf --}}
                                                      <div class="form-password-toggle col mb-3">
                                                          <label class="form-label" for="basic-password">New
                                                              Password</label>
                                                          <div class="input-group input-group-merge">
                                                              <input type="password" name="new_password"
                                                                  class="form-control" id="basic-password"
                                                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                  aria-describedby="basic-default-password" required>
                                                              <span class="input-group-text cursor-pointer"
                                                                  id="basic-default-password">
                                                                  <i class="bx bx-hide"></i>
                                                              </span>
                                                          </div>
                                                      </div>
                                                      <div class="form-password-toggle col mb-3">
                                                          <label class="form-label"
                                                              for="basic-new-password">Confirm New
                                                              Password</label>
                                                          <div class="input-group input-group-merge">
                                                              <input type="password" name="confirm_new_password"
                                                                  class="form-control" id="basic-new-password"
                                                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                  aria-describedby="basic-default-password" required>
                                                              <span class="input-group-text cursor-pointer"
                                                                  id="basic-default-password">
                                                                  <i class="bx bx-hide"></i>
                                                              </span>
                                                          </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-outline-secondary"
                                                              data-bs-dismiss="modal">
                                                              Close
                                                          </button>
                                                          <button type="submit" class="btn btn-primary">Save
                                                              changes</button>
                                                      </div>
                                                  {{-- </form> --}}
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Pills -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
