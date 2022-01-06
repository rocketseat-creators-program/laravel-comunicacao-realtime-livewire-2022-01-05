<td class="{{ empty($large) ? '' : 'max-w-0 w-full' }} text-{{ $align ?? '' }} px-6 py-4 whitespace-nowrap text-sm text-gray-{{ $color ?? '900' }}">
    {{ $slot }}
</td>
