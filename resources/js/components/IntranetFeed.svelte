<script>
	import { onMount } from "svelte";

    let feeds = [];

	onMount(async () => {
		const res = await fetch(`/feed/boot`);
		feeds = await res.json();
	});
</script>

<link rel='stylesheet' href='css/app.css'>

{#each feeds as feed, i}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">
                        {feed.content}
                    </p>
                </div>
            </div>
        </div>
    </div>
{/each}