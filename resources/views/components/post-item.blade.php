<div class="container border shadow rounded p-4 mb-4">

    <h3>{{ $post->judul }}</h3>
    <p>{{ $post->sub_judul }}</p>

    <div class="d-flex flex-row justify-content-between align-items-center">
        <div class="d-flex gap-3">
            <div class="d-flex align-items-center gap-1 text-secondary">
                <i class="bi bi-tag-fill"></i>
                <small>{{ $post->kategori }}</small>
            </div>

            <div class="d-flex align-items-center gap-1 text-secondary">
                <i class="bi bi-calendar-event-fill"></i>
                <small>Deadline: {{ $post->deadline_tp }}</small>
            </div>
        </div>

        <div class="d-flex gap-2">

            <form action="/tugas/{{ $post->post_id }}/delete" method="post">
                @csrf
                <button class="btn btn-danger text-white">Delete</button>
            </form>
            <a href="/tugas/{{ $post->post_id }}/edit" class="btn btn-primary">Edit</a>


            <a href="/tugas/{{ $post->post_id }}" class="btn bege-primary text-white">Read More</a>
        </div>
    </div>

</div>
