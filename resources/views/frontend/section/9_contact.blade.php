<!-- Contact-Area-Start -->

<section class="footer-contact" id="contact">
    <div class="overlay" style="background: url('{{ asset('frontend/assets/images/footer.jpg') }}') 50% 50%"></div>
    <div class="container">
        <div class="row">
            <div class="contact-info col-md-4">
                <p>Contact</p>
                <h3>Let's Work<br>
                    Together.</h3>
                <h6><a href="#"><i class="fab fa-github"></i>Git Hub</a></h6>
            </div>
            <div class="contact-form col-md-7">

                <div class="card">
                    <div class="card-header">
                        <h4>Contact</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post"
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2">Email</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2">Title</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2">Content</label>
                                <div class="col-sm-12 col-md-10">
                                    <textarea name="content" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2"></label>
                                <div class="col-sm-12 col-md-10">
                                    <button class="button-primary mouse-dir" type="submit">Send Now <span class="dir-part"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact-Area-End -->
