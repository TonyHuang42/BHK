<?php

namespace App\Models\Concerns;

trait HasLocalizedAttributes
{
    public function localized(string $attribute): mixed
    {
        if (app()->getLocale() === 'en') {
            $value = $this->getAttribute($attribute.'_en');

            if (filled($value)) {
                return $value;
            }
        }

        return $this->getAttribute($attribute);
    }
}
