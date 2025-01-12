<div>
    @if ($showModal)
        <div class="modal fade show d-block" tabindex="-1" style="background: rgba(0, 0, 0, 0.5);">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Masuk</h5>
                        <button type="button" class="close" wire:click="closeModal">&times;</button>
                    </div>
                    <div class="modal-body">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="login">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" wire:model="email" class="form-control"
                                    placeholder="Email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" id="password" wire:model="password" class="form-control"
                                    placeholder="Password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
