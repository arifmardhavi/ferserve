@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-yellow-900 focus:border-yellow-900 focus:ring focus:ring-yellow-800 focus:ring-opacity-50 rounded-md shadow-sm text-coklat']) !!}>{{ $attributes['value'] ?? '' }}</textarea>
