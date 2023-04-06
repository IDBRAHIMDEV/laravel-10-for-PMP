
@if(session('status'))
<div class="alert alert-dismissible alert-light">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <h4 class="alert-heading">Info</h4>
    <p class="mb-0">{{ session('status') }}</a>.</p>
  </div>
@endif