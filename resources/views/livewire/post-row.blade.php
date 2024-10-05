
    <tr @class(['archived' => $post->is_archived])>
        <td>{{ $iteration }}</td>

        <td>
            {{ str($post->title)->words(3) }}
        </td>

        <td>
            {{ str($post->content)->words(8)}}
        </td>

        <td>

            @unless($post->is_archived)
                <button
                    class="btn btn-primary btn-sm"
                    x-data
                    x-on:click="if (confirm('Are you sure you want to archive this?')) { $wire.archive() }">
                    Archive
                </button>
            @endunless

            <button
                class="btn btn-danger btn-sm"
                wire:click='$parent.delete({{ $post->id }})'
                wire:confirm = "Are you sure you want to delete this">
                Delete
            </button>
        </td>
    </tr>
