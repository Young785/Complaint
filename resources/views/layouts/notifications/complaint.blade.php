<li>
    <a href="/conadmin/complaint/{{ $item->data['id'] }}">
        <span class="photo"><img alt="avatar" src="/admin/images/avatar-mini.jpg"></span>
            <span class="subject">
            <span class="from">{{ $item->data['name'] }}</span>
            <span class="time">{{ $item->created_at->diffForHumans() }}</span>
            </span>
            <span class="message">
                @if ($item->data['complain'] < 20)
                    {{ $item->data['complain'] }}
                    @else
                    {{ substr($item->data['complain'], 0, 21) }}
                @endif
            </span>
    </a>
</li>