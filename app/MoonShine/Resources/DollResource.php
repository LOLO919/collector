<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doll;

use MoonShine\CKEditor\Fields\CKEditor;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<Doll>
 */
class DollResource extends ModelResource
{
    protected string $model = Doll::class;

    protected string $title = 'Dolls';

    /**
     * Поля общие для всех
     *
     * @return iterable
     */
    protected function baseFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Имя', 'name'),
            Text::make('Год выпуска', 'year_of_issue'),
            Text::make('Тираж', 'edition'),
            Select::make('Наличие', 'enabled')
                ->options([
                    1 => 'В наличии',
                    0 => 'Отсутствует',
                ]),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return $this->baseFields();
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make((array) $this->detailFields()),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return array_merge((array) $this->baseFields(), [
            Image::make('Фото', 'photo'),
            CKEditor::make('Описание', 'description'),
        ]);
    }

    /**
     * @param Doll $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
