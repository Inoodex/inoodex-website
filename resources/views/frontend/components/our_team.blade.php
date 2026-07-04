<div class="our-team">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap -mx-4 section-row items-center">
            <div class="w-full px-4">
                <div class="section-title">
                    <h3 class="wow fadeInUp">our team</h3>
                    <h2 class="text-anime-style-3">Meet Our Experts</h2>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($teams as $team)
                <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="team-image">
                        <figure>
                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}"
                                class="w-full h-auto" />
                        </figure>

                        <div class="our-team-social-icon">
                            <ul class="flex list-none gap-2">
                                <li>
                                    <a href="{{ $team->instagram }}" class="social-icon" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $team->linkedin }}" class="social-icon" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $team->twitter }}" class="social-icon" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $team->facebook }}" class="social-icon" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center mt-2">
                        <h3>{{ $team->name }}</h3>
                        <p>{{ $team->position }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
