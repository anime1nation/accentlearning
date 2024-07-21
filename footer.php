<!-- footer area start -->
    <footer>
        <div class="footer-top has-color pt--120 pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget-company">
                            <a href="index.php"><img src="assets/images/icon/logo.png" alt="image"></a>
                            <div class="address">
                                <h6>CONTACT</h6>
                                <p>29, Gaurs Villa, Gopal Park, Shobhagpura, Behind Arjun Bagh Restaurant, Udaipur City, Rajasthan - 313001</p>
                            </div>
                            <div class="address">
                                <h6>CALL US</h6>
                                <p>+91-9001797549</p>
                            </div>
                            <div class="address">
                                <h6>GENERAL ENQUIRIES</h6>
                                <p><a href="mailto: accnlrng@gmail.com">accnlrng@gmail.com</a></p>
                            </div>
                            <!--<ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget footer-link">
                            <h4 class="fwidget-title mb-5 pb-3 primary-color">Footer Menu</h4> 
                            <ul>
                                <li><a href="index.php"><i class="fa fa-arrow-right"></i>Home</a></li>
                                <li><a href="about.php"><i class="fa fa-arrow-right"></i>About Us</a></li>
                                <li><a href="courses.php"><i class="fa fa-arrow-right"></i>Courses</a></li>
                                <li><a href="why_us.php"><i class="fa fa-arrow-right"></i>Why Us</a></li>
                                <li><a href="contact.php"><i class="fa fa-arrow-right"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget widget-opening">
                            <h4 class="fwidget-title mb-5 pb-3 primary-color">Locate Us</h4>
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.99039094353!2d73.71153584452895!3d24.608370678510337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e507391992cb%3A0x5576c1d8ad94cc87!2sAccent%20Learning%20Centre%20IELTS%20%7C%20PTE!5e0!3m2!1sen!2sin!4v1665385198964!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                           <!--<ul>
                                <li><span>Mon - Tus :</span>6.00 am - 10.00 pm</li>
                                <li><span>Wed - Tur :</span>8.00 am - 6.00 pm</li>
                                <li><span>Friday :</span>3.00 pm - 8.00 pm</li>
                                <li><span>Sunday :</span>Closed</li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>Copyright © 2022 <span><a class="primary-color" href="https://www.accentlearning.in/" target="_blank">Accent Learning</a> </span> - All Rights Reserved. </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="https://malsup.github.io/jquery.form.js"></script> 
	
<!--Enquire Now Modal -->	

<div class="modal fade" id="careerFormModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
				  <!--<span id="modal-position"></span>-->
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">×</span>
					</button>
                    <h3 class="text-center text-theme-colored mb-20">Enquire Now</h3>
                    <form id="job_apply_form" name="job_apply_form" action="career_send_mail.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Name <small>*</small></label>
                            <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_email">Email <small>*</small></label>
                            <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                          </div>
                        </div>
                      </div>
                      <div class="row">               
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_phone">Phone </label>
                            <input name="form_phone" class="form-control" type="text" required="" placeholder="Enter Phone">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_job_post">Entrance exam you need preparation for </label>
                            <input name="form_job_post" class="form-control required" id="career_position" type="text" value="" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Message <small>*</small></label>
                        <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Your Message"></textarea>
                      </div>
                      <!--<div class="form-group">
                        <label>C/V Upload</label>
                        <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                        <small>Maximum upload file size: 500 KB</small>
                      </div>-->
                      <div class="form-group text-align-center">
                        <!--<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />-->
                        <button type="submit" class="btn btn-modal btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                      </div>
                    </form>
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                      $("#job_apply_form").validate({
                        submitHandler: function(form) {
							//alert("testing"); return false;
                          var form_btn = $(form).find('button[type="submit"]');
                          var success_form_result_div = '#success-form-result';
						  var failure_form_result_div = '#failure-form-result';
                          $(success_form_result_div).remove();
						  $(failure_form_result_div).remove();
                          form_btn.before('<div id="success-form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
						  form_btn.before('<div id="failure-form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
                          var form_btn_old_msg = form_btn.html();
                          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                          $(form).ajaxSubmit({
                            dataType:  'json',
							//success: function(responseText, textStatus) { alert(responseText);  }
                            success: function(data) {								
                              if( data.status == 'true' ) {
                                $(form).find('.form-control').val('');
								$(success_form_result_div).html(data.success_msg).fadeIn('slow');
								setTimeout(function(){ $(success_form_result_div).fadeOut('slow') }, 6000);
								console.log(data.success_msg);
								console.log(data.status);
                              }
							  else
							  {
									$(failure_form_result_div).html(data.failure_msg).fadeIn('slow');
									setTimeout(function(){ $(failure_form_result_div).fadeOut('slow') }, 6000);
									console.log(data.failure_msg);
									console.log(data.status);
							  }
                              form_btn.prop('disabled', false).html(form_btn_old_msg);
                              
                            }
                          });
                        }
                      });
					
					  // data-* attributes to scan when populating modal values
						/*var ATTRIBUTES = ['position'];

						$('[data-toggle="modal"]').on('click', function (e) {
						  // convert target (e.g. the button) to jquery object
						  e.preventDefault();
						  var $target = $(e.target);
						  // modal targeted by the button
						  var modalSelector = $target.data('target');
						  
						  // iterate over each possible data-* attribute
						  ATTRIBUTES.forEach(function (attributeName) {
							// retrieve the dom element corresponding to current attribute
							var $modalAttribute = $(modalSelector + ' #modal-' + attributeName);
							var dataValue = $target.data(attributeName);
							
							$("input#career_position").val(dataValue);
							
							// if the attribute value is empty, $target.data() will return undefined.
							// In JS boolean expressions return operands and are not coerced into
							// booleans. That way is dataValue is undefined, the left part of the following
							// Boolean expression evaluate to false and the empty string will be returned
							$modalAttribute.text(dataValue || '');
						  });
						});*/
						
						
						
                    </script>
						<div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-modal btn-flat btn-theme-colored btn-sm mt-20 pt-10 pb-10">Close</button>
                        </div>
                  </div>
                </div>
              </div>

<!--Enquire Now Modal-->





<!--Enquire Now Header Image Modal-->

<div class="modal fade" id="enquire_now_header_image_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content p-30 pt-10">
				  <!--<span id="modal-position"></span>-->
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">×</span>
					</button>
                    <h3 class="text-center text-theme-colored mb-20">Enquire Now</h3>
                    <form id="enquire_now_form" name="enquire_now_form" action="career_send_mail.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Name <small>*</small></label>
                            <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_email">Email <small>*</small></label>
                            <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                          </div>
                        </div>
                      </div>
                      <div class="row">               
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_phone">Phone </label>
                            <input name="form_phone" class="form-control" type="text" required="" placeholder="Enter Phone">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="form_job_post">Entrance exam you need preparation for </label>
                            <input name="form_job_post" class="form-control required" id="career_position" type="text" value="" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Message <small>*</small></label>
                        <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Your Message"></textarea>
                      </div>
                      <!--<div class="form-group">
                        <label>C/V Upload</label>
                        <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                        <small>Maximum upload file size: 500 KB</small>
                      </div>-->
                      <div class="form-group text-align-center">
                        <!--<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />-->
                        <button type="submit" class="btn btn-modal btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                      </div>
                    </form>
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                      $("#enquire_now_form").validate({
                        submitHandler: function(form) {
							//alert("testing"); return false;
                          var form_btn = $(form).find('button[type="submit"]');
                          var success_form_result_div = '#success-form-result';
						  var failure_form_result_div = '#failure-form-result';
                          $(success_form_result_div).remove();
						  $(failure_form_result_div).remove();
                          form_btn.before('<div id="success-form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
						  form_btn.before('<div id="failure-form-result" class="alert alert-danger" role="alert" style="display: none;"></div>');
                          var form_btn_old_msg = form_btn.html();
                          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                          $(form).ajaxSubmit({
                            dataType:  'json',
							//success: function(responseText, textStatus) { alert(responseText);  }
                            success: function(data) {								
                              if( data.status == 'true' ) {
                                $(form).find('.form-control').val('');
								$(success_form_result_div).html(data.success_msg).fadeIn('slow');
								setTimeout(function(){ $(success_form_result_div).fadeOut('slow') }, 6000);
								console.log(data.success_msg);
								console.log(data.status);
                              }
							  else
							  {
									$(failure_form_result_div).html(data.failure_msg).fadeIn('slow');
									setTimeout(function(){ $(failure_form_result_div).fadeOut('slow') }, 6000);
									console.log(data.failure_msg);
									console.log(data.status);
							  }
                              form_btn.prop('disabled', false).html(form_btn_old_msg);
                              
                            }
                          });
                        }
                      });
					
					  
                    </script>
						<div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-modal btn-flat btn-theme-colored btn-sm mt-20 pt-10 pb-10">Close</button>
                        </div>
                  </div>
                </div>
              </div>

<!--Enquire Now Header Image Modal-->
</body>

</html>