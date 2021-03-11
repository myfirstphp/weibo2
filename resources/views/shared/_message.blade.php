@foreach(['success', 'danger', 'info', 'warning', 'success0', 'success1', 'success2'] as $msg)
    @if(session()->has($msg))
        @if($msg == 'success')
            <div class="offset-md-2 col-md-8">
                <div class="flash-message">
                    <p class="alert alert-{{ $msg }}">{{ session()->get($msg) }}</p>
                </div>
            </div>
        @else
            <div class="offset-md-2 col-md-8">
                <div class="offset-md-2 col-md-3">
                    <div class="flash-message">
                        <p class="alert alert-{{ $msg }}">{{ session()->get($msg) }}</p>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endforeach