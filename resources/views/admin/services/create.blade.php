@include('admin.partials.header')

<main class="p-6 lg:p-10 flex-1">
    <div class="max-w-4xl mx-auto rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
        <div class="px-6 py-5 border-b border-white/10">
            <h2 class="text-xl font-bold">Add New Services</h2>
            <p class="text-sm text-slate-400 mt-1">
                Create new services with title, description, and features.
            </p>
        </div>

        <div class="p-6">
            <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div id="service-wrapper" class="space-y-6">

                    <div class="service-block border border-white/10 p-5 rounded-xl">
                        <!-- Title -->
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-slate-300 mb-2">Title</label>
                            <input name="title[]" placeholder="Service Title"
                                   class="w-full bg-black/40 border border-white/10 px-4 py-3 rounded text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                   @error('title') is-invalid @enderror>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-slate-300 mb-2">Description</label>
                            <textarea name="description[]" placeholder="Service Description"
                                      class="w-full mb-3 bg-black/40 border border-white/10 px-4 py-3 rounded text-white focus:outline-none focus:ring-2 focus:ring-primary min-h-32"
                                      @error('description') is-invalid @enderror></textarea>
                        </div>

                        <!-- Features -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-2">
                                <label class="block text-sm font-semibold text-slate-300">Features</label>
                                <button type="button" class="text-primary text-sm font-semibold hover:text-red-500 transition-colors add-feature-btn" onclick="addFeatureToBlock(this)">
                                    + Add Feature
                                </button>
                            </div>
                            <div class="features-container space-y-2">
                                <div class="flex gap-2">
                                    <input
                                        class="flex-1 rounded-lg border border-white/10 bg-black/40 px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                                        name="features[0][]" placeholder="Feature text" type="text">
                                    <button type="button" class="px-3 py-2 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 font-semibold hover:bg-red-500/30 transition-colors text-sm" onclick="removeFeatureFromBlock(this)">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Service Block Button -->
                        <button type="button" class="mt-4 bg-red-600 px-4 py-2 rounded delete-service hidden">
                            Delete This Service
                        </button>
                    </div>

                </div>

                <button type="button" onclick="addService()"
                        class="mt-4 bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white font-semibold transition-colors">
                    + Add Another Service
                </button>

                <div class="flex gap-3 pt-6 border-t border-white/10">
                    <button type="submit" class="rounded-lg bg-primary hover:bg-red-600 text-white font-semibold px-6 py-3 transition-colors">
                        Save Services
                    </button>
                    <a href="{{ route('admin.services.index') }}"
                       class="rounded-lg border border-white/10 text-slate-300 hover:text-white font-semibold px-6 py-3 transition-colors">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
let serviceIndex = 1;

function addService() {
    const wrapper = document.getElementById('service-wrapper');
    const newBlock = document.createElement('div');
    newBlock.className = 'service-block border border-white/10 p-5 rounded-xl';
    newBlock.innerHTML = `
        <div class="mb-4">
            <label class="block text-sm font-semibold text-slate-300 mb-2">Title</label>
            <input name="title[]" placeholder="Service Title"
                   class="w-full bg-black/40 border border-white/10 px-4 py-3 rounded text-white focus:outline-none focus:ring-2 focus:ring-primary">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold text-slate-300 mb-2">Description</label>
            <textarea name="description[]" placeholder="Service Description"
                      class="w-full mb-3 bg-black/40 border border-white/10 px-4 py-3 rounded text-white focus:outline-none focus:ring-2 focus:ring-primary min-h-32"></textarea>
        </div>

        <div class="mb-4">
            <div class="flex items-center justify-between mb-2">
                <label class="block text-sm font-semibold text-slate-300">Features</label>
                <button type="button" class="text-primary text-sm font-semibold hover:text-red-500 transition-colors" onclick="addFeatureToBlock(this)">
                    + Add Feature
                </button>
            </div>
            <div class="features-container space-y-2">
                <div class="flex gap-2">
                    <input
                        class="flex-1 rounded-lg border border-white/10 bg-black/40 px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary"
                        name="features[${serviceIndex}][]" placeholder="Feature text" type="text">
                    <button type="button" class="px-3 py-2 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 font-semibold hover:bg-red-500/30 transition-colors text-sm" onclick="removeFeatureFromBlock(this)">
                        Remove
                    </button>
                </div>
            </div>
        </div>

        <button type="button" class="mt-4 bg-red-600 px-4 py-2 rounded text-white font-semibold delete-service hover:bg-red-700 transition-colors">
            Delete This Service
        </button>
    `;

    wrapper.appendChild(newBlock);

    // Add delete functionality
    newBlock.querySelector('.delete-service').addEventListener('click', function() {
        newBlock.remove();
    });

    serviceIndex++;
}

function addFeatureToBlock(btn) {
    const featuresContainer = btn.closest('.mb-4').querySelector('.features-container');
    const serviceBlockIndex = Array.from(document.querySelectorAll('.service-block')).indexOf(btn.closest('.service-block'));
    
    const featureDiv = document.createElement('div');
    featureDiv.className = 'flex gap-2';
    featureDiv.innerHTML = `
        <input
            class="flex-1 rounded-lg border border-white/10 bg-black/40 px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-primary"
            name="features[${serviceBlockIndex}][]" placeholder="Feature text" type="text">
        <button type="button" class="px-3 py-2 rounded-lg bg-red-500/20 border border-red-500/40 text-red-300 font-semibold hover:bg-red-500/30 transition-colors text-sm" onclick="removeFeatureFromBlock(this)">
            Remove
        </button>
    `;
    featuresContainer.appendChild(featureDiv);
}

function removeFeatureFromBlock(btn) {
    btn.parentElement.remove();
}

// Make the initial block delete button hidden
document.querySelectorAll('.delete-service').forEach((btn, idx) => {
    if (idx === 0) btn.classList.add('hidden');
});
</script>

@include('admin.partials.footer')
