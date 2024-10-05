<div>

    <h2>Posts:</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
{{--                <th>Content</th>--}}
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key=>$post)
                <livewire:post-row  wire:key='{{ $post->id }}' :post="$post" :iteration="$loop->iteration">
            @endforeach
        </tbody>
    </table>
</div>
