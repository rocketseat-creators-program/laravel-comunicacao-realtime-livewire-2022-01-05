<div class="flex items-start">
    <div class="flex items-center h-5">
        <input id="{{ $id }}" name="{{ $id }}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
    </div>
    <div class="ml-3 text-sm">
        <label for="{{ $id }}" class="font-medium text-gray-700">{{ $label }}</label>
        @if (!empty($desc))
            <p class="text-gray-500">{{ $desc }}</p>
        @endif
    </div>
</div>
