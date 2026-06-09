{{-- 情報與營救 --}}
<x-content-section
    id="intelligence-and-rescue"
    title="{{ __('guerrilla.guerrilla_warfare.intelligence_title') }}"
    subtitle="{{ __('guerrilla.guerrilla_warfare.intelligence_subtitle') }}" 
    :intro="html_entity_decode(__('guerrilla.guerrilla_warfare.intelligence_intro'))"
    bgLeft="img/bg/bg_rifle_r.png"
    bgRight="img/bg/bg_rifle_l.png"
    :images="[
        'img/guerrilla-resistance/image_3_1.jpg',
        'img/guerrilla-resistance/image_3_2.png',
    ]"
>
    <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_section_1_title') }}</h6>
    <p>{{ __('guerrilla.guerrilla_warfare.intelligence_section_1_p1') }}</p>
    <p>{{ __('guerrilla.guerrilla_warfare.intelligence_section_1_p2') }}</p>

    <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_section_2_title') }}</h6>
    <p>{{ __('guerrilla.guerrilla_warfare.intelligence_section_2_p1') }}</p>
    <p>{{ __('guerrilla.guerrilla_warfare.intelligence_section_2_p2') }}</p>

    <x-slot:modal>
        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_1_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_1_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_1_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_2_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_2_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_2_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_3_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_3_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_3_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_4_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_4_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_4_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_5_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_5_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_5_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_6_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_6_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_6_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_7_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_7_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_7_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_8_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_8_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_8_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_9_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_9_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_9_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_10_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_10_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_10_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_11_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_11_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_11_p2') }}</p>

        <h6>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_12_title') }}</h6>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_12_p1') }}</p>
        <p>{{ __('guerrilla.guerrilla_warfare.intelligence_model_section_12_p2') }}</p>
    
    </x-slot:modal>
</x-content-section>
