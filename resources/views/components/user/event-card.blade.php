<div class="event-card">
    <img src="{{ asset('storage/' . $event->image) }}" class="card-image" alt="{{ $event->title }}">

    <div class="card-body">
        <div class="d-flex justify-content-between">
            <span class="status">
                {{ strtoupper($event->type) }}
            </span>

            <span class="date">
                {{ $event->event_date->format('d M Y') }}
            </span>
        </div>

        <h5>
            {{ $event->title }}
        </h5>

        <p class="location">
            📍 {{ $event->location }}
        </p>

        <a href="{{ route('events.show', $event->slug) }}" class="btn btn-outline-custom">
            View Details
        </a>
    </div>
</div>
