<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\StaticPage;

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
 * @extends ModelResource<StaticPage>
 */
class StaticPageResource extends ModelResource
{
    protected string $model = StaticPage::class;

    protected string $title = 'StaticPages';

    protected function baseFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title'),
            Text::make('Строка страницы в браузере', 'slug'),
            Select::make('Отображение', 'enabled')
                ->options([
                    1 => 'Показать',
                    0 => 'Скрыть',
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
     * @param StaticPage $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
