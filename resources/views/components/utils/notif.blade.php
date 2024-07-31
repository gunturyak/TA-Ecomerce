@foreach (['success', 'warning', 'danger'] as $status)
    @if (session($status))
        <div class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong class="small-text"> {{ session($status) }}</strong>
        </div>
    @endif
@endforeach
<style>
    .small-text {
        font-size: 90%;
    }

    .alert {
        padding: 5px 15px;
        margin-bottom: 10px;
    }

    .custom-success-box,
    .custom-warning-box,
    .custom-danger-box {
        padding: 10px;
    }
</style>
