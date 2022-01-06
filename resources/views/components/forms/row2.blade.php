<div>
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">
        {{ $label }}
    </label>
    <div class="mt-1">
        {{ $slot }}
    </div>
    @if (!empty($desc))
        <p class="mt-2 text-sm text-gray-500">
            {{ $desc }}
        </p>
    @endif
</div>
