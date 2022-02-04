@if ($message = Session::get('success'))
    <div class="mt-1 text-center alert alert-dismissible alert-success flash-message">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>            
@endif