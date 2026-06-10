{{-- 港九大隊 --}}
<x-content-section
    id="hk-kowloon-brigade"
    title="{{ __('guerrilla.guerrilla_warfare.hk_brigade_title') }}"
    subtitle="{{ __('guerrilla.guerrilla_warfare.hk_brigade_subtitle') }}" 
    :intro="html_entity_decode(__('guerrilla.guerrilla_warfare.hk_brigade_intro'))"
    bgLeft="img/bg/bg_rifle_r.png"
    bgRight="img/bg/bg_rifle_l.png"
    :images="[
        'img/guerrilla-resistance/image_1_1.jpg',
        'img/guerrilla-resistance/image_1_2.jpg',
        'img/guerrilla-resistance/image_1_3.jpg',
    ]"
>
    <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_1_title') }}</h6>
    <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_1_p1') }}</p>
    <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_2_p2') }}</p>
 
    <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_2_title') }}</h6>
    <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_2_p1') }}</p>
    <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_2_p2') }}</p>
    <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_section_2_p3') }}</p>

    <x-slot:modal>

        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_1_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_1_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_1_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_1_p3') }}</p>
        
        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_2_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_2_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_2_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_2_p3') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_3_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_3_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_3_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_3_p3') }}</p>
        
        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_4_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_4_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_4_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_4_p3') }}</p>
        
        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_5_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_5_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_5_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_5_p3') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_6_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_6_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_6_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_6_p3') }}</p>
        
        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_7_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_7_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_7_p2') }}</p>
        
        <h6>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_8_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_8_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_8_p2') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.hk_brigade_model_section_8_p3') }}</p>
    </x-slot:modal>
</x-content-section>
