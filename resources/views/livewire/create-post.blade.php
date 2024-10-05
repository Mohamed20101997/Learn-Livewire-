<div>

    <h2>New Post</h2>

    <form wire:submit.prevent="store" class="p-4 border rounded shadow-sm bg-light">


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                wire:model="title"
                placeholder="Enter the title"
            >
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>
                <span>Content</span>
                <textarea
                    wire:model="content"
                    class="form-control @error('content') is-invalid @enderror"
                >
                </textarea>
                <small>Characters:
                    <span x-text="$wire.content.length"></span>
                </small>
                </br>
                <small>Words:
                    <span x-text="$wire.content.split(' ').length - 1"></span>
                </small>


                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </label>

        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

</div>
