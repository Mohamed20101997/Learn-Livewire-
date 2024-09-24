<div>

    <h2>Posts:</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key=>$post)
            <tr  wire:key='{{ $post->id }}'>
                <td>{{ $key  + 1 }}</td>
                <td>{{ str($post->title)->words(3) }}</td>
                <td>{{ str($post->content)->words(8)}}</td>
                <td>
                    <button
                        class="btn btn-danger btn-sm"
                        wire:click='delete({{ $post->id }})'
                        wire:confirm = "Are you sure you want to delete this"
                    >
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>


</div>
