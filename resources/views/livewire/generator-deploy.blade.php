<div>
    <div class="space-y-2">
        <div class="border-b border-gray-900/10 pb-5">
            <div class="mt-5 grid lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8">
                <div class="w-full">
                    <label for="carrier" class="block text-sm font-medium leading-6 text-gray-900">CARRIER</label>
                    <input required type="carrier" wire:model="carrier" name="carrier" id="carrier" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="w-full">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">NAME</label>
                    <input type="text" wire:model="name" name="name" id="name" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="w-full">
                    <label for="siteid" class="block text-sm font-medium leading-6 text-gray-900">SITE ID</label>
                    <input type="text" wire:model="siteid" name="siteid" id="siteid" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
            </div>
        </div>
        <div class="border-b border-gray-900/10 pb-5">
            <div class="mt-5 grid lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8">
                <div class="w-full my-auto">
                    <label for="accessissues" class="inline-flex cursor-pointer items-center gap-3">
                        <input wire:model.live="accessissues" name="accessissues" id="accessissues" type="checkbox" class="peer sr-only" role="switch"/>
                        <span class="trancking-wide text-sm font-medium text-slate-700 peer-checked:text-black peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Access Issues (Yes/No)</span>
                        <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-slate-300 bg-slate-100 after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-slate-700 after:transition-all after:content-[''] peer-checked:bg-blue-700 peer-checked:after:bg-slate-100 peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70" aria-hidden="true"></div>
                    </label>
                    @if($this->accessissues)
                    <p class="text-green-600">Access Issues : Yes</p>
                    @else
                    <p class="text-red-600">Access Issues : No</p>
                    @endif
                </div>
                <div class="w-full my-auto">
                    <label for="genaccess" class="inline-flex cursor-pointer items-center gap-3">
                        <input wire:model.live="genaccess" name="genaccess" id="genaccess" type="checkbox" class="peer sr-only" role="switch"/>
                        <span class="trancking-wide text-sm font-medium text-slate-700 peer-checked:text-black peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Gen Access (Yes/No)</span>
                        <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-slate-300 bg-slate-100 after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-slate-700 after:transition-all after:content-[''] peer-checked:bg-blue-700 peer-checked:after:bg-slate-100 peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70" aria-hidden="true"></div>
                    </label>
                    @if($this->genaccess)
                    <p class="text-green-600">Gen Access : Yes</p>
                    @else
                    <p class="text-red-600">Gen Accesss : No</p>
                    @endif
                </div>
                <div class="w-full my-auto">
                    <label for="commpower" class="inline-flex cursor-pointer items-center gap-3">
                        <input wire:model.live="commpower" name="commpower" id="commpower" type="checkbox" class="peer sr-only" role="switch"/>
                        <span class="trancking-wide text-sm font-medium text-slate-700 peer-checked:text-black peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Comm Power Status (ON/OFF)</span>
                        <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-slate-300 bg-slate-100 after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-slate-700 after:transition-all after:content-[''] peer-checked:bg-blue-700 peer-checked:after:bg-slate-100 peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70" aria-hidden="true"></div>
                    </label>
                    @if($this->commpower)
                    <p class="text-green-600">Com Power is ON</p>
                    @else
                    <p class="text-red-600">Com Power is OFF</p>
                    @endif
                </div>
                <div class="w-full my-auto">
                    <label for="gendeploy" class="inline-flex cursor-pointer items-center gap-3">
                        <input wire:model.live="gendeploy" name="gendeploy" id="gendeploy" type="checkbox" class="peer sr-only" role="switch"/>
                        <span class="trancking-wide text-sm font-medium text-slate-700 peer-checked:text-black peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Successful Gen Deploy (Yes/No)</span>
                        <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-slate-300 bg-slate-100 after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-slate-700 after:transition-all after:content-[''] peer-checked:bg-blue-700 peer-checked:after:bg-slate-100 peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70" aria-hidden="true"></div>
                    </label>
                    @if($this->gendeploy)
                    <p class="text-green-600">Successful Gen Deploy : Yes</p>
                    @else
                    <p class="text-red-600">Successful Gen Deploy : No</p>
                    @endif
                </div>
                <div class="w-full my-auto">
                    <label for="portablegenstatus" class="inline-flex cursor-pointer items-center gap-3">
                        <input wire:model.live="portablegenstatus" name="portablegenstatus" id="portablegenstatus" type="checkbox" class="peer sr-only" role="switch"/>
                        <span class="trancking-wide text-sm font-medium text-slate-700 peer-checked:text-black peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Portable Gen Status (RUN/OFF)</span>
                        <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-slate-300 bg-slate-100 after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-slate-700 after:transition-all after:content-[''] peer-checked:bg-blue-700 peer-checked:after:bg-slate-100 peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70" aria-hidden="true"></div>
                    </label>
                    @if($this->portablegenstatus)
                    <p class="text-green-600">Portable Gen Status : RUN </p>
                    @else
                    <p class="text-red-600">Portable Gen Status : OFF</p>
                    @endif
                </div>

                {{-- <div class="w-full">
                    <label for="gentype" class="block text-sm font-medium leading-6 text-gray-900">GEN TYPE</label>
                    <select type="text" wire:model="gentype" name="gentype" id="gentype" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div> --}}
                <div class="relative flex w-full max-w-xs flex-col gap-1 text-slate-700">
                    <label for="connectiontype" class="block text-sm font-medium leading-6 text-gray-900">Connection Type</label>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute pointer-events-none right-4 top-8 h-5 w-5">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                    <select wire:model="connectiontype" id="connectiontype" name="connectiontype" class="w-full appearance-none rounded-md border border-slate-300 bg-slate-100 px-4 py-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75">
                        <option value="Hardwire">Hardwire</option>
                        <option value="Cam Locks">Cam Locks</option>
                    </select>
                </div>
                <div class="relative flex w-full max-w-xs flex-col gap-1 text-slate-700">
                    <label for="sitepowered" class="block text-sm font-medium leading-6 text-gray-900">SITE POWERED BY</label>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute pointer-events-none right-4 top-8 h-5 w-5">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                    <select wire:model="sitepowered" id="sitepowered" name="sitepowered" class="w-full appearance-none rounded-md border border-slate-300 bg-slate-100 px-4 py-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75">
                        <option value="Commercial Power">Commercial Power</option>
                        <option value="Gen Power">Gen Power</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b border-gray-900/10 pb-5">
        <div class="mt-5 grid lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-8">
            <div class="w-full">
                <label for="genmake" class="block text-sm font-medium leading-6 text-gray-900">Gen Make</label>
                <input type="text" wire:model="genmake" name="genmake" id="genmake" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full">
                <label for="genser" class="block text-sm font-medium leading-6 text-gray-900">Gen Ser#</label>
                <input type="text" wire:model="genser" name="genser" id="genser" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full">
                <label for="genid" class="block text-sm font-medium leading-6 text-gray-900">Gen ID#</label>
                <input type="text" wire:model="genid" name="genid" id="genid" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full">
                <label for="genlicenseplate" class="block text-sm font-medium leading-6 text-gray-900">Gen License Plate (Number & State)</label>
                <input type="text" wire:model="genlicenseplate" name="genlicenseplate" id="genlicenseplate" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full">
                <label for="kwkva" class="block text-sm font-medium leading-6 text-gray-900">KW/KVA</label>
                <input type="text" wire:model="kwkva" name="kwkva" id="kwkva" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full">
                <label for="tanksize" class="block text-sm font-medium leading-6 text-gray-900">Tank Size</label>
                <input type="text" wire:model="tanksize" name="tanksize" id="tanksize" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full">
                <label for="genrunhours" class="block text-sm font-medium leading-6 text-gray-900">Gen Run Hours</label>
                <input type="text" wire:model="genrunhours" name="genrunhours" id="genrunhours" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
            </div>
            <div class="w-full my-auto">
                <label for="fffdeploy" class="inline-flex cursor-pointer items-center gap-3">
                    <input wire:model.live="fffdeploy" name="fffdeploy" id="fffdeploy" type="checkbox" class="peer sr-only" role="switch"/>
                    <span class="trancking-wide text-sm font-medium text-slate-700 peer-checked:text-black peer-disabled:cursor-not-allowed peer-disabled:opacity-70">FFF Deployment Submitted (Yes/No)</span>
                    <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-slate-300 bg-slate-100 after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-slate-700 after:transition-all after:content-[''] peer-checked:bg-blue-700 peer-checked:after:bg-slate-100 peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70" aria-hidden="true"></div>
                </label>
                @if($this->fffdeploy)
                <p class="text-green-600">FFF Deployment Submitted : Yes</p>
                @else
                <p class="text-red-600">FFF Deployment Submitted : No</p>
                @endif
            </div>
        </div>
    </div>
    <div class="border-b border-gray-900/10 pb-5">
        <div class="mt-5 grid lg:grid-cols-1 grid-cols-1 gap-x-6 gap-y-8">
            <div class="w-full">
                <label for="notes" class="block text-sm font-medium leading-6 text-gray-900">NOTES</label>
                <textarea wire:model="notes" name="notes" id="notes" class="mt-2 block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>
    </div>
    @if (session('success'))
    <!-- success Alert -->
    <div x-data="{ alertIsVisible: true }" x-show="alertIsVisible" class="mt-3 relative w-full overflow-hidden rounded-xl border border-green-600 bg-white text-slate-700" role="alert" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
        <div class="flex w-full items-center gap-2 bg-green-600/10 p-4">
            <div class="bg-green-600/15 text-green-600 rounded-full p-1" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-2">
                <h3 class="text-sm font-semibold text-green-600">{{ session('success') }}</h3>
            </div>
            <button type="button" @click="alertIsVisible = false" class="ml-auto" aria-label="dismiss alert">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2.5" class="w-4 h-4 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <div wire:loading>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" class="size-5 fill-blue-700 motion-safe:animate-spin dark:fill-blue-600">
                <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity=".25" />
                <path d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
            </svg>
        </div>
        <button type="button" wire:click="resetAll" wire:loading.class="hidden" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Reset</button>
        @if($readyToCopy)
        <div x-data="{ all: '' }">
                {{-- <button type="button" @click="$clipboard(all)" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Copy to Clipboard
            </button> --}}
            <button wire:click="copied" x-clipboard.raw="{{ $all }}" wire:loading.class="hidden" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                Copy Now
            </button>
        </div>
        @else
        <button type="button" wire:click="copyNow" wire:loading.class="hidden" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Ready To Copy</button>
        @endif
    </div>


@script
<script>
    $wire.on('text-created', () => {
        var copyText = document.getElementById("text");
        copyText.select();
        document.execCommand("copy");
    });
</script>
@endscript
</div>
