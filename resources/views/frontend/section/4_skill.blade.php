<!-- Skills-Area-Start -->

<section class="skills-area section-padding-top col-md-8" id="skills-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <h3 class="title">My Skills.</h3>
                </div>
                <div class="row skills wow fadeInUp" data-wow-delay="0.2s">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-laptop-code"></i>
                                    FrontEnd Developer
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">Bootstrap</p>
                                            <span class="progress-number">80%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="80" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">JavaScript</p>
                                            <span class="progress-number">70%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="70" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-layer-group"></i>
                                    BackEnd Developer
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">PHP</p>
                                            <span class="progress-number">60%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="60" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">Laravel</p>
                                            <span class="progress-number">80%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="80" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">MySql</p>
                                            <span class="progress-number">60%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="60" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">DB 設計</p>
                                            <span class="progress-number">75%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="75" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-swatchbook"></i>
                                    Tools
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">AWS</p>
                                            <span class="progress-number">60%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="60" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">Photoshop</p>
                                            <span class="progress-number">70%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="70" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">Illustrator</p>
                                            <span class="progress-number">80%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="80" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="skill">
                                        <div class="skill-texts">
                                            <p class="progress-text">Figma</p>
                                            <span class="progress-number">85%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" data-percent="85" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <figure class="single-image text-right wow fadeInRight">
                    <img src="{{ asset('frontend/assets/images/skill.jpg') }}" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- Skills-Area-End -->

@push('scripts')
    <script>
        const progressBars = document.querySelectorAll('.progress-bar');

        // Loop through each progress bar and set its initial width to 0%
        progressBars.forEach((bar) => {
            bar.style.width = '0%';

            // Add an animation class to start the animation
            bar.classList.add('initial');

            // Get the data-percent value
            const percent = bar.getAttribute('data-percent');

            // Use a setTimeout to delay adding the actual percentage width
            setTimeout(() => {
                bar.style.width = percent + '%';
            }, 100);
        });
    </script>
@endpush
