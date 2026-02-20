@include('admin.partials.header')

<main class="p-6 lg:p-10 flex-1">
    <div class="max-w-5xl mx-auto bg-[#111] p-6 rounded-2xl border border-white/10">

        <h2 class="text-xl font-bold mb-6">Add Services</h2>

        <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
            @csrf

            <div id="service-wrapper" class="space-y-6">

                <div class="service-block border border-white/10 p-5 rounded-xl">
                    <input name="title" placeholder="Title"
                           class="w-full mb-3 bg-black/40 border px-4 py-2 rounded">

                    <textarea name="description" placeholder="Description"
                              class="w-full mb-3 bg-black/40 border px-4 py-2 rounded"></textarea>

                    <input type="file" name="image"
                           class="w-full bg-black/40 border px-4 py-2 rounded">
                    
                    <!-- Delete button only visible for added blocks -->
                    <button type="button" class="mt-2 bg-red-600 px-4 py-2 rounded delete-service hidden">
                        Delete
                    </button>
                </div>

            </div>

            <button type="button" onclick="addService()"
                    class="mt-4 bg-blue-600 px-4 py-2 rounded">
                + Add More
            </button>

            <br><br>

            <button class="bg-primary px-6 py-3 rounded-lg">
                Save Services
            </button>

        </form>
    </div>
</main>

<script>
let index = 1;

function addService() {
    const wrapper = document.getElementById('service-wrapper');

    const block = document.createElement('div');
    block.classList.add('service-block', 'border', 'border-white/10', 'p-5', 'rounded-xl');

    block.innerHTML = `
        <input name="title" placeholder="Title"
               class="w-full mb-3 bg-black/40 border px-4 py-2 rounded">

        <textarea name="description" placeholder="Description"
                  class="w-full mb-3 bg-black/40 border px-4 py-2 rounded"></textarea>

        <input type="file" name="image"
               class="w-full bg-black/40 border px-4 py-2 rounded">

        <button type="button" class="mt-2 bg-red-600 px-4 py-2 rounded delete-service">
            Delete
        </button>
    `;

    wrapper.appendChild(block);

    // Add delete functionality
    block.querySelector('.delete-service').addEventListener('click', function() {
        block.remove();
    });

    index++;
}

// Make the initial block delete button hidden
document.querySelectorAll('.delete-service').forEach(btn => btn.classList.add('hidden'));
</script>

@include('admin.partials.footer')
