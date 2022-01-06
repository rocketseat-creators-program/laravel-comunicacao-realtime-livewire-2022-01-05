<div class="col-span-{{ $size ?? 6 }} sm:col-span-{{ $span ?? 3 }}">
    @if (empty($checkbox))
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
        {{ $slot }}
    @else
        <fieldset>
            <div>
                <legend class="text-base font-medium text-gray-900">{{ $label }}</legend>
                @if (!empty($desc))
                    <p class="text-sm text-gray-500">{{ $desc }}</p>
                @endif
            </div>
            <div class="mt-4 space-y-4">
                {{ $slot }}
            </div>
        </fieldset>
    @endif
</div>
