<div>
    @if ($categories->isNotEmpty())
        <div class="gallery-filter mb-5">
            <ul class="gallery-filter-list">
                <li>
                    <button
                        type="button"
                        wire:click="setCategory('')"
                        class="gallery-filter-link {{ $category === '' ? 'is-active' : '' }}"
                    >全部</button>
                </li>
                @foreach ($categories as $cat)
                    <li>
                        <button
                            type="button"
                            wire:click="setCategory('{{ $cat->slug }}')"
                            class="gallery-filter-link {{ $category === $cat->slug ? 'is-active' : '' }}"
                        >{{ $cat->localized('name') }}</button>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($pressReleases->isEmpty())
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="mb-0">暫無新聞稿。</p>
            </div>
        </div>
    @else
        <div class="row row-gap-5">
            @foreach ($pressReleases as $pressRelease)
                <a href="{{ route('press-releases.show', $pressRelease->slug) }}" class="press-release-card-link overflow-hidden" wire:key="press-release-{{ $pressRelease->id }}">
                    <article class="press-release-card row align-items-center g-4 g-lg-5">
                        <div class="col-lg-6">
                            <div class="press-release-card-image-wrapper">
                                <img
                                    src="{{ asset('storage/' . $pressRelease->featured_image) }}"
                                    alt="{{ $pressRelease->localized('title') }}"
                                    class="press-release-card-image"
                                >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            @if ($pressRelease->category)
                                <p class="press-release-card-category mb-2">{{ $pressRelease->category->localized('name') }}</p>
                            @endif
                            <h3 class="mb-3">{{ $pressRelease->localized('title') }}</h3>
                            @if ($pressRelease->summary)
                                <p class="mb-3">{{ $pressRelease->localized('summary') }}</p>
                            @endif
                            <p class="mb-0">{{ $pressRelease->date->format('Y-m-d') }}</p>
                        </div>
                    </article>
                </a>
                @if (!$loop->last)
                    <div class="col-12 press-release-card-divider p-0" wire:key="divider-{{ $pressRelease->id }}"></div>
                @endif
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                {{ $pressReleases->links() }}
            </div>
        </div>
    @endif
</div>
