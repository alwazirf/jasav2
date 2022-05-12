<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    @if (session()->has('message'))
                                <div class="container alert alert-primary text-white">
                                    {{ session('message') }}
                                </div>
                    @endif
                    <h6 class="mb-0">{{ __('Reset Password') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="resetPassword" action="#" method="POST" role="form text-left">
                        <div class="row">
                            <input type="hidden" wire:model="urlID">
                            <div class="col-md-12">
                                <label for="password">{{ __('Password') }}</label>
                                <div class="@error('password')border border-danger rounded-3 @enderror mb-3">
                                    <input wire:model="password" id="password" type="password" class="form-control"
                                        placeholder="Password" aria-label="Password"
                                        aria-describedby="password-addon">
                                </div>
                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="passwordConfirmation">{{ __('Password Confirmation') }}</label>
                                <div
                                    class="@error('passwordConfirmation')border border-danger rounded-3 @enderror mb-3">
                                    <input wire:model="passwordConfirmation" id="password" type="password"
                                        class="form-control" placeholder="passwordConfirmation"
                                        aria-label="Password" aria-describedby="password-addon">
                                </div>
                                @error('passwordConfirmation') <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
