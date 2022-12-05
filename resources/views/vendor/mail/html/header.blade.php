<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@elseif (trim($slot) === 'SKILLTRAKKER')
<img src="{{env('API_URL').'/media/img/logos/logogymhq.png'}}" class="logo-skilltrakker" alt="skilltrakker Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
