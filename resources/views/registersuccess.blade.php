
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <h3> Click below to verify email address </h3>
                    
                    <form method="POST" action="{{ route('email.verify') }}" aria-label="{{ __('Verify Email') }}">
                        @csrf
                        <input id="email" type="hidden"  name="email" value="{{ $email }}">
                        <input type="submit" name="verifymail" value="Verify Email" class="form-control btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
