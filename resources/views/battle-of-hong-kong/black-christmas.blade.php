{{-- 黑色聖誕 --}}
<x-content-section
    id="black-christmas"
    title="{{ __('battle.before_storm.black_christmas_title') }}"
    subtitle="{{ __('battle.before_storm.black_christmas_subtitle') }}"
    :intro="html_entity_decode(__('battle.before_storm.black_christmas_intro'))"
    :images="[
        'img/battle-of-hong-kong/image_3_1.jpg',
        'img/battle-of-hong-kong/image_3_2.jpg',
        'img/battle-of-hong-kong/image_3_3.jpg',
    ]"
>

    <h6>{{ __('battle.before_storm.black_christmas_section_1_title') }}</h6>
    <p>{{ __('battle.before_storm.black_christmas_section_1_p1') }}</p>
    <p>{{ __('battle.before_storm.black_christmas_section_1_p2') }}</p>

    <h6>{{ __('battle.before_storm.black_christmas_section_2_title') }}</h6>
    <p>{{ __('battle.before_storm.black_christmas_section_2_p1') }}</p>
    <p>{{ __('battle.before_storm.black_christmas_section_2_p2') }}</p>

    <x-slot:modal>
        <h6>{{ __('battle.before_storm.black_christmas_model_section_1_title') }}</h6>
        <p>{{ __('battle.before_storm.black_christmas_model_section_1_p1') }}</p>
        <p>{{ __('battle.before_storm.black_christmas_model_section_1_p2') }}</p>


        <h6>{{ __('battle.before_storm.black_christmas_model_section_2_title') }}</h6>
        <p>{{ __('battle.before_storm.black_christmas_model_section_2_p1') }}</p>
        <p>{{ __('battle.before_storm.black_christmas_model_section_2_p2') }}</p>


        <h6>{{ __('battle.before_storm.black_christmas_model_section_3_title') }}</h6>
        <p>{{ __('battle.before_storm.black_christmas_model_section_3_p1') }}</p>
        <p>{{ __('battle.before_storm.black_christmas_model_section_3_p2') }}</p>


        <h6>{{ __('battle.before_storm.black_christmas_model_section_4_title') }}</h6>
        <p>{{ __('battle.before_storm.black_christmas_model_section_4_p1') }}</p>
        <p>{{ __('battle.before_storm.black_christmas_model_section_4_p2') }}</p>


        <h6>{{ __('battle.before_storm.black_christmas_model_section_5_title') }}</h6>
        <p>{{ __('battle.before_storm.black_christmas_model_section_5_p1') }}</p>
        <p>{{ __('battle.before_storm.black_christmas_model_section_5_p2') }}</p>


        <h6>{{ __('battle.before_storm.black_christmas_model_section_6_title') }}</h6>
        <p>{{ __('battle.before_storm.black_christmas_model_section_6_p1') }}</p>
        <p>{{ __('battle.before_storm.black_christmas_model_section_6_p2') }}</p>   
    </x-slot:modal>
</x-content-section>
