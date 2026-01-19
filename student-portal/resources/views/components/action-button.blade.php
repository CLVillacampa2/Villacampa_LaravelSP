{{-- Objective: Standardized action buttons for View and Edit --}}
@props(['href', 'color' => 'primary'])

<a href="{{ $href }}" class="btn btn-sm btn-{{ $color }} shadow-sm">
    {{ $slot }}
</a>