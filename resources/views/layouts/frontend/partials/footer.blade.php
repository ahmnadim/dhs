<!-- CONTACT -->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-telephone114"></i>
          <ul>
            <li><h4>Phone Number</h4></li>
            <li><p>+8801689044066</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-icons74"></i>
          <ul>
            <li>
              <h4>Model Town</h4>
            </li>
            <li><p>Ashulia,Savar</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-icons142"></i>
          <ul>
            <li><h4 class="p-font-17">Email Address</h4></li>
            <li><a href="#."><p>info@dhs.com</p></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #/CONTACT -->


<!-- FOOTER -->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark"> <img class="mt-5 mb-20" alt="" src="images/logo-2.png">
                    <p>Model Town,Ashulia, Savar,Dhaka</p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">contact@dhs.com</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">www.dhs.com</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">Quick Links</h4>
                    <div class="small-title">
                        <div class="line1 background-color-white"></div>
                        <div class="line2 background-color-white"></div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list angle-double-right list-border">
                        <li> <a href="#">Home </a></li>
                        <li> <a href="#">Services </a></li>
                        <li> <a href="#">Pages</a></li>
                        <li> <a href="#">About Us </a></li>
                        <li> <a href="#">Blogs </a></li>
                        <li> <a href="#">Portfolio </a></li>
                        <li> <a href="#">Contact Us </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title ">Use Full Links</h4>
                    <div class="small-title">
                        <div class="line1 background-color-white"></div>
                        <div class="line2 background-color-white"></div>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list list-border">
                        <li><a href="#">About</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Our team</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">Opening Hours</h4>
                    <div class="small-title">
                        <div class="line1 background-color-white"></div>
                        <div class="line2 background-color-white"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="opening-hourse">
                        <ul class="list-border">
                            <li class="clearfix"> <span> Mon - Tues : </span>
                                <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Wednes - Thurs :</span>
                                <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Fri : </span>
                                <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                            </li>
                            <li class="clearfix"> <span> Sun : </span>
                                <div class="value pull-right"> Closed </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-md-3 col-sm-4">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Call Us Now</h5>
                    <div class="text-gray"> +8801677390769
                        <br> +8801689044066 </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Connect With Us</h5>
                    <ul class="socials">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 text-right">
                <div class="mb20">
                    <form action="{{ route('subscribe') }}" method="POST" class="padding-top-30">
                        @csrf
                        <input class="search" placeholder="Your Email To Subscribe" type="email" name="email">
                        <button type="submit" class="button"><i class="icon-mail-envelope-open"></i></butthon>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <p class="font-11 text-black-777 m-0 copy-right">Copyright: 2018 <a href="#"><span class="color_red">Developer House Solution</span></a>. All Rights Reserved</p>
                </div>
                <div class="col-md-6 col-sm-7 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li> <a href="#">FAQ</a> </li>
                            <li>|</li>
                            <li> <a href="#">Help Desk</a> </li>
                            <li>|</li>
                            <li> <a href="#">Support</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
 <!-- #/FOOTER -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">How can <span class="color_red">we help?</span></h2>
      </div>

      <div class="modal-body">

        <p class="bottom40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

        <div class="short-msg-tab"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Suggestion</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Question</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Problems</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-comments-o" aria-hidden="true"></i> Feedback</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="row">
                <div class="col-md-12"><h3>Suggestion</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="row">
                <div class="col-md-12"><h3>Question</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="messages">
              <div class="row">
                <div class="col-md-12"><h3>Problems</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
              <div class="row">
                <div class="col-md-12"><h3>Feedback</h3></div>
                <form class="callus padding-bottom" id="contact-form">
                
                  <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="Name" name="name" id="name" type="text">
                        </div>
                  </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <input class="keyword-input" placeholder="E - mail" name="email" id="email" type="email">
                        </div>
                   </div>

                   <div class="col-md-12">
                        <div class="single-query">
                            <textarea name="message" placeholder="Message" id="message"></textarea>
                        </div>
                   </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="dark_border" data-dismiss="modal">Cancel Message</button>
        <button type="button" class="btn_fill">Send Message</button>
      </div>

    </div>
  </div>
</div>
<!-- #/Modal -->