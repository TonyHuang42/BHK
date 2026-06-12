{{-- 戰前背景 --}}
<x-content-section
    id="before-the-storm"
    title="{{ __('battle.before_storm.title') }}"
    subtitle="{{ __('battle.before_storm.subtitle') }}"
    :intro="html_entity_decode(__('battle.before_storm.intro'))"
    :images="[
        'img/battle-of-hong-kong/image_1_1.jpg',
        'img/battle-of-hong-kong/image_1_2.jpg',
        'img/battle-of-hong-kong/image_1_3.jpg',
    ]"
>
    <h6 class="content-subtitle">{{ __('battle.before_storm.section_1_title') }}</h6>
    <p>{{ __('battle.before_storm.section_1_p1') }}</p>
    <p>{{ __('battle.before_storm.section_1_p2') }}</p>

    <h6 class="content-subtitle">{{ __('battle.before_storm.section_2_title') }}</h6>
    <p>{{ __('battle.before_storm.section_2_p1') }}</p>
    <p>{{ __('battle.before_storm.section_2_p2') }}</p>

    <x-slot:modal>
        <h6 class="content-subtitle mt-0">{{ __('battle.before_storm.model_section_1_title') }}</h6>
        <p>{{ __('battle.before_storm.model_section_1_p1') }}</p>
        <p>{{ __('battle.before_storm.model_section_1_p2') }}</p>

        <h6 class="content-subtitle">{{ __('battle.before_storm.model_section_2_title') }}</h6>
        <p>{{ __('battle.before_storm.model_section_2_p1') }}</p>
        <p>{{ __('battle.before_storm.model_section_2_p2') }}</p>

        <h6 class="content-subtitle">{{ __('battle.before_storm.model_section_3_title') }}</h6>
        <p>{{ __('battle.before_storm.model_section_3_p1') }}</p>
        <p>{{ __('battle.before_storm.model_section_3_p2') }}</p>

        <h6 class="content-subtitle">{{ __('battle.before_storm.model_section_4_title') }}</h6>
        <p>{{ __('battle.before_storm.model_section_4_p1') }}</p>
        <p>{{ __('battle.before_storm.model_section_4_p2') }}</p>

        <h6 class="content-subtitle">{{ __('battle.before_storm.model_section_5_title') }}</h6>
        <p>{{ __('battle.before_storm.model_section_5_p1') }}</p>
        <p>{{ __('battle.before_storm.model_section_5_p2') }}</p>

        <h6 class="content-subtitle">{{ __('battle.before_storm.model_section_6_title') }}</h6>
        <p>{{ __('battle.before_storm.model_section_6_p1') }}</p>
        <p>{{ __('battle.before_storm.model_section_6_p2') }}</p>
    </x-slot:modal>
</x-content-section>
