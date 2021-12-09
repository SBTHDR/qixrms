@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="tableDetails"></div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-5">
            <button class="btn btn-primary" id="btnShowTables">Show Tables</button>
        </div>
        <div class="col-md-7"></div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $("#tableDetails").hide()

        $("#btnShowTables").click(function() {
            if ($("#tableDetails").is(":hidden")) {
                $.get("/payment/tables", function(data) {
                $("#tableDetails").html(data)
                $("#tableDetails").slideDown('fast')
                $("#btnShowTables").html('Hide Tables')
            })
            } else {
                $("#tableDetails").slideUp('fast')
                $("#btnShowTables").html('Show Tables')
            }
        })
    })
</script>
@endsection
