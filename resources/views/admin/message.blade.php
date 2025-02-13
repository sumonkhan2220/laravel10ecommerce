@if (@Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Error!</h4> {{Session::get('error')}}
    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
    soul, like these sweet mornings of spring which I enjoy with my whole heart.
    </div>


@endif


@if (Session::has('seccess'))
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>{{Session::get('seccess')}}
    Success alert preview. This alert is dismissable.
    </div>
@endif