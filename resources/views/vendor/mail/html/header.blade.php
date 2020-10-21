<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="/user/img/Frame54-G.svg" class="logo" alt="Frame54">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
