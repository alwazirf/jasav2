<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-9">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-primary">{{ __("Assalamu'alaikum") }}</h3>
                            <p class="mb-0">{{ __('Saleum Bandum Syedara')}}<br></p>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-primary w-100 mt-4 mb-0">{{ __('Sign in') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1 pb-4">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="d-none d-sm-block oblique-image bg-cover img-fluid mt-5" style="height:90%; padding-left:10%; padding-top:10%" src="../assets/img/logos/icon.png" alt="">
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
</section>
