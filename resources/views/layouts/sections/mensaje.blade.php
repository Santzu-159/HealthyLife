@if ($txt=Session::get("mensaje")) 

    <div class="container alert alert-success alert-dismissible fade show text-center mt-4" role="alert">
        {{ __($txt) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif