<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Campus Visit</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link href="http://localhost/CS3120Final/material-kit-master/assets/css/material-kit.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/diffstyles.css">
    </head>
    <body>
      <div class="header">
        <img src ="img/ucmLogo.jpeg" alt ="ucm logo" >
      </div>
        <section>
            <div class="container py-4">
              <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                  <h3 class="text-center">Student Contact Information</h3>
                  <form role="form" id="contact-form" method="post" autocomplete="off" action="http://localhost/cs3120Final/includes/process_form.php">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group input-group-dynamic mb-4">
                            <input class="form-control" aria-label="First Name..." type="text" placeholder="First Name" name="fName">
                          </div>
                        </div>
                        <div class="col-md-6 ps-2">
                          <div class="input-group input-group-dynamic">
                            <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name..." name="lName">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-group input-group-dynamic">
                                <input type="email" class="form-control" placeholder="Email Address" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-dynamic">
                              <input type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required class="form-control" placeholder="Phone (913-456-7777)" name="phone">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="Address 1" name="address1">
                            </div>
                      </div>
                      <br>
                      <div class="col-md-12">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="Address 2" name="address2">
                      </div>  
                      <br>   
                      <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                        </div>
                        <div class="col-md-4 ps-2">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="State" name="state">
                            </div>
                        </div>
                        <div class="col-md-4 ps-2">
                            <div class="input-group input-group-dynamic">
                              <input type="text" pattern="[0-9]{5}" required class="form-control" placeholder="Zip" name="zip">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="country" name="country">Country</label>
                         <select id="country" name="country">
                            <option value="usa">USA</option>
                            <option value="canada">Canada</option>
                            <option value="mexico">Mexico</option>
                        </select>
                     </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="container py-4">
              <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                  <h3 class="text-center">Academic Information</h3>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                            <label class="form-label" for="interests">Primary Academic Interest or Major</label>
                             <select id="interests" name="interests2">
                                <option value="compsci">Computer Science</option>
                                <option value="engineer">Engineering</option>
                                <option value="music">Music</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-9 mb-4">
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control" placeholder="High School Name" name="hsName">
                            </div>
                        </div>
                        <div class="col-md-3 ps-2">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="Graduation Year" name="gradYear">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="High School Address" name="hsaddress">
                            </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="input-group input-group-dynamic">
                                <input type="text" class="form-control" placeholder="City" name="hscity">
                            </div>
                        </div>
                        <div class="col-md-4 ps-2">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="State" name="hsstate">
                            </div>
                        </div>
                        <div class="col-md-4 ps-2">
                            <div class="input-group input-group-dynamic">
                              <input type="text" class="form-control" placeholder="Zip" name="hszip">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label class="form-label" for="country">Country</label>
                         <select id="country" name="country2" >
                            <option value="usa">USA</option>
                            <option value="canada">Canada</option>
                            <option value="mexico">Mexico</option>
                        </select>
                      </div>
                    <div class="col-md-12">
                        <label class="form-label" for="semester">Semester Applying For</label><br>
                         <select id="semester" name="semester">
                            <option value="spring1">Spring 2022</option>
                            <option value="fall1">Fall 2022</option>
                            <option value="spring2">Spring 2023</option>
                        </select>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </section>
          <section>
            <div class="container py-4">
              <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                  <h3 class="text-center">Visit Information</h3>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group" id="datepicker1">
                            <label class="form-label" for="visit-date">Visit Date:</label>
                            <input type="text" id="visit-date" name="visit-date" readonly="true"/>
                          </div>
                          <div class="form-group">
                            <label class="form-label"><br>Times: </label>
                            <label class="form-label">10:00 AM
                            <input name="time1" type="radio" id="10AM" value="10AM" />
                            &nbsp;
                            </label>
                            <label class="form-label">12:00 PM
                            <input name="time1" type="radio" id="12AM" value="12AM" />
                            &nbsp;&nbsp;
                            </label>
                            <label class="form-label">2:00 PM
                            <input name="time1" type="radio" id="2PM" value="2PM" />
                            </label>
                            <br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                      <h5 id="areasofinterest">Area of Interest (Select 1)</h5>
                      <br>
                      <label class="form-label">
                      <input type="checkbox" name="foo" value="StOrg"> Student Organizations<br/>
                      <input type="checkbox" name="foo" value="Sports"> Intramural/Sports Clubs<br/>
                      <input type="checkbox" name="foo" value="Greek"> Greek Life<br/>
                      <input type="checkbox" name="foo" value="Abroad"> Study Abroad<br/>
                      <input type="checkbox" name="foo" value="Lead"> Student Leadership<br/>
                      <input type="checkbox" name="foo" value="Athl"> Athletics<br/>
                      </label>
                      <br>
                      <div class="input-group mb-4 input-group-static">
                        <textarea name="note" class="form-control" id="note" rows="5" placeholder="Leave a Note"></textarea>
                      </div>
                      <div id="buttons">
                      <button type="submit" class="btn btn-primary" id="btnSubmit2" name="submit2">Submit/Print</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
          <script src="js/scripts.js"></script>
    </body>
</html>