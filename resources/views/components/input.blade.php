@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-white dark:text-black focus:border-white dark:focus:border-black focus:ring-white dark:focus:ring-white rounded-md shadow-sm']) !!}>
