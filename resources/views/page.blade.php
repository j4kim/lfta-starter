<x-layout>
    <x-slot:title>
        {{ $page->title }}
    </x-slot>

    <div
        class="page"
        id="page-{{ $page->id }}"
        data-name="{{ $page->name }}"
    >

        @php
            $html = str($page->content)->markdown()->sanitizeHtml();
        @endphp

        @if ($page->template)
            @php
                $component = 'page-layouts.' . $page->template->value;
            @endphp
            <x-dynamic-component
                :component="$component"
                :page="$page"
            >
                {!! $html !!}
            </x-dynamic-component>
        @else
            {!! $html !!}
        @endif
    </div>

</x-layout>
