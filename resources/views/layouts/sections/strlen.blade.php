{{-- @if (strlen($listing['description']) > 180)
                            <p>
                                {{ substr($listing['description'], 0, 180) }}
                                <span>
                                    <a class="nav-link text-secondary"
                                        href="{{ route('listing', $listing['id']) }}">Read
                                        more . .</a>
                                </span>
                            </p>
                        @else
                            <p>
                                {{ $listing['description'] }}
                            </p>
                        @endif --}}
