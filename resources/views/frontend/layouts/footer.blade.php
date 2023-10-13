<!-- Contact-Area-Start -->

<section class="footer-contact" id="contact">
    <div class="overlay" style="background: url('{{ secure_asset('frontend/assets/images/footer.jpg') }}') 50% 50%"></div>
    <div class="container">
        <div class="row">
            <div class="contact-info col-lg-4">
                <p>Contact</p>
                <h3>Let's Work<br>
                    Together.</h3>
                <h6><a href="https://github.com/goyataiko"><i class="fab fa-github"></i>Git Hub</a></h6>
            </div>
            <div class="contact-form col-lg-7">

                <div class="card">
                    <div class="card-header">
                        <h4>メール送信フォーム</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact') }}" method="post">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2">Email</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" name="email" class="form-control"
                                        value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <code>{{ $errors->first('email') }}</code>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2">Name</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control">
                                    @if ($errors->has('name'))
                                        <code>{{ $errors->first('name') }}</code>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2">Message</label>
                                <div class="col-sm-12 col-md-10">
                                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <code>{{ $errors->first('message') }}</code>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label col-2"></label>
                                <div class="col-sm-12 col-md-10">
                                    <button id="sendButton" type="submit" class="button-primary mouse-dir">Send Now
                                        <span class="dir-part"></span></button>
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


<!-- Footer-Area-Start -->

<footer class="footer-area">

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright 2023 TechTrail. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-Area-End -->

<script>
    const button = document.getElementById("sendButton");

    button.addEventListener("click", function() {

        setTimeout(() => {
            button.disabled = true;
            button.innerHTML = "Sending..."
        }, 400);

        setTimeout(() => {
            button.disabled = false;
            button.innerHTML = "Send Now "
        }, 4000);
    });
</script>
