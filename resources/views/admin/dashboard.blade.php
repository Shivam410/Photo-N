@include('admin.partials.header')



            <main class="p-6 lg:p-10 space-y-8 flex-1">
                <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
                    <div class="rounded-2xl border border-white/10 bg-[#121212] p-5">
                        <p class="text-slate-400 text-sm">Total Clients</p>
                        <p class="text-3xl font-extrabold mt-2">148</p>
                        <p class="text-emerald-400 text-xs mt-2">+8.3% this month</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#121212] p-5">
                        <p class="text-slate-400 text-sm">Active Projects</p>
                        <p class="text-3xl font-extrabold mt-2">27</p>
                        <p class="text-emerald-400 text-xs mt-2">+3 new this week</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#121212] p-5">
                        <p class="text-slate-400 text-sm">Pending Inquiries</p>
                        <p class="text-3xl font-extrabold mt-2">19</p>
                        <p class="text-amber-400 text-xs mt-2">Needs follow-up</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-[#121212] p-5">
                        <p class="text-slate-400 text-sm">Monthly Revenue</p>
                        <p class="text-3xl font-extrabold mt-2">$12,480</p>
                        <p class="text-emerald-400 text-xs mt-2">+12.7% vs last month</p>
                    </div>
                </section>

                <section class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                    <div class="xl:col-span-2 rounded-2xl border border-white/10 bg-[#111111] overflow-hidden">
                        <div class="px-6 py-5 border-b border-white/10 flex items-center justify-between">
                            <h2 class="text-lg font-bold">Current Project Pipeline</h2>
                            <button class="text-sm text-primary font-semibold hover:text-red-400 transition-colors">View all</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead class="text-left text-slate-400 bg-white/[0.02]">
                                    <tr>
                                        <th class="px-6 py-4 font-semibold">Project</th>
                                        <th class="px-6 py-4 font-semibold">Client</th>
                                        <th class="px-6 py-4 font-semibold">Status</th>
                                        <th class="px-6 py-4 font-semibold">Due</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/5">
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="px-6 py-4 font-semibold text-white">Wedding Highlights</td>
                                        <td class="px-6 py-4 text-slate-300">Sharma Family</td>
                                        <td class="px-6 py-4"><span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-500/20 text-amber-300">Editing</span></td>
                                        <td class="px-6 py-4 text-slate-400">Mar 04, 2026</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="px-6 py-4 font-semibold text-white">Brand Campaign</td>
                                        <td class="px-6 py-4 text-slate-300">Nexa Apparel</td>
                                        <td class="px-6 py-4"><span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-300">Shoot Scheduled</span></td>
                                        <td class="px-6 py-4 text-slate-400">Mar 09, 2026</td>
                                    </tr>
                                    <tr class="hover:bg-white/[0.02]">
                                        <td class="px-6 py-4 font-semibold text-white">Executive Portraits</td>
                                        <td class="px-6 py-4 text-slate-300">Apex Realty</td>
                                        <td class="px-6 py-4"><span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300">Delivered</span></td>
                                        <td class="px-6 py-4 text-slate-400">Feb 18, 2026</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-[#111111]">
                        <div class="px-6 py-5 border-b border-white/10">
                            <h2 class="text-lg font-bold">Recent Inquiries</h2>
                        </div>
                        <div class="p-6 space-y-5">
                            <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                                <p class="font-semibold">Pre-wedding shoot request</p>
                                <p class="text-xs text-slate-400 mt-1">Rahul and Priya</p>
                                <p class="text-xs text-primary mt-2">2 hours ago</p>
                            </div>
                            <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                                <p class="font-semibold">Product catalog photos</p>
                                <p class="text-xs text-slate-400 mt-1">Bloom Cosmetics</p>
                                <p class="text-xs text-primary mt-2">5 hours ago</p>
                            </div>
                            <div class="rounded-xl border border-white/10 bg-white/[0.02] p-4">
                                <p class="font-semibold">Corporate team portraits</p>
                                <p class="text-xs text-slate-400 mt-1">Vertex Fintech</p>
                                <p class="text-xs text-primary mt-2">Yesterday</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

@include('admin.partials.footer')


