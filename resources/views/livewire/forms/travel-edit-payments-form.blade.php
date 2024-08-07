@aware(['passenger' => $passenger])
<div>
    <form wire:submit.prevent="save" class="p-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">Atualizar Pagamentos</h2>
        </header>
        <div class="mt-4 space-y-6">
            <fieldset class="border border-dashed border-gray-300 p-4">
                <legend class="px-2">Viajante</legend>
                <div class="flex flex-col gap-4">
                    <div class="w-full">
                        <x-input-label for="name" :value="__('Nome')"/>
                        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full"
                                      placeholder="{{ __('Nome') }}" disabled/>
                    </div>
                    <div class="w-full">
                        <x-input-label for="phone" :value="__('Telefone')"/>
                        <x-text-input wire:model="form.phone" id="phone" name="phone" type="text" class="mt-1 block w-full"
                                      placeholder="{{ __('Telefone') }}" disabled/>
                    </div>
                </div>
            </fieldset>

            <fieldset class="flex gap-4 border border-dashed border-gray-300 p-4">
                <legend class="px-2">Selecione os meses pagos:</legend>
                <div class="flex w-full">
                    <div class="w-full">
                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.jan" id="jan" name="jan" {!! $passenger["jan"] === 1 ? 'checked' : '' !!}/>
                            <label for="jan">Janeiro</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.fev" id="fev" name="fev" {!! $passenger["fev"] === 1 ? 'checked' : '' !!}/>
                            <label for="fev">Fevereiro</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.mar" id="mar" name="mar" {!! $passenger["mar"] === 1 ? 'checked' : '' !!}/>
                            <label for="mar">Março</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.abr" id="abr" name="abr" {!! $passenger["abr"] === 1 ? 'checked' : '' !!}/>
                            <label for="abr">Abril</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.mai" id="mai" name="mai" {!! $passenger["mai"] === 1 ? 'checked' : '' !!}/>
                            <label for="mai">Maio</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.jun" id="jun" name="jun" {!! $passenger["jun"] === 1 ? 'checked' : '' !!}/>
                            <label for="jun">Junho</label>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.jul" id="jul" name="jul" {!! $passenger["jul"] === 1 ? 'checked' : '' !!}/>
                            <label for="jul">Julho</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.ago" id="ago" name="ago" {!! $passenger["ago"] === 1 ? 'checked' : '' !!}/>
                            <label for="ago">Agosto</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.set" id="set" name="set" {!! $passenger["set"] === 1 ? 'checked' : '' !!}/>
                            <label for="set">Setembro</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.out" id="out" name="out" {!! $passenger["out"] === 1 ? 'checked' : '' !!}/>
                            <label for="out">Outubro</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.nov" id="nov" name="nov" {!! $passenger["nov"] === 1 ? 'checked' : '' !!}/>
                            <label for="nov">Novembro</label>
                        </div>

                        <div class="space-x-2">
                            <input type="checkbox" wire:model="form.dez" id="dez" name="dez" {!! $passenger["dez"] === 1 ? 'checked' : '' !!}/>
                            <label for="dez">Dezembro</label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="mt-6 flex justify-end border-t pt-4">
            <x-secondary-button wire:click="$dispatch('closeModal')">
                Fechar
            </x-secondary-button>

            <x-primary-button class="ms-3">
                Salvar
            </x-primary-button>
        </div>
    </form>
    @livewire('wire-elements-modal')
</div>
